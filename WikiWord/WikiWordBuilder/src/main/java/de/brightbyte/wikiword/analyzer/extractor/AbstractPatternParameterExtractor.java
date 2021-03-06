package de.brightbyte.wikiword.analyzer.extractor;

import java.util.Set;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import de.brightbyte.data.MultiMap;
import de.brightbyte.data.ValueSetMultiMap;
import de.brightbyte.wikiword.analyzer.AnalyzerUtils;
import de.brightbyte.wikiword.analyzer.WikiPage;

public abstract class AbstractPatternParameterExtractor implements PropertyExtractor {

	protected String property;
	protected Matcher matcher;
	protected String replacement;
	private boolean capitalize = false;

	public AbstractPatternParameterExtractor(String pattern, String replacement, int flags, String property) {
		this(Pattern.compile(pattern, flags), replacement, property);
	}

	public AbstractPatternParameterExtractor(Pattern pattern, String replacement, String property) {
		this(pattern.matcher(""), replacement, property);
	}

	public AbstractPatternParameterExtractor(Matcher matcher, String replacement, String property) {
		this.property = property;
		this.matcher = matcher;
		this.replacement = replacement;
	}

	public MultiMap<String, CharSequence, Set<CharSequence>> extract(WikiPage page, MultiMap<String, CharSequence, Set<CharSequence>> into) {
		for(CharSequence s: getPageStrings(page)) {
			matcher.reset(s);
			if (matcher.matches()) {
				CharSequence v = matcher.group();
				v = replacement == null ? s : matcher.replaceAll(replacement);
				v = AnalyzerUtils.replaceUnderscoreBySpace(v);
				v = AnalyzerUtils.trim(v);
				
				if (capitalize)
					v = AnalyzerUtils.titleCase(v);
				
				if (into==null) into = new ValueSetMultiMap<String, CharSequence>();
				into.put(property, v);
			}
		}
		
		return into;
	}

	protected abstract Iterable<? extends CharSequence> getPageStrings(WikiPage page);

	public PropertyExtractor setCapitalize(boolean capitalize) {
		this.capitalize = capitalize;
		return this;
	}

}