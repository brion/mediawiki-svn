<?php

/**
 * File holding the MapsYahooMapsDispPoint class.
 *
 * @file Maps_YahooMapsDispPoint.php
 * @ingroup MapsYahooMaps
 *
 * @author Jeroen De Dauw
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

/**
 * Class for handling the display_point(s) parser functions with Yahoo! Maps.
 *
 * @author Jeroen De Dauw
 */
class MapsYahooMapsDispPoint extends MapsBasePointMap {
	
	public $serviceName = MapsYahooMaps::SERVICE_NAME;		
	
	/**
	 * @see MapsBaseMap::setFormInputSettings()
	 *
	 */	
	protected function setMapSettings() {
		global $egMapsYahooMapsZoom, $egMapsYahooMapsPrefix;
		
		$this->elementNamePrefix = $egMapsYahooMapsPrefix;
		$this->defaultZoom = $egMapsYahooMapsZoom;
		
		$this->markerStringFormat = 'getYMarkerData(lat, lon, "title", "label", "icon")';
		
		$this->spesificParameters = array(
			'zoom' => array(
				'default' => '', 	
			)
		);			
	}
	
	/**
	 * @see MapsBaseMap::doMapServiceLoad()
	 *
	 */		 
	protected function doMapServiceLoad() {
		global $egYahooMapsOnThisPage;
		
		MapsYahooMaps::addYMapDependencies($this->output);	
		$egYahooMapsOnThisPage++;
		
		$this->elementNr = $egYahooMapsOnThisPage;
	}	
	
	/**
	 * @see MapsBaseMap::addSpecificMapHTML()
	 *
	 */		
	public function addSpecificMapHTML() {
		global $wgJsMimeType;
		
		$this->type = MapsYahooMaps::getYMapType($this->type, true);
		
		$this->controls = MapsMapper::createJSItemsString($this->controls);

		$this->autozoom = MapsYahooMaps::getAutozoomJSValue($this->autozoom);
		
		$typesString = MapsYahooMaps::createTypesString($this->types);		
		
		$this->output .= <<<END
		<div id="$this->mapName" style="width: {$this->width}px; height: {$this->height}px;"></div>  
		
		<script type="$wgJsMimeType">/*<![CDATA[*/
		addOnloadHook(
			initializeYahooMap('$this->mapName', $this->centre_lat, $this->centre_lon, $this->zoom, $this->type, [$typesString], [$this->controls], $this->autozoom, [$this->markerString], $this->height)
		);
			/*]]>*/</script>
END;
	}

}