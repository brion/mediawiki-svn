package org.wikimedia.lsearch.util;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Hashtable;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/** 
 * Extract some variable from MediaWiki MessageXX.php files. In particular,
 * the localized namespace names (needed for proper parsing of wiki code).
 * 
 * One day, make this implementation suck less, and actually parse some PHP,
 * instead of just catch stuff with regexps... 
 *  
 * @author rainman
 *
 */
public class PHPParser {
	
	protected HashMap<String,Integer> namespaces = new HashMap<String,Integer>();
	
	
	public PHPParser() {
		namespaces.put("NS_MAIN", 0);
		namespaces.put("NS_TALK", 1);
		namespaces.put("NS_USER", 2);
		namespaces.put("NS_USER_TALK", 3);
		namespaces.put("NS_PROJECT", 4);
		namespaces.put("NS_PROJECT_TALK", 5);
		namespaces.put("NS_IMAGE", 6);
		namespaces.put("NS_IMAGE_TALK", 7);
		namespaces.put("NS_MEDIAWIKI", 8);
		namespaces.put("NS_MEDIAWIKI_TALK", 9);
		namespaces.put("NS_TEMPLATE", 10);
		namespaces.put("NS_TEMPLATE_TALK", 11);
		namespaces.put("NS_HELP", 12);
		namespaces.put("NS_HELP_TALK", 13);
		namespaces.put("NS_CATEGORY", 14);
		namespaces.put("NS_CATEGORY_TALK", 15);
	}
	
	public String getFallBack(String text){
		text = text.replaceAll("(#.*)",""); // strip comments
		int flags = Pattern.CASE_INSENSITIVE | Pattern.DOTALL;
		Pattern fallback = Pattern.compile("\\$fallback\\s*=\\s*[\"'](.*?)[\"']",flags);
		Matcher matcher = fallback.matcher(text);
		String ret = null;
		while(matcher.find()){
			String name = matcher.group(1).trim().toLowerCase();
			if(name.length()!=0)
				ret = name;
		}		
		return ret;
		
	}
	
	/** Get redirect magic word */
	public HashSet<String> getRedirectMagic(String text){
		HashSet<String> red = new HashSet<String>();
		int flags = Pattern.CASE_INSENSITIVE | Pattern.DOTALL;
		Pattern nsnames = Pattern.compile("\\$magicWords\\s*=\\s*array\\s*\\((.*?)\\);",flags);
		Pattern entry = Pattern.compile("[\"'](.*?)[\"']\\s*=>\\s*array\\s*\\((.*?)\\)",flags);
		Matcher matcher = nsnames.matcher(text);
		if(matcher.find()){
			String magic = matcher.group(1);		
			Matcher en = entry.matcher(magic);
			//System.out.println(magic);
			while(en.find()){
				if(en.groupCount()==2 && en.group(1).equalsIgnoreCase("redirect")){
					String[] keys = en.group(2).split(",");
					for(int i = 1 ; i<keys.length; i++) // add redirect magic, ignore first
						red.add(keys[i].replace('\'',' ').replace('"',' ').trim().toLowerCase());
				}
			}
		}
		return red;
	}
	
	/** Get a map of localized namespace names: name -> namespace_num */
	public Hashtable<String,Integer> getNamespaces(String text){
		Hashtable<String,Integer> ns = new Hashtable<String,Integer>();
		
		text = text.replaceAll("(#.*)",""); // strip comments
		
		// namespaceNames
		int flags = Pattern.CASE_INSENSITIVE | Pattern.DOTALL;
		Pattern nsnames = Pattern.compile("\\$namespaceNames\\s*=\\s*array\\s*\\((.*?)\\)",flags);
		Pattern entry = Pattern.compile("(\\w+)\\s*=>\\s*[\"'](.*?)[\"']",flags);
		Matcher matcher = nsnames.matcher(text);
		while(matcher.find()){
			Matcher me = entry.matcher(matcher.group(1));
			while(me.find()){
				Integer i = namespaces.get(me.group(1).toUpperCase());
				if(i!=null){
					String name = me.group(2).trim().toLowerCase();
					if(name.length() != 0)
						ns.put(name,i);
				}
			}
		}
		// aliases
		Pattern nsaliases = Pattern.compile("\\$namespaceAliases\\s*=\\s*array\\s*\\((.*?)\\)",flags);
		Pattern alias = Pattern.compile("[\"'](.*?)[\"']\\s*=>\\s*(\\w+)",flags);
		matcher = nsaliases.matcher(text);
		while(matcher.find()){
			Matcher me = alias.matcher(matcher.group(1));
			while(me.find()){
				Integer i = namespaces.get(me.group(2).toUpperCase());
				if(i!=null){
					String name = me.group(1).trim().toLowerCase();
					if(name.length() != 0)
						ns.put(name,i);
				}
			}
		}
		
		return ns;
	}
	
	/** Get wgLanguages from InitialiseSettings */
	public Hashtable<String,String> getLanguages(String text){
		text = text.replaceAll("(#.*)",""); // strip comments
		Hashtable<String,String> langs = new Hashtable<String,String>();
		
		int flags = Pattern.CASE_INSENSITIVE | Pattern.DOTALL;
		Pattern wglang = Pattern.compile("[\"']wgLanguageCode[\"']\\s*=>\\s*array\\s*\\((.*?)\\)",flags);
		Pattern entry = Pattern.compile("[\"'](.*?)[\"']\\s*=>\\s*[\"'](.*?)[\"']",flags);
		Matcher matcher = wglang.matcher(text);
		while(matcher.find()){
			Matcher me = entry.matcher(matcher.group(1));
			while(me.find()){
				langs.put(me.group(1),me.group(2));				
			}
		}
		return langs;
	}
	
	/** Get wgServer from InitialiseSettings */
	public Hashtable<String,String> getServer(String text){
		text = text.replaceAll("(#.*)",""); // strip comments
		Hashtable<String,String> servers = new Hashtable<String,String>();
		
		int flags = Pattern.CASE_INSENSITIVE | Pattern.DOTALL;
		Pattern wgserv = Pattern.compile("[\"']wgServer[\"']\\s*=>\\s*array\\s*\\((.*?)\\)",flags);
		Pattern entry = Pattern.compile("[\"'](.*?)[\"']\\s*=>\\s*[\"'](.*?)[\"']",flags);
		Matcher matcher = wgserv.matcher(text);
		while(matcher.find()){
			Matcher me = entry.matcher(matcher.group(1));
			while(me.find()){
				servers.put(me.group(1),me.group(2));				
			}
		}
		return servers;
	}
	
	public String readFile(String path){
		char buffer[] = new char[32768];
		String text = "";
		try {
			FileReader r = new FileReader(path);
			int len = 0;
			do{ 	
				text += new String(buffer,0,len);
				len = r.read(buffer);							
			} while(len > 0);
			r.close();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} 
		return text;		
	}
	
	public String readURL(URL url) throws IOException{
		char buffer[] = new char[32768];
		String text = "";
		try {
			BufferedReader r = new BufferedReader(
					new InputStreamReader(
							url.openStream()));
			int len = 0;
			do{ 	
				text += new String(buffer,0,len);
				len = r.read(buffer);							
			} while(len > 0);
			r.close();
		} catch (IOException e) {
			throw e;
		}
		return text;		
	}
	
	/** Test stuff 
	 * @throws IOException 
	 * @throws MalformedURLException */
	public static void main(String args[]) throws MalformedURLException, IOException{
		String text = "$namespaceNames = array(\n"+
		"NS_MEDIA            => \"Medija\",\n"+
		"NS_SPECIAL          => \"Posebno\",\n"+
		"# NS_PROJECT set by $wgMetaNamespace\n"+
		"NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji');";
		String text2 = "$fallback='sr-ec';";
	
		String file = "/var/www/html/wiki-lucene/phase3/languages/messages/MessagesEn.php";
		
		PHPParser p = new PHPParser();
		String php = p.readFile(file);
		Hashtable<String,Integer> map = p.getNamespaces(php);
		System.out.println(map);
		System.out.println(p.getFallBack(text2));
		System.out.println(p.getRedirectMagic(php));
		
		System.out.println(p.getLanguages("'wgLanguageCode' => array('default' => '$lang')"));
		String initset = p.readURL(new URL("file:///home/rainman/Desktop/InitialiseSettings.php"));
		System.out.println(p.getLanguages(initset));
		System.out.println(p.getServer(initset));
		
		
	}
}
