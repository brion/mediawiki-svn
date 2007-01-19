<?php

/**
 * Book information driver for Amazon
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Rob Church <robchur@gmail.com>
 */
class BookInformationAmazon implements BookInformationDriver {

	/**
	 * Submit a request to the information source and
	 * return the result
	 *
	 * @param string $isbn ISBN to obtain information for
	 * @return BookInformationResult
	 */
	public function submitRequest( $isbn ) {
		global $wgBookInformationService;
		if( isset( $wgBookInformationService['accesskeyid'] ) ) {
			$aki = $wgBookInformationService['accesskeyid'];
			$uri = self::buildRequestURI( $aki, $isbn );
			if( ( $xml = Http::get( $uri ) ) !== false ) {
				return $this->parseResponse( $xml );
			} else {
				return new BookInformationResult( BookInformationResult::RESPONSE_TIMEOUT );
			}			
		} else {
			return new BookInformationResult( BookInformationResult::RESPONSE_FAIL );
		}
	}
	
	/**
	 * Build the URI to an Amazon Web Service request
	 *
	 * @param string $base URL base (locale-dependent, etc.)
	 * @param string $aki Access Key ID
	 * @param string $isbn ISBN to be queried
	 * @return string
	 */
	private static function buildRequestURI( $aki, $isbn ) {
		$bits[] = 'Service=AWSECommerceService';
		$bits[] = 'AWSAccessKeyId=' . urlencode( $aki );
		$bits[] = 'Operation=ItemSearch';
		$bits[] = 'SearchIndex=Books';
		$bits[] = 'Power=asin:' . urlencode( $isbn );
		return 'http://webservices.amazon.com/onca/xml'
				. '?' . implode( '&', $bits );
	}
	
	/**
	 * Parse an XML response from the service and extract
	 * the information we require
	 *
	 * @param string $response XML response
	 * @return bool Success
	 */
	private function parseResponse( $response ) {
		try {
			$xml = new SimpleXMLElement( $response );
			if( is_object( $xml ) && $xml instanceof SimpleXMLElement ) {
				$items =& $xml->Items[0];
				if( $items->Request[0]->IsValid == 'True' && isset( $items->Item[0] ) ) {
					$item =& $items->Item[0]->ItemAttributes[0];
					$title = (string)$item->Title;
					$author = (string)$item->Author;
					$publisher = (string)$item->Manufacturer;
					$purchase = (string)$items->Item[0]->DetailPageURL;
					return $this->prepareResult( $title, $author, $publisher, $purchase );
				} else {
					return new BookInformationResult( BookInformationResult::RESPONSE_NOSUCHITEM );
				}
			} else {
				return new BookInformationResult( BookInformationResult::RESPONSE_FAIL );
			}		
		} catch( Exception $ex ) {
			return new BookInformationResult( BookInformationResult::RESPONSE_FAIL );
		}
	}
	
	private function prepareResult( $title, $author, $publisher, $purchase ) {
		$result = new BookInformationResult( BookInformationResult::RESPONSE_OK,
			$title, $author, $publisher );
		$result->setProviderData( $this->buildProviderLink(),
			$this->buildPurchaseLink( $purchase ) );
		return $result;
	}
	
	public function buildProviderLink() {
		return '<a href="http://www.amazon.com/webservices">Amazon Web Services</a>';
	}

	public function buildPurchaseLink( $purchase ) {
		return '<a href="' . $purchase . '">Amazon.com</a>';
	}
	
}

?>