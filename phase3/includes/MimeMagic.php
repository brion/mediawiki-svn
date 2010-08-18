<?php
/**
 * Module defining helper functions for detecting and dealing with mime types.
 *
 * @file
 */

/**
 * Defines a set of well known mime types
 * This is used as a fallback to mime.types files.
 * An extensive list of well known mime types is provided by
 * the file mime.types in the includes directory.
 */
define('MM_WELL_KNOWN_MIME_TYPES',<<<END_STRING
application/ogg ogx ogg ogm ogv oga spx
application/pdf pdf
application/vnd.oasis.opendocument.chart odc
application/vnd.oasis.opendocument.chart-template otc
application/vnd.oasis.opendocument.formula odf
application/vnd.oasis.opendocument.formula-template otf
application/vnd.oasis.opendocument.graphics odg
application/vnd.oasis.opendocument.graphics-template otg
application/vnd.oasis.opendocument.image odi
application/vnd.oasis.opendocument.image-template oti
application/vnd.oasis.opendocument.presentation odp
application/vnd.oasis.opendocument.presentation-template otp
application/vnd.oasis.opendocument.spreadsheet ods
application/vnd.oasis.opendocument.spreadsheet-template ots
application/vnd.oasis.opendocument.text odt
application/vnd.oasis.opendocument.text-template ott
application/vnd.oasis.opendocument.text-master otm
application/vnd.oasis.opendocument.text-web oth
application/x-javascript js
application/x-shockwave-flash swf
audio/midi mid midi kar
audio/mpeg mpga mpa mp2 mp3
audio/x-aiff aif aiff aifc
audio/x-wav wav
audio/ogg oga spx ogg
image/x-bmp bmp
image/gif gif
image/jpeg jpeg jpg jpe
image/png png
image/svg+xml image/svg svg
image/tiff tiff tif
image/vnd.djvu image/x.djvu image/x-djvu djvu
image/x-portable-pixmap ppm
image/x-xcf xcf
text/plain txt
text/html html htm
video/ogg ogv ogm ogg
video/mpeg mpg mpeg
END_STRING
);

/**
 * Defines a set of well known mime info entries
 * This is used as a fallback to mime.info files.
 * An extensive list of well known mime types is provided by
 * the file mime.info in the includes directory.
 */
define('MM_WELL_KNOWN_MIME_INFO', <<<END_STRING
application/pdf [OFFICE]
application/vnd.oasis.opendocument.chart [OFFICE]
application/vnd.oasis.opendocument.chart-template [OFFICE]
application/vnd.oasis.opendocument.formula [OFFICE]
application/vnd.oasis.opendocument.formula-template [OFFICE]
application/vnd.oasis.opendocument.graphics [OFFICE]
application/vnd.oasis.opendocument.graphics-template [OFFICE]
application/vnd.oasis.opendocument.image [OFFICE]
application/vnd.oasis.opendocument.image-template [OFFICE]
application/vnd.oasis.opendocument.presentation [OFFICE]
application/vnd.oasis.opendocument.presentation-template [OFFICE]
application/vnd.oasis.opendocument.spreadsheet [OFFICE]
application/vnd.oasis.opendocument.spreadsheet-template [OFFICE]
application/vnd.oasis.opendocument.text [OFFICE]
application/vnd.oasis.opendocument.text-template [OFFICE]
application/vnd.oasis.opendocument.text-master [OFFICE]
application/vnd.oasis.opendocument.text-web [OFFICE]
text/javascript application/x-javascript [EXECUTABLE]
application/x-shockwave-flash [MULTIMEDIA]
audio/midi [AUDIO]
audio/x-aiff [AUDIO]
audio/x-wav [AUDIO]
audio/mp3 audio/mpeg [AUDIO]
application/ogg audio/ogg video/ogg [MULTIMEDIA]
image/x-bmp image/x-ms-bmp image/bmp [BITMAP]
image/gif [BITMAP]
image/jpeg [BITMAP]
image/png [BITMAP]
image/svg+xml [DRAWING]
image/tiff [BITMAP]
image/vnd.djvu [BITMAP]
image/x-xcf [BITMAP]
image/x-portable-pixmap [BITMAP]
text/plain [TEXT]
text/html [TEXT]
video/ogg [VIDEO]
video/mpeg [VIDEO]
unknown/unknown application/octet-stream application/x-empty [UNKNOWN]
END_STRING
);

#note: because this file is possibly included by a function,
#we need to access the global scope explicitely!
global $wgLoadFileinfoExtension;

if ($wgLoadFileinfoExtension) {
	wfDl( 'fileinfo' );
}

/**
 * Implements functions related to mime types such as detection and mapping to
 * file extension.
 *
 * Instances of this class are stateles, there only needs to be one global instance
 * of MimeMagic. Please use MimeMagic::singleton() to get that instance.
 */
class MimeMagic {

	/**
	* Mapping of media types to arrays of mime types.
	* This is used by findMediaType and getMediaType, respectively
	*/
	var $mMediaTypes= null;

	/** Map of mime type aliases
	*/
	var $mMimeTypeAliases= null;

	/** map of mime types to file extensions (as a space seprarated list)
	*/
	var $mMimeToExt= null;

	/** map of file extensions types to mime types (as a space seprarated list)
	*/
	var $mExtToMime= null;

	/** IEContentAnalyzer instance
	 */
	var $mIEAnalyzer;

	/** The singleton instance
	 */
	private static $instance;

	/** Initializes the MimeMagic object. This is called by MimeMagic::singleton().
	*
	* This constructor parses the mime.types and mime.info files and build internal mappings.
	*/
	function __construct() {
		/*
		*   --- load mime.types ---
		*/

		global $wgMimeTypeFile, $IP;

		$types = MM_WELL_KNOWN_MIME_TYPES;

		if ( $wgMimeTypeFile == 'includes/mime.types' ) {
			$wgMimeTypeFile = "$IP/$wgMimeTypeFile";
		}

		if ( $wgMimeTypeFile ) {
			if ( is_file( $wgMimeTypeFile ) and is_readable( $wgMimeTypeFile ) ) {
				wfDebug( __METHOD__.": loading mime types from $wgMimeTypeFile\n" );
				$types .= "\n";
				$types .= file_get_contents( $wgMimeTypeFile );
			} else {
				wfDebug( __METHOD__.": can't load mime types from $wgMimeTypeFile\n" );
			}
		} else {
			wfDebug( __METHOD__.": no mime types file defined, using build-ins only.\n" );
		}

		$types = str_replace( array( "\r\n", "\n\r", "\n\n", "\r\r", "\r" ), "\n", $types );
		$types = str_replace( "\t", " ", $types );

		$this->mMimeToExt = array();
		$this->mToMime = array();

		$lines = explode( "\n",$types );
		foreach ( $lines as $s ) {
			$s = trim( $s );
			if ( empty( $s ) ) continue;
			if ( strpos( $s, '#' ) === 0 ) continue;

			$s = strtolower( $s );
			$i = strpos( $s, ' ' );

			if ( $i === false ) continue;

			#print "processing MIME line $s<br>";

			$mime = substr( $s, 0, $i );
			$ext = trim( substr($s, $i+1 ) );

			if ( empty( $ext ) ) continue;

			if ( !empty( $this->mMimeToExt[$mime] ) ) {
				$this->mMimeToExt[$mime] .= ' ' . $ext;
			} else {
				$this->mMimeToExt[$mime] = $ext;
			}

			$extensions = explode( ' ', $ext );

			foreach ( $extensions as $e ) {
				$e = trim( $e );
				if ( empty( $e ) ) continue;

				if ( !empty( $this->mExtToMime[$e] ) ) {
					$this->mExtToMime[$e] .= ' ' . $mime;
				} else {
					$this->mExtToMime[$e] = $mime;
				}
			}
		}

		/*
		*   --- load mime.info ---
		*/

		global $wgMimeInfoFile;
		if ( $wgMimeInfoFile == 'includes/mime.info' ) {
			$wgMimeInfoFile = "$IP/$wgMimeInfoFile";
		}

		$info = MM_WELL_KNOWN_MIME_INFO;

		if ( $wgMimeInfoFile ) {
			if ( is_file( $wgMimeInfoFile ) and is_readable( $wgMimeInfoFile ) ) {
				wfDebug( __METHOD__.": loading mime info from $wgMimeInfoFile\n" );
				$info .= "\n";
				$info .= file_get_contents( $wgMimeInfoFile );
			} else {
				wfDebug(__METHOD__.": can't load mime info from $wgMimeInfoFile\n");
			}
		} else {
			wfDebug(__METHOD__.": no mime info file defined, using build-ins only.\n");
		}

		$info = str_replace( array( "\r\n", "\n\r", "\n\n", "\r\r", "\r" ), "\n", $info);
		$info = str_replace( "\t", " ", $info );

		$this->mMimeTypeAliases = array();
		$this->mMediaTypes = array();

		$lines = explode( "\n", $info );
		foreach ( $lines as $s ) {
			$s = trim( $s );
			if ( empty( $s ) ) continue;
			if ( strpos( $s, '#' ) === 0 ) continue;

			$s = strtolower( $s );
			$i = strpos( $s, ' ' );

			if ( $i === false ) continue;

			#print "processing MIME INFO line $s<br>";

			$match = array();
			if ( preg_match( '!\[\s*(\w+)\s*\]!', $s, $match ) ) {
				$s = preg_replace( '!\[\s*(\w+)\s*\]!', '', $s );
				$mtype = trim( strtoupper( $match[1] ) );
			} else {
				$mtype = MEDIATYPE_UNKNOWN;
			}

			$m = explode( ' ', $s );

			if ( !isset( $this->mMediaTypes[$mtype] ) ) {
				$this->mMediaTypes[$mtype] = array();
			}

			foreach ( $m as $mime ) {
				$mime = trim( $mime );
				if ( empty( $mime ) ) continue;

				$this->mMediaTypes[$mtype][] = $mime;
			}

			if ( sizeof( $m ) > 1 ) {
				$main = $m[0];
				for ( $i=1; $i<sizeof($m); $i += 1 ) {
					$mime = $m[$i];
					$this->mMimeTypeAliases[$mime] = $main;
				}
			}
		}

	}

	/**
	 * Get an instance of this class
	 */
	static function &singleton() {
		if ( !isset( self::$instance ) ) {
			self::$instance = new MimeMagic;
		}
		return self::$instance;
	}

	/** returns a list of file extensions for a given mime type
	* as a space separated string.
	*/
	function getExtensionsForType( $mime ) {
		$mime = strtolower( $mime );

		$r = @$this->mMimeToExt[$mime];

		if ( @!$r and isset( $this->mMimeTypeAliases[$mime] ) ) {
			$mime = $this->mMimeTypeAliases[$mime];
			$r = @$this->mMimeToExt[$mime];
		}

		return $r;
	}

	/** returns a list of mime types for a given file extension
	* as a space separated string.
	*/
	function getTypesForExtension( $ext ) {
		$ext = strtolower( $ext );

		$r = isset( $this->mExtToMime[$ext] ) ? $this->mExtToMime[$ext] : null;
		return $r;
	}

	/** returns a single mime type for a given file extension.
	* This is always the first type from the list returned by getTypesForExtension($ext).
	*/
	function guessTypesForExtension( $ext ) {
		$m = $this->getTypesForExtension( $ext );
		if ( is_null( $m ) ) return null;

		$m = trim( $m );
		$m = preg_replace( '/\s.*$/', '', $m );

		return $m;
	}


	/** tests if the extension matches the given mime type.
	* returns true if a match was found, NULL if the mime type is unknown,
	* and false if the mime type is known but no matches where found.
	*/
	function isMatchingExtension( $extension, $mime ) {
		$ext = $this->getExtensionsForType( $mime );

		if ( !$ext ) {
			return null;  //unknown
		}

		$ext = explode( ' ', $ext );

		$extension = strtolower( $extension );
 		if ( in_array( $extension, $ext ) ) {
			return true;
		}

		return false;
	}

	/** returns true if the mime type is known to represent
	* an image format supported by the PHP GD library.
	*/
	function isPHPImageType( $mime ) {
		#as defined by imagegetsize and image_type_to_mime
		static $types = array(
			'image/gif', 'image/jpeg', 'image/png',
			'image/x-bmp', 'image/xbm', 'image/tiff',
			'image/jp2', 'image/jpeg2000', 'image/iff',
			'image/xbm', 'image/x-xbitmap',
			'image/vnd.wap.wbmp', 'image/vnd.xiff',
			'image/x-photoshop',
			'application/x-shockwave-flash',
		);

		return in_array( $mime, $types );
	}

	/**
	 * Returns true if the extension represents a type which can
	 * be reliably detected from its content. Use this to determine
	 * whether strict content checks should be applied to reject
	 * invalid uploads; if we can't identify the type we won't
	 * be able to say if it's invalid.
	 *
	 * @todo Be more accurate when using fancy mime detector plugins;
	 *       right now this is the bare minimum getimagesize() list.
	 * @return bool
	 */
	function isRecognizableExtension( $extension ) {
		static $types = array(
			// Types recognized by getimagesize()
			'gif', 'jpeg', 'jpg', 'png', 'swf', 'psd',
			'bmp', 'tiff', 'tif', 'jpc', 'jp2',
			'jpx', 'jb2', 'swc', 'iff', 'wbmp',
			'xbm',

			// Formats we recognize magic numbers for
			'djvu', 'ogx', 'ogg', 'ogv', 'oga', 'spx',
			'mid', 'pdf', 'wmf', 'xcf', 'webm', 'mkv', 'mka',

			// XML formats we sure hope we recognize reliably
			'svg',
		);
		return in_array( strtolower( $extension ), $types );
	}


	/** mime type detection. This uses detectMimeType to detect the mime type of the file,
	* but applies additional checks to determine some well known file formats that may be missed
	* or misinterpreter by the default mime detection (namely xml based formats like XHTML or SVG).
	*
	* @param $file String: the file to check
	* @param $ext Mixed: the file extension, or true to extract it from the filename.
	*             Set it to false to ignore the extension.
	*
	* @return string the mime type of $file
	*/
	function guessMimeType( $file, $ext = true ) {
		$mime = $this->doGuessMimeType( $file, $ext );

		if( !$mime ) {
			wfDebug( __METHOD__.": internal type detection failed for $file (.$ext)...\n" );
			$mime = $this->detectMimeType( $file, $ext );
		}

		if ( isset( $this->mMimeTypeAliases[$mime] ) ) {
			$mime = $this->mMimeTypeAliases[$mime];
		}

		wfDebug(__METHOD__.": final mime type of $file: $mime\n");
		return $mime;
	}

	function doGuessMimeType( $file, $ext = true ) {
		// Read a chunk of the file
		wfSuppressWarnings();
		$f = fopen( $file, "rt" );
		wfRestoreWarnings();
		if( !$f ) return "unknown/unknown";
		$head = fread( $f, 1024 );
		fseek( $f, -65558, SEEK_END );
		$tail = fread( $f, 65558 ); // 65558 = maximum size of a zip EOCDR
		fclose( $f );

		// Hardcode a few magic number checks...
		$headers = array(
			// Multimedia...
			'MThd'             => 'audio/midi',
			'OggS'             => 'application/ogg',

			// Image formats...
			// Note that WMF may have a bare header, no magic number.
			"\x01\x00\x09\x00" => 'application/x-msmetafile', // Possibly prone to false positives?
			"\xd7\xcd\xc6\x9a" => 'application/x-msmetafile',
			'%PDF'             => 'application/pdf',
			'gimp xcf'         => 'image/x-xcf',

			// Some forbidden fruit...
			'MZ'               => 'application/octet-stream', // DOS/Windows executable
			"\xca\xfe\xba\xbe" => 'application/octet-stream', // Mach-O binary
			"\x7fELF"          => 'application/octet-stream', // ELF binary
		);

		foreach( $headers as $magic => $candidate ) {
			if( strncmp( $head, $magic, strlen( $magic ) ) == 0 ) {
				wfDebug( __METHOD__ . ": magic header in $file recognized as $candidate\n" );
				return $candidate;
			}
		}

		/* Look for WebM and Matroska files */
		if( strncmp( $head, pack( "C4", 0x1a, 0x45, 0xdf, 0xa3 ), 4 ) == 0 ) {
			$doctype = strpos( $head, "\x42\x82" );
			if( $doctype ) {
				// Next byte is datasize, then data (sizes larger than 1 byte are very stupid muxers)
				$data = substr($head, $doctype+3, 8);
				if( strncmp( $data, "matroska", 8 ) == 0 ) {
					wfDebug( __METHOD__ . ": recognized file as video/x-matroska\n" );
					return "video/x-matroska";
				} else if ( strncmp( $data, "webm", 4 ) == 0 ) {
					wfDebug( __METHOD__ . ": recognized file as video/webm\n" );
					return "video/webm";
				}
			}
			wfDebug( __METHOD__ . ": unknown EBML file\n" );
			return "unknown/unknown";
		}

		/*
		 * Look for PHP.  Check for this before HTML/XML...  Warning: this is a
		 * heuristic, and won't match a file with a lot of non-PHP before.  It
		 * will also match text files which could be PHP. :)
		 *
		 * FIXME: For this reason, the check is probably useless -- an attacker
		 * could almost certainly just pad the file with a lot of nonsense to
		 * circumvent the check in any case where it would be a security
		 * problem.  On the other hand, it causes harmful false positives (bug
		 * 16583).  The heuristic has been cut down to exclude three-character
		 * strings like "<? ", but should it be axed completely?
		 */
		if( ( strpos( $head, '<?php' ) !== false ) ||

		    ( strpos( $head, "<\x00?\x00p\x00h\x00p" ) !== false ) ||
		    ( strpos( $head, "<\x00?\x00 " ) !== false ) ||
		    ( strpos( $head, "<\x00?\x00\n" ) !== false ) ||
		    ( strpos( $head, "<\x00?\x00\t" ) !== false ) ||
		    ( strpos( $head, "<\x00?\x00=" ) !== false ) ) {

			wfDebug( __METHOD__ . ": recognized $file as application/x-php\n" );
			return "application/x-php";
		}

		/*
		 * look for XML formats (XHTML and SVG)
		 */
		$xml = new XmlTypeCheck( $file );
		if( $xml->wellFormed ) {
			global $wgXMLMimeTypes;
			if( isset( $wgXMLMimeTypes[$xml->getRootElement()] ) ) {
				return $wgXMLMimeTypes[$xml->getRootElement()];
			} else {
				return 'application/xml';
			}
		}

		/*
		 * look for shell scripts
		 */
		$script_type = null;

		# detect by shebang
		if ( substr( $head, 0, 2) == "#!" ) {
			$script_type = "ASCII";
		} elseif ( substr( $head, 0, 5) == "\xef\xbb\xbf#!" ) {
			$script_type = "UTF-8";
		} elseif ( substr( $head, 0, 7) == "\xfe\xff\x00#\x00!" ) {
			$script_type = "UTF-16BE";
		} elseif ( substr( $head, 0, 7 ) == "\xff\xfe#\x00!" ) {
			$script_type= "UTF-16LE";
		}

		if ( $script_type ) {
			if ( $script_type !== "UTF-8" && $script_type !== "ASCII") {
				// Quick and dirty fold down to ASCII!
				$pack = array( 'UTF-16BE' => 'n*', 'UTF-16LE' => 'v*' );
				$chars = unpack( $pack[$script_type], substr( $head, 2 ) );
				$head = '';
				foreach( $chars as $codepoint ) {
					if( $codepoint < 128 ) {
						$head .= chr( $codepoint );
					} else {
						$head .= '?';
					}
				}
			}

			$match = array();

			if ( preg_match( '%/?([^\s]+/)(\w+)%', $head, $match ) ) {
				$mime = "application/x-{$match[2]}";
				wfDebug( __METHOD__.": shell script recognized as $mime\n" );
				return $mime;
			}
		}

		// Check for ZIP variants (before getimagesize)
		if ( strpos( $tail, "PK\x05\x06" ) !== false ) {
			wfDebug( __METHOD__.": ZIP header present in $file\n" );
			return $this->detectZipType( $head, $tail, $ext );
		}

		wfSuppressWarnings();
		$gis = getimagesize( $file );
		wfRestoreWarnings();

		if( $gis && isset( $gis['mime'] ) ) {
			$mime = $gis['mime'];
			wfDebug( __METHOD__.": getimagesize detected $file as $mime\n" );
			return $mime;
		}

		// Also test DjVu
		$deja = new DjVuImage( $file );
		if( $deja->isValid() ) {
			wfDebug( __METHOD__.": detected $file as image/vnd.djvu\n" );
			return 'image/vnd.djvu';
		}

		return false;
	}
	
	/**
	 * Detect application-specific file type of a given ZIP file from its
	 * header data.  Currently works for OpenDocument and OpenXML types...
	 * If can't tell, returns 'application/zip'.
	 *
	 * @param $header String: some reasonably-sized chunk of file header
	 * @param $tail   String: the tail of the file
	 * @param $ext Mixed: the file extension, or true to extract it from the filename.
	 *             Set it to false to ignore the extension.
	 *
	 * @return string
	 */
	function detectZipType( $header, $tail = null, $ext = false ) {
		$mime = 'application/zip';
		$opendocTypes = array(
			'chart-template',
			'chart',
			'formula-template',
			'formula',
			'graphics-template',
			'graphics',
			'image-template',
			'image',
			'presentation-template',
			'presentation',
			'spreadsheet-template',
			'spreadsheet',
			'text-template',
			'text-master',
			'text-web',
			'text' );

		// http://lists.oasis-open.org/archives/office/200505/msg00006.html
		$types = '(?:' . implode( '|', $opendocTypes ) . ')';
		$opendocRegex = "/^mimetype(application\/vnd\.oasis\.opendocument\.$types)/";

		$openxmlRegex = "/^\[Content_Types\].xml/";

		if( preg_match( $opendocRegex, substr( $header, 30 ), $matches ) ) {
			$mime = $matches[1];
			wfDebug( __METHOD__.": detected $mime from ZIP archive\n" );
		} elseif( preg_match( $openxmlRegex, substr( $header, 30 ) ) ) {
			$mime = "application/x-opc+zip";
			if( $ext !== true && $ext !== false ) {
				/** This is the mode used by getPropsFromPath
				* These mime's are stored in the database, where we don't really want
				* x-opc+zip, because we use it only for internal purposes
				*/
				if( $this->isMatchingExtension( $ext, $mime) ) {
					/* A known file extension for an OPC file,
					* find the proper mime type for that file extension */
					$mime = $this->guessTypesForExtension( $ext );
				} else {
					$mime = "application/zip";
				}
			}
			wfDebug( __METHOD__.": detected an Open Packaging Conventions archive: $mime\n" );
		} else if( substr( $header, 0, 8 ) == "\xd0\xcf\x11\xe0\xa1\xb1\x1a\xe1" && 
				($headerpos = strpos( $tail, "PK\x03\x04" ) ) !== false &&
				preg_match( $openxmlRegex, substr( $tail, $headerpos + 30 ) ) ) {
			if( substr( $header, 512, 4) == "\xEC\xA5\xC1\x00" ) {
				$mime = "application/msword";
			} 
			switch( substr( $header, 512, 6) ) {
				case "\xEC\xA5\xC1\x00\x0E\x00":
				case "\xEC\xA5\xC1\x00\x1C\x00":
				case "\xEC\xA5\xC1\x00\x43\x00":
					$mime = "application/vnd.ms-powerpoint";
					break;
				case "\xFD\xFF\xFF\xFF\x10\x00":
				case "\xFD\xFF\xFF\xFF\x1F\x00":
				case "\xFD\xFF\xFF\xFF\x22\x00":
				case "\xFD\xFF\xFF\xFF\x23\x00":
				case "\xFD\xFF\xFF\xFF\x28\x00":
				case "\xFD\xFF\xFF\xFF\x29\x00":
				case "\xFD\xFF\xFF\xFF\x10\x02":
				case "\xFD\xFF\xFF\xFF\x1F\x02":
				case "\xFD\xFF\xFF\xFF\x22\x02":
				case "\xFD\xFF\xFF\xFF\x23\x02":
				case "\xFD\xFF\xFF\xFF\x28\x02":
				case "\xFD\xFF\xFF\xFF\x29\x02":
					$mime = "application/vnd.msexcel";
					break;
			}

			wfDebug( __METHOD__.": detected a MS Office document with OPC trailer\n");
		} else {
			wfDebug( __METHOD__.": unable to identify type of ZIP archive\n" );
		}
		return $mime;
	}

	/** Internal mime type detection, please use guessMimeType() for application code instead.
	* Detection is done using an external program, if $wgMimeDetectorCommand is set.
	* Otherwise, the fileinfo extension and mime_content_type are tried (in this order), if they are available.
	* If the dections fails and $ext is not false, the mime type is guessed from the file extension, using
	* guessTypesForExtension.
	* If the mime type is still unknown, getimagesize is used to detect the mime type if the file is an image.
	* If no mime type can be determined, this function returns "unknown/unknown".
	*
	* @param $file String: the file to check
	* @param $ext Mixed: the file extension, or true to extract it from the filename.
	*             Set it to false to ignore the extension.
	*
	* @return string the mime type of $file
	* @access private
	*/
	function detectMimeType( $file, $ext = true ) {
		global $wgMimeDetectorCommand;

		$m = null;
		if ( $wgMimeDetectorCommand ) {
			$fn = wfEscapeShellArg( $file );
			$m = `$wgMimeDetectorCommand $fn`;
		} elseif ( function_exists( "finfo_open" ) && function_exists( "finfo_file" ) ) {

			# This required the fileinfo extension by PECL,
			# see http://pecl.php.net/package/fileinfo
			# This must be compiled into PHP
			#
			# finfo is the official replacement for the deprecated
			# mime_content_type function, see below.
			#
			# If you may need to load the fileinfo extension at runtime, set
			# $wgLoadFileinfoExtension in LocalSettings.php

			$mime_magic_resource = finfo_open(FILEINFO_MIME); /* return mime type ala mimetype extension */

			if ($mime_magic_resource) {
				$m = finfo_file( $mime_magic_resource, $file );
				finfo_close( $mime_magic_resource );
			} else {
				wfDebug( __METHOD__.": finfo_open failed on ".FILEINFO_MIME."!\n" );
			}
		} elseif ( function_exists( "mime_content_type" ) ) {

			# NOTE: this function is available since PHP 4.3.0, but only if
			# PHP was compiled with --with-mime-magic or, before 4.3.2, with --enable-mime-magic.
			#
			# On Windows, you must set mime_magic.magicfile in php.ini to point to the mime.magic file bundeled with PHP;
			# sometimes, this may even be needed under linus/unix.
			#
			# Also note that this has been DEPRECATED in favor of the fileinfo extension by PECL, see above.
			# see http://www.php.net/manual/en/ref.mime-magic.php for details.

			$m = mime_content_type($file);
		} else {
			wfDebug( __METHOD__.": no magic mime detector found!\n" );
		}

		if ( $m ) {
			# normalize
			$m = preg_replace( '![;, ].*$!', '', $m ); #strip charset, etc
			$m = trim( $m );
			$m = strtolower( $m );

			if ( strpos( $m, 'unknown' ) !== false ) {
				$m = null;
			} else {
				wfDebug( __METHOD__.": magic mime type of $file: $m\n" );
				return $m;
			}
		}

		# if desired, look at extension as a fallback.
		if ( $ext === true ) {
			$i = strrpos( $file, '.' );
			$ext = strtolower( $i ? substr( $file, $i + 1 ) : '' );
		}
		if ( $ext ) {
			if( $this->isRecognizableExtension( $ext ) ) {
				wfDebug( __METHOD__. ": refusing to guess mime type for .$ext file, we should have recognized it\n" );
			} else {
				$m = $this->guessTypesForExtension( $ext );
				if ( $m ) {
					wfDebug( __METHOD__.": extension mime type of $file: $m\n" );
					return $m;
				}
			}
		}

		#unknown type
		wfDebug( __METHOD__.": failed to guess mime type for $file!\n" );
		return "unknown/unknown";
	}

	/**
	* Determine the media type code for a file, using its mime type, name and possibly
	* its contents.
	*
	* This function relies on the findMediaType(), mapping extensions and mime
	* types to media types.
	*
	* @todo analyse file if need be
	* @todo look at multiple extension, separately and together.
	*
	* @param $path String: full path to the image file, in case we have to look at the contents
	*        (if null, only the mime type is used to determine the media type code).
	* @param $mime String: mime type. If null it will be guessed using guessMimeType.
	*
	* @return (int?string?) a value to be used with the MEDIATYPE_xxx constants.
	*/
	function getMediaType( $path = null, $mime = null ) {
		if( !$mime && !$path ) return MEDIATYPE_UNKNOWN;

		# If mime type is unknown, guess it
		if( !$mime ) $mime = $this->guessMimeType( $path, false );

		# Special code for ogg - detect if it's video (theora),
		# else label it as sound.
		if( $mime == "application/ogg" && file_exists( $path ) ) {

			// Read a chunk of the file
			$f = fopen( $path, "rt" );
			if ( !$f ) return MEDIATYPE_UNKNOWN;
			$head = fread( $f, 256 );
			fclose( $f );

			$head = strtolower( $head );

			# This is an UGLY HACK, file should be parsed correctly
			if ( strpos( $head, 'theora' ) !== false ) return MEDIATYPE_VIDEO;
			elseif ( strpos( $head, 'vorbis' ) !== false ) return MEDIATYPE_AUDIO;
			elseif ( strpos( $head, 'flac' ) !== false ) return MEDIATYPE_AUDIO;
			elseif ( strpos( $head, 'speex' ) !== false ) return MEDIATYPE_AUDIO;
			else return MEDIATYPE_MULTIMEDIA;
		}

		# check for entry for full mime type
		if( $mime ) {
			$type = $this->findMediaType( $mime );
			if( $type !== MEDIATYPE_UNKNOWN ) return $type;
		}

		# Check for entry for file extension
		$e = null;
		if ( $path ) {
			$i = strrpos( $path, '.' );
			$e = strtolower( $i ? substr( $path, $i + 1 ) : '' );

			# TODO: look at multi-extension if this fails, parse from full path

			$type = $this->findMediaType( '.' . $e );
			if ( $type !== MEDIATYPE_UNKNOWN ) return $type;
		}

		# Check major mime type
		if( $mime ) {
			$i = strpos( $mime, '/' );
			if( $i !== false ) {
				$major = substr( $mime, 0, $i );
				$type = $this->findMediaType( $major );
				if( $type !== MEDIATYPE_UNKNOWN ) return $type;
			}
		}

		if( !$type ) $type = MEDIATYPE_UNKNOWN;

		return $type;
	}

	/** returns a media code matching the given mime type or file extension.
	* File extensions are represented by a string starting with a dot (.) to
	* distinguish them from mime types.
	*
	* This funktion relies on the mapping defined by $this->mMediaTypes
	* @access private
	*/
	function findMediaType( $extMime ) {
		if ( strpos( $extMime, '.' ) === 0 ) { #if it's an extension, look up the mime types
			$m = $this->getTypesForExtension( substr( $extMime, 1 ) );
			if ( !$m ) return MEDIATYPE_UNKNOWN;

			$m = explode( ' ', $m );
		} else {
			# Normalize mime type
			if ( isset( $this->mMimeTypeAliases[$extMime] ) ) {
				$extMime = $this->mMimeTypeAliases[$extMime];
			}

			$m = array($extMime);
		}

		foreach ( $m as $mime ) {
			foreach ( $this->mMediaTypes as $type => $codes ) {
				if ( in_array($mime, $codes, true ) ) {
					return $type;
				}
			}
		}

		return MEDIATYPE_UNKNOWN;
	}

	/**
	 * Get the MIME types that various versions of Internet Explorer would 
	 * detect from a chunk of the content.
	 *
	 * @param $fileName String: the file name (unused at present)
	 * @param $chunk String: the first 256 bytes of the file
	 * @param $proposed String: the MIME type proposed by the server
	 */
	public function getIEMimeTypes( $fileName, $chunk, $proposed ) {
		$ca = $this->getIEContentAnalyzer();
		return $ca->getRealMimesFromData( $fileName, $chunk, $proposed );
	}

	/**
	 * Get a cached instance of IEContentAnalyzer
	 */
	protected function getIEContentAnalyzer() {
		if ( is_null( $this->mIEAnalyzer ) ) {
			$this->mIEAnalyzer = new IEContentAnalyzer;
		}
		return $this->mIEAnalyzer;
	}
}
