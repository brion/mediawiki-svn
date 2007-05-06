package org.wikimedia.lsearch.importer;

import java.io.IOException;
import java.io.InputStream;

import org.apache.log4j.Logger;
import org.mediawiki.dumper.ProgressFilter;
import org.mediawiki.dumper.Tools;
import org.mediawiki.importer.XmlDumpReader;
import org.wikimedia.lsearch.config.Configuration;
import org.wikimedia.lsearch.config.GlobalConfiguration;
import org.wikimedia.lsearch.util.Localization;
import org.wikimedia.lsearch.util.UnicodeDecomposer;

/**
 * Main class, builds index from a database dump.
 * Syntax: java Importer inputfile dbname 
 * 
 * @author rainman
 *
 */
public class Importer {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		int limit = -1;
		String inputfile = null;
		String dbname = null;
		Boolean optimize = null;
		Integer mergeFactor = null, maxBufDocs = null;
		boolean newIndex = false;
		
		System.out.println("MediaWiki Lucene search indexer - index builder from xml database dumps.\n");
		
		Configuration.open();
		Logger log = Logger.getLogger(Importer.class); 
		
		if(args.length < 2){
			System.out.println("Syntax: java Importer [-n] [-l limit] [-o optimize] [-m mergeFactor] [-b maxBufDocs] <inputfile> <dbname>");
			System.out.println("Options: ");
			System.out.println("  -n              - create a new index (erase the old one if exists)");
			System.out.println("  -l limit_num    - add at most limit_num articles");
			System.out.println("  -o optimize     - true/false overrides optimization param from global settings");
			System.out.println("  -m mergeFactor  - overrides param from global settings");
			System.out.println("  -b maxBufDocs   - overrides param from global settings");
			return;
		}
		for(int i=0;i<args.length;i++){
			if(args[i].equals("-l"))
				limit = Integer.parseInt(args[++i]);
			else if(args[i].equals("-o"))
				optimize = Boolean.parseBoolean(args[++i]);
			else if(args[i].equals("-m"))
				mergeFactor = Integer.parseInt(args[++i]);
			else if(args[i].equals("-b"))
				maxBufDocs = Integer.parseInt(args[++i]);
			else if(args[i].equals("-n"))
				newIndex = true;
			else if(inputfile == null)
				inputfile = args[i];
			else if(dbname == null)
				dbname = args[i];
			else
				System.out.println("Unrecognized option: "+args[i]);
		}
		
		if(inputfile == null || dbname == null){
			System.out.println("Please specify both input xml file and database name");
			return;
		}

		// preload
		UnicodeDecomposer.getInstance();
		Localization.readLocalization(GlobalConfiguration.getInstance().getLanguage(dbname));
		Localization.loadInterwiki();
		
		long start = System.currentTimeMillis();
		
		// open
		InputStream input = null;
		try {
			input = Tools.openInputFile(inputfile);
		} catch (IOException e) {
			log.fatal("I/O error opening "+inputfile);
		}
		
		// read
		DumpImporter dp = new DumpImporter(dbname,limit,optimize,mergeFactor,maxBufDocs,newIndex);
		XmlDumpReader reader = new XmlDumpReader(input,new ProgressFilter(dp, 100));
		try {
			reader.readDump();
		} catch (IOException e) {
			log.warn("I/O error reading dump for "+dbname+" from "+inputfile);
		}
		
		long end = System.currentTimeMillis();

		log.info("Closing/optimizing index...");
		dp.closeIndex();
		
		long finalEnd = System.currentTimeMillis();
		
		System.out.println("Finished indexing in "+formatTime(end-start)+", with final index optimization in "+formatTime(finalEnd-end));
		System.out.println("Total time: "+formatTime(finalEnd-start));
	}

	private static String formatTime(long l) {
		l /= 1000;
		if(l >= 3600) return l/3600+"h "+(l%3600)/60+"m "+(l%60)+"s";
		else if(l >= 60) return (l%3600)/60+"m "+(l%60)+"s";
		else return l+"s";
	}

}
