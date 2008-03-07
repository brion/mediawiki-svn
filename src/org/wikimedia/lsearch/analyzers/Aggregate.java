package org.wikimedia.lsearch.analyzers;

import java.io.IOException;
import java.util.ArrayList;
import java.util.HashSet;

import org.apache.lucene.analysis.Analyzer;
import org.apache.lucene.analysis.Token;
import org.apache.lucene.analysis.TokenStream;
import org.wikimedia.lsearch.config.IndexId;

/**
 * Aggregate bean that captures information about one
 * item going into the some index aggregate field. 
 * 
 * @author rainman
 *
 */
public class Aggregate {
	protected ArrayList<Token> tokens;
	protected float boost;
	protected int noStopWordsLength;
	
	/** Construct from arbitrary text that will be tokenized 
	 * @throws IOException */
	public Aggregate(String text, float boost, IndexId iid, Analyzer analyzer, String field, HashSet<String> stopWords) throws IOException{
		setTokens(toTokenArray(analyzer.tokenStream(field,text)),stopWords);
		this.boost = boost;
		
	}
	/** Set new token array, calc length, etc.. */
	public void setTokens(ArrayList<Token> tokens, HashSet<String> stopWords){
		this.tokens = tokens;
		if(stopWords != null){
			noStopWordsLength = 0;		
			for(Token t : tokens){
				if(!stopWords.contains(t.termText()) && t.getPositionIncrement()!=0)
					noStopWordsLength++;
			}
		} else{
			noStopWordsLength = noAliasLength();
		}
	}
	/** Number of tokens without aliases */
	public int noAliasLength(){
		int len = 0;
		for(Token t : tokens){
			if(t.getPositionIncrement() != 0)
				len++;
		}
		return len;
	}
	
	/** Construct with specific analyzer  
	 * @throws IOException */
	public Aggregate(String text, float boost, IndexId iid, Analyzer analyzer, String field) throws IOException{		
		this.tokens = toTokenArray(analyzer.tokenStream(field,text));
		this.boost = boost;
		this.noStopWordsLength = noAliasLength();
	}
	
	private ArrayList<Token> toTokenArray(TokenStream stream) throws IOException {
		ArrayList<Token> tt = new ArrayList<Token>();
		Token t = null;
		while( (t = stream.next()) != null){
			tt.add(t);
		}
		return tt;
	}

	/** Number of tokens */
	public int length(){
		if(tokens != null)
			return tokens.size();
		else
			return 0;
	}
	
	/** Number of tokens when stop words are excluded */
	public int getNoStopWordsLength(){
		return noStopWordsLength;
	}
	
	/** boost factor */
	public float boost(){
		return boost;
	}

	public Token getToken(int index){
		return tokens.get(index);
	}
	
	public ArrayList<Token> getTokens() {
		return tokens;
	}
	
	/** 
	 * Generate the meta field stored contents 
	 * format: [length] [length without stop words] [boost] [complete length] (1+1+4+1 bytes) 
	 */
	public static byte[] serializeAggregate(ArrayList<Aggregate> items){
		byte[] buf = new byte[items.size() * 7];
		
		for(int i=0;i<items.size();i++){
			Aggregate ag = items.get(i);
			buf[i*7] = (byte)(ag.noAliasLength() & 0xff);
			buf[i*7+1] = (byte)(ag.getNoStopWordsLength() & 0xff);
			int boost = Float.floatToIntBits(ag.boost()); 
	      buf[i*7+2] = (byte)((boost >>> 24) & 0xff);
	      buf[i*7+3] = (byte)((boost >>> 16) & 0xff);
	      buf[i*7+4] = (byte)((boost >>> 8) & 0xff);
	      buf[i*7+5] = (byte)((boost >>> 0) & 0xff);
	      buf[i*7+6] = (byte)(ag.length() & 0xff);
		}
		
		return buf;		
	}
	
	
}
