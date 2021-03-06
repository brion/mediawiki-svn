<?php

/* 
WikiBhasha launch Extention base class script.
Available functions:
1) wikiBhashaToolbox	: adds wikibhasha launch link in the left toolbox menue
2) wbToolbarIcon		: - Looks for "action=edit" in the URL and check if toolbar exists. if present adds a icon to the toolbar for launching WikiBhasha.
*						  - Looks for "wbAutoLaunch=true" in the URL and launch WikiBhasha.	 
*/

class wikiBhashaExt {
	private $url, $wikiBhashaUrl;
	function __construct() {
		global $jsPath;
		$this->url = $jsPath;
		$this->wikiBhashaUrl = 'if(!(document.getElementById("wbBlockParentUI"))){this.baseUrl ="' . $this->url . '";this.targetLanguageCode="en";this.wikiSourceLanguage=typeof(wgUserLanguage)!=="undefined"?wgUserLanguage:"en";wbBookMarkletLinkDiv=document.createElement("div");wbBookMarkletLinkDiv.id="wbLoadDiv";wbBookMarkletLinkDiv.innerHTML="<div style=\"background-color:Black;color:#FFFFFF;position:absolute;text-align:center;font-size:13px;font-weight:bold;left:0px;top:0px;padding:10px 0;z-index:1000;width:100%;border-bottom:3px solid gray;\">Loading...</div>";document.body.appendChild(wbBookMarkletLinkDiv);wbBookMarkletScripts=document.createElement("script");wbBookMarkletScripts.setAttribute("src", "' . $this->url . 'js/main.js");document.body.appendChild(wbBookMarkletScripts);}';
	}

	// add wikibhasha link to the wikipedia left bar toolbar box
	public function wikiBhashaToolbox( &$monobook ) {
		echo "<li><a href='javascript:void(0);' style='color: rgb(0, 36, 255);' onclick='(function(){" . $this->wikiBhashaUrl . "})()' id='wbInstallLinkff'>" . wfMsg( 'wikiBhashaLink' ) . "</a></li>";
		return true;
	}

	// create wikipedia edite page toolbar icon on the edit pages for wikibhasha
	public function wbToolbarIcon( &$out, &$sk ) {
		global $wgRequest;
		$jsAutoLoad = '';
		$jsIconScript = '';
		if ( $wgRequest->getText( 'action' ) == 'edit' ) {
			$imgUrl = $this->url . 'images/Square.png';
			$jsWBIconScript = " var wbIcon = document.createElement('a'); wbIcon.title = '" . wfMsg( 'wikiBhashaLink' ) . "';wbIcon.href='javascript:(function(){" . addslashes( $this->wikiBhashaUrl ) . "})()'; wbIcon.innerHTML = '<img src=\'" . $imgUrl . "\'>';";
			$jsIconScript = $jsWBIconScript . "if(document.getElementById('toolbar')){ var toolbar = document.getElementById('toolbar'); if(toolbar.firstChild)  toolbar.appendChild(wbIcon);}";
			$jsIconScript .= "if(document.getElementById('wikiEditor-ui-toolbar')){wbIconGroupDiv = document.createElement('div');wbIconGroupDiv.setAttribute('class', 'group group-format');wbIconGroupDiv.appendChild(wbIcon);var toolbar = document.getElementById('wikiEditor-ui-toolbar');if(toolbar.firstChild)toolbar.firstChild.appendChild(wbIconGroupDiv);}";

		}
		// if the url contain wbAutoLaunch as true launch wikibhasha
		if ( $wgRequest->getText( 'wbAutoLaunch' ) == "true" ) {
			$jsAutoLoad = $this->wikiBhashaUrl;
		}
		$out->addScript( "<script language='javascript'> window.onload = function(){" . $jsIconScript . $jsAutoLoad . "}</script>" );
		return true;
	}
}

