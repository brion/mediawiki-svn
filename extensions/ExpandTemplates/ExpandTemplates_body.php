<?php

# Add messages
global $wgMessageCache, $wgExpandTemplatesMessages;
foreach( $wgExpandTemplatesMessages as $key => $value ) {
	$wgMessageCache->addMessages( $wgExpandTemplatesMessages[$key], $key );
}

class ExpandTemplates extends SpecialPage {
	function __construct() {
		parent::__construct( 'ExpandTemplates' );
	}

	function execute( $subpage ) {
		global $wgRequest, $wgParser, $wgOut;

		$this->setHeaders();
		
		$titleStr = $wgRequest->getText( 'contexttitle' );
		$title = Title::newFromText( $titleStr );
		$selfTitle = $this->getTitle();
		if ( !$title ) {
			$title = $selfTitle;
		}
		$input = $wgRequest->getText( 'input' );
		if ( strlen( $input ) ) {
			$removeComments = $wgRequest->getBool( 'removecomments', false );
			$options = new ParserOptions;
			$options->setRemoveComments( $removeComments );
			$options->setMaxIncludeSize(50000000); # 50MB, to allow fixing of articles that exceed 1MB
			$output = $wgParser->preprocess( $input, $title, $options );
		} else {
			$removeComments = $wgRequest->getBool( 'removecomments', true );
			$output = '';
		}

		$encTitle = htmlspecialchars( $titleStr );
		$encInput = htmlspecialchars( $input );
		$encOutput = htmlspecialchars( $output );
		$removeChecked = $removeComments ? 'checked="checked"' : '';
		$msgTitle = wfMsg( 'expand_templates_title' );
		$msgInput = wfMsg( 'expand_templates_input' );
		$msgRemoveComments = wfMsg( 'expand_templates_remove_comments' );
		$msgOutput = wfMsg( 'expand_templates_output' );
		$msgSubmit = wfMsg( 'expand_templates_ok' );
		$action = htmlspecialchars( $selfTitle->getLocalURL() );
		
		$wgOut->addWikiText( wfMsg( 'expand_templates_intro' ) );
		$wgOut->addHTML( <<<EOT
<br/>
<form action="$action" method="POST">
$msgTitle <input type="text" name="contexttitle" size="60" value="$encTitle"/><br/>
$msgInput<br/>
<textarea name="input" rows=10>$encInput</textarea>
<br/>
<label><input type="checkbox" name="removecomments" $removeChecked />$msgRemoveComments</label>
<br/>
<input type="submit" name="submit" value="$msgSubmit" /><br/><br/>
$msgOutput<br/>
<textarea name="output" rows=10 readonly>$encOutput</textarea><br/>
</form>
EOT
);
	}
}

?>		
