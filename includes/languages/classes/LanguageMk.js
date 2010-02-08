
/**
 *
 * @ingroup Language
 */
	/**
	 * Plural forms per
	 * http://unicode.org/repos/cldr-tmp/trunk/diff/supplemental/language_plural_rules.html#mk
	 */
	mw.lang.convertPlural = function( count, forms ) {
		
		forms = mw.lang.preConvertPlural( forms, 2 );

		if ( count % 10 === 1 ) {
			return forms[0];
		} else {
			return forms[1];
		}
	}
