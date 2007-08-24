package org.wikimedia.lsearch.spell;

import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map.Entry;
import java.util.concurrent.ThreadPoolExecutor.AbortPolicy;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import org.apache.log4j.Logger;
import org.apache.lucene.analysis.Token;
import org.mediawiki.importer.DumpWriter;
import org.mediawiki.importer.Page;
import org.mediawiki.importer.Revision;
import org.mediawiki.importer.Siteinfo;
import org.wikimedia.lsearch.analyzers.Analyzers;
import org.wikimedia.lsearch.analyzers.FastWikiTokenizerEngine;
import org.wikimedia.lsearch.beans.Article;
import org.wikimedia.lsearch.beans.ArticleLinks;
import org.wikimedia.lsearch.beans.Redirect;
import org.wikimedia.lsearch.beans.Title;
import org.wikimedia.lsearch.config.Configuration;
import org.wikimedia.lsearch.config.IndexId;
import org.wikimedia.lsearch.ranks.CompactArticleLinks;
import org.wikimedia.lsearch.ranks.Links;
import org.wikimedia.lsearch.ranks.RelatedTitle;
import org.wikimedia.lsearch.util.Localization;

/**
 * Make a  
 * 
 * @author rainman
 *
 */
public class CleanIndexImporter implements DumpWriter {
	static Logger log = Logger.getLogger(CleanIndexImporter.class);
	Page page;
	Revision revision;
	CleanIndexWriter writer;
	String langCode;

	public CleanIndexImporter(IndexId iid, String langCode) throws IOException{
		Configuration.open(); // make sure configuration is loaded
		this.writer = new CleanIndexWriter(iid);
		this.langCode = langCode;
	}
	public void writeRevision(Revision revision) throws IOException {
		this.revision = revision;		
	}
	public void writeStartPage(Page page) throws IOException {
		this.page = page;
	}
	public void writeEndPage() throws IOException {
		ArrayList<Redirect> redirects = new ArrayList<Redirect>();
		boolean isRedirect = Localization.getRedirectTarget(revision.Text,langCode) != null;
		ArrayList<RelatedTitle> related = new ArrayList<RelatedTitle>();
		// make article
		Article article = new Article(page.Id,page.Title.Namespace,page.Title.Text,revision.Text,isRedirect,0,redirects,related);
		//if(page.Title.Namespace != 0)
		//	article.setContents("");
		
		writer.addMainArticle(article);
		//writer.addAllArticle(article);
		// generate phrases
		/* FastWikiTokenizerEngine parser = new FastWikiTokenizerEngine(page.Title.Text,langCode,false); 
		ArrayList<Token> tokens = parser.parse();
		for(int i=0;i<tokens.size()-1;i++){
			phrases.addPhrase(tokens.get(i).termText(),tokens.get(i+1).termText());
		} */
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
