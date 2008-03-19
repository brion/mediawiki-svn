package org.wikimedia.lsearch.ranks;

import java.io.ByteArrayInputStream;
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.StringWriter;
import java.math.BigDecimal;
import java.math.BigInteger;
import java.util.ArrayList;
import java.util.Collection;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Map.Entry;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import org.apache.commons.lang.WordUtils;
import org.apache.log4j.Logger;
import org.apache.lucene.analysis.Analyzer;
import org.apache.lucene.analysis.SimpleAnalyzer;
import org.apache.lucene.document.Document;
import org.apache.lucene.document.Field;
import org.apache.lucene.document.FieldSelector;
import org.apache.lucene.document.SetBasedFieldSelector;
import org.apache.lucene.index.CorruptIndexException;
import org.apache.lucene.index.IndexReader;
import org.apache.lucene.index.IndexWriter;
import org.apache.lucene.index.Term;
import org.apache.lucene.index.TermDocs;
import org.apache.lucene.index.TermEnum;
import org.apache.lucene.search.BooleanClause;
import org.apache.lucene.search.BooleanQuery;
import org.apache.lucene.search.Hits;
import org.apache.lucene.search.IndexSearcher;
import org.apache.lucene.search.PhraseQuery;
import org.apache.lucene.search.TermQuery;
import org.apache.lucene.store.Directory;
import org.apache.lucene.store.RAMDirectory;
import org.wikimedia.lsearch.analyzers.PrefixAnalyzer;
import org.wikimedia.lsearch.analyzers.SplitAnalyzer;
import org.wikimedia.lsearch.beans.Article;
import org.wikimedia.lsearch.beans.Title;
import org.wikimedia.lsearch.config.GlobalConfiguration;
import org.wikimedia.lsearch.config.IndexId;
import org.wikimedia.lsearch.index.WikiIndexModifier;
import org.wikimedia.lsearch.related.CompactArticleLinks;
import org.wikimedia.lsearch.search.NamespaceFilter;
import org.wikimedia.lsearch.search.UpdateThread;
import org.wikimedia.lsearch.spell.api.Dictionary;
import org.wikimedia.lsearch.spell.api.LuceneDictionary;
import org.wikimedia.lsearch.spell.api.Dictionary.Word;
import org.wikimedia.lsearch.util.Localization;

public class Links {
	static Logger log = Logger.getLogger(Links.class);
	protected IndexId iid;
	protected String langCode;
	protected IndexWriter writer = null;
	protected HashMap<String,Integer> nsmap = null;
	protected HashSet<String> interwiki;
	protected HashSet<String> categoryLocalized;
	protected HashSet<String> imageLocalized;
	protected IndexReader reader = null;
	protected IndexSearcher searcher = null;
	protected String path;
	protected enum State { FLUSHED, WRITE, MODIFIED, READ };
	protected State state;
	protected Directory directory = null;
	protected NamespaceFilter nsf; // default search
	protected ObjectCache cache;
	protected FieldSelector keyOnly,redirectOnly,contextOnly,linksOnly;
	protected boolean optimized = false;
	protected boolean autoOptimize = false;
	
	private Links(IndexId iid, String path, IndexWriter writer, boolean autoOptimize) throws CorruptIndexException, IOException{
		this.writer = writer;
		this.path = path;
		this.iid = iid;
		this.autoOptimize = autoOptimize;
		this.langCode = iid.getLangCode();
		String dbname = iid.getDBname();
		nsmap = Localization.getLocalizedNamespaces(langCode,dbname);
		interwiki = Localization.getInterwiki();
		categoryLocalized = Localization.getLocalizedCategory(langCode,dbname);
		imageLocalized = Localization.getLocalizedImage(langCode,dbname);
		state = State.FLUSHED;
		initWriter(writer);
		nsf = iid.getDefaultNamespace();
		keyOnly = makeSelector("article_key");
		redirectOnly = makeSelector("redirect");
		contextOnly = makeSelector("context");
		linksOnly = makeSelector("links");
	}
	
	protected FieldSelector makeSelector(String field){
		HashSet<String> onlySet = new HashSet<String>();		
		onlySet.add(field);
		return new SetBasedFieldSelector(onlySet, new HashSet<String>());
	}
	
	private void initWriter(IndexWriter writer) {
		if(writer != null){
			writer.setMergeFactor(20);
			writer.setMaxBufferedDocs(500);		
			writer.setUseCompoundFile(true);
			if(directory == null)
				directory = writer.getDirectory();
		}
	}
	
	/** Open the index path for updates */
	public static Links openForModification(IndexId iid) throws IOException{
		iid = iid.getLinks();
		String path = iid.getIndexPath();
		log.info("Using index at "+path);
		IndexWriter writer = WikiIndexModifier.openForWrite(path,false);
		return new Links(iid,path,writer,false);		
	}
	
	public static Links openStandalone(IndexId iid) throws IOException {
		UpdateThread updater = UpdateThread.getStandalone();
		iid = iid.getLinks();
		if(!iid.isMySearch())
			iid.forceMySearch();
		updater.update(iid);
		return openForRead(iid,iid.getSearchPath());
	}
	
	/** Open index at path for reading */
	public static Links openForRead(IndexId iid, String path) throws IOException {
		iid = iid.getLinks();
		log.info("Opening for read "+path);
		return new Links(iid,path,null,true);
	}
		
	/** Create new in the import path */
	public static Links createNew(IndexId iid) throws IOException{
		iid = iid.getLinks();
		String path = iid.getImportPath();
		log.info("Making index at "+path);
		IndexWriter writer = WikiIndexModifier.openForWrite(path,true);
		Links links = new Links(iid,path,writer,true);		
		return links;
	}
	
	/** Create new index in memory (RAMDirectory) */
	public static Links createNewInMemory(IndexId iid) throws IOException{
		iid = iid.getLinks();
		log.info("Making index in memory");
		IndexWriter writer = new IndexWriter(new RAMDirectory(),new SimpleAnalyzer(),true);
		Links links = new Links(iid,null,writer,true);		
		return links;
	}
	
	/** Add more entries to namespace mapping (ns_name -> ns_index) */
	public void addToNamespaceMap(HashMap<String,Integer> map){
		for(Entry<String,Integer> e : map.entrySet()){
			nsmap.put(e.getKey().toLowerCase(),e.getValue());
		}
	}
	
	/** Add a custom namespace mapping */
	public void addToNamespaceMap(String namespace, int index){
		nsmap.put(namespace.toLowerCase(),index);
	}
	
	/** Write all changes, optimize if in autoOptimize mode
	 * @throws IOException */
	public void flush() throws IOException{
		// close & optimize
		if(searcher != null)
			searcher.close();
		if(reader != null)
			reader.close();
		if(writer != null){
			if(autoOptimize)
				writer.optimize();
			writer.close();	
		}
		state = State.FLUSHED;
	}
	
	/**
	 * Flush, and stop using this instance for writing. 
	 * Can still read. 
	 * @throws IOException 
	 */
	protected void flushForRead() throws IOException{		
		flush();
		log.debug("Opening index reader");
		// reopen
		reader = IndexReader.open(path);
		searcher = new IndexSearcher(reader);
		writer = null;
		state = State.READ;
		optimized = reader.isOptimized();
	}
	
	/** Open the writer, and close the reader (if any) */
	protected void openForWrite() throws IOException{
		if(searcher != null)
			searcher.close();
		if(reader != null)
			reader.close();
		if(writer == null){
			if(directory == null)
				throw new RuntimeException("Opened for read, but trying to write");
			writer = new IndexWriter(directory,new SimpleAnalyzer(),false);
			initWriter(writer);
			reader = null;
			searcher = null;
			state = State.WRITE;
		}
	}
	
	protected final void ensureRead() throws IOException {
		if(state != State.READ)
			flushForRead();
	}
	
	protected final void ensureWrite() throws IOException {
		if(writer == null)
			openForWrite();
	}
	
	/** Delete article info connected to title t */
	public void deleteArticleInfo(Title t) throws IOException {
		ensureWrite();
		writer.deleteDocuments(new Term("article_key",t.getKey()));
	}
	/** Delete by page_id, not ns:title key */
	public void deleteArticleInfoByIndexKey(String key) throws IOException {
		ensureWrite();
		writer.deleteDocuments(new Term("article_pageid",key));
	}
	
	/** Add links and other info from article 
	 * @throws IOException */
	public void addArticleInfo(String text, Title t, boolean exactCase, String pageId) throws IOException{
		ensureWrite();
		Pattern linkPat = Pattern.compile("\\[\\[(.*?)(\\|(.*?))?\\]\\]");
		int namespace = t.getNamespace();
		Matcher matcher = linkPat.matcher(text);
		int ns; String title;
		boolean escaped;

		ArrayList<String> pagelinks = new ArrayList<String>();
		
		// use context only for namespace in default search
		boolean useContext = nsf.contains(t.getNamespace());
		
		ContextParser cp = new ContextParser(text,imageLocalized,categoryLocalized,interwiki);
		
		Title redirect = Localization.getRedirectTitle(text,iid.getDB());
		String redirectsTo = null;
		if(redirect != null){
			redirectsTo = findTargetLink(redirect.getNamespace(),redirect.getTitle(),exactCase);
		} else { 
			HashSet<String> contextLinks = new HashSet<String>();
			ContextParser.Context curContext = null;
			while(true){
				boolean hasNext = matcher.find();
				String link = null;
				ContextParser.Context context = null;
				if(hasNext){
					link = matcher.group(1);
					context = useContext? cp.getNext(matcher.start(1)) : null;
				}
				// get links in context if there is this one is last, or new contex has been found
				if(!hasNext || context != null){ 
					if(curContext == null)
						curContext = context;
					else if(curContext!=context){
						pagelinks.add("");
						contextLinks.clear();
						curContext = context;
					}					
				}
				
				if(!hasNext)
					break;

				int fragment = link.lastIndexOf('#');
				if(fragment != -1)
					link = link.substring(0,fragment);
				//System.out.println("Got link "+link+anchor);
				if(link.startsWith(":")){
					escaped = true;
					link = link.substring(1);
				} else escaped = false;
				ns = 0; 
				title = link;			
				// check for ns:title syntax
				String[] parts = link.split(":",2);
				if(parts.length == 2 && parts[0].length() > 1){
					Integer inx = nsmap.get(parts[0].toLowerCase());
					if(!escaped && (parts[0].equalsIgnoreCase("category") || (inx!=null && inx==14)))
						continue; // categories, ignore
					if(inx!=null && inx < 0) 
						continue; // special pages, ignore
					if(inx != null){
						ns = inx;
						title = parts[1];
					}

					// ignore interwiki links
					if(interwiki.contains(parts[0]))
						continue;
				}
				if(ns == 0 && namespace!=0)
					continue; // skip links from other namespaces into the main namespace
				String target = findTargetLink(ns,title,exactCase);				
				if(target != null){
					int targetNs = Integer.parseInt(target.substring(0,target.indexOf(':')));
					pagelinks.add(target); 
					// register context of this link
					if(context != null && nsf.contains(targetNs)){
						contextLinks.add(target);
					}
						
				}
			}
		}
		// index article
		StringList lk = new StringList(pagelinks);
		Analyzer an = new SplitAnalyzer(1,true);
		Document doc = new Document();
		doc.add(new Field("article_pageid",pageId,Field.Store.YES,Field.Index.UN_TOKENIZED));
		// ns:title
		doc.add(new Field("article_key",t.getKey(),Field.Store.YES,Field.Index.UN_TOKENIZED));
		if(redirectsTo != null)
			// redirect_ns:title|target_ns:title
			doc.add(new Field("redirect",redirectsTo+"|"+t.getKey(),Field.Store.YES,Field.Index.UN_TOKENIZED));
		else{
			// a list of all links
			doc.add(new Field("links",lk.toString(),Field.Store.NO,Field.Index.TOKENIZED));
		}
		
		writer.addDocument(doc,an);
		state = State.MODIFIED;
	}
	
	/** Find the target key to title (ns:title) to which the links is pointing to 
	 * @throws IOException */
	protected String findTargetLink(int ns, String title, boolean exactCase) throws IOException{
		String key;
		if(title.length() == 0)
			return null;
		
		if(exactCase)
			return ns+":"+title; // don't capitalize first letter for exact case indexes
		
		// first letter uppercase
		if(title.length()==1) 
			key = ns+":"+title.toUpperCase();
		else
			key = ns+":"+title.substring(0,1).toUpperCase()+title.substring(1);
		return key; // index everything, even if the target article doesn't exist
	}
	
	/** Get number of backlinks to this title */
	public int getNumInLinks(String key) throws IOException{
		ensureRead();
		if(optimized)
			return reader.docFreq(new Term("links",key));
		else{
			// TODO: check if this is too slow in incremental updates..  
			TermDocs td = reader.termDocs(new Term("links",key));
			int count = 0;
			while(td.next()) // this will skip deleted docs, while docFreq won't
				count++;
			return count;
		}
	}
	
	/** Make cache: doc_id -> number of inlinks */
	public int[] makeInLinkCache() throws IOException{
		ensureRead();
		Dictionary dict = getKeys();
		Word w;
		int[] ret = new int[reader.maxDoc()];
		while((w = dict.next()) != null){
			String key = w.getWord();
			int docid = getDocId(key);
			int in = getNumInLinks(key);
			ret[docid] = in;
		}
		return ret;
	}
	
	/** Get all article titles that redirect to given title */
	public ArrayList<String> getRedirectsTo(String key) throws IOException{
		ensureRead();
		ArrayList<String> ret = new ArrayList<String>();
		String prefix = key+"|";
		TermEnum te = reader.terms(new Term("redirect",prefix));
		for(;te.term()!=null;te.next()){
			String t = te.term().text();
			if(t.startsWith(prefix)){
				ret.add(t.substring(t.indexOf('|')+1));
			} else
				break;
		}
		return ret;
	}
	
	/** If an article is a redirect 
	 * @throws IOException */
	public boolean isRedirect(String key) throws IOException{
		ensureRead();
		TermDocs td = reader.termDocs(new Term("article_key",key));
		if(td.next()){
			if(reader.document(td.doc(),redirectOnly).get("redirect")!=null)
				return true;
		}
		return false;
	}
	
	/** Get page_id for ns:title */
	public String getPageId(String key) throws IOException {
		ensureRead();
		TermDocs td = reader.termDocs(new Term("article_key",key));
		if(td.next()){
			return reader.document(td.doc()).get("article_pageid");
		}
		return null;
	}

	/** If article is redirect, get target key, else null */
	public String getRedirectTarget(String key) throws IOException{
		ensureRead();
		TermDocs td = reader.termDocs(new Term("article_key",key));
		if(td.next()){
			String t = reader.document(td.doc(),redirectOnly).get("redirect");
			if(t == null)
				return null;
			return t.substring(0,t.indexOf('|'));
		}
		return null;
	}

	
	/** Return the namespace of the redirect taget (if any) */
	public int getRedirectTargetNamespace(String key) throws IOException{
		ensureRead();
		String t = getRedirectTarget(key);
		if(t != null){
			return Integer.parseInt(t.substring(t.indexOf('|')+1,t.indexOf(':',t.indexOf('|'))));
		}
		return 0;
	}
	
	/** Get all article titles linking to given title 
	 * @throws IOException */
	public ArrayList<CompactArticleLinks> getInLinks(CompactArticleLinks key, HashMap<Integer,CompactArticleLinks> keyCache) throws IOException{
		ensureRead();
		ArrayList<CompactArticleLinks> ret = new ArrayList<CompactArticleLinks>();
		TermDocs td = reader.termDocs(new Term("links",key.toString()));
		while(td.next()){
			CompactArticleLinks cs = keyCache.get(td.doc());
			if(cs != null)
				ret.add(cs);
		}
		return ret;
	}
	
	/** Get all article titles linking to given title 
	 * @throws IOException */
	public ArrayList<String> getInLinks(String key) throws IOException{
		ensureRead();
		ArrayList<String> ret = new ArrayList<String>();
		TermDocs td = reader.termDocs(new Term("links",key));
		while(td.next()){
			ret.add(reader.document(td.doc(),keyOnly).get("article_key"));
		}
		return ret;
	}
	
	/** Get links from this article to other articles */
	public StringList getOutLinks(String key) throws IOException{
		ensureRead();
		TermDocs td = reader.termDocs(new Term("article_key",key));
		if(td.next()){
			return new StringList(reader.document(td.doc(),linksOnly).get("links"));
		}
		return null;
	}
	
	/** Get all contexts in which article <i>to<i/> is linked from <i>from</i>. 
	 *  Will return null if there is no context, or link is invalid.
	 * @throws ClassNotFoundException */
	@SuppressWarnings("unchecked")
	public ArrayList<String> getContext(String from, String to) throws IOException {
		ensureRead();
		String cacheKey = "getContext:"+from;
		//Element fromCache = cache.get(cacheKey);
		Object fromCache = cache.get(cacheKey);
		if(fromCache != null){
			//HashMap<String, ArrayList<String>> map = (HashMap<String, ArrayList<String>>) fromCache.getObjectValue();
			//HashMap<String, ArrayList<String>> map = (HashMap<String, ArrayList<String>>) fromCache;
			StringMap map = (StringMap) fromCache;
			return map.get(to);
		}
		TermDocs td = reader.termDocs(new Term("article_key",from));
		if(td.next()){
			byte[] serialized = reader.document(td.doc(),contextOnly).getBinaryValue("context");
			if(serialized == null)
				return null;
			StringMap map = new StringMap(serialized);
			try {				
				//ObjectInputStream in = new ObjectInputStream(new ByteArrayInputStream(serialized));						
				//HashMap<String, ArrayList<String>> map;
				//map = (HashMap<String, ArrayList<String>>) in.readObject();				
				// cache it !
				//cache.put(new Element(cacheKey,map));
				cache.put(cacheKey,map);
				return map.get(to);
			/* } catch (ClassNotFoundException e) {
				log.error("For getContext("+from+","+to+") got class not found exception: "+e.getMessage());
				e.printStackTrace(); // shouldn't happen! */
			} catch(Exception e){
				e.printStackTrace();
			}
			
		}
		
		return null;
	}
	
	/** return how many times article key1 and key2 cooccur in same context */ 
	public int getRelatedCountInContext(String key1, String key2) throws IOException {
		ensureRead();
		PhraseQuery pq = new PhraseQuery();
		pq.add(new Term("links",key1));
		pq.add(new Term("links",key2));
		pq.setSlop(SplitAnalyzer.GROUP_GAP/2);
		return searcher.search(pq).length();
	}
	
	/** return how many times article key1 and key2 cooccur in any article */ 
	public int getRelatedCountAll(String key1, String key2) throws IOException {
		ensureRead();
		// works as an optimized boolean query on key1, key2
		int count = 0;
		TermDocs td1 = reader.termDocs(new Term("links",key1));
		TermDocs td2 = reader.termDocs(new Term("links",key2));
		TermDocs first = td1;
		TermDocs other = td2;
		if(!first.next())
			return 0;
		while(true){
			if(!other.skipTo(first.doc()))
				return count;
			if(first.doc() == other.doc()){
				count++; // match!!
				if(!first.next())
					return count;
			} else{
				// swap, in next iteration skip to the other.docid
				TermDocs t = first;
				first = other;
				other = t;
			}
			
		}
	}
	
	/** return how many times article key1 and key2 cooccur in same context */ 
	public double getRelatedScore(String key1, String key2, int[] inLinkCache) throws IOException {
		ensureRead();
		PhraseQuery pq = new PhraseQuery();
		pq.add(new Term("links",key1));
		pq.add(new Term("links",key2));
		pq.setSlop(SplitAnalyzer.GROUP_GAP/2);
		Hits hits = searcher.search(pq);
		int num = hits.length();
		if(inLinkCache == null || num == 0)
			return num;
		double sum = 0;
		for(int i=0;i<num;i++){
			sum += Math.log10(10+inLinkCache[hits.id(i)]);
		}
		sum /= num; // take average
		
		return sum * num; // actually returns sum
	}
	
	
	/** Get all contexts in which article <i>to<i/> is linked from <i>from</i>. 
	 *  Will return null if there is no context, or link is invalid.
	 * @throws ClassNotFoundException */
	@SuppressWarnings("unchecked")
	public Collection<String> getContextOld(String from, String to) throws IOException {
		ensureRead();
		
		TermDocs td = reader.termDocs(new Term("context_key",to+"|"+from));
		if(td.next()){
			return new StringList(reader.document(td.doc()).get("context")).toCollection();					
		}
		
		return null;
	}
	
	/** Get a dictionary of all article keys (ns:title) in this index */
	public LuceneDictionary getKeys() throws IOException{
		ensureRead();
		return new LuceneDictionary(reader,"article_key");
	}
	
	public Integer getDocId(String key) throws IOException {
		TermDocs td = reader.termDocs(new Term("article_key",key));
		if(td.next()){
			return td.doc();
		}
		return null;
	}

	/** Close everything */
	public void close() throws IOException {
		if(writer != null)
			writer.close();
		if(reader != null)
			reader.close();
		//if(directory != null)
		//	directory.close();		
	}

	public ObjectCache getCache() {
		return cache;
	}

	public boolean isAutoOptimize() {
		return autoOptimize;
	}

}
