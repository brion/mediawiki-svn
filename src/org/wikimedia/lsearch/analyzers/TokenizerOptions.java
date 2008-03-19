package org.wikimedia.lsearch.analyzers;

/**
 * FastWikiTokenizerEngine options 
 * 
 * @author rainman
 *
 */
public class TokenizerOptions {
	/** if capitalization should be preserved */
	boolean exactCase = false; 
	/** if templates should be relocated, etc.. makes sense only if whole article 
	 * is parsed (and not query,or part of an article) */
	boolean relocationParsing = true;
	/** parse for highlighting, will parse tokens and gaps (which are normalized) */
	boolean highlightParsing = false;
	/** if text should be tidied */
	boolean simplifyGlue = false;
	/** Treat whole text as single token */
	boolean noTokenization = false;
	/** dont' output tokens with tipe upper and titlecase */
	boolean noCaseDetection = false;
	/** don't do decompostion and common transliterations (useful for spellcheck) */
	boolean noAliases = false;
	/** don't pick put trailing chars, e.g. ++ in c++ */
	boolean noTrailing = false;
	/** catch ? and ! as trailing chars (and not sentence breaks) - useful for titles */
	boolean extendedTrailing = false;
	
	public TokenizerOptions(boolean exactCase){
		this.exactCase = exactCase;
	}
	
	public static class NoRelocation extends TokenizerOptions {	
		public NoRelocation(boolean exactCase){
			super(exactCase);
			this.relocationParsing = false;
		}
	}
	
	public static class Title extends TokenizerOptions {	
		public Title(boolean exactCase){
			super(exactCase);
			relocationParsing = false;
			noCaseDetection = true;
			extendedTrailing = true;
		}
	}
	
	public static class Highlight extends TokenizerOptions {
		public Highlight(){
			super(false); 
			this.highlightParsing = true;
			this.relocationParsing = false;
			this.simplifyGlue = true;
		}
	}
	
	/** Used for titles, doesn't simply glue and has no case detection */
	public static class HighlightOriginal extends Highlight {
		public HighlightOriginal(){
			this.simplifyGlue = false;
			this.noCaseDetection = true;
		}
	}
	/** Used to filter prefixes (up to FastWikiTokenizer.MAX_WORD_LEN chars) */
	public static class PrefixCanonization extends TokenizerOptions {
		public PrefixCanonization(){
			super(false);
			this.noTokenization = true;
		}
	}
	
	public static class SpellCheck extends TokenizerOptions {
		public SpellCheck(){
			super(false);
			relocationParsing = false;
			noAliases = true;
			noTrailing = true;
		}
	}
	
	public static class SpellCheckTitle extends Title {
		public SpellCheckTitle(){
			super(false);
			noAliases = true;
			noTrailing = true;
		}
	}
}
