<?php
class UploadFromUrl extends UploadBase {
	protected $mTempDownloadPath;
	
	//by default do a SYNC_DOWNLOAD 
	protected $dl_mode = null;
	
	static function isAllowed( $user ) {
		if( !$user->isAllowed( 'upload_by_url' ) )
			return 'upload_by_url';
		return parent::isAllowed( $user );
	}
	static function isEnabled() {
		global $wgAllowCopyUploads;
		return $wgAllowCopyUploads && parent::isEnabled();
	}	
	/*entry point for Api upload:: ASYNC_DOWNLOAD (if possible) */
	function initialize( $name, $url ) {		
		global $wgTmpDirectory;
		
		if(!$this->dl_mode)
			$this->dl_mode = Http::ASYNC_DOWNLOAD;
		
		$local_file = tempnam( $wgTmpDirectory, 'WEBUPLOAD' );
		parent::initialize( $name, $local_file, 0, true );

		$this->mUrl = trim( $url );
	}
	/*entry point for SpecialUpload no ASYNC_DOWNLOAD possible: */
	function initializeFromRequest( &$request ) {		
		//set dl mode if not set:
		if(!$this->dl_mode)
			$this->dl_mode = Http::SYNC_DOWNLOAD;	
			
		$desiredDestName = $request->getText( 'wpDestFile' );
		if( !$desiredDestName )
			$desiredDestName = $request->getText( 'wpUploadFile' );		
		return $this->initialize( 
			$desiredDestName, 
	 		$request->getVal('wpUploadFileURL')
		);
	}
	/**
	 * Do the real fetching stuff
	 */
	function fetchFile( ) {
		//entry point for SpecialUplaod 
		if( stripos($this->mUrl, 'http://') !== 0 && stripos($this->mUrl, 'ftp://') !== 0 ) {
			return Status::newFatal('upload-proto-error');
		}
		//print "fetchFile:: $this->dl_mode";
		//now do the actual download to the shared target: 	
		$status = Http::doDownload ( $this->mUrl, $this->mTempPath, $this->dl_mode);				
		return $status;	
		
		/*
		$res = $this->curlCopy();
		if( $res !== true ) {
			return array(
				'status' => self::BEFORE_PROCESSING,
				'error' => $res,
			);
		}*/
		
	}
	
	/**
	 * Safe copy from URL
	 * Returns true if there was an error, false otherwise

	private function curlCopy() {
		global $wgOut, $wgCopyUploadTimeout;

		# Open temporary file
		$this->mCurlDestHandle = @fopen( $this->mTempPath, "wb" );
		if( $this->mCurlDestHandle === false ) {
			# Could not open temporary file to write in
			return 'upload-file-error';
		}

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_HTTP_VERSION, 1.0); # Probably not needed, but apparently can work around some bug
		curl_setopt( $ch, CURLOPT_TIMEOUT, $wgCopyUploadTimeout); # 1 hour timeout
		curl_setopt( $ch, CURLOPT_LOW_SPEED_LIMIT, 512); # 0.5KB per second minimum transfer speed
		curl_setopt( $ch, CURLOPT_URL, $this->mUrl);
		curl_setopt( $ch, CURLOPT_WRITEFUNCTION, array( $this, 'uploadCurlCallback' ) );
		curl_exec( $ch );
		$error =  curl_errno( $ch );
		curl_close( $ch );

		fclose( $this->mCurlDestHandle );
		unset( $this->mCurlDestHandle );
		
		if( $error ) 
			return "upload-curl-error$errornum";

		return true;
	}
	*/
	/**
	 * Callback function for CURL-based web transfer
	 * Write data to file unless we've passed the length limit;
	 * if so, abort immediately.
	 * @access private
	 
	function uploadCurlCallback( $ch, $data ) {
		global $wgMaxUploadSize;
		$length = strlen( $data );
		$this->mFileSize += $length; 
		if( $this->mFileSize > $wgMaxUploadSize ) {
			return 0;
		}
		fwrite( $this->mCurlDestHandle, $data );
		return $length;
	}
*/
	//this can be deprecated in favor of http_request2 functions
	static function isValidRequest( $request ){
		if( !$request->getVal('wpUploadFileURL') )
			return false;
		//check that is a valid url:
		return preg_match('/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/',
						  $request->getVal('wpUploadFileURL'), $matches);
	}
}