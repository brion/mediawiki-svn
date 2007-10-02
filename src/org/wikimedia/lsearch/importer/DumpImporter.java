package org.wikimedia.lsearch.importer;

import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map.Entry;
import java.util.concurrent.ThreadPoolExecutor.AbortPolicy;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import org.apache.log4j.Logger;
import org.apache.lucene.document.FieldSelector;
import org.apache.lucene.document.SetBasedFieldSelector;
import org.mediawiki.importer.DumpWriter;
import org.mediawiki.importer.Page;
import org.mediawiki.importer.Revision;
import org.mediawiki.importer.Siteinfo;
import org.wikimedia.lsearch.beans.Article;
import org.wikimedia.lsearch.beans.ArticleLinks;
import org.wikimedia.lsearch.beans.Redirect;
import org.wikimedia.lsearch.beans.Title;
import org.wikimedia.lsearch.config.Configuration;
import org.wikimedia.lsearch.config.IndexId;
import org.wikimedia.lsearch.ranks.Links;
import org.wikimedia.lsearch.ranks.RankBuilder;
import org.wikimedia.lsearch.related.CompactArticleLinks;
import org.wikimedia.lsearch.related.CompactLinks;
import org.wikimedia.lsearch.related.RelatedTitle;
import org.wikimedia.lsearch.storage.ArticleAnalytics;
import org.wikimedia.lsearch.storage.LinkAnalysisStorage;
import org.wikimedia.lsearch.storage.RelatedStorage;
import org.wikimedia.lsearch.util.Localization;

public class DumpImporter implements DumpWriter {
	static Logger log = Logger.getLogger(DumpImporter.class);
	Page page;
	Revision revision;
	SimpleIndexWriter writer;
	int count = 0, limit;
	Links links;
	String langCode;
	RelatedStorage related;

	public DumpImporter(String dbname, int limit, Boolean optimize, Integer mergeFactor, 
			Integer maxBufDocs, boolean newIndex, Links links, String langCode){
		Configuration.open(); // make sure configuration is loaded
		IndexId iid = IndexId.get(dbname);
		writer = new SimpleIndexWriter(links, iid, optimize, mergeFactor, maxBufDocs, newIndex);
		this.limit = limit;
		this.links = links;
		this.langCode = langCode;
		this.related = new RelatedStorage(iid);
		if(!related.canRead())
			related = null; // add only if available
	}
	public void writeRevision(Revision revision) throws IOException {
		this.revision = revision;		
	}
	public void writeStartPage(Page page) throws IOException {
		this.page = page;
	}
	public void writeEndPage() throws IOException {
		String key = page.Title.Namespace+":"+page.Title.Text;
		int references = links.getNumInLinks(key);
		boolean isRedirect = links.isRedirect(key);
		int redirectTargetNamespace = isRedirect? links.getRedirectTargetNamespace(key) : -1;
		
		// make list of redirects
		ArrayList<Redirect> redirects = new ArrayList<Redirect>();
		ArrayList<String> anchors = new ArrayList<String>();
		//anchors.addAll(aa.getAnchorText());
		for(String rk : links.getRedirectsTo(key)){
			String[] parts = rk.toString().split(":",2);
			int redirectRef = links.getNumInLinks(rk);
			redirects.add(new Redirect(Integer.parseInt(parts[0]),parts[1],redirectRef));
			//anchors.addAll(raa.getAnchorText());
		}
		ArrayList<RelatedTitle> rel = null;
		if(related != null)
			rel = related.getRelated(key);
		else
			rel = new ArrayList<RelatedTitle>();
		// extract contexts
		/*for(RelatedTitle t : rel){
			links.getContext(t.getRelated().getKey(),key);
		} */
		// make article
		Article article = new Article(page.Id,page.Title.Namespace,page.Title.Text,revision.Text,isRedirect,
				references,redirectTargetNamespace,redirects,rel,anchors);
		writer.addArticle(article);
		count++;
		if(limit >= 0 && count > limit)
			throw new IOException("stopped");
	}	
	
	public void close() throws IOException {
		// nop		
	}
	public void writeEndWiki() throws IOException {
		// nop
	}
	public void writeSiteinfo(Siteinfo info) throws IOException {
		// nop
	}	
	public void writeStartWiki() throws IOException {
		// nop		
	}
	
	public void closeIndex() throws IOException {
		writer.close();
	}
	

}
