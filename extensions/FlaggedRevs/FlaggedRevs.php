<?php
/*
 (c) Aaron Schulz, Joerg Baach, 2007-2008 GPL
 
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License along
 with this program; if not, write to the Free Software Foundation, Inc.,
 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 http://www.gnu.org/copyleft/gpl.html
*/

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "FlaggedRevs extension\n";
	exit( 1 );
}

# This messes with dump HTML...
if ( defined( 'MW_HTML_FOR_DUMP' ) ) {
	return;
}

# SELECT parameters...
if ( !defined( 'FR_FOR_UPDATE' ) )
	define( 'FR_FOR_UPDATE', 1 );
if ( !defined( 'FR_MASTER' ) )
	define( 'FR_MASTER', 2 );
if ( !defined( 'FR_TEXT' ) )
	define( 'FR_TEXT', 3 );

# Level constants...
if ( !defined( 'FR_SIGHTED' ) )
	define( 'FR_SIGHTED', 0 ); // "basic"/"checked"
if ( !defined( 'FR_QUALITY' ) )
	define( 'FR_QUALITY', 1 );
if ( !defined( 'FR_PRISTINE' ) )
	define( 'FR_PRISTINE', 2 );

# Include settings
if ( !defined( 'FR_INCLUDES_CURRENT' ) )
	define( 'FR_INCLUDES_CURRENT', 0 );
if ( !defined( 'FR_INCLUDES_FREEZE' ) )
	define( 'FR_INCLUDES_FREEZE', 1 );
if ( !defined( 'FR_INCLUDES_STABLE' ) )
	define( 'FR_INCLUDES_STABLE', 2 );
	
$wgExtensionCredits['specialpage'][] = array(
	'path'           => __FILE__,
	'name'           => 'Flagged Revisions',
	'author'         => array( 'Aaron Schulz', 'Joerg Baach' ),
	'url'            => 'http://www.mediawiki.org/wiki/Extension:FlaggedRevs',
	'descriptionmsg' => 'flaggedrevs-desc',
);

# ######## Configuration variables ########
# IMPORTANT: DO NOT EDIT THIS FILE
# When configuring globals, set them at LocalSettings.php instead

# This will only distinguish "sighted", "quality", and unreviewed
# A small icon will show in the upper right hand corner
$wgSimpleFlaggedRevsUI = true; // @TODO: remove when ready
# For visitors, only show tags/icons for unreviewed/outdated pages
$wgFlaggedRevsLowProfile = true;

# Allowed namespaces of reviewable pages
$wgFlaggedRevsNamespaces = array( NS_MAIN, NS_FILE, NS_TEMPLATE );
# Pages exempt from reviewing. No flagging UI will be shown for them.
$wgFlaggedRevsWhitelist = array();
# $wgFlaggedRevsWhitelist = array( 'Main_Page' );

# Is a "stable version" used as the default display
# version for all pages in reviewable namespaces?
$wgFlaggedRevsOverride = true;
# Below are groups that see the current revision by default.
# This makes editing easier since the users always start off
# viewing the latest version of pages.
$wgFlaggedRevsExceptions = array( 'user' );

# Can users make comments that will show up below flagged revisions?
# NOTE: this is NOT the same as the simple log comment
$wgFlaggedRevsComments = false; // @TODO: remove when ready?
# Auto-review edits that are:
# (a) directly to the stable version by users with 'autoreview'/'bot'
# (b) self-reversions back to the stable version by any user
$wgFlaggedRevsAutoReview = true;
# If $wgFlaggedRevsAutoReview, auto-review new pages as minimally "sighted"?
$wgFlaggedRevsAutoReviewNew = true;

# Define the tags we can use to rate an article, number of levels,
# and set the minimum level to have it become a "quality" or "pristine" version.
# NOTE: When setting up new dimensions or levels, you will need to add some
# 		MediaWiki messages for the UI to show properly; any sysop can do this.
$wgFlaggedRevTags = array(
	'accuracy' => array( 'levels' => 3, 'quality' => 2, 'pristine' => 4 ),
	'depth'    => array( 'levels' => 3, 'quality' => 1, 'pristine' => 4 ),
	'style'    => array( 'levels' => 3, 'quality' => 1, 'pristine' => 4 ),
);
# For each tag, define the highest tag level that is unlocked by
# having certain rights. For example, having 'review' rights may
# allow for "depth" to be rated up to second level.
# NOTE: Users cannot lower revision tags from a level they can't set.
# NOTE: Users with 'validate' (Reviewers) can set all tags to all levels.
$wgFlagRestrictions = array(
	'accuracy' => array( 'review' => 1, 'autoreview' => 1 ),
	'depth'	   => array( 'review' => 2, 'autoreview' => 2 ),
	'style'	   => array( 'review' => 3, 'autoreview' => 3 ),
);
# For each tag, what is the highest level that it can be auto-reviewed to?
# $wgFlaggedRevsAutoReview must be enabled for this to apply.
$wgFlaggedRevsTagsAuto = array(
	'accuracy' => 1, 'depth' => 1, 'style' => 1
);

# Restriction levels for 'autoreview'/'review' rights.
# When a level is selected for a page, an edit made by a user
# will not be auto-reviewed if the user lacks the specified permission.
# Levels are set at the Stabilization special page.
$wgFlaggedRevsRestrictionLevels = array( '', 'sysop' );
# Set this to use FlaggedRevs *only* as a protection-like mechanism.
# This will disable Stabilization and show the above restriction levels
# on the protection form of pages. Each level has the stable version shown by default.
# A "none" level will appear in the form as well, to disable the review process.
# Pages will only be reviewable if manually restricted to a level above "none".
$wgFlaggedRevsProtection = false;

# Define our basic reviewer class of established editors (Editors)
$wgGroupPermissions['editor']['review']          = true;
$wgGroupPermissions['editor']['autoreview']      = true;
$wgGroupPermissions['editor']['autoconfirmed']   = true;
$wgGroupPermissions['editor']['unreviewedpages'] = true;
$wgGroupPermissions['editor']['patrolmarks']     = true;

# Define when users get automatically promoted to Editors. Set as false to disable.
# 'spacing' and 'benchmarks' require edits to be spread out. Users must have X (benchmark)
# edits Y (spacing) days apart.
$wgFlaggedRevsAutopromote = array(
	'days'	              => 60, # days since registration
	'edits'	              => 250, # total edit count
	'excludeDeleted'      => true, # exclude deleted edits from 'edits' count above?
	// Require 'benchmark' edits 'spacing' days apart from each other
	'spacing'	          => 3, # spacing of edit intervals
	'benchmarks'          => 15, # how many edit intervals are needed?
	'recentContentEdits'  => 0, # $wgContentNamespaces edits in recent changes
	// Either totalContentEdits reqs OR totalCheckedEdits requirements needed
	'totalContentEdits'   => 300, # $wgContentNamespaces edits OR...
	'totalCheckedEdits'   => 200, # ...Edits before the stable version of pages
	'uniqueContentPages'  => 12, # $wgContentNamespaces unique pages edited
	'editComments'        => 50, # how many edit comments used?
	'userpageBytes'       => 0, # userpage is needed? with what min size?
	'uniqueIPAddress'     => false, # If $wgPutIPinRC is true, users sharing IPs won't be promoted
	'neverBlocked'        => true, # Can users that were blocked be promoted?
	'maxRevertedEdits'    => 5, # Max times the user could have edits undone/"rolled back"?
);

# Define when users get to have their own edits auto-reviewed. Set to false to disable.
# This can be used for newer, semi-trusted users to improve workflow.
# It is done by granting some users the implicit 'autoreview' group.
$wgFlaggedRevsAutoconfirm = false;
/* (example usage)
$wgFlaggedRevsAutoconfirm = array(
	'days'	              => 30, # days since registration
	'edits'	              => 50, # total edit count
	'spacing'	          => 3, # spacing of edit intervals
	'benchmarks'          => 7, # how many edit intervals are needed?
	// Either totalContentEdits reqs OR totalCheckedEdits requirements needed
	'totalContentEdits'   => 150, # $wgContentNamespaces edits OR...
	'totalCheckedEdits'   => 50, # ...Edits before the stable version of pages
	'uniqueContentPages'  => 8, # $wgContentNamespaces unique pages edited
	'editComments'        => 20, # how many edit comments used?
	'email'	              => false, # user must be emailconfirmed?
	'neverBlocked'        => true, # Can users that were blocked be promoted?
);
*/

# Defines extra rights for advanced reviewer class (Reviewers)
$wgGroupPermissions['reviewer']['validate']        = true;
# Let this stand alone just in case...
$wgGroupPermissions['reviewer']['review']          = true;
$wgGroupPermissions['reviewer']['autoreview']      = true;
$wgGroupPermissions['reviewer']['autoconfirmed']   = true;
$wgGroupPermissions['reviewer']['unreviewedpages'] = true;
$wgGroupPermissions['reviewer']['patrolmarks']     = true;

# Sysops have their edits autoreviewed
$wgGroupPermissions['sysop']['autoreview'] = true;
# Stable version selection and default page revision selection can be set per page.
$wgGroupPermissions['sysop']['stablesettings'] = true;
# Sysops can always move stable pages
$wgGroupPermissions['sysop']['movestable'] = true;

# Special:Userrights settings
# # Basic rights for Sysops
$wgAddGroups['sysop'][] = 'editor';
$wgRemoveGroups['sysop'][] = 'editor';
# # Extra ones for Bureaucrats
$wgAddGroups['bureaucrat'][] = 'reviewer';
$wgRemoveGroups['bureaucrat'][] = 'reviewer';

# URL location for flaggedrevs.css and flaggedrevs.js
# Use a literal $wgScriptPath as a placeholder for the runtime value of $wgScriptPath
$wgFlaggedRevsStylePath = '$wgScriptPath/extensions/FlaggedRevs/client';

# Show reviews in recentchanges? Disabled by default, often spammy...
$wgFlaggedRevsLogInRC = false;
# Show automatic promotions to Editor in RC? Disabled by default, often spammy...
$wgFlaggedRevsAutopromoteInRC = false;

# How far the logs for overseeing quality revisions and depreciations go
$wgFlaggedRevsOversightAge = 30 * 24 * 3600;

# How long before Special:ValidationStatistics is updated.
# Set to false to disable (perhaps using a cron job instead).
$wgFlaggedRevsStatsAge = 2 * 3600; // 2 hours

# How to handle templates and files used in stable versions:
# FR_INCLUDES_CURRENT
#	Always use the current version of templates/files
# FR_INCLUDES_FREEZE
#	Use the version of templates/files that the page used when reviewed
# FR_INCLUDES_STABLE
# 	Use the stable version of templates/files that themselves have a stable version
#	and the template/file version used at the time of review for those that don't have one
# NOTE: We may have templates that do not have stable version. Given situational
# inclusion of templates (e.g. parser functions selecting template X or Y based on date),
# there may also be no "review time version" revision ID for a template used on a page.
# In such cases, we select the current (unreviewed) revision. Likewise for files.
$wgFlaggedRevsHandleIncludes = FR_INCLUDES_STABLE;

# End of configuration variables.
# ########

# Temp var
$wgFlaggedRevsRCCrap = true;
# Patrollable namespaces (overridden by reviewable namespaces) (don't use)
$wgFlaggedRevsPatrolNamespaces = array(); // @TODO: remove when ready

# Bots are granted autoreview via hooks, mark in rights 
# array so that it shows up in sp:ListGroupRights...
$wgGroupPermissions['bot']['autoreview'] = true;

# Lets some users access the review UI and set some flags
$wgAvailableRights[] = 'review';
$wgAvailableRights[] = 'validate'; # Let some users set higher settings
$wgAvailableRights[] = 'autoreview';
$wgAvailableRights[] = 'unreviewedpages';
$wgAvailableRights[] = 'movestable';
$wgAvailableRights[] = 'stablesettings';

# Bump this number every time you change flaggedrevs.css/flaggedrevs.js
$wgFlaggedRevStyleVersion = 77;

$wgExtensionFunctions[] = 'efLoadFlaggedRevs';

$dir = dirname( __FILE__ ) . '/';
$langDir = $dir . 'language/';

$wgSvgGraphDir = $dir . 'svggraph';
$wgPHPlotDir = $dir . 'phplot-5.0.5';

$wgAutoloadClasses['FlaggedRevs'] = $dir . 'FlaggedRevs.class.php';
$wgAutoloadClasses['FRUserCounters'] = $dir . 'FRUserCounters.php';
$wgAutoloadClasses['FRInclusionManager'] = $dir . 'FRInclusionManager.php';
$wgAutoloadClasses['FlaggedRevsHooks'] = $dir . 'FlaggedRevs.hooks.php';
$wgAutoloadClasses['FlaggedRevsLogs'] = $dir . 'FlaggedRevsLogs.php';
$wgAutoloadClasses['FRExtraCacheUpdate'] = $dir . 'FRExtraCacheUpdate.php';
$wgAutoloadClasses['FRExtraCacheUpdateJob'] = $dir . 'FRExtraCacheUpdate.php';
$wgAutoloadClasses['FRSquidUpdate'] = $dir . 'FRExtraCacheUpdate.php';
$wgAutoloadClasses['FRDependencyUpdate'] = $dir . 'FRDependencyUpdate.php';

# Special case cache invalidations
$wgJobClasses['flaggedrevs_CacheUpdate'] = 'FRExtraCacheUpdateJob';

$wgExtensionMessagesFiles['FlaggedRevs'] = $langDir . 'FlaggedRevs.i18n.php';
$wgExtensionAliasesFiles['FlaggedRevs'] = $langDir . 'FlaggedRevs.alias.php';

# Load general UI
$wgAutoloadClasses['FlaggedRevsXML'] = $dir . 'FlaggedRevsXML.php';
# Load web request context article stuff
$wgAutoloadClasses['FlaggedArticleView'] = $dir . 'FlaggedArticleView.php';
# Load FlaggedArticle object class
$wgAutoloadClasses['FlaggedArticle'] = $dir . 'FlaggedArticle.php';
# Load FlaggedRevision object class
$wgAutoloadClasses['FlaggedRevision'] = $dir . 'FlaggedRevision.php';

# Load review form
$wgAutoloadClasses['RevisionReviewForm'] = $dir . 'forms/RevisionReviewForm.php';
# Load protection/stability form
$wgAutoloadClasses['PageStabilityForm'] = $dir . 'forms/PageStabilityForm.php';
$wgAutoloadClasses['PageStabilityGeneralForm'] = $dir . 'forms/PageStabilityForm.php';
$wgAutoloadClasses['PageStabilityProtectForm'] = $dir . 'forms/PageStabilityForm.php';

# Load revision review UI
$wgAutoloadClasses['RevisionReview'] = $dir . 'specialpages/RevisionReview_body.php';
# Load reviewed versions UI
$wgAutoloadClasses['ReviewedVersions'] = $dir . 'specialpages/ReviewedVersions_body.php';
$wgExtensionMessagesFiles['ReviewedVersions'] = $langDir . 'ReviewedVersions.i18n.php';
# Stable version config
$wgAutoloadClasses['Stabilization'] = $dir . 'specialpages/Stabilization_body.php';
$wgExtensionMessagesFiles['Stabilization'] = $langDir . 'Stabilization.i18n.php';
# Load unreviewed pages list
$wgAutoloadClasses['UnreviewedPages'] = $dir . 'specialpages/UnreviewedPages_body.php';
$wgExtensionMessagesFiles['UnreviewedPages'] = $langDir . 'UnreviewedPages.i18n.php';
$wgSpecialPageGroups['UnreviewedPages'] = 'quality';
# Load "in need of re-review" pages list
$wgAutoloadClasses['PendingChanges'] = $dir . 'specialpages/PendingChanges_body.php';
$wgExtensionMessagesFiles['PendingChanges'] = $langDir . 'PendingChanges.i18n.php';
$wgSpecialPageGroups['PendingChanges'] = 'quality';
# Load "suspicious changes" pages list
$wgAutoloadClasses['ProblemChanges'] = $dir . 'specialpages/ProblemChanges_body.php';
$wgExtensionMessagesFiles['ProblemChanges'] = $langDir . 'ProblemChanges.i18n.php';
$wgSpecialPageGroups['ProblemChanges'] = 'quality';
# Load reviewed pages list
$wgAutoloadClasses['ReviewedPages'] = $dir . 'specialpages/ReviewedPages_body.php';
$wgExtensionMessagesFiles['ReviewedPages'] = $langDir . 'ReviewedPages.i18n.php';
$wgSpecialPageGroups['ReviewedPages'] = 'quality';
# Load stable pages list (for protection config)
$wgAutoloadClasses['StablePages'] = $dir . 'specialpages/StablePages_body.php';
$wgExtensionMessagesFiles['StablePages'] = $langDir . 'StablePages.i18n.php';
$wgSpecialPageGroups['StablePages'] = 'quality';
# Load configured pages list (non-protection config)
$wgAutoloadClasses['ConfiguredPages'] = $dir . 'specialpages/ConfiguredPages_body.php';
$wgExtensionMessagesFiles['ConfiguredPages'] = $langDir . 'ConfiguredPages.i18n.php';
$wgSpecialPageGroups['ConfiguredPages'] = 'quality';
# To oversee quality revisions
$wgAutoloadClasses['QualityOversight'] = $dir . 'specialpages/QualityOversight_body.php';
$wgExtensionMessagesFiles['QualityOversight'] = $langDir . 'QualityOversight.i18n.php';
$wgSpecialPageGroups['QualityOversight'] = 'quality';
# Statistics
$wgAutoloadClasses['ValidationStatistics'] = $dir . 'specialpages/ValidationStatistics_body.php';
$wgExtensionMessagesFiles['ValidationStatistics'] = $langDir . 'ValidationStatistics.i18n.php';
$wgSpecialPageGroups['ValidationStatistics'] = 'quality';

# API Modules
$wgAutoloadClasses['FlaggedRevsApiHooks'] = $dir . 'api/FlaggedRevsApi.hooks.php';
# OldReviewedPages for API
$wgAutoloadClasses['ApiQueryOldreviewedpages'] = $dir . 'api/ApiQueryOldreviewedpages.php';
$wgAPIListModules['oldreviewedpages'] = 'ApiQueryOldreviewedpages';
# UnreviewedPages for API
$wgAutoloadClasses['ApiQueryUnreviewedpages'] = $dir . 'api/ApiQueryUnreviewedpages.php';
# ReviewedPages for API
$wgAutoloadClasses['ApiQueryReviewedpages'] = $dir . 'api/ApiQueryReviewedpages.php';
# Flag metadata for pages for API
$wgAutoloadClasses['ApiQueryFlagged'] = $dir . 'api/ApiQueryFlagged.php';
$wgAPIPropModules['flagged'] = 'ApiQueryFlagged';
# Site flag config for API
$wgAutoloadClasses['ApiFlagConfig'] = $dir . 'api/ApiFlagConfig.php';
$wgAPIModules['flagconfig'] = 'ApiFlagConfig';

# Page review module for API
$wgAutoloadClasses['ApiReview'] = $dir . 'api/ApiReview.php';
$wgAPIModules['review'] = 'ApiReview';
# Stability config module for API
$wgAutoloadClasses['ApiStabilize'] = $dir . 'api/ApiStabilize.php';
$wgAutoloadClasses['ApiStabilizeGeneral'] = $dir . 'api/ApiStabilize.php';
$wgAutoloadClasses['ApiStabilizeProtect'] = $dir . 'api/ApiStabilize.php';

# New user preferences
$wgDefaultUserOptions['flaggedrevssimpleui'] = (int)$wgSimpleFlaggedRevsUI;
$wgDefaultUserOptions['flaggedrevsstable'] = false;
$wgDefaultUserOptions['flaggedrevseditdiffs'] = true;
$wgDefaultUserOptions['flaggedrevsviewdiffs'] = false;

# ####### HOOK TRIGGERED FUNCTIONS  #########

# ######## User interface #########
# Override current revision, add patrol links, set cache...
$wgHooks['ArticleViewHeader'][] = 'FlaggedRevsHooks::onArticleViewHeader';
$wgHooks['ImagePageFindFile'][] = 'FlaggedRevsHooks::onImagePageFindFile';
# Override redirect behavior...
$wgHooks['InitializeArticleMaybeRedirect'][] = 'FlaggedRevsHooks::overrideRedirect';
# Set page view tabs
$wgHooks['SkinTemplateTabs'][] = 'FlaggedRevsHooks::onSkinTemplateTabs'; // All skins
$wgHooks['SkinTemplateNavigation'][] = 'FlaggedRevsHooks::onSkinTemplateNavigation'; // Vector
# Add notice tags to edit view
$wgHooks['EditPage::showEditForm:initial'][] = 'FlaggedRevsHooks::addToEditView';
# Tweak submit button name/title
$wgHooks['EditPageBeforeEditButtons'][] = 'FlaggedRevsHooks::onBeforeEditButtons';
# Autoreview information from form
$wgHooks['EditPageBeforeEditChecks'][] = 'FlaggedRevsHooks::addReviewCheck';
$wgHooks['EditPage::showEditForm:fields'][] = 'FlaggedRevsHooks::addRevisionIDField';
# Add draft link to section edit error
$wgHooks['EditPageNoSuchSection'][] = 'FlaggedRevsHooks::onNoSuchSection';
# Add notice tags to history
$wgHooks['PageHistoryBeforeList'][] = 'FlaggedRevsHooks::addToHistView';
# Add review form and visiblity settings link
$wgHooks['SkinAfterContent'][] = 'FlaggedRevsHooks::onSkinAfterContent';
# Mark items in page history
$wgHooks['PageHistoryPager::getQueryInfo'][] = 'FlaggedRevsHooks::addToHistQuery';
$wgHooks['PageHistoryLineEnding'][] = 'FlaggedRevsHooks::addToHistLine';
$wgHooks['LocalFile::getHistory'][] = 'FlaggedRevsHooks::addToFileHistQuery';
$wgHooks['ImagePageFileHistoryLine'][] = 'FlaggedRevsHooks::addToFileHistLine';
# Mark items in RC
$wgHooks['SpecialRecentChangesQuery'][] = 'FlaggedRevsHooks::addToRCQuery';
$wgHooks['SpecialWatchlistQuery'][] = 'FlaggedRevsHooks::addToWatchlistQuery';
$wgHooks['ChangesListInsertArticleLink'][] = 'FlaggedRevsHooks::addToChangeListLine';
# Page review on edit
$wgHooks['ArticleUpdateBeforeRedirect'][] = 'FlaggedRevsHooks::injectPostEditURLParams';
# Diff-to-stable
$wgHooks['DiffViewHeader'][] = 'FlaggedRevsHooks::onDiffViewHeader';
# Add diff=review url param alias
$wgHooks['NewDifferenceEngine'][] = 'FlaggedRevsHooks::checkDiffUrl';
# Local user account preference
$wgHooks['GetPreferences'][] = 'FlaggedRevsHooks::onGetPreferences';
# Show unreviewed pages links
$wgHooks['CategoryPageView'][] = 'FlaggedRevsHooks::onCategoryPageView';
# Backlog notice
$wgHooks['SiteNoticeAfter'][] = 'FlaggedRevsHooks::addBacklogNotice';
# Review/stability log links
$wgHooks['LogLine'][] = 'FlaggedRevsHooks::logLineLinks';

# Add CSS/JS and review notice
$wgHooks['BeforePageDisplay'][] = 'FlaggedRevsHooks::onBeforePageDisplay';
# Add global JS vars
$wgHooks['MakeGlobalVariablesScript'][] = 'FlaggedRevsHooks::injectGlobalJSVars';

# Add flagging data to ApiQueryRevisions
$wgHooks['APIGetAllowedParams'][] = 'FlaggedRevsApiHooks::addApiRevisionParams';
$wgHooks['APIQueryAfterExecute'][] = 'FlaggedRevsApiHooks::addApiRevisionData';
# ########

# ######## Parser #########
# Parser hooks, selects the desired images/templates
$wgHooks['ParserClearState'][] = 'FlaggedRevsHooks::parserAddFields';
$wgHooks['BeforeParserFetchTemplateAndtitle'][] = 'FlaggedRevsHooks::parserFetchStableTemplate';
$wgHooks['BeforeParserMakeImageLinkObj'][] = 'FlaggedRevsHooks::parserFetchStableFile';
$wgHooks['BeforeGalleryFindFile'][] = 'FlaggedRevsHooks::galleryFetchStableFile';
# Additional parser versioning
$wgHooks['ParserAfterTidy'][] = 'FlaggedRevsHooks::parserInjectTimestamps';
$wgHooks['OutputPageParserOutput'][] = 'FlaggedRevsHooks::outputInjectTimestamps';
# ########

# ######## DB write operations #########
# Autopromote Editors
$wgHooks['ArticleSaveComplete'][] = 'FlaggedRevsHooks::maybeMakeEditor';
# Auto-reviewing
$wgHooks['RecentChange_save'][] = 'FlaggedRevsHooks::autoMarkPatrolled';
$wgHooks['NewRevisionFromEditComplete'][] = 'FlaggedRevsHooks::maybeMakeEditReviewed';
# Null edit review via checkbox
$wgHooks['ArticleSaveComplete'][] = 'FlaggedRevsHooks::maybeNullEditReview';
# Disable auto-promotion for demoted users
$wgHooks['UserRights'][] = 'FlaggedRevsHooks::recordDemote';
# User edit tallies
$wgHooks['ArticleRollbackComplete'][] = 'FlaggedRevsHooks::incrementRollbacks';
$wgHooks['NewRevisionFromEditComplete'][] = 'FlaggedRevsHooks::incrementReverts';
# Update fr_page_id and tracking rows on revision restore and merge
$wgHooks['ArticleRevisionUndeleted'][] = 'FlaggedRevsHooks::onRevisionRestore';
$wgHooks['ArticleMergeComplete'][] = 'FlaggedRevsHooks::onArticleMergeComplete';

# Update tracking rows and cache on page changes (@TODO: this sucks):
# Article edit/create
$wgHooks['ArticleEditUpdates'][] = 'FlaggedRevsHooks::onArticleEditUpdates';
# Article delete/restore
$wgHooks['ArticleDeleteComplete'][] = 'FlaggedRevsHooks::onArticleDelete';
$wgHooks['ArticleUndelete'][] = 'FlaggedRevsHooks::onArticleUndelete';
# Revision delete/restore
$wgHooks['ArticleRevisionVisibilitySet'][] = 'FlaggedRevsHooks::onRevisionDelete';
# Article move
$wgHooks['TitleMoveComplete'][] = 'FlaggedRevsHooks::onTitleMoveComplete';
# File upload
$wgHooks['FileUpload'][] = 'FlaggedRevsHooks::onFileUpload';

$wgHooks['ArticleRevisionVisiblitySet'][] = 'FlaggedRevsHooks::onRevisionDelete'; // B/C for now
# ########

# ######## Other #########
# Determine what pages can be moved and patrolled
$wgHooks['getUserPermissionsErrors'][] = 'FlaggedRevsHooks::onUserCan';
# Implicit autoreview rights group
$wgHooks['GetAutoPromoteGroups'][] = 'FlaggedRevsHooks::checkAutoPromote';

# Check if a page is currently being reviewed
$wgHooks['MediaWikiPerformAction'][] = 'FlaggedRevsHooks::onMediaWikiPerformAction';

# Actually register special pages
$wgHooks['SpecialPage_initList'][] = 'FlaggedRevsHooks::defineSpecialPages';

# Stable dump hook
$wgHooks['WikiExporter::dumpStableQuery'][] = 'FlaggedRevsHooks::stableDumpQuery';

# Duplicate flagged* tables in parserTests.php
$wgHooks['ParserTestTables'][] = 'FlaggedRevsHooks::onParserTestTables';
# Integration tests
$wgHooks['UnitTestsList'][] = 'FlaggedRevsHooks::getUnitTests';

# Database schema changes
$wgHooks['LoadExtensionSchemaUpdates'][] = 'FlaggedRevsHooks::addSchemaUpdates';
# ########

function efSetFlaggedRevsConditionalHooks() {
	global $wgHooks;
	# Mark items in user contribs
	if ( !FlaggedRevs::useOnlyIfProtected() ) {
		$wgHooks['ContribsPager::getQueryInfo'][] = 'FlaggedRevsHooks::addToContribsQuery';
		$wgHooks['ContributionsLineEnding'][] = 'FlaggedRevsHooks::addToContribsLine';
	}
	if ( FlaggedRevs::useProtectionLevels() ) {
		# Add protection form field
		$wgHooks['ProtectionForm::buildForm'][] = 'FlaggedRevsHooks::onProtectionForm';
		$wgHooks['ProtectionForm::showLogExtract'][] = 'FlaggedRevsHooks::insertStabilityLog';
		# Save stability settings
		$wgHooks['ProtectionForm::save'][] = 'FlaggedRevsHooks::onProtectionSave';
		# Parser stuff
		$wgHooks['ParserFirstCallInit'][] = 'FlaggedRevsHooks::onParserFirstCallInit';
		$wgHooks['LanguageGetMagic'][] = 'FlaggedRevsHooks::onLanguageGetMagic';
		$wgHooks['ParserGetVariableValueSwitch'][] = 'FlaggedRevsHooks::onParserGetVariableValueSwitch';
		$wgHooks['MagicWordwgVariableIDs'][] = 'FlaggedRevsHooks::onMagicWordwgVariableIDs';
	}
	# Give bots the 'autoreview' right (here so it triggers after CentralAuth)
	# @TODO: better way to ensure hook order
	$wgHooks['UserGetRights'][] = 'FlaggedRevsHooks::onUserGetRights';
}

# ####### END HOOK TRIGGERED FUNCTIONS  #########

function efLoadFlaggedRevs() {
	global $wgFlaggedRevsRCCrap, $wgUseRCPatrol, $wgFlaggedRevsNamespaces;
	if ( $wgFlaggedRevsRCCrap ) {
		# If patrolling is already on, then we know that it 
		# was intended to have all namespaces patrollable.
		if ( $wgUseRCPatrol ) {
			global $wgFlaggedRevsPatrolNamespaces, $wgCanonicalNamespaceNames;
			$wgFlaggedRevsPatrolNamespaces = array_keys( $wgCanonicalNamespaceNames );
		}
		/* TODO: decouple from rc patrol */
		# Check if FlaggedRevs is enabled by default for pages...
		if ( $wgFlaggedRevsNamespaces && !FlaggedRevs::useOnlyIfProtected() ) {
			# Use RC Patrolling to check for vandalism.
			# Edits to reviewable pages must be flagged to be patrolled.
			$wgUseRCPatrol = true;
		}
	}
	# Conditional API modules
	efSetFlaggedRevsConditionalAPIModules();
	# Load hooks that aren't always set
	efSetFlaggedRevsConditionalHooks();
	# Remove conditionally applicable rights
	efSetFlaggedRevsConditionalRights();
	# Defaults for user preferences
	efSetFlaggedRevsConditionalPreferences();
}

function efSetFlaggedRevsConditionalAPIModules() {
	global $wgAPIModules, $wgAPIListModules;
	if ( FlaggedRevs::useOnlyIfProtected() ) {
		$wgAPIModules['stabilize'] = 'ApiStabilizeProtect';
	} else {
		$wgAPIModules['stabilize'] = 'ApiStabilizeGeneral';
		$wgAPIListModules['reviewedpages'] = 'ApiQueryReviewedpages';
		$wgAPIListModules['unreviewedpages'] = 'ApiQueryUnreviewedpages';
	}
}

function efSetFlaggedRevsConditionalRights() {
	global $wgGroupPermissions, $wgImplicitGroups, $wgFlaggedRevsAutoconfirm;
	if ( FlaggedRevs::useOnlyIfProtected() ) {
		// Removes sp:ListGroupRights cruft
		if ( isset( $wgGroupPermissions['editor'] ) ) {
			unset( $wgGroupPermissions['editor']['unreviewedpages'] );
		}
		if ( isset( $wgGroupPermissions['reviewer'] ) ) {
			unset( $wgGroupPermissions['reviewer']['unreviewedpages'] );
		}
	}
	if ( !empty( $wgFlaggedRevsAutoconfirm ) ) {
		# Implicit autoreview group
		$wgGroupPermissions['autoreview']['autoreview'] = true;
		# Don't show the 'autoreview' group everywhere
		$wgImplicitGroups[] = 'autoreview';
	}
}

function efSetFlaggedRevsConditionalPreferences() {
	global $wgDefaultUserOptions, $wgSimpleFlaggedRevsUI;
	$wgDefaultUserOptions['flaggedrevssimpleui'] = (int)$wgSimpleFlaggedRevsUI;
}

# Add review log
$wgLogTypes[] = 'review';
$wgFilterLogTypes['review'] = true;
$wgLogNames['review'] = 'review-logpage';
$wgLogHeaders['review'] = 'review-logpagetext';
# Various actions are used for log filtering ...
$wgLogActions['review/approve']  = 'review-logentry-app'; // sighted (again)
$wgLogActions['review/approve2']  = 'review-logentry-app'; // quality (again)
$wgLogActions['review/approve-i']  = 'review-logentry-app'; // sighted (first time)
$wgLogActions['review/approve2-i']  = 'review-logentry-app'; // quality (first time)
$wgLogActions['review/approve-a']  = 'review-logentry-app'; // sighted (auto)
$wgLogActions['review/approve2-a']  = 'review-logentry-app'; // quality (auto)
$wgLogActions['review/approve-ia']  = 'review-logentry-app'; // sighted (initial & auto)
$wgLogActions['review/approve2-ia']  = 'review-logentry-app'; // quality (initial & auto)
$wgLogActions['review/unapprove'] = 'review-logentry-dis'; // was sighted
$wgLogActions['review/unapprove2'] = 'review-logentry-dis'; // was quality

# Add stable version log
$wgLogTypes[] = 'stable';
$wgLogNames['stable'] = 'stable-logpage';
$wgLogHeaders['stable'] = 'stable-logpagetext';
$wgLogActionsHandlers['stable/config'] = 'FlaggedRevsLogs::stabilityLogText'; // customize
$wgLogActionsHandlers['stable/modify'] = 'FlaggedRevsLogs::stabilityLogText'; // re-customize
$wgLogActionsHandlers['stable/reset'] = 'FlaggedRevsLogs::stabilityLogText'; // reset

# AJAX functions
$wgAjaxExportList[] = 'RevisionReview::AjaxReview';
$wgAjaxExportList[] = 'FlaggedArticleView::AjaxBuildDiffHeaderItems';

# Cache update
$wgSpecialPageCacheUpdates[] = 'efFlaggedRevsUnreviewedPagesUpdate';

function efFlaggedRevsUnreviewedPagesUpdate() {
	$base = dirname( __FILE__ );
	require_once( "$base/maintenance/updateQueryCache.inc" );
	update_flaggedrevs_querycache();
	require_once( "$base/maintenance/updateStats.inc" );
	update_flaggedrevs_stats();
}

# B/C ...
$wgLogActions['rights/erevoke']  = 'rights-editor-revoke';

