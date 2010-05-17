package de.brightbyte.wikiword.store.builder;

import java.sql.Connection;
import java.sql.SQLException;

import de.brightbyte.application.Agenda;
import de.brightbyte.data.PersistentIdManager;
import de.brightbyte.db.DatabaseTable;
import de.brightbyte.db.Inserter;
import de.brightbyte.db.RelationTable;
import de.brightbyte.util.PersistenceException;
import de.brightbyte.wikiword.Corpus;
import de.brightbyte.wikiword.TweakSet;
import de.brightbyte.wikiword.schema.AliasScope;
import de.brightbyte.wikiword.schema.LocalConceptStoreSchema;
import de.brightbyte.wikiword.schema.PropertyStoreSchema;

public class DatabasePropertyStoreBuilder extends DatabaseIncrementalStoreBuilder implements PropertyStoreBuilder {

	protected RelationTable propertyTable;
	protected Inserter propertyInserter;
	protected LocalConceptStoreSchema conceptStoreSchema;
	protected PersistentIdManager idManager;

	public DatabasePropertyStoreBuilder(Corpus corpus, Connection connection, TweakSet tweaks) throws SQLException, PersistenceException {
		this(new LocalConceptStoreSchema(corpus, connection, tweaks, true), 
				new PropertyStoreSchema(corpus, connection, tweaks, true), 
				null, tweaks, null);
	}
	
	protected DatabaseTable getTable(String name) {
		if (database.hasTable(name))
			return database.getTable(name);
		else
			return conceptStoreSchema.getTable(name);
	}
	
	public DatabasePropertyStoreBuilder(DatabaseLocalConceptStoreBuilder conceptStore, TweakSet tweaks) throws SQLException, PersistenceException {
		this((LocalConceptStoreSchema)conceptStore.getDatabaseAccess(), 
				new PropertyStoreSchema(conceptStore.getCorpus(), 
						conceptStore.getDatabaseAccess().getConnection(), 
						tweaks, true), 
				conceptStore.idManager,
				tweaks,
				conceptStore.getAgenda());
		
		database.setBackgroundErrorHandler(conceptStore.getDatabaseAccess().getBackgroundErrorHandler());
	}
	
	protected DatabasePropertyStoreBuilder(LocalConceptStoreSchema conceptStoreSchema, PropertyStoreSchema database, PersistentIdManager idManager, TweakSet tweaks, Agenda agenda) throws SQLException, PersistenceException {
		super(database, tweaks, agenda);

		//this.conceptStore = conceptStore;
		
		this.propertyInserter = configureTable("property", 128, 3*32);
		this.propertyTable =  (RelationTable)propertyInserter.getTable();
		
		this.conceptStoreSchema = conceptStoreSchema;
		this.idManager = idManager;
	}	

	@Override
	protected void deleteDataFrom(int rcId, String op) throws PersistenceException {
		deleteDataFrom(rcId, op, propertyTable, "concept");
	}
	
	@Override
	public void initialize(boolean purge, boolean dropAll) throws PersistenceException {
		super.initialize(purge, dropAll);
	}
	
	@Override
	public void flush() throws PersistenceException {
		super.flush();
	}
	
	/**
	 * @see de.brightbyte.wikiword.store.builder.LocalConceptStoreBuilder#storeRawText(int, java.lang.String)
	 */
	public void storeProperty(int resourceId, int concept, String name, String property, String value) throws PersistenceException {
		try {
			//int cId = getConceptId(name); //TODO: use join? //FIXME: when not provided
			
			propertyInserter.updateInt("resource", resourceId); 
			if (concept>0) propertyInserter.updateInt("concept", concept); 
			else if (idManager!=null) propertyInserter.updateInt("concept", idManager.aquireId(name));   
			propertyInserter.updateString("concept_name", name);
			propertyInserter.updateString("property", property);
			propertyInserter.updateString("value", value);
			propertyInserter.updateRow();
		} catch (SQLException e) {
			throw new PersistenceException(e);
		}
	}

	/*
	public int storeConcept(int rcId, String name, ConceptType ctype) throws PersistenceException {
		return conceptStore.storeConcept(rcId, name, ctype);
	}

	public int storeResource(String name, ResourceType ptype, Date time) throws PersistenceException {
		return conceptStore.storeResource(name, ptype, time);
	}

	public void storeConceptAlias(int rcId, int source, String sourceName, int target, String targetName, AliasScope scope) throws PersistenceException {
		conceptStore.storeConceptAlias(rcId, source, sourceName, target, targetName, scope);
	}*/

	public Corpus getCorpus() {
		return (Corpus)database.getDataset();
	}
	
	public void finishAliases() throws PersistenceException {
		if (beginTask("DatabasePropertyStoreBuilder.finishAliases", "resolveRedirects:property")) {
			RelationTable aliasTable = (RelationTable)conceptStoreSchema.getTable("alias");
			int n = resolveRedirects(aliasTable, propertyTable, "concept_name", idManager!=null ? "concept" : null, AliasScope.REDIRECT, 3, null, null);
			endTask("DatabasePropertyStoreBuilder.finishAliases", "resolveRedirects:property", n+" entries");
		}
	}

	public void finishIdReferences() throws PersistenceException {
		if (idManager==null && beginTask("DatabasePropertyStoreBuilder.finishIdReferences", "buildIdLinks:property")) {
			int n = buildIdLinks(propertyTable, "concept_name", "concept", 1);     
			endTask("DatabasePropertyStoreBuilder.finishIdReferences", "buildIdLinks:property", n+" references");
		}
	}
	
	public void prepareMassInsert() throws PersistenceException {
		try {
				database.disableKeys();
		} catch (SQLException e) {
			throw new PersistenceException(e);
		}
	}
	
	public void prepareMassProcessing() throws PersistenceException {
		try {
				database.enableKeys();
		} catch (SQLException e) {
			throw new PersistenceException(e);
		}
	}
	
}