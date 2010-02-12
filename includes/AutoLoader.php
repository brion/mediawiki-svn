<?php

/* This defines autoloading handler for whole MediaWiki framework */

# Locations of core classes
# Extension classes are specified with $wgAutoloadClasses
# This array is a global instead of a static member of AutoLoader to work around a bug in APC
global $wgAutoloadLocalClasses;
$wgAutoloadLocalClasses = array(
	# Includes
	'AjaxDispatcher' => 'includes/AjaxDispatcher.php',
	'AjaxResponse' => 'includes/AjaxResponse.php',
	'AlphabeticPager' => 'includes/Pager.php',
	'APCBagOStuff' => 'includes/BagOStuff.php',
	'Article' => 'includes/Article.php',
	'AtomFeed' => 'includes/Feed.php',
	'AuthPlugin' => 'includes/AuthPlugin.php',
	'AuthPluginUser' => 'includes/AuthPlugin.php',
	'Autopromote' => 'includes/Autopromote.php',
	'BacklinkCache' => 'includes/BacklinkCache.php',
	'BagOStuff' => 'includes/BagOStuff.php',
	'Block' => 'includes/Block.php',
	'CacheDependency' => 'includes/CacheDependency.php',
	'Category' => 'includes/Category.php',
	'Categoryfinder' => 'includes/Categoryfinder.php',
	'CategoryPage' => 'includes/CategoryPage.php',
	'CategoryViewer' => 'includes/CategoryPage.php',
	'CdbFunctions' => 'includes/Cdb_PHP.php',
	'CdbReader' => 'includes/Cdb.php',
	'CdbReader_DBA' => 'includes/Cdb.php',
	'CdbReader_PHP' => 'includes/Cdb_PHP.php',
	'CdbWriter' => 'includes/Cdb.php',
	'CdbWriter_DBA' => 'includes/Cdb.php',
	'CdbWriter_PHP' => 'includes/Cdb_PHP.php',
	'ChangesList' => 'includes/ChangesList.php',
	'ChangesFeed' => 'includes/ChangesFeed.php',
	'ChangeTags' => 'includes/ChangeTags.php',
	'ChannelFeed' => 'includes/Feed.php',
	'Cookie' => 'includes/HttpFunctions.php',
	'CookieJar' => 'includes/HttpFunctions.php',
	'ConcatenatedGzipHistoryBlob' => 'includes/HistoryBlob.php',
	'ConfEditor' => 'includes/ConfEditor.php',
	'ConfEditorParseError' => 'includes/ConfEditor.php',
	'ConfEditorToken' => 'includes/ConfEditor.php',
	'ConstantDependency' => 'includes/CacheDependency.php',
	'CreativeCommonsRdf' => 'includes/Metadata.php',
	'Credits' => 'includes/Credits.php',
	'DBABagOStuff' => 'includes/BagOStuff.php',
	'DependencyWrapper' => 'includes/CacheDependency.php',
	'DiffHistoryBlob' => 'includes/HistoryBlob.php',
	'DjVuImage' => 'includes/DjVuImage.php',
	'DoubleReplacer' => 'includes/StringUtils.php',
	'DoubleRedirectJob' => 'includes/DoubleRedirectJob.php',
	'DublinCoreRdf' => 'includes/Metadata.php',
	'Dump7ZipOutput' => 'includes/Export.php',
	'DumpBZip2Output' => 'includes/Export.php',
	'DumpFileOutput' => 'includes/Export.php',
	'DumpFilter' => 'includes/Export.php',
	'DumpGZipOutput' => 'includes/Export.php',
	'DumpLatestFilter' => 'includes/Export.php',
	'DumpMultiWriter' => 'includes/Export.php',
	'DumpNamespaceFilter' => 'includes/Export.php',
	'DumpNotalkFilter' => 'includes/Export.php',
	'DumpOutput' => 'includes/Export.php',
	'DumpPipeOutput' => 'includes/Export.php',
	'eAccelBagOStuff' => 'includes/BagOStuff.php',
	'EditPage' => 'includes/EditPage.php',
	'EmaillingJob' => 'includes/EmaillingJob.php',
	'EmailNotification' => 'includes/UserMailer.php',
	'EnhancedChangesList' => 'includes/ChangesList.php',
	'EnotifNotifyJob' => 'includes/EnotifNotifyJob.php',
	'ErrorPageError' => 'includes/Exception.php',
	'Exif' => 'includes/Exif.php',
	'ExplodeIterator' => 'includes/StringUtils.php',
	'ExternalEdit' => 'includes/ExternalEdit.php',
	'ExternalStoreDB' => 'includes/ExternalStoreDB.php',
	'ExternalStoreHttp' => 'includes/ExternalStoreHttp.php',
	'ExternalStore' => 'includes/ExternalStore.php',
	'ExternalUser' => 'includes/ExternalUser.php',
	'ExternalUser_Hardcoded' => 'includes/extauth/Hardcoded.php',
	'ExternalUser_MediaWiki' => 'includes/extauth/MediaWiki.php',
	'ExternalUser_vB' => 'includes/extauth/vB.php',
	'FatalError' => 'includes/Exception.php',
	'FakeTitle' => 'includes/FakeTitle.php',
	'FakeMemCachedClient' => 'includes/ObjectCache.php',
	'FauxRequest' => 'includes/WebRequest.php',
	'FauxResponse' => 'includes/WebResponse.php',
	'FeedItem' => 'includes/Feed.php',
	'FeedUtils' => 'includes/FeedUtils.php',
	'FileDeleteForm' => 'includes/FileDeleteForm.php',
	'FileDependency' => 'includes/CacheDependency.php',
	'FileRevertForm' => 'includes/FileRevertForm.php',
	'ForkController' => 'includes/ForkController.php',
	'FormatExif' => 'includes/Exif.php',
	'FormOptions' => 'includes/FormOptions.php',
	'GIFMetadataExtractor' => 'includes/media/GIFMetadataExtractor.php',
	'GIFHandler' => 'includes/media/GIF.php',
	'GlobalDependency' => 'includes/CacheDependency.php',
	'HashBagOStuff' => 'includes/BagOStuff.php',
	'HashtableReplacer' => 'includes/StringUtils.php',
	'HistoryBlobCurStub' => 'includes/HistoryBlob.php',
	'HistoryBlob' => 'includes/HistoryBlob.php',
	'HistoryBlobStub' => 'includes/HistoryBlob.php',
	'HistoryPage' => 'includes/HistoryPage.php',
	'HistoryPager' => 'includes/HistoryPage.php',
	'Html' => 'includes/Html.php',
	'HTMLCacheUpdate' => 'includes/HTMLCacheUpdate.php',
	'HTMLCacheUpdateJob' => 'includes/HTMLCacheUpdate.php',
	'HTMLFileCache' => 'includes/HTMLFileCache.php',
	'HTMLForm' => 'includes/HTMLForm.php',
	'HTMLFormField' => 'includes/HTMLForm.php',
	'HTMLTextField' => 'includes/HTMLForm.php',
	'HTMLIntField' => 'includes/HTMLForm.php',
	'HTMLTextAreaField' => 'includes/HTMLForm.php',
	'HTMLFloatField' => 'includes/HTMLForm.php',
	'HTMLHiddenField' => 'includes/HTMLForm.php',
	'HTMLSubmitField' => 'includes/HTMLForm.php',
	'HTMLEditTools' => 'includes/HTMLForm.php',
	'HTMLCheckField' => 'includes/HTMLForm.php',
	'HTMLSelectField' => 'includes/HTMLForm.php',
	'HTMLSelectOrOtherField' => 'includes/HTMLForm.php',
	'HTMLMultiSelectField' => 'includes/HTMLForm.php',
	'HTMLRadioField' => 'includes/HTMLForm.php',
	'HTMLInfoField' => 'includes/HTMLForm.php',
	'Http' => 'includes/HttpFunctions.php',
	'HttpRequest' => 'includes/HttpFunctions.php',
	'IEContentAnalyzer' => 'includes/IEContentAnalyzer.php',
	'ImageGallery' => 'includes/ImageGallery.php',
	'ImageHistoryList' => 'includes/ImagePage.php',
	'ImageHistoryPseudoPager' => 'includes/ImagePage.php',
	'ImagePage' => 'includes/ImagePage.php',
	'ImageQueryPage' => 'includes/ImageQueryPage.php',
	'IncludableSpecialPage' => 'includes/SpecialPage.php',
	'IndexPager' => 'includes/Pager.php',
	'Interwiki' => 'includes/Interwiki.php',
	'IP' => 'includes/IP.php',
	'Job' => 'includes/JobQueue.php',
	'JSMin' => 'includes/JSMin.php',
	'LCStore_DB' => 'includes/LocalisationCache.php',
	'LCStore_CDB' => 'includes/LocalisationCache.php',
	'LCStore_Null' => 'includes/LocalisationCache.php',
	'License' => 'includes/Licenses.php',
	'Licenses' => 'includes/Licenses.php',
	'LinkBatch' => 'includes/LinkBatch.php',
	'LinkCache' => 'includes/LinkCache.php',
	'Linker' => 'includes/Linker.php',
	'LinkFilter' => 'includes/LinkFilter.php',
	'LinksUpdate' => 'includes/LinksUpdate.php',
	'LocalisationCache' => 'includes/LocalisationCache.php',
	'LocalisationCache_BulkLoad' => 'includes/LocalisationCache.php',
	'LogPage' => 'includes/LogPage.php',
	'LogPager' => 'includes/LogEventsList.php',
	'LogEventsList' => 'includes/LogEventsList.php',
	'LogReader' => 'includes/LogEventsList.php',
	'LogViewer' => 'includes/LogEventsList.php',
	'MacBinary' => 'includes/MacBinary.php',
	'MagicWordArray' => 'includes/MagicWord.php',
	'MagicWord' => 'includes/MagicWord.php',
	'MailAddress' => 'includes/UserMailer.php',
	'MathRenderer' => 'includes/Math.php',
	'MediaTransformError' => 'includes/MediaTransformOutput.php',
	'MediaTransformOutput' => 'includes/MediaTransformOutput.php',
	'MediaWikiBagOStuff' => 'includes/BagOStuff.php',
	'MediaWiki_I18N' => 'includes/SkinTemplate.php',
	'MediaWiki' => 'includes/Wiki.php',
	'MemCachedClientforWiki' => 'includes/memcached-client.php',
	'MessageCache' => 'includes/MessageCache.php',
	'MimeMagic' => 'includes/MimeMagic.php',
	'MWException' => 'includes/Exception.php',
	'MWMemcached' => 'includes/memcached-client.php',
	'MWNamespace' => 'includes/Namespace.php',
	'Namespace' => 'includes/NamespaceCompat.php', // Compat
	'OldChangesList' => 'includes/ChangesList.php',
	'OutputPage' => 'includes/OutputPage.php',
	'PageQueryPage' => 'includes/PageQueryPage.php',
	'PageHistory' => 'includes/HistoryPage.php',
	'PageHistoryPager' => 'includes/HistoryPage.php',
	'Pager' => 'includes/Pager.php',
	'PasswordError' => 'includes/User.php',
	'PatrolLog' => 'includes/PatrolLog.php',
	'PoolCounter' => 'includes/PoolCounter.php',
	'PoolCounter_Stub' => 'includes/PoolCounter.php',
	'Preferences' => 'includes/Preferences.php',
	'PrefixSearch' => 'includes/PrefixSearch.php',
	'Profiler' => 'includes/Profiler.php',
	'ProfilerSimple' => 'includes/ProfilerSimple.php',
	'ProfilerSimpleText' => 'includes/ProfilerSimpleText.php',
	'ProfilerSimpleUDP' => 'includes/ProfilerSimpleUDP.php',
	'ProtectionForm' => 'includes/ProtectionForm.php',
	'QueryPage' => 'includes/QueryPage.php',
	'QuickTemplate' => 'includes/SkinTemplate.php',
	'RawPage' => 'includes/RawPage.php',
	'RCCacheEntry' => 'includes/ChangesList.php',
	'RdfMetaData' => 'includes/Metadata.php',
	'RecentChange' => 'includes/RecentChange.php',
	'RefreshLinksJob' => 'includes/RefreshLinksJob.php',
	'RefreshLinksJob2' => 'includes/RefreshLinksJob.php',
	'RegexlikeReplacer' => 'includes/StringUtils.php',
	'ReplacementArray' => 'includes/StringUtils.php',
	'Replacer' => 'includes/StringUtils.php',
	'ReverseChronologicalPager' => 'includes/Pager.php',
	'Revision' => 'includes/Revision.php',
	'RSSFeed' => 'includes/Feed.php',
	'Sanitizer' => 'includes/Sanitizer.php',
	'SiteConfiguration' => 'includes/SiteConfiguration.php',
	'SiteStats' => 'includes/SiteStats.php',
	'SiteStatsInit' => 'includes/SiteStats.php',
	'SiteStatsUpdate' => 'includes/SiteStats.php',
	'Skin' => 'includes/Skin.php',
	'SkinTemplate' => 'includes/SkinTemplate.php',
	'SpecialMycontributions' => 'includes/SpecialPage.php',
	'SpecialMypage' => 'includes/SpecialPage.php',
	'SpecialMytalk' => 'includes/SpecialPage.php',
	'SpecialPage' => 'includes/SpecialPage.php',
	'SpecialRedirectToSpecial' => 'includes/SpecialPage.php',
	'SqlBagOStuff' => 'includes/BagOStuff.php',
	'SquidUpdate' => 'includes/SquidUpdate.php',
	'SquidPurgeClient' => 'includes/SquidPurgeClient.php',
	'SquidPurgeClientPool' => 'includes/SquidPurgeClient.php',
	'Status' => 'includes/Status.php',
	'StubContLang' => 'includes/StubObject.php',
	'StubUser' => 'includes/StubObject.php',
	'StubUserLang' => 'includes/StubObject.php',
	'StubObject' => 'includes/StubObject.php',
	'StringUtils' => 'includes/StringUtils.php',
	'TablePager' => 'includes/Pager.php',
	'ThumbnailImage' => 'includes/MediaTransformOutput.php',
	'TiffHandler' => 'includes/media/Tiff.php',
	'TitleDependency' => 'includes/CacheDependency.php',
	'Title' => 'includes/Title.php',
	'TitleArray' => 'includes/TitleArray.php',
	'TitleArrayFromResult' => 'includes/TitleArray.php',
	'TitleListDependency' => 'includes/CacheDependency.php',
	'TransformParameterError' => 'includes/MediaTransformOutput.php',
	'TurckBagOStuff' => 'includes/BagOStuff.php',
	'UnlistedSpecialPage' => 'includes/SpecialPage.php',
	'UploadBase' => 'includes/upload/UploadBase.php',
	'UploadFromStash' => 'includes/upload/UploadFromStash.php',
	'UploadFromFile' => 'includes/upload/UploadFromFile.php',
	'UploadFromUrl' => 'includes/upload/UploadFromUrl.php',
	'UploadFromChunks' => 'includes/upload/UploadFromChunks.php',
	'User' => 'includes/User.php',
	'UserArray' => 'includes/UserArray.php',
	'UserArrayFromResult' => 'includes/UserArray.php',
	'UserMailer' => 'includes/UserMailer.php',
	'UserRightsProxy' => 'includes/UserRightsProxy.php',
	'WantedQueryPage' => 'includes/QueryPage.php',
	'WatchedItem' => 'includes/WatchedItem.php',
	'WatchlistEditor' => 'includes/WatchlistEditor.php',
	'WebRequest' => 'includes/WebRequest.php',
	'WebResponse' => 'includes/WebResponse.php',
	'WikiError' => 'includes/WikiError.php',
	'WikiErrorMsg' => 'includes/WikiError.php',
	'WikiExporter' => 'includes/Export.php',
	'WikiMap' => 'includes/WikiMap.php',
	'WikiReference' => 'includes/WikiMap.php',
	'WikiXmlError' => 'includes/WikiError.php',
	'XCacheBagOStuff' => 'includes/BagOStuff.php',
	'XmlDumpWriter' => 'includes/Export.php',
	'Xml' => 'includes/Xml.php',
	'XmlSelect' => 'includes/Xml.php',
	'XmlTypeCheck' => 'includes/XmlTypeCheck.php',
	'ZhClient' => 'includes/ZhClient.php',

	# includes/api
	'ApiBase' => 'includes/api/ApiBase.php',
	'ApiBlock' => 'includes/api/ApiBlock.php',
	'ApiDelete' => 'includes/api/ApiDelete.php',
	'ApiDisabled' => 'includes/api/ApiDisabled.php',
	'ApiEditPage' => 'includes/api/ApiEditPage.php',
	'ApiEmailUser' => 'includes/api/ApiEmailUser.php',
	'ApiExpandTemplates' => 'includes/api/ApiExpandTemplates.php',
	'ApiFeedWatchlist' => 'includes/api/ApiFeedWatchlist.php',
	'ApiFormatBase' => 'includes/api/ApiFormatBase.php',
	'ApiFormatDbg' => 'includes/api/ApiFormatDbg.php',
	'ApiFormatFeedWrapper' => 'includes/api/ApiFormatBase.php',
	'ApiFormatJson' => 'includes/api/ApiFormatJson.php',
	'ApiFormatPhp' => 'includes/api/ApiFormatPhp.php',
	'ApiFormatRaw' => 'includes/api/ApiFormatRaw.php',
	'ApiFormatTxt' => 'includes/api/ApiFormatTxt.php',
	'ApiFormatWddx' => 'includes/api/ApiFormatWddx.php',
	'ApiFormatXml' => 'includes/api/ApiFormatXml.php',
	'ApiFormatYaml' => 'includes/api/ApiFormatYaml.php',
	'ApiHelp' => 'includes/api/ApiHelp.php',
	'ApiImport' => 'includes/api/ApiImport.php',
	'ApiImportReporter' => 'includes/api/ApiImport.php',
	'ApiLogin' => 'includes/api/ApiLogin.php',
	'ApiLogout' => 'includes/api/ApiLogout.php',
	'ApiMain' => 'includes/api/ApiMain.php',
	'ApiMove' => 'includes/api/ApiMove.php',
	'ApiOpenSearch' => 'includes/api/ApiOpenSearch.php',
	'ApiPageSet' => 'includes/api/ApiPageSet.php',
	'ApiParamInfo' => 'includes/api/ApiParamInfo.php',
	'ApiParse' => 'includes/api/ApiParse.php',
	'ApiPatrol' => 'includes/api/ApiPatrol.php',
	'ApiProtect' => 'includes/api/ApiProtect.php',
	'ApiPurge' => 'includes/api/ApiPurge.php',
	'ApiQuery' => 'includes/api/ApiQuery.php',
	'ApiQueryAllCategories' => 'includes/api/ApiQueryAllCategories.php',
	'ApiQueryAllimages' => 'includes/api/ApiQueryAllimages.php',
	'ApiQueryAllLinks' => 'includes/api/ApiQueryAllLinks.php',
	'ApiQueryAllUsers' => 'includes/api/ApiQueryAllUsers.php',
	'ApiQueryAllmessages' => 'includes/api/ApiQueryAllmessages.php',
	'ApiQueryAllpages' => 'includes/api/ApiQueryAllpages.php',
	'ApiQueryBacklinks' => 'includes/api/ApiQueryBacklinks.php',
	'ApiQueryBase' => 'includes/api/ApiQueryBase.php',
	'ApiQueryBlocks' => 'includes/api/ApiQueryBlocks.php',
	'ApiQueryCategories' => 'includes/api/ApiQueryCategories.php',
	'ApiQueryCategoryInfo' => 'includes/api/ApiQueryCategoryInfo.php',
	'ApiQueryCategoryMembers' => 'includes/api/ApiQueryCategoryMembers.php',
	'ApiQueryContributions' => 'includes/api/ApiQueryUserContributions.php',
	'ApiQueryDeletedrevs' => 'includes/api/ApiQueryDeletedrevs.php',
	'ApiQueryDisabled' => 'includes/api/ApiQueryDisabled.php',
	'ApiQueryDuplicateFiles' => 'includes/api/ApiQueryDuplicateFiles.php',
	'ApiQueryExtLinksUsage' => 'includes/api/ApiQueryExtLinksUsage.php',
	'ApiQueryExternalLinks' => 'includes/api/ApiQueryExternalLinks.php',
	'ApiQueryGeneratorBase' => 'includes/api/ApiQueryBase.php',
	'ApiQueryImageInfo' => 'includes/api/ApiQueryImageInfo.php',
	'ApiQueryImages' => 'includes/api/ApiQueryImages.php',
	'ApiQueryInfo' => 'includes/api/ApiQueryInfo.php',
	'ApiQueryLangLinks' => 'includes/api/ApiQueryLangLinks.php',
	'ApiQueryLinks' => 'includes/api/ApiQueryLinks.php',
	'ApiQueryLogEvents' => 'includes/api/ApiQueryLogEvents.php',
	'ApiQueryProtectedTitles' => 'includes/api/ApiQueryProtectedTitles.php',
	'ApiQueryRandom' => 'includes/api/ApiQueryRandom.php',
	'ApiQueryRecentChanges'=> 'includes/api/ApiQueryRecentChanges.php',
	'ApiQueryRevisions' => 'includes/api/ApiQueryRevisions.php',
	'ApiQuerySearch' => 'includes/api/ApiQuerySearch.php',
	'ApiQuerySiteinfo' => 'includes/api/ApiQuerySiteinfo.php',
	'ApiQueryTags' => 'includes/api/ApiQueryTags.php',
	'ApiQueryUserInfo' => 'includes/api/ApiQueryUserInfo.php',
	'ApiQueryUsers' => 'includes/api/ApiQueryUsers.php',
	'ApiQueryWatchlist' => 'includes/api/ApiQueryWatchlist.php',
	'ApiQueryWatchlistRaw' => 'includes/api/ApiQueryWatchlistRaw.php',
	'ApiResult' => 'includes/api/ApiResult.php',
	'ApiRollback' => 'includes/api/ApiRollback.php',
	'ApiUnblock' => 'includes/api/ApiUnblock.php',
	'ApiUndelete' => 'includes/api/ApiUndelete.php',
	'ApiUserrights' => 'includes/api/ApiUserrights.php',
	'ApiUpload' => 'includes/api/ApiUpload.php',
	'ApiWatch' => 'includes/api/ApiWatch.php',

	'Spyc' => 'includes/api/ApiFormatYaml_spyc.php',
	'UsageException' => 'includes/api/ApiMain.php',

	# includes/json
	'Services_JSON' => 'includes/json/Services_JSON.php',
	'Services_JSON_Error' => 'includes/json/Services_JSON.php',
	'FormatJson' => 'includes/json/FormatJson.php',

	# includes/db
	'Blob' => 'includes/db/Database.php',
	'ChronologyProtector' => 'includes/db/LBFactory.php',
	'Database' => 'includes/db/DatabaseMysql.php',
	'DatabaseBase' => 'includes/db/Database.php',
	'DatabaseMssql' => 'includes/db/DatabaseMssql.php',
	'DatabaseMysql' => 'includes/db/DatabaseMysql.php',
	'DatabaseOracle' => 'includes/db/DatabaseOracle.php',
	'DatabasePostgres' => 'includes/db/DatabasePostgres.php',
	'DatabaseSqlite' => 'includes/db/DatabaseSqlite.php',
	'DatabaseSqliteStandalone' => 'includes/db/DatabaseSqlite.php',
	'DBConnectionError' => 'includes/db/Database.php',
	'DBError' => 'includes/db/Database.php',
	'DBObject' => 'includes/db/Database.php',
	'DBQueryError' => 'includes/db/Database.php',
	'DBUnexpectedError' => 'includes/db/Database.php',
	'IBM_DB2Blob' => 'includes/db/DatabaseIbm_db2.php',
	'LBFactory' => 'includes/db/LBFactory.php',
	'LBFactory_Multi' => 'includes/db/LBFactory_Multi.php',
	'LBFactory_Simple' => 'includes/db/LBFactory.php',
	'LikeMatch' => 'includes/db/Database.php',
	'LoadBalancer' => 'includes/db/LoadBalancer.php',
	'LoadMonitor' => 'includes/db/LoadMonitor.php',
	'LoadMonitor_MySQL' => 'includes/db/LoadMonitor.php',
	'MSSQLField' => 'includes/db/DatabaseMssql.php',
	'MySQLField' => 'includes/db/Database.php',
	'MySQLMasterPos' => 'includes/db/DatabaseMysql.php',
	'ORABlob' => 'includes/db/DatabaseOracle.php',
	'ORAField' => 'includes/db/DatabaseOracle.php',
	'ORAResult' => 'includes/db/DatabaseOracle.php',
	'PostgresField' => 'includes/db/DatabasePostgres.php',
	'ResultWrapper' => 'includes/db/Database.php',
	'SQLiteField' => 'includes/db/DatabaseSqlite.php',
	'DatabaseIbm_db2' => 'includes/db/DatabaseIbm_db2.php',
	'IBM_DB2Field' => 'includes/db/DatabaseIbm_db2.php',

	# includes/diff
	'ArrayDiffFormatter' => 'includes/diff/DifferenceEngine.php',
	'_DiffEngine' => 'includes/diff/DifferenceEngine.php',
	'DifferenceEngine' => 'includes/diff/DifferenceInterface.php',
	'DiffFormatter' => 'includes/diff/DifferenceEngine.php',
	'Diff' => 'includes/diff/DifferenceEngine.php',
	'_DiffOp_Add' => 'includes/diff/DifferenceEngine.php',
	'_DiffOp_Change' => 'includes/diff/DifferenceEngine.php',
	'_DiffOp_Copy' => 'includes/diff/DifferenceEngine.php',
	'_DiffOp_Delete' => 'includes/diff/DifferenceEngine.php',
	'_DiffOp' => 'includes/diff/DifferenceEngine.php',
	'_HWLDF_WordAccumulator' => 'includes/diff/DifferenceEngine.php',
	'MappedDiff' => 'includes/diff/DifferenceEngine.php',
	'RangeDifference' => 'includes/diff/Diff.php',
	'TableDiffFormatter' => 'includes/diff/DifferenceEngine.php',
	'UnifiedDiffFormatter' => 'includes/diff/DifferenceEngine.php',
	'WikiDiff3' => 'includes/diff/Diff.php',
	'WordLevelDiff' => 'includes/diff/DifferenceEngine.php',

	# includes/filerepo
	'ArchivedFile' => 'includes/filerepo/ArchivedFile.php',
	'File' => 'includes/filerepo/File.php',
	'FileRepo' => 'includes/filerepo/FileRepo.php',
	'FileRepoStatus' => 'includes/filerepo/FileRepoStatus.php',
	'ForeignAPIFile' => 'includes/filerepo/ForeignAPIFile.php',
	'ForeignAPIRepo' => 'includes/filerepo/ForeignAPIRepo.php',
	'ForeignDBFile' => 'includes/filerepo/ForeignDBFile.php',
	'ForeignDBRepo' => 'includes/filerepo/ForeignDBRepo.php',
	'ForeignDBViaLBRepo' => 'includes/filerepo/ForeignDBViaLBRepo.php',
	'FSRepo' => 'includes/filerepo/FSRepo.php',
	'Image' => 'includes/filerepo/Image.php',
	'LocalFile' => 'includes/filerepo/LocalFile.php',
	'LocalFileDeleteBatch' => 'includes/filerepo/LocalFile.php',
	'LocalFileMoveBatch' => 'includes/filerepo/LocalFile.php',
	'LocalFileRestoreBatch' => 'includes/filerepo/LocalFile.php',
	'LocalRepo' => 'includes/filerepo/LocalRepo.php',
	'OldLocalFile' => 'includes/filerepo/OldLocalFile.php',
	'RepoGroup' => 'includes/filerepo/RepoGroup.php',
	'UnregisteredLocalFile' => 'includes/filerepo/UnregisteredLocalFile.php',

	# includes/media
	'BitmapHandler' => 'includes/media/Bitmap.php',
	'BitmapHandler_ClientOnly' => 'includes/media/Bitmap_ClientOnly.php',
	'BmpHandler' => 'includes/media/BMP.php',
	'DjVuHandler' => 'includes/media/DjVu.php',
	'ImageHandler' => 'includes/media/Generic.php',
	'MediaHandler' => 'includes/media/Generic.php',
	'SvgHandler' => 'includes/media/SVG.php',

	# includes/normal
	'UtfNormal' => 'includes/normal/UtfNormal.php',

	# includes/parser
	'CoreLinkFunctions' => 'includes/parser/CoreLinkFunctions.php',
	'CoreParserFunctions' => 'includes/parser/CoreParserFunctions.php',
	'CoreTagHooks' => 'includes/parser/CoreTagHooks.php',
	'DateFormatter' => 'includes/parser/DateFormatter.php',
	'LinkHolderArray' => 'includes/parser/LinkHolderArray.php',
	'LinkMarkerReplacer' => 'includes/parser/Parser_LinkHooks.php',
	'OnlyIncludeReplacer' => 'includes/parser/Parser.php',
	'PPCustomFrame_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'PPCustomFrame_DOM' => 'includes/parser/Preprocessor_DOM.php',
	'PPDAccum_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'PPDPart' => 'includes/parser/Preprocessor_DOM.php',
	'PPDPart_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'PPDStack' => 'includes/parser/Preprocessor_DOM.php',
	'PPDStackElement' => 'includes/parser/Preprocessor_DOM.php',
	'PPDStackElement_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'PPDStack_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'PPFrame' => 'includes/parser/Preprocessor.php',
	'PPFrame_DOM' => 'includes/parser/Preprocessor_DOM.php',
	'PPFrame_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'PPNode' => 'includes/parser/Preprocessor.php',
	'PPNode_DOM' => 'includes/parser/Preprocessor_DOM.php',
	'PPNode_Hash_Array' => 'includes/parser/Preprocessor_Hash.php',
	'PPNode_Hash_Attr' => 'includes/parser/Preprocessor_Hash.php',
	'PPNode_Hash_Text' => 'includes/parser/Preprocessor_Hash.php',
	'PPNode_Hash_Tree' => 'includes/parser/Preprocessor_Hash.php',
	'PPTemplateFrame_DOM' => 'includes/parser/Preprocessor_DOM.php',
	'PPTemplateFrame_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'Parser' => 'includes/parser/Parser.php',
	'ParserCache' => 'includes/parser/ParserCache.php',
	'ParserOptions' => 'includes/parser/ParserOptions.php',
	'ParserOutput' => 'includes/parser/ParserOutput.php',
	'Parser_DiffTest' => 'includes/parser/Parser_DiffTest.php',
	'Parser_LinkHooks' => 'includes/parser/Parser_LinkHooks.php',
	'Preprocessor' => 'includes/parser/Preprocessor.php',
	'Preprocessor_DOM' => 'includes/parser/Preprocessor_DOM.php',
	'Preprocessor_Hash' => 'includes/parser/Preprocessor_Hash.php',
	'StripState' => 'includes/parser/Parser.php',
	'MWTidy' => 'includes/parser/Tidy.php',

	# includes/search
	'MySQLSearchResultSet' => 'includes/search/SearchMySQL.php',
	'PostgresSearchResult' => 'includes/search/SearchPostgres.php',
	'PostgresSearchResultSet' => 'includes/search/SearchPostgres.php',
	'SearchEngineDummy' => 'includes/search/SearchEngine.php',
	'SearchEngine' => 'includes/search/SearchEngine.php',
	'SearchHighlighter' => 'includes/search/SearchEngine.php',
	'SearchIBM_DB2' => 'includes/search/SearchIBM_DB2.php',
	'SearchMySQL4' => 'includes/search/SearchMySQL4.php',
	'SearchMySQL' => 'includes/search/SearchMySQL.php',
	'SearchOracle' => 'includes/search/SearchOracle.php',
	'SearchPostgres' => 'includes/search/SearchPostgres.php',
	'SearchResult' => 'includes/search/SearchEngine.php',
	'SearchResultSet' => 'includes/search/SearchEngine.php',
	'SearchResultTooMany' => 'includes/search/SearchEngine.php',
	'SearchSqlite' => 'includes/search/SearchSqlite.php',
	'SearchUpdate' => 'includes/search/SearchUpdate.php',
	'SearchUpdateMyISAM' => 'includes/search/SearchUpdate.php',
	'SqliteSearchResultSet' => 'includes/search/SearchSqlite.php',
	'SqlSearchResultSet' => 'includes/search/SearchEngine.php',

	# includes/specials
	'SpecialAllmessages' => 'includes/specials/SpecialAllmessages.php',
	'ActiveUsersPager' => 'includes/specials/SpecialActiveusers.php',
	'AllmessagesTablePager' => 'includes/specials/SpecialAllmessages.php',
	'AncientPagesPage' => 'includes/specials/SpecialAncientpages.php',
	'BrokenRedirectsPage' => 'includes/specials/SpecialBrokenRedirects.php',
	'ContribsPager' => 'includes/specials/SpecialContributions.php',
	'DBLockForm' => 'includes/specials/SpecialLockdb.php',
	'DBUnlockForm' => 'includes/specials/SpecialUnlockdb.php',
	'DeadendPagesPage' => 'includes/specials/SpecialDeadendpages.php',
	'DeletedContributionsPage' => 'includes/specials/SpecialDeletedContributions.php',
	'DeletedContribsPager' => 'includes/specials/SpecialDeletedContributions.php',
	'DisambiguationsPage' => 'includes/specials/SpecialDisambiguations.php',
	'DoubleRedirectsPage' => 'includes/specials/SpecialDoubleRedirects.php',
	'EmailConfirmation' => 'includes/specials/SpecialConfirmemail.php',
	'EmailInvalidation' => 'includes/specials/SpecialConfirmemail.php',
	'EmailUserForm' => 'includes/specials/SpecialEmailuser.php',
	'FakeResultWrapper' => 'includes/specials/SpecialAllmessages.php',
	'FewestrevisionsPage' => 'includes/specials/SpecialFewestrevisions.php',
	'FileDuplicateSearchPage' => 'includes/specials/SpecialFileDuplicateSearch.php',
	'IPBlockForm' => 'includes/specials/SpecialBlockip.php',
	'IPBlocklistPager' => 'includes/specials/SpecialIpblocklist.php',
	'IPUnblockForm' => 'includes/specials/SpecialIpblocklist.php',
	'ImportReporter' => 'includes/specials/SpecialImport.php',
	'ImportStreamSource' => 'includes/Import.php',
	'ImportStringSource' => 'includes/Import.php',
	'LinkSearchPage' => 'includes/specials/SpecialLinkSearch.php',
	'ListredirectsPage' => 'includes/specials/SpecialListredirects.php',
	'LoginForm' => 'includes/specials/SpecialUserlogin.php',
	'LonelyPagesPage' => 'includes/specials/SpecialLonelypages.php',
	'LongPagesPage' => 'includes/specials/SpecialLongpages.php',
	'MIMEsearchPage' => 'includes/specials/SpecialMIMEsearch.php',
	'MostcategoriesPage' => 'includes/specials/SpecialMostcategories.php',
	'MostimagesPage' => 'includes/specials/SpecialMostimages.php',
	'MostlinkedCategoriesPage' => 'includes/specials/SpecialMostlinkedcategories.php',
	'MostlinkedPage' => 'includes/specials/SpecialMostlinked.php',
	'MostrevisionsPage' => 'includes/specials/SpecialMostrevisions.php',
	'MovePageForm' => 'includes/specials/SpecialMovepage.php',
	'SpecialNewpages' => 'includes/specials/SpecialNewpages.php',
	'SpecialContributions' => 'includes/specials/SpecialContributions.php',
	'NewPagesPager' => 'includes/specials/SpecialNewpages.php',
	'PageArchive' => 'includes/specials/SpecialUndelete.php',
	'SpecialResetpass' => 'includes/specials/SpecialResetpass.php',
	'PopularPagesPage' => 'includes/specials/SpecialPopularpages.php',
	'PreferencesForm' => 'includes/Preferences.php',
	'RandomPage' => 'includes/specials/SpecialRandompage.php',
	'SpecialRevisionDelete' => 'includes/specials/SpecialRevisiondelete.php',
	'RevisionDeleter' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_RevisionList' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_RevisionItem' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_ArchiveList' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_ArchiveItem' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_FileList' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_FileItem' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_ArchivedFileList' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_ArchivedFileItem' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_LogList' => 'includes/specials/SpecialRevisiondelete.php',
	'RevDel_LogItem' => 'includes/specials/SpecialRevisiondelete.php',
	'ShortPagesPage' => 'includes/specials/SpecialShortpages.php',
	'SpecialActiveUsers' => 'includes/specials/SpecialActiveusers.php',
	'SpecialAllpages' => 'includes/specials/SpecialAllpages.php',
	'SpecialBlankpage' => 'includes/specials/SpecialBlankpage.php',
	'SpecialBookSources' => 'includes/specials/SpecialBooksources.php',
	'SpecialExport' => 'includes/specials/SpecialExport.php',
	'SpecialImport' => 'includes/specials/SpecialImport.php',
	'SpecialListGroupRights' => 'includes/specials/SpecialListgrouprights.php',
	'SpecialMostlinkedtemplates' => 'includes/specials/SpecialMostlinkedtemplates.php',
	'SpecialPreferences' => 'includes/specials/SpecialPreferences.php',
	'SpecialPrefixindex' => 'includes/specials/SpecialPrefixindex.php',
	'SpecialRandomredirect' => 'includes/specials/SpecialRandomredirect.php',
	'SpecialRecentChanges' => 'includes/specials/SpecialRecentchanges.php',
	'SpecialRecentchangeslinked' => 'includes/specials/SpecialRecentchangeslinked.php',
	'SpecialSearch' => 'includes/specials/SpecialSearch.php',
	'SpecialStatistics' => 'includes/specials/SpecialStatistics.php',
	'SpecialTags' => 'includes/specials/SpecialTags.php',
	'SpecialUpload' => 'includes/specials/SpecialUpload.php',
	'SpecialVersion' => 'includes/specials/SpecialVersion.php',
	'SpecialWhatlinkshere' => 'includes/specials/SpecialWhatlinkshere.php',
	'SpecialWhatLinksHere' => 'includes/specials/SpecialWhatlinkshere.php',
	'UncategorizedCategoriesPage' => 'includes/specials/SpecialUncategorizedcategories.php',
	'UncategorizedPagesPage' => 'includes/specials/SpecialUncategorizedpages.php',
	'UncategorizedTemplatesPage' => 'includes/specials/SpecialUncategorizedtemplates.php',
	'UndeleteForm' => 'includes/specials/SpecialUndelete.php',
	'UnusedCategoriesPage' => 'includes/specials/SpecialUnusedcategories.php',
	'UnusedimagesPage' => 'includes/specials/SpecialUnusedimages.php',
	'UnusedtemplatesPage' => 'includes/specials/SpecialUnusedtemplates.php',
	'UnwatchedpagesPage' => 'includes/specials/SpecialUnwatchedpages.php',
	'UploadForm' => 'includes/specials/SpecialUpload.php',
	'UploadSourceField' => 'includes/specials/SpecialUpload.php',
	'UserrightsPage' => 'includes/specials/SpecialUserrights.php',
	'UsersPager' => 'includes/specials/SpecialListusers.php',
	'WantedCategoriesPage' => 'includes/specials/SpecialWantedcategories.php',
	'WantedFilesPage' => 'includes/specials/SpecialWantedfiles.php',
	'WantedPagesPage' => 'includes/specials/SpecialWantedpages.php',
	'WantedTemplatesPage' => 'includes/specials/SpecialWantedtemplates.php',
	'WhatLinksHerePage' => 'includes/specials/SpecialWhatlinkshere.php',
	'WikiImporter' => 'includes/Import.php',
	'WikiRevision' => 'includes/Import.php',
	'WithoutInterwikiPage' => 'includes/specials/SpecialWithoutinterwiki.php',

	# includes/templates
	'UsercreateTemplate' => 'includes/templates/Userlogin.php',
	'UserloginTemplate' => 'includes/templates/Userlogin.php',

	# languages
	'Language' => 'languages/Language.php',
	'FakeConverter' => 'languages/Language.php',
	'LanguageConverter' => 'languages/LanguageConverter.php',

	# maintenance/language
	'statsOutput' => 'maintenance/language/StatOutputs.php',
	'wikiStatsOutput' => 'maintenance/language/StatOutputs.php',
	'textStatsOutput' => 'maintenance/language/StatOutputs.php',
	'csvStatsOutput' => 'maintenance/language/StatOutputs.php',
	'SevenZipStream' => 'maintenance/7zip.inc',

);

class AutoLoader {
	/**
	 * autoload - take a class name and attempt to load it
	 *
	 * @param $className String: name of class we're looking for.
	 * @return bool Returning false is important on failure as
	 * it allows Zend to try and look in other registered autoloaders
	 * as well.
	 */
	static function autoload( $className ) {
		global $wgAutoloadClasses, $wgAutoloadLocalClasses;

		if ( isset( $wgAutoloadLocalClasses[$className] ) ) {
			$filename = $wgAutoloadLocalClasses[$className];
		} elseif ( isset( $wgAutoloadClasses[$className] ) ) {
			$filename = $wgAutoloadClasses[$className];
		} else {
			# Try a different capitalisation
			# The case can sometimes be wrong when unserializing PHP 4 objects
			$filename = false;
			$lowerClass = strtolower( $className );
			foreach ( $wgAutoloadLocalClasses as $class2 => $file2 ) {
				if ( strtolower( $class2 ) == $lowerClass ) {
					$filename = $file2;
				}
			}
			if ( !$filename ) {
				if( function_exists( 'wfDebug' ) )
					wfDebug( "Class {$className} not found; skipped loading\n" );
				# Give up
				return false;
			}
		}

		# Make an absolute path, this improves performance by avoiding some stat calls
		if ( substr( $filename, 0, 1 ) != '/' && substr( $filename, 1, 1 ) != ':' ) {
			global $IP;
			$filename = "$IP/$filename";
		}
		require( $filename );
		return true;
	}

	static function loadAllExtensions() {
		global $wgAutoloadClasses;

		foreach( $wgAutoloadClasses as $class => $file ) {
			if( !( class_exists( $class, false ) || interface_exists( $class, false ) ) ) {
				require( $file );
			}
		}
	}
}

function wfLoadAllExtensions() {
	AutoLoader::loadAllExtensions();
}

if ( function_exists( 'spl_autoload_register' ) ) {
	spl_autoload_register( array( 'AutoLoader', 'autoload' ) );
} else {
	function __autoload( $class ) {
		AutoLoader::autoload( $class );
	}

	ini_set( 'unserialize_callback_func', '__autoload' );
}
