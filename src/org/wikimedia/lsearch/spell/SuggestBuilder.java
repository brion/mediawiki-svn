package org.wikimedia.lsearch.spell;

import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Hashtable;
import java.util.Map.Entry;

import org.apache.log4j.Logger;
import org.apache.lucene.analysis.Token;
import org.apache.lucene.document.Document;
import org.apache.lucene.index.IndexReader;
import org.apache.lucene.index.Term;
import org.apache.lucene.search.CachingWrapperFilter;
import org.apache.lucene.search.Filter;
import org.apache.lucene.search.Hits;
import org.apache.lucene.search.IndexSearcher;
import org.apache.lucene.search.PhraseQuery;
import org.apache.lucene.search.QueryFilter;
import org.apache.lucene.search.TermQuery;
import org.apache.lucene.store.FSDirectory;
import org.mediawiki.dumper.ProgressFilter;
import org.mediawiki.dumper.Tools;
import org.mediawiki.importer.XmlDumpReader;
import org.wikimedia.lsearch.analyzers.FastWikiTokenizerEngine;
import org.wikimedia.lsearch.analyzers.WikiQueryParser;
import org.wikimedia.lsearch.config.Configuration;
import org.wikimedia.lsearch.config.GlobalConfiguration;
import org.wikimedia.lsearch.config.IndexId;
import org.wikimedia.lsearch.config.IndexRegistry;
import org.wikimedia.lsearch.importer.DumpImporter;
import org.wikimedia.lsearch.index.IndexThread;
import org.wikimedia.lsearch.search.NamespaceFilter;
import org.wikimedia.lsearch.spell.api.LuceneDictionary;
import org.wikimedia.lsearch.spell.api.NamespaceFreq;
import org.wikimedia.lsearch.spell.api.TitleIndexer;
import org.wikimedia.lsearch.spell.api.WordsIndexer;
import org.wikimedia.lsearch.spell.api.Dictionary.Word;
import org.wikimedia.lsearch.util.Localization;
import org.wikimedia.lsearch.util.StringCounter;
import org.wikimedia.lsearch.util.UnicodeDecomposer;
import org.wikimedia.lsearch.util.StringCounter.Count;

/**
 * Build suggest (did you mean...) indexes
 * 
 * @author rainman
 *
 */
public class SuggestBuilder {
	static Logger log = Logger.getLogger(SuggestBuilder.class);
	public static void main(String args[]){
		String inputfile = null;
		String dbname = null;
		
		System.out.println("MediaWiki Lucene search indexer - build suggestions index.\n");
		
		Configuration.open();
		
		if(args.length !=1 && args.length != 2){
			System.out.println("Syntax: java SpellCheckBuilder <dbname> [<dumpfile>]");
			return;
		}
		inputfile = args.length>1? args[1] : null;
		dbname = args[0];
	
		GlobalConfiguration global = GlobalConfiguration.getInstance(); 
		String langCode = global.getLanguage(dbname);
		// preload
		UnicodeDecomposer.getInstance();
		Localization.readLocalization(langCode);
		Localization.loadInterwiki();

		long start = System.currentTimeMillis();
		IndexId iid = IndexId.get(dbname);
		IndexId words = iid.getSpellWords();
		IndexId titles = iid.getSpellTitles();
		if(words == null || titles == null){
			log.fatal("Index "+iid+" doesn't have both spell-check indexes assigned. Enable them in global configuration.");
			return;
		}
		
		if(inputfile != null){
			log.info("Rebuilding the temporary index for words");
			// open			
			InputStream input = null;
			try {
				input = Tools.openInputFile(inputfile);
			} catch (IOException e) {
				log.fatal("I/O error opening "+inputfile);
				return;
			}
			
			// make fresh clean index		
			try {
				CleanIndexImporter importer = new CleanIndexImporter(words,langCode);
				XmlDumpReader reader = new XmlDumpReader(input,new ProgressFilter(importer, 1000));
				reader.readDump();
				importer.closeIndex();
			} catch (IOException e) {
				if(!e.getMessage().equals("stopped")){
					log.fatal("I/O error reading dump for "+dbname+" from "+inputfile);
					return;
				}
			}		
		}
		// make words index
		log.info("Making words index");
		try {
			LuceneDictionary dict = new LuceneDictionary(IndexReader.open(words.getTempPath()),"contents");
			WordsIndexer writer = new WordsIndexer(words.getImportPath(),(dbname.equals("wikilucene")? 3 : 50));
			writer.createIndex();
			Word word;
			while((word = dict.next()) != null){
				writer.addWord(word);
			}
			writer.closeAndOptimze();
		} catch (IOException e) {
			log.fatal("Cannot open clean dictionary for "+words+" : "+e.getMessage());
			e.printStackTrace();
			return;
		}
		
		log.info("Making suggest title index");
		// make phrase index

		TitleIndexer tInx = new TitleIndexer(titles);
		tInx.createFromSnapshot();		
		
		long end = System.currentTimeMillis();

		// make snapshots
		IndexThread.makeIndexSnapshot(words,words.getImportPath());
		IndexThread.makeIndexSnapshot(titles,titles.getImportPath());

		System.out.println("Finished making suggest index in "+formatTime(end-start));
	}
	
	private static String formatTime(long l) {
		l /= 1000;
		if(l >= 3600) return l/3600+"h "+(l%3600)/60+"m "+(l%60)+"s";
		else if(l >= 60) return (l%3600)/60+"m "+(l%60)+"s";
		else return l+"s";
	}
}
