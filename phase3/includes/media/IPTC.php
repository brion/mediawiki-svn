<?php
/**
*Class for some IPTC functions.

*/
class IPTC {

        /**
        * This takes the results of iptcparse() and puts it into a
        * form that can be handled by mediawiki. Generally called from
        * BitmapMetadataHandler::doApp13.
        *
        * At the moment this is more of an outline, and is definitly
        * not complete.
        * @todo finish for other iptc values
        * @see http://www.iptc.org/std/IIM/4.1/specification/IIMV4.1.pdf
        *
        * @param String $data app13 block from jpeg containg iptc/iim data
        * @return Array iptc metadata array
        */
        static function parse( $rawData ) {
                // TODO: This is nowhere near complete yet.
                $parsed = iptcparse( $rawData );
                $data = Array();
                if (!is_array($parsed)) {
                        return $data;
                }

                $c = '?';
		//charset info contained in tag 1:90.
		if (isset($parsed['1#090']) && isset($parsed['1#090'][0])) {
			$c = self::getCharset($parsed['1#090'][0]);
			unset( $parsed['1#090'] );
		}

		foreach ( $parsed as $tag => $val ) {
			switch( $tag ) {
				case '2#120': /*IPTC caption. mapped with exif ImageDescription*/
					$data['ImageDescription'] = self::convIPTC( $val, $c );
					break;
				case '2#116': /* copyright. Mapped with exif copyright */
					$data['Copyright'] = self::convIPTC( $val, $c );
					break;
				case '2#080': /* byline. Mapped with exif Artist */
					/* TODO: figure out how to handle byline title (2:85) */
					$data['Artist'] = self::convIPTC( $val, $c );
					break;
				case '2#025': /* keywords */
					$data['Keywords'] = self::convIPTC( $val, $c );
					break;
				case '2#101': /* Country (shown)*/
					$data['CountryDest'] = self::convIPTC( $val, $c );
					break;
				case '2#095': /* state/province (shown) */
					$data['ProvinceOrStateDest'] = self::convIPTC( $val, $c );
					break;
				case '2#090': /* city (Shown) */
					$data['CityDest'] = self::convIPTC( $val, $c );
					break;
				case '2#092': /* sublocation (shown) */
					$data['SublocationDest'] = self::convIPTC( $val, $c );
					break;
				case '2#005': /* object name/title */
					$data['ObjectName'] = self::convIPTC( $val, $c );
					break;
				case '2#040': /* special instructions */
					$data['SpecialInstructions'] = self::convIPTC( $val, $c );
					break;
				case '2#105': /* headline*/
					$data['Headline'] = self::convIPTC( $val, $c );
					break;
				case '2#110': /* credit */
					/*"Identifies the provider of the objectdata,
					 * not necessarily the owner/creator". */
					$data['Credit'] = self::convIPTC( $val, $c );
					break;
				case '2#115': /* source */
					/* "Identifies the original owner of the intellectual content of the
					 *objectdata. This could be an agency, a member of an agency or	
					 *an individual." */
					$data['Source'] = self::convIPTC( $val, $c );
					break;
				case '2#007': /* edit status (lead, correction, etc) */
					$data['EditStatus'] = self::convIPTC( $val, $c );
					break;
				case '2#010': /*urgency (1-8. 1 most, 5 normal, 8 low priority)*/
					$data['Urgency'] = self::convIPTC( $val, $c );
					break;
				case '2#022':
					/* "Identifies objectdata that recurs often and predictably...
					 * Example: Euroweather" */
					$data['FixtureIdentifier'] = self::convIPTC( $val, $c );
					break;
				case '2#026':
					/* Content location code (iso 3166 + some custom things)
					 * ex: TUR (for turkey), XUN (for UN), XSP (outer space)
					 * See wikipedia article on iso 3166 and appendix D of iim std. */
					$data['LocationDestCode'] = self::convIPTC( $val, $c );
					break;
				case '2#027':
					/* Content location name. Full prinatable name
					 * of location of photo. */
					$data['LocationDest'] = self::convIPTC( $val, $c );
					break;
				case '2#065':
					/* Originating Program.
					 * Combine with Program version (2:70) if present.
					 */
					$software = self::convIPTC( $val, $c );

					if ( count( $software ) !== 1 ) {
						//according to iim standard this cannot have multiple values
						//so if there is more than one, something weird is happening,
						//and we skip it.
						wfDebugLog( 'iptc', 'IPTC: Wrong count on 2:65 Software field' );
						break;
					}

					if ( isset( $parsed['2#070'] ) ) {
						//if a version is set for the software.
						$softwareVersion = self::convIPTC( $parsed['2#070'], $c );
						unset($parsed['2#070']);
						$data['Software'] = array( array( $software[0], $softwareVersion[0] ) );
					} else {
						$data['Software'] = $software;
					}


					break;
				case '2#075':
					/* Object cycle.
					 * a for morning (am), p for evening, b for both */
					$data['ObjectCycle'] = self::convIPTC( $val, $c );
					break;
				case '2#100':
					/* Country/Primary location code.
					 * "Indicates the code of the country/primary location where the
					 * intellectual property of the objectdata was created"
					 * unclear how this differs from 2#026
					 */
					$data['CountryDestCode'] = self::convIPTC( $val, $c );
					break;
				case '2#118': /*contact*/
					$data['Contact'] = self::convIPTC( $val, $c );
					break;
				case '2#122':
					/* Writer/Editor
					 * "Identification of the name of the person involved in the writing,
					 * editing or correcting the objectdata or caption/abstract."
					 */
					$data['Writer'] = self::convIPTC( $val, $c );
					break;
				case '2#135': /* lang code */
					$data['LanguageCode'] = self::convIPTC( $val, $c );
					break;
				case '2#000': /* iim version */
					// unlike other tags, this is a 2-byte binary number.
					//technically this is required if there is iptc data
					//but in practise it isn't always there.
					if ( strlen( $val[0] ) == 2 ) {
						//if is just to be paranoid.
						$versionValue = ord( substr( $val[0], 0, 1 ) ) * 256;
						$versionValue += ord( substr( $val[0], 1, 1 ) );
						$data['iimVersion'] = $versionValue;
					}
					break;


				// TODO: the date related tags
				// does not do 2:103. Unsure if there is useful data there.
				// TODO: 2:15, 2:20
				// other things not currently done, and not sure if should:
				// 2:12
				// purposely does not do 2:125, 2:130, 2:131,
				// 2:47, 2:50, 2:45, 2:42, 2:8, 2:4, 2:3
				// 2:200, 2:201, 2:202
				// or the audio stuff (2:150 to 2:154)

				default:
					wfDebugLog( 'iptc', "Unsupported iptc tag: $tag. Value: " . implode( ',', $val ));
					break;
			}

		}
		return $data;
	}

	/**
	* Helper function to convert charset for iptc values.
	* @param $data Mixed String or Array: The iptc string
	* @param $charset String: The charset
	*/
	private static function convIPTC ( $data, $charset ) {
		global $wgLang;
		if ( is_array( $data ) ) {
			foreach ($data as &$val) {
				$val = self::convIPTCHelper( $val, $charset );
			}

		} else {
			$data = self::convIPTCHelper ( $data, $charset );
		}
		return $data;
	}
	/**
	* Helper function of a helper function to convert charset for iptc values.
	* @param $data Mixed String or Array: The iptc string
	* @param $charset String: The charset
	*/
	private static function convIPTCHelper ( $data, $charset ) {
		if ( $charset !== '?' ) {
			$data = iconv($charset, "UTF-8//IGNORE", $data);
			if ($data === false) {
				$data = "";
				wfDebug(__METHOD__ . " Error converting iptc data charset $charset to utf-8");
			}
		} else {
			//treat as utf-8 if is valid utf-8. otherwise pretend its iso-8859-1
			// most of the time if there is no 1:90 tag, it is either ascii, latin1, or utf-8
			$oldData = $data;
			UtfNormal::quickIsNFCVerify( $data ); //make $data valid utf-8
			if ($data === $oldData) return $data;
			else return self::convIPTCHelper ( $oldData, 'ISO-8859-1' ); //should this be windows-1252?
		}
		return $data;
	}

	/**
	* take the value of 1:90 tag and returns a charset
	* @param String $tag 1:90 tag. 
	* @return charset name or "?"
	* Warning, this function does not (and is not intended to) detect
	* all iso 2022 escape codes. In practise, the code for utf-8 is the
	* only code that seems to have wide use. It does detect that code.
	*/
	static function getCharset($tag) {

		//Acording to iim standard, charset is defined by the tag 1:90.
		//in which there are iso 2022 escape sequences to specify the character set.
		//the iim standard seems to encourage that all neccesary escape sequences are
		//in the 1:90 tag, but says it doesn't have to be.

		//This is in need of more testing probably. This is definitly not complete.
		//however reading the docs of some other iptc software, it appears that most iptc software
		//only recognizes utf-8. If 1:90 tag is not present content is
		// usually ascii or iso-8859-1 (and sometimes utf-8), but no garuntees.

		//This also won't work if there are more than one escape sequence in the 1:90 tag
		//or if something is put in the G2, or G3 charsets, etc. It will only reliably recognize utf-8.

		// This is just going through the charsets mentioned in appendix C of the iim standard.

		//  \x1b = ESC.
		switch ( $tag ) {
			case "\x1b%G": //utf-8
			//Also call things that are compatible with utf-8, utf-8 (e.g. ascii)
			case "\x1b(B": // ascii
			case "\x1b(@": // iso-646-IRV (ascii in latest version, $ different in older version)
				$c = 'UTF-8';
				break;
			case "\x1b(A": //like ascii, but british.
				$c = 'ISO646-GB';
				break;
			case "\x1b(C": //some obscure sweedish/finland encoding
				$c = 'ISO-IR-8-1';
				break;
			case "\x1b(D":
				$c = 'ISO-IR-8-2';
				break;
			case "\x1b(E": //some obscure danish/norway encoding
				$c = 'ISO-IR-9-1';
				break;
			case "\x1b(F":
				$c = 'ISO-IR-9-2';
				break;
			case "\x1b(G":
				$c = 'SEN_850200_B'; // aka iso 646-SE; ascii-like
				break;
			case "\x1b(I":
				$c = "ISO646-IT";
				break;
			case "\x1b(L":
				$c = "ISO646-PT";
				break;
			case "\x1b(Z":
				$c = "ISO646-ES";
				break;
			case "\x1b([":
				$c = "GREEK7-OLD";
				break;
			case "\x1b(K":
				$c = "ISO646-DE";
				break;
			case "\x1b(N":  //crylic
				$c = "ISO_5427";
				break;
			case "\x1b(`": //iso646-NO
				$c = "NS_4551-1";
				break;
			case "\x1b(f": //iso646-FR
				$c = "NF_Z_62-010"; 
				break;
			case "\x1b(g":
				$c = "PT2"; //iso646-PT2
				break;
			case "\x1b(h":
				$c = "ES2";
				break;
			case "\x1b(i": //iso646-HU
				$c = "MSZ_7795.3";
				break;
			case "\x1b(w":
				$c = "CSA_Z243.4-1985-1";
				break;
			case "\x1b(x":
				$c = "CSA_Z243.4-1985-2";
				break;
			case "\x1b$(B":
			case "\x1b$B":
			case "\x1b&@\x1b$B":
			case "\x1b&@\x1b$(B":
				$c = "JIS_C6226-1983";
				break;
			case "\x1b-A": // iso-8859-1. at least for the high code characters.
			case "\x1b(@\x1b-A":
			case "\x1b(B\x1b-A":
				$c = 'ISO-8859-1';
				break;
			case "\x1b-B": // iso-8859-2. at least for the high code characters.
				$c = 'ISO-8859-2';
				break;
			case "\x1b-C": // iso-8859-3. at least for the high code characters.
				$c = 'ISO-8859-3';
				break;
			case "\x1b-D": // iso-8859-4. at least for the high code characters.
				$c = 'ISO-8859-4';
				break;
			case "\x1b-E": // iso-8859-5. at least for the high code characters.
				$c = 'ISO-8859-5';
				break;
			case "\x1b-F": // iso-8859-6. at least for the high code characters.
				$c = 'ISO-8859-6';
				break;
			case "\x1b-G": // iso-8859-7. at least for the high code characters.
				$c = 'ISO-8859-7';
				break;
			case "\x1b-H": // iso-8859-8. at least for the high code characters.
				$c = 'ISO-8859-8';
				break;
			case "\x1b-I": // CSN_369103. at least for the high code characters.
				$c = 'CSN_369103';
				break;
			default:
				wfDebug(__METHOD__ . 'Unkown charset in iptc 1:90: ' . bin2hex( $tag ) ); 
				//at this point should we give up and refuse to parse iptc?
				$c = '?';
		}
		return $c;
	}
}
