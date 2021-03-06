package de.brightbyte.wikiword.builder;

import java.io.IOException;

import de.brightbyte.util.PersistenceException;
import de.brightbyte.wikiword.model.WikiWordConcept;
import de.brightbyte.wikiword.store.builder.StatisticsStoreBuilder;
import de.brightbyte.wikiword.store.builder.WikiWordConceptStoreBuilder;

/**
 * This is the primary entry point to the first phase of a WikiWord analysis.
 * ImportDump can be invoked as a standalone program, use --help as a
 * command line parameter for usage information.
 */
public class BuildStatistics extends ImportApp<WikiWordConceptStoreBuilder<? extends WikiWordConcept>> {

	protected StatisticsStoreBuilder statisticsStore;
	
	public BuildStatistics() {
		super("BuildStatistics", true, true);
	}

	@Override
	protected void declareOptions() {
		super.declareOptions();
		args.declare("no-term-stats", null, false, Boolean.class, "skip (slow) term frequency statistics.");
	}
	
	//protected WikiWordConceptStoreBuilder<?> conceptStore;
	
	@Override
	protected void createStores() throws IOException, PersistenceException {
		super.createStores();
		
		statisticsStore = conceptStore.getStatisticsStoreBuilder();
		registerTargetStore(statisticsStore);
	}

	@Override
	protected void run() throws Exception {
		if (!args.isSet("no-term-stats")) {
			section("-- term stats --------------------------------------------------");
			this.statisticsStore.buildTermStatistics();
		}
		
		section("-- concept stats --------------------------------------------------");
		this.statisticsStore.buildConceptStatistics();

		section("-- statistics --------------------------------------------------");
		conceptStore.getConceptStore().getStatisticsStore().dumpStatistics(getLogOutput());
	}	
	
	public static void main(String[] argv) throws Exception {
		BuildStatistics app = new BuildStatistics();
		app.launch(argv);
	}
}