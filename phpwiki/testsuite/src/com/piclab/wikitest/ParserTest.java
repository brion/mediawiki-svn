
/*
 * Test parsing of WikiText into HTML.
 */

package com.piclab.wikitest;
import com.meterware.httpunit.*;
import java.util.regex.*;

public class ParserTest extends WikiTest {

public String testName() { return "Parsing"; }

protected int initTest() throws Exception {
	m_suite.logout();
	return 0;
}

protected int runTest() throws Exception {
	int c = 0;

	if ( 0 != ( c = part1() ) ) { return fail( c ); }
	if ( 0 != ( c = part2() ) ) { return fail( c ); }
	if ( 0 != ( c = part3() ) ) { return fail( c ); }
	if ( 0 != ( c = part4() ) ) { return fail( c ); }
	if ( 0 != ( c = part5() ) ) { return fail( c ); }
	if ( 0 != ( c = part6() ) ) { return fail( c ); }
	if ( 0 != ( c = part7() ) ) { return fail( c ); }
	return 0;
}

/*
 * Check replacement of variables like {{NUMBEROFARTICLES}}
 */
private int part1() throws Exception {
	String[] pats = {
	  "Month: \\d+", "Month name: [A-Z][a-z]+", "Day: \\d+",
	  "Day name: [A-Z][a-z]+day", "Year: \\d\\d\\d\\d",
	  "Time: \\d\\d:\\d\\d", "Number of articles: \\d+"
	};

	WebResponse wr = m_suite.viewPage( "Bracketvars" );
	String text = getArticle( wr );

	Pattern p = null;
	Matcher m = null;
	for (int i = 0; i < pats.length; ++i) {
		p = Pattern.compile( pats[i], Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m = p.matcher( text );

		if ( ! m.find() ) {
			return 101 + i;
		}
	}
	return 0;
}

/*
 * Check block-level elements like bullet lists and pre sections.
 */
private int part2() throws Exception {
	String[] pats = {
	  "\\(1\\)[^(]*<ul>\\s*<li>[^<]*</li>\\s*<li>[^<]*</li>\\s*<li>[^<]*</li>\\s*</ul>",
	  "\\(2\\)[^(]*<ol>\\s*<li>[^<]*</li>\\s*<li>[^<]*</li>\\s*<li>[^<]*</li>\\s*</ol>",
	  "\\(3\\)[^(]*<ul>\\s*<li>[^<]*</li>\\s*</ul>[^<]*Par",
	  "\\(4\\)[^(]*<ol>\\s*<li>[^<]*</li>\\s*<li>[^<]*</li>\\s*</ol>[^<]*Par",
	  "\\(5\\)[^(]*<pre>\\s*Fixed[^<]*</pre>",
	  "\\(6\\)[^(]*Par[^<]*<ol>\\s*<li>[^<]*</li>\\s*</ol>",
	  "\\(7\\)[^(]*<pre>\\s*Fixed[^<]*</pre>\\s*<ul>\\s*<li>[^<]*</li>\\s*</ul>",
	  "\\(8\\)[^(]*<ul>\\s*<li>\\s*Level 1\\s*</li>\\s*<li>\\s*Level 1\\s*" +
	    "<ul>\\s*<li>\\s*Level 2\\s*</li>\\s*<li>\\s*Level 2\\s*<ul>\\s*" +
		"<li>\\s*Level 3\\s*</li>\\s*</ul>\\s*</li>\\s*<li>\\s*Level 2\\s*" +
		"</li>\\s*</ul>\\s*</li>\\s*<li>\\s*Level 1\\s*<ul>\\s*<li>\\s*" +
		"Level 2\\s*<ul>\\s*<li>\\s*Level 3\\s*<ul>\\s*<li>\\s*Level 4\\s*" +
		"</li>\\s*</ul>\\s*</li>\\s*</ul>\\s*</li>\\s*</ul>\\s*</li>\\s*" +
		"<li>\\s*Level 1\\s*</li>\\s*</ul>",
	  "\\(9\\)[^(]*<ol>\\s*<li>\\s*Level 1\\s*</li>\\s*<li>\\s*Level 1\\s*" +
	    "<ol>\\s*<li>\\s*Level 2\\s*</li>\\s*<li>\\s*Level 2\\s*<ol>\\s*" +
		"<li>\\s*Level 3\\s*</li>\\s*</ol>\\s*</li>\\s*<li>\\s*Level 2\\s*" +
		"</li>\\s*</ol>\\s*</li>\\s*<li>\\s*Level 1\\s*<ol>\\s*<li>\\s*" +
		"Level 2\\s*<ol>\\s*<li>\\s*Level 3\\s*<ol>\\s*<li>\\s*Level 4\\s*" +
		"</li>\\s*</ol>\\s*</li>\\s*</ol>\\s*</li>\\s*</ol>\\s*</li>\\s*" +
		"<li>\\s*Level 1\\s*</li>\\s*</ol>",
	  "\\(10\\)[^(]*<ul>\\s*<li>\\s*Level 1\\s*</li>\\s*<li>\\s*Level 1\\s*" +
	    "<ol>\\s*<li>\\s*Level 2\\s*</li>\\s*<li>\\s*Level 2\\s*<ul>\\s*" +
		"<li>\\s*Level 3\\s*</li>\\s*</ul>\\s*</li>\\s*<li>\\s*Level 2\\s*" +
		"</li>\\s*</ol>\\s*</li>\\s*<li>\\s*Level 1\\s*<ol>\\s*<li>\\s*" +
		"Level 2\\s*<ul>\\s*<li>\\s*Level 3\\s*<ol>\\s*<li>\\s*Level 4\\s*" +
		"</li>\\s*</ol>\\s*</li>\\s*</ul>\\s*</li>\\s*</ol>\\s*</li>\\s*" +
		"<li>\\s*Level 1\\s*</li>\\s*</ul>",
	  "\\(11\\)[^(]*<dl>\\s*<dt>\\s*Word\\s*</dt>\\s*<dd>\\s*Definition\\s*</dd>\\s*</dl>",
	  "\\(12\\)[^(]*<dl>\\s*<dt>\\s*Word\\s*</dt>\\s*<dd>\\s*Definition\\s*</dd>\\s*</dl>",
	  "\\(13\\)[^(]*<dl>\\s*<dt>\\s*Word\\s*<ol>\\s*<li>\\s*First[^<]*</li>" +
	    "\\s*<li>\\s*Second[^<]*</li>\\s*</ol>\\s*</dt>\\s*</dl>",
	  "\\(14\\)[^(]*<dl>\\s*<dd>\\s*<dl>\\s*<dd>\\s*Double[^<]*</dd>\\s*</dl>" +
	    "\\s*</dd>\\s*</dl>",
	  "\\(15\\)[^(]*<dl>\\s*<dd>\\s*<dl>\\s*<dd>\\s*<dl>\\s*<dd>\\s*Triple" +
	    "[^<]*</dd>\\s*</dl>\\s*</dd>\\s*</dl>\\s*</dd>\\s*</dl>\\s*Par"
	};

	WebResponse wr = m_suite.viewPage( "Blocklevels" );
	String text = getArticle( wr );

	Pattern p = null;
	Matcher m = null;
	for (int i = 0; i < pats.length; ++i) {
		p = Pattern.compile( pats[i], Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m = p.matcher( text );

		if ( ! m.find() ) {
			return 201 + i;
		}
	}
	return 0;
}

/*
 * Check translation of quotes to bold/italic
 */
private int part3() throws Exception {
	String[] pats = {
	  "\\(1\\) normal <strong>bold</strong> normal",
	  "\\(2\\) normal <em>italic</em> normal",
	/*"\\(3\\) normal <strong><em>bold italic</em></strong> normal",*/
	  "\\(4\\) normal <strong>bold <em>bold italic</em> bold</strong> normal",
	  "\\(5\\) normal <em>italic <strong>bold italic</strong> italic</em> normal",
	  "\\(6\\) normal <strong><em>bold italic</em> bold</strong> normal",
	/*"\\(7\\) normal <em><strong>bold italic</strong> italic</em> normal",*/
	  "\\(8\\) normal <em>italic <strong>bold italic</strong></em> normal",
	/*"\\(9\\) normal <strong>bold <em>bold italic</em></strong> normal",*/
	  "\\(10\\) normal <strong>bold's</strong> normal",
	  "\\(11\\) normal <em>italic's</em> normal",
	  "\\(12\\) normal <em>italic's <strong>bold's italic</strong> italic's</em> normal",
	  "\\(13\\) normal <strong><em>bold's italic</em> bold's</strong> normal",
	/*  "\\(14\\) normal <em>italic</em>' normal",
	  "\\(15\\) normal '<strong>bold</strong> normal",
	  "\\(16\\) normal <em>italic</em> normal <em>italic</em> normal",
	  "\\(17\\) normal <em>italic</em> normal <strong>bold</strong> normal",
	  "\\(18\\) normal <strong>bold</strong> normal <strong>bold</strong> normal",
	  "\\(19\\) normal <strong>bold</strong> normal <em>italic</em> normal"
	*/
	};

	WebResponse wr = m_suite.viewPage( "Quotes" );
	String text = getArticle( wr );

	Pattern p = null;
	Matcher m = null;
	for (int i = 0; i < pats.length; ++i) {
		p = Pattern.compile( pats[i], Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m = p.matcher( text );

		if ( ! m.find() ) {
			return 301 + i;
		}
	}
	return 0;
}

/*
 * Check rendering of external links
 */
private int part4() throws Exception {
	String[] pats = {
	  "\\(1\\) <a\\s[^>]*href\\s*=\\s*.http://a/b/c",
	  "\\(1\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>ABC</a",
	  "\\(2\\) <a\\s[^>]*href\\s*=\\s*.https://d/e/f",
	  "\\(2\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>DEF</a",
	  "\\(3\\) <a\\s[^>]*href\\s*=\\s*.ftp://g/h/i",
	  "\\(3\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>GHI</a",
	  "\\(4\\) <a\\s[^>]*href\\s*=\\s*.gopher://j/k/l",
	  "\\(4\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>JKL</a",
	  "\\(5\\) <a\\s[^>]*href\\s*=\\s*.news:a\\.b\\.c",
	  "\\(5\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>A\\.B\\.C</a",
	  "\\(6\\) <a\\s[^>]*href\\s*=\\s*.mailto:a@b\\.c",
	  "\\(6\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>A@B\\.C</a",
	  "\\(7\\) <a\\s[^>]*href\\s*=\\s*.http://m/n/o",
	  "\\(7\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>\\[1\\]</a",
	  "\\(8\\) <a\\s[^>]*href\\s*=\\s*.http://p/q/r",
	  "\\(8\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>\\[2\\]</a",
	  "\\(9\\) <a\\s[^>]*href\\s*=\\s*.http://a/b/c\\.png",
	  "\\(9\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>\\[3\\]</a",
	  "\\(10\\) <a\\s[^>]*href\\s*=\\s*.http://d/e/f\\.jpg",
	  "\\(10\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>\\[4\\]</a",
	  "\\(11\\) <a\\s[^>]*href\\s*=\\s*.http://a/b/c",
	  "\\(11\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>http://a/b/c</a",
	  "\\(12\\) <img\\s[^>]*src\\s*=\\s*.http://a/b/c\\.png",
	  "\\(12\\) <img\\s[^>]*alt\\s*=\\s*.c\\.png",
	  "\\(13\\) <img\\s[^>]*src\\s*=\\s*.http://d/e/f\\.jpg",
	  "\\(13\\) <img\\s[^>]*alt\\s*=\\s*.f\\.jpg",
	  "\\(14\\) <a\\s[^>]*href\\s*=\\s*.http://a/b/c",
	  "\\(14\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>http://a/b/c</a[^>]*>\\. More",
	  "\\(15\\) <a\\s[^>]*href\\s*=\\s*.http://d/e/f",
	  "\\(15\\) <a\\s[^>]*class\\s*=\\s*.external.[^>]*>http://d/e/f</a[^>]*>, More"
	};

	WebResponse wr = m_suite.viewPage( "ExternalLinks" );
	String text = getArticle( wr );

	Pattern p = null;
	Matcher m = null;
	for (int i = 0; i < pats.length; ++i) {
		p = Pattern.compile( pats[i], Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m = p.matcher( text );

		if ( ! m.find() ) {
			return 401 + i;
		}
	}
	return 0;
}

/*
 * Check rendering of internal links
 */
private int part5() throws Exception {
	String[] pats = {
	  "\\(1\\) <a\\s[^>]*class\\s*=\\s*.internal",
	  "\\(1\\) <a\\s[^>]*href\\s*=[^>]*Mathematics[^>]*>Mathematics</a",
	  "\\(2\\) <a\\s[^>]*class\\s*=\\s*.new",
	  "\\(2\\) <a\\s[^>]*href\\s*=[^>]*Non-existing_article[^>]*action=edit",
	  "\\(3\\) <a\\s[^>]*class\\s*=\\s*.internal",
	  "\\(3\\) <a\\s[^>]*href\\s*=[^>]*Cooking[^>]*>Burning</a",
	  "\\(4\\) <a\\s[^>]*class\\s*=\\s*.internal",
	  "\\(4\\) <a\\s[^>]*href\\s*=[^>]*User:Fred[^>]*>Fred</a",
	  "\\(5\\) <a\\s[^>]*class\\s*=\\s*.internal",
	  "\\(5\\) <a\\s[^>]*href\\s*=[^>]*Talk:Language[^>]*>Talk:Language</a",
	  "\\(6\\) <a\\s[^>]*class\\s*=\\s*.image",
	  "\\(6\\) <a\\s[^>]*href\\s*=[^>]*Image:Foo.png",
	  "\\(6\\) <a\\s[^>]*>\\s*<img\\s[^>]*src\\s*=[^>]*Foo.png",
	  "\\(6\\) <a\\s[^>]*>\\s*<img\\s[^>]*alt\\s*=[^>]*Foo.png[^>]*>\\s*</a",
	  "\\(7\\) <a\\s[^>]*class\\s*=\\s*.media",
	  "\\(7\\) <a\\s[^>]*href\\s*=[^>]*Bar.ogg[^>]*>Bar.ogg</a",
	/* International stuff is changing */
	  "\\(9\\) <a\\s[^>]*class\\s*=\\s*.image",
	  "\\(9\\) <a\\s[^>]*href\\s*=[^>]*Image:Bar.jpg",
	  "\\(9\\) <a\\s[^>]*>\\s*<img\\s[^>]*src\\s*=[^>]*Bar.jpg",
	  "\\(9\\) <a\\s[^>]*>\\s*<img\\s[^>]*alt\\s*=[^>]*Alt text[^>]*>\\s*</a",
	  "\\(10\\) <a\\s[^>]*class\\s*=\\s*.internal",
	  "\\(10\\) <a\\s[^>]*href\\s*=[^>]*Game[^s][^>]*>Games</a"
	};

	WebResponse wr = m_suite.viewPage( "InternalLinks" );
	String text = getArticle( wr );

	Pattern p = null;
	Matcher m = null;
	for (int i = 0; i < pats.length; ++i) {
		p = Pattern.compile( pats[i], Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m = p.matcher( text );

		if ( ! m.find() ) {
			return 501 + i;
		}
	}
	return 0;
}

/*
 * Check headings and horizontal rules
 */
private int part6() throws Exception {
	String[] pats = {
	};

	WebResponse wr = m_suite.viewPage( "Headings" );
	String text = getArticle( wr );

	Pattern p = null;
	Matcher m = null;
	for (int i = 0; i < pats.length; ++i) {
		p = Pattern.compile( pats[i], Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m = p.matcher( text );

		if ( ! m.find() ) {
			return 601 + i;
		}
	}
	return 0;
}

/*
 * Check magic text replacements like ISBNs, RFCs
 */
private int part7() throws Exception {
	String[] pats = {
	};

	WebResponse wr = m_suite.viewPage( "Magics" );
	String text = getArticle( wr );

	Pattern p = null;
	Matcher m = null;
	for (int i = 0; i < pats.length; ++i) {
		p = Pattern.compile( pats[i], Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m = p.matcher( text );

		if ( ! m.find() ) {
			return 701 + i;
		}
	}
	return 0;
}

private Pattern m_startdiv = null, m_enddiv = null;

private String getArticle( WebResponse wr ) throws Exception {
	String text = wr.getText();
	Matcher m = null;

	if ( m_startdiv == null ) {
		m_startdiv = Pattern.compile( "<div\\s[^>]*id\\s*=\\s*.article[^>]*>",
		  Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
		m_enddiv = Pattern.compile( "</div[^>]*>",
		  Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
	}

	m = m_startdiv.matcher( text );
	if (! m.find()) {
		throw new WikiSuiteFailureException( "Can't find article div start." );
	}

	text = text.substring( m.end() );
	m = m_enddiv.matcher( text );
	if (! m.find()) {
		throw new WikiSuiteFailureException( "Can't find article div end." );
	}
	text = text.substring( 0, m.start() );
	return text;
}

public static void main( String[] params ) {
	(new ParserTest()).runSingle( params );
}

}
