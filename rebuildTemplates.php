<?php error_reporting(E_ALL); 

require_once dirname( dirname( dirname( __FILE__ ) ) ) . "/maintenance/commandLine.inc";

if( !class_exists( 'CentralNotice' ) ) {
    require dirname( __FILE__ ) . '/SpecialCentralNotice.php';
}

if( isset( $options['help'] ) ) {
    echo "Rebuilds templates for all notices in DB.\n";
    echo "Usage:\n";
    echo "  php extensions/CentralNotice/rebuildTemplates\n";
} else {
    echo "Rebuilding templates ...\n";
    
	// Hack for parser to avoid barfing from no $wgTitle
	$wgTitle = Title::newFromText( wfMsg( 'mainpage' ) );
	
	$projects = $wgNoticeProjects;
	$langs = array_keys( Language::getLanguageNames() );
	//$langs = array( 'en' );
	
	foreach( $projects as $project ) {
		foreach( $langs as $lang ) {
			echo "$project/$lang\n";
			
			$builder = new SpecialNoticeText();
			$js = $builder->getJsOutput( $wgNoticeProject, $wgNoticeLang );
			
			$outputDir = "$wgNoticeStaticDirectory/$project/$lang";
			if( wfMkDirParents( $outputDir ) ) {
				$outputFile = "$outputDir/notice.js";
				$ok = file_put_contents( $outputFile, $js );
				if( !$ok ) {
					echo "FAILED to write $outputFile!\n";
				}
			} else {
				echo "FAILED to create $outputDir!\n";
			}
		}
	}
} 
