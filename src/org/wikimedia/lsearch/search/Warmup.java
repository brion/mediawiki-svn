package org.wikimedia.lsearch.search;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Collection;
import java.util.HashSet;
import java.util.Hashtable;

import org.apache.log4j.Logger;
import org.apache.lucene.analysis.SimpleAnalyzer;
import org.apache.lucene.index.IndexReader;
import org.apache.lucene.index.Term;
import org.apache.lucene.search.Hits;
import org.apache.lucene.search.Query;
import org.apache.lucene.search.TermQuery;
import org.wikimedia.lsearch.analyzers.Analyzers;
import org.wikimedia.lsearch.analyzers.FieldBuilder;
import org.wikimedia.lsearch.analyzers.FieldNameFactory;
import org.wikimedia.lsearch.analyzers.StopWords;
import org.wikimedia.lsearch.analyzers.WikiQueryParser;
import org.wikimedia.lsearch.benchmark.SampleTerms;
import org.wikimedia.lsearch.benchmark.Terms;
import org.wikimedia.lsearch.benchmark.WordTerms;
import org.wikimedia.lsearch.config.Configuration;
import org.wikimedia.lsearch.config.GlobalConfiguration;
import org.wikimedia.lsearch.config.IndexId;
import org.wikimedia.lsearch.spell.Suggest;

/**
 * Methods to warm up index and preload caches.  
 * 
 * @author rainman
 *
 */
public class Warmup {
	static Logger log = Logger.getLogger(Warmup.class);
	protected static GlobalConfiguration global = null;
	protected static Hashtable<String,Terms> langTerms = new Hashtable<String,Terms>();
	
	protected static int getWarmupCount(IndexId iid){
		String primary = "warmup";
		String secondary = "warmup";
		if(iid.isPrefix())
			secondary += "_prefix";
		else if(iid.isHighlight())
			secondary += "_hl";
		else if(iid.isSpell())
			secondary += "_spell";
		else if(iid.isTitlesBySuffix())
			secondary += "_titles_by_suffix";
		else if(iid.isRelated())
			secondary += "_related";
		
		Hashtable<String,String> warmup = global.getDBParams(iid.getDBname(),secondary);
		int count = warmup!=null? Integer.parseInt(warmup.get("count")) : 0;
		
		if(count == 0){
			warmup = global.getDBParams(iid.getDBname(),primary);
			count = warmup!=null? Integer.parseInt(warmup.get("count")) : 0;
		}
		return count;
	}
	
	/** If set in local config file waits for aggregate fields to finish caching */
	public static void waitForAggregate(IndexSearcherMul[] pool){
		try{
			boolean waitForAggregate = Configuration.open().getString("Search","warmupaggregate","false").equalsIgnoreCase("true");
			if(waitForAggregate){ // wait for aggregate fields to be cached
				boolean wait;
				do{
					wait = false;
					for(IndexSearcherMul is : pool){
						if(AggregateMetaField.isBeingCached(is.getIndexReader())){
							wait = true;
							break;
						}
					}
					if(wait)
						Thread.sleep(500);
				} while(wait);
			}
		} catch(InterruptedException e){
			e.printStackTrace();
		}
	}
	
	/** Runs some typical queries on a local index searcher to preload caches, pages into memory, etc .. */
	public static void warmupIndexSearcher(IndexSearcherMul is, IndexId iid, boolean useDelay) throws IOException {
		if(iid.isLinks() || iid.isPrecursor())
			return; // no warmaup for these
		log.info("Warming up index "+iid+" ...");
		long start = System.currentTimeMillis();
		IndexReader reader = is.getIndexReader();
		
		if(global == null)
			global = GlobalConfiguration.getInstance();		
		
		int count = getWarmupCount(iid);
		
		if(iid.isSpell() && count > 0){
			Terms terms = getTermsForLang(iid.getLangCode());
			Suggest sug = new Suggest(iid,is,false);
			WikiQueryParser parser = new WikiQueryParser("contents",new SimpleAnalyzer(),new FieldBuilder(iid).getBuilder(),StopWords.getPredefinedSet(iid));
			for(int i=0;i<count;i++){
				String searchterm = terms.next();
				sug.suggest(searchterm,parser.tokenizeBareText(searchterm),new Suggest.ExtraInfo(),new NamespaceFilter());
			}
		} else if(iid.isPrefix() && count > 0){
			Terms terms = getTermsForLang(iid.getLangCode());
			SearchEngine search = new SearchEngine();
			for(int i=0;i<count;i++){
				String searchterm = terms.next();
				searchterm = searchterm.substring(0,(int)Math.min(8*Math.random()+1,searchterm.length()));
				search.searchPrefixLocal(iid,searchterm,20,is);
			}
		} else if((iid.isHighlight() || iid.isRelated()) && count > 0 && !iid.isTitlesBySuffix()){
			// NOTE: this might not warmup all caches, but should read stuff into memory buffers
			for(int i=0;i<count;i++){
				int docid = (int)(Math.random()*is.maxDoc());
				reader.document(docid).get("key");
			}			
		} else{
			// normal indexes
			if(count == 0){
				makeNamespaceFilters(is,iid);
				simpleWarmup(is,iid);				
			} else{				
				makeNamespaceFilters(is,iid);
				warmupWithSearchTerms(is,iid,count,useDelay);
			}
		}	
		long delta = System.currentTimeMillis() - start;
		log.info("Warmed up "+iid+" in "+delta+" ms");
	}
	
	/** Warmup index using some number of simple searches */
	protected static void warmupWithSearchTerms(IndexSearcherMul is, IndexId iid, int count, boolean useDelay) {
		String lang = iid.getLangCode();
		FieldBuilder.BuilderSet b = new FieldBuilder(iid).getBuilder();
		WikiQueryParser parser = new WikiQueryParser(b.getFields().contents(),"0",Analyzers.getSearcherAnalyzer(iid,false),b,WikiQueryParser.NamespacePolicy.IGNORE,null);
		Terms terms = getTermsForLang(lang);
		
		try{	
			for(int i=0; i < count ; i++){
				Query q = parser.parse(terms.next());
				Hits hits = is.search(q);
				for(int j =0; j<20 && j<hits.length(); j++)
					hits.doc(j); // retrieve some documents
				if(useDelay){
					if(i<1000) 
						Thread.sleep(100);
					else
						Thread.sleep(50);
				}
			}
		} catch (IOException e) {
			e.printStackTrace();
			log.error("Error warming up local IndexSearcherMul for "+iid);
		} catch (Exception e) {
			e.printStackTrace();
			log.error("Exception during warmup "+e.getMessage());
		}		
	}

	/** Get database of example search terms for language */
	protected static Terms getTermsForLang(String lang) {
		String lib = Configuration.open().getLibraryPath();
		if("en".equals(lang) || "de".equals(lang) || "es".equals(lang) || "fr".equals(lang) || "it".equals(lang) || "pt".equals(lang))
			langTerms.put(lang,new WordTerms(lib+Configuration.PATH_SEP+"dict"+Configuration.PATH_SEP+"terms-"+lang+".txt.gz"));		
		if(lang.equals("sample"))
			return new SampleTerms();
		
		if(langTerms.containsKey(lang))
			return langTerms.get(lang);
		else
			return langTerms.get("en");
	}

	/** Preload all predefined filters */
	protected static void makeNamespaceFilters(IndexSearcherMul is, IndexId iid) {
		ArrayList<NamespaceFilter> filters = new ArrayList<NamespaceFilter>();
		filters.addAll(global.getNamespacePrefixes().values());
		filters.add(new NamespaceFilter()); // "all"
		for(NamespaceFilter filter : filters){
			try {
				is.search(new TermQuery(new Term("contents","wikipedia")),
						new NamespaceFilterWrapper(filter));
			} catch (IOException e) {
				log.warn("I/O error while preloading filter for "+iid+" for filter "+filter+" : "+e.getMessage());
			}
		}
	}

	/** Just run one complex query and rebuild the main namespace filter */
	public static void simpleWarmup(IndexSearcherMul is, IndexId iid){
		try{
			FieldBuilder.BuilderSet b = new FieldBuilder(iid).getBuilder();
			WikiQueryParser parser = new WikiQueryParser(b.getFields().contents(),"0",Analyzers.getSearcherAnalyzer(iid,false),b,WikiQueryParser.NamespacePolicy.IGNORE,null);
			Query q = parser.parse("a OR very OR long OR title OR involving OR both OR wikipedia OR and OR pokemons");
			is.search(q,new NamespaceFilterWrapper(new NamespaceFilter("0")));
		} catch (IOException e) {
			log.error("Error warming up local IndexSearcherMul for "+iid);
		}
	}

}
