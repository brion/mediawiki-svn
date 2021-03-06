package de.brightbyte.wikiword.store.builder;

import static de.brightbyte.util.LogLevels.LOG_INFO;

import java.util.Map;

import de.brightbyte.application.Agenda;
import de.brightbyte.io.Output;
import de.brightbyte.util.PersistenceException;
import de.brightbyte.wikiword.DatasetIdentifier;

public abstract class FauxStoreBuilder implements WikiWordStoreBuilder {
	
	protected int logLevel = LOG_INFO;
	private Agenda agenda;
	private DatasetIdentifier dataset;
	
	public FauxStoreBuilder(DatasetIdentifier dataset) {
		this.dataset = dataset;
	}

	public void deleteDataAfter(int rcId, boolean inclusive) throws PersistenceException {
		throw new UnsupportedOperationException();
	}

	public void deleteDataFrom(int rcId) throws PersistenceException {
		throw new UnsupportedOperationException();
	}

	public int getConceptId(String name) throws PersistenceException {
		return 0;
	}

	public int getResourceId(String name) throws PersistenceException {
		return 0;
	}

	public void clearStatistics() throws PersistenceException {
		//noop
	}

	public void prepareImport() throws PersistenceException {
		//noop
	}
	
	public void finalizeImport() throws PersistenceException {
		flush();
	}

	public void finish() throws PersistenceException {
		flush();
	}

	public void initialize(boolean purge, boolean dropAll) throws PersistenceException {
		//noop
	}

	public Agenda createAgenda() throws PersistenceException {
		if (agenda==null) agenda = new Agenda(new Agenda.TransientPersistor());
		return agenda;
	}

	public Agenda getAgenda() {
		return agenda;
	}

	public int getNumberOfWarnings() throws PersistenceException {
		return 0;
	}

	public void optimize() throws PersistenceException {
		//noop
	}

	public void dumpStatistics(Output out) throws PersistenceException {
		//XXX: does nto fit! change interface!
	}

	public void dumpTableStats(Output out) throws PersistenceException {
		//XXX: does nto fit! change interface!
	}

	public Map<String, ? extends Number> getStatistics() throws PersistenceException {
		//XXX: does nto fit! change interface!
		return null;
	}

	public Map<String, ? extends Number> getTableStats() throws PersistenceException {
		//XXX: does nto fit! change interface!
		return null;
	}

	public boolean isComplete() throws PersistenceException {
		return false;
	}

	public void checkConsistency() throws PersistenceException {
		//noop
	}

	public void setLogLevel(int logLevel) {
		this.logLevel = logLevel;
	}

	public void storeWarning(int rcId, String problem, String details) throws PersistenceException {
		// noop
	}


	public DatasetIdentifier getDatasetIdentifier() {
		return dataset;
	}
	
}
