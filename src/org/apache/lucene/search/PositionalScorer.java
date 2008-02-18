package org.apache.lucene.search;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.HashMap;

import org.apache.lucene.index.TermPositions;

/**
 * Scorer for positional queries
 * 
 * @author rainman
 *
 */
abstract public class PositionalScorer extends PhraseScorer {
	protected int phraseLen;
	protected int phraseLenNoStopWords;
	protected PositionalOptions options;
	protected boolean useExactBoost = true;
	
	/** super-detailed debug info */
	public final static boolean DEBUG = false; 
	public HashMap<Integer,ArrayList<Explanation>> explanations = null;
	
	PositionalScorer(Weight weight, TermPositions[] tps, int[] offsets, int stopWordCount, Similarity similarity, 
			byte[] norms, PositionalOptions options) {
		super(weight, tps, offsets, similarity, norms);		
		this.options = options;
		this.phraseLen = tps.length;
		this.phraseLenNoStopWords = phraseLen - stopWordCount;
	}

	public float score() throws IOException {		
		float raw = transformFreq(freq) * value; // raw score
		//float sc = raw * Similarity.decodeNorm(norms[first.doc]); // normalize
		float sc = raw ; // no norms

		return sc; 
	}
	
	public boolean skipTo(int target) throws IOException {
		if(!firstTime && doc() >= target){
			return more; // we are at the target or passed it
		}
		return super.skipTo(target);
	}
	
	public Explanation explain(final int doc) throws IOException {
		Explanation tfExplanation = new Explanation();

		while (next() && doc() < doc) {}

		float phraseFreq = (doc() == doc) ? transformFreq(freq) : 0.0f;
		tfExplanation.setValue(phraseFreq);
		tfExplanation.setDescription("tf(freq=" + freq + ")");

		// add extra info about every term in the sum
		if(DEBUG && explanations != null && explanations.get(doc) != null){
			Explanation eFreq = new Explanation();
			eFreq.setValue(freq);
			eFreq.setDescription("sum of:");				
			for(Explanation e : explanations.get(doc))
				eFreq.addDetail(e);
			tfExplanation.addDetail(eFreq);
		}

		return tfExplanation;
	}
	
	protected float transformFreq(float freq){
		return (float) (Math.sqrt(1+freq)-1);
	}
	
	/** aggregate freq scores for phrases */
	protected float addToFreq(float freq, float add){
		if(options.takeMaxScore){
			// return max of (freq,add)
			if(add > freq)
				return add;
			else
				return freq;
		} else
			return freq + add; 		// maybe repeated phrases should get less score?
	}
	
	/** 
	 * Calculate phrase score for certain phrase. 
	 * Favour exact matches, and phrases near beginning.
	 * @throws IOException 
	 */ 
	public float freqScore(int start, int distance) throws IOException{
		//System.out.println("freqScore at start="+start+", dist="+distance);
		int offset = start + distance;
		float begin = 1;
		float rank = 1;
		if(options.useBeginBoost){
			if(offset < 25)
				begin = options.beginTable[0];
			if(offset < 50)
				begin = options.beginTable[1];
			else if(offset < 200)
				begin = options.beginTable[2];
			else if(offset < 500)
				begin = options.beginTable[3];
			// only fetch ranking data on begin-of-article match
			if(begin>1 && options.rankMeta != null)
				rank = 1 + (float)Math.log10(options.rankMeta.rank(doc())) * (begin/options.beginTable[0]);
		}

		float exact = 1;
		if(distance == 0 && useExactBoost)
			exact = options.exactBoost;
		
		float baseScore = rank * begin * exact * (float)Math.sqrt(1.0f / (distance + 1));
		if(DEBUG){
			// provide very extensive explanations
			if(explanations == null)
				explanations = new HashMap<Integer,ArrayList<Explanation>>();
			ArrayList<Explanation> expl = explanations.get(doc());
			if(expl == null){
				expl = new ArrayList<Explanation>();
				explanations.put(doc(),expl);
			}
			Explanation e = new Explanation();
			e.setValue(baseScore);
			e.setDescription("Frequency, product of:");
			expl.add(e);
			Explanation eBegin = new Explanation();
			eBegin.setValue(begin);
			eBegin.setDescription("Begin (offset="+offset+")");
			e.addDetail(eBegin);
			Explanation eRank = new Explanation();
			eRank.setValue(rank);
			eRank.setDescription("Begin rank");
			e.addDetail(eRank);
			Explanation eExact = new Explanation();
			eExact.setValue(exact);
			eExact.setDescription("Exact (distance="+distance+")");
			e.addDetail(eExact);
			Explanation eDist = new Explanation();
			eDist.setValue((float)Math.sqrt(1.0f / (distance+1)));
			eDist.setDescription("Distance (distance="+distance+")");
			e.addDetail(eDist);
		}
		if(options.aggregateMeta != null){
			// aggregate field !
			int len = options.aggregateMeta.length(doc(),start);
			int lenNoStopWords = options.aggregateMeta.lengthNoStopWords(doc(),start);
			float wholeBoost = (phraseLen == len)? options.wholeBoost : 1;
			// no stop boost - only if matched words >= stop words
			float wholeBoostNoStopWords = (phraseLenNoStopWords == lenNoStopWords && lenNoStopWords>=(len-lenNoStopWords) && lenNoStopWords>1)? options.wholeNoStopWordsBoost : 1;
			float boost = 1;
			if(options.useRankForWholeMatch && (wholeBoost>1 || wholeBoostNoStopWords>1))
				boost = options.aggregateMeta.rank(doc());
			else
				boost = options.aggregateMeta.boost(doc(),start);
			float wholeOnly = 1;
			if(options.onlyWholeMatch && wholeBoost==1 && wholeBoostNoStopWords==1)
				wholeOnly = 0; // we didn't match the whole thing
			int propPhrase, propTotal;
			if(options.useNoStopWordLen){
				propPhrase = phraseLenNoStopWords;
				propTotal = lenNoStopWords;
			} else{
				propPhrase = phraseLen;
				propTotal = len;
			}
			float score = boost * baseScore * (propPhrase / (float)propTotal) * wholeBoost * wholeBoostNoStopWords * wholeOnly; 
			if(DEBUG){
				Explanation e = explanations.get(doc()).get(explanations.get(doc()).size()-1);
				e.setValue(score);
				Explanation eInfo = new Explanation();
				eInfo.setValue(boost);
				eInfo.setDescription("Phrase boost");
				e.addDetail(eInfo);
				Explanation eLen = new Explanation();
				eLen.setValue(phraseLen / (float)len);
				eLen.setDescription("Phrase length proportion (matched="+propPhrase+", total="+propTotal+")");
				e.addDetail(eLen);
				Explanation eW = new Explanation();
				eW.setValue(wholeBoost);
				eW.setDescription("Whole phrase match boost (matched="+phraseLen+", total="+len+")");
				e.addDetail(eW);
				Explanation eNS = new Explanation();
				eNS.setValue(wholeBoostNoStopWords);
				eNS.setDescription("Whole phrase match boost, no stop words (matched="+phraseLenNoStopWords+", total="+lenNoStopWords+")");
				e.addDetail(eNS);
				Explanation eWO = new Explanation();
				eWO.setValue(wholeOnly);
				eWO.setDescription("Whole only (enabled="+options.onlyWholeMatch+")");
				e.addDetail(eWO);
			}
			return score;
		} else
			return baseScore;
	}
	
	/**
	 * Scorer when there is only one term in phrase
	 * 
	 * @author rainman
	 *
	 */
	final public static class TermScorer extends PositionalScorer {		
		TermScorer(Weight weight, TermPositions[] tps, int[] offsets, int stopWordCount, Similarity similarity, 
				byte[] norms, PositionalOptions options) {
			super(weight, tps, offsets, stopWordCount, similarity, norms, options);
			useExactBoost = false; // we won't use exact boost since all hits would be exact 
		}

		protected final float phraseFreq() throws IOException {
			float freq = 0;
			first.firstPosition();
			do{
				freq = addToFreq(freq,freqScore(first.position,0)); // match
			} while(first.nextPosition());
			return freq;
		}
	}
	
	/**
	 * Scorer for phrases with no slop (slop factor=0)
	 * 
	 *
	 */
	final public static class ExactScorer extends PositionalScorer {
		ExactScorer(Weight weight, TermPositions[] tps, int[] offsets, int stopWordCount, Similarity similarity, 
	  		 byte[] norms, PositionalOptions options) {
			    super(weight, tps, offsets, stopWordCount, similarity, norms, options);
	  }

	  protected final float phraseFreq() throws IOException {
	    // sort list with pq
	    pq.clear();
	    for (PhrasePositions pp = first; pp != null; pp = pp.next) {
	      pp.firstPosition();
	      pq.put(pp);				  // build pq from list
	    }
	    pqToList();					  // rebuild list from pq

	    // sum of scores for each phrase
	    float freq = 0;
	    do {					  // find position w/ all terms
	      while (first.position < last.position) {	  // scan forward in first
		    do {
		      if (!first.nextPosition())
		        return (float)freq;
		    } while (first.position < last.position);
		      firstToLast();
	      }
	      freq = addToFreq(freq,freqScore(first.position,0)); // match
	    } while (last.nextPosition());
	  
	    return freq;
	  }
	 
	}
	
	/**
	 * Scorer for sloppy queries
	 *
	 * 
	 */
	final static public class SloppyScorer extends PositionalScorer {
	    private int slop;
	    private PhrasePositions repeats[];
	    private boolean checkedRepeats;

	    SloppyScorer(Weight weight, TermPositions[] tps, int[] offsets, int stopWordCount, Similarity similarity, int slop, 
	   		 byte[] norms, PositionalOptions options) {
			    super(weight, tps, offsets, stopWordCount, similarity, norms, options);
	   	 this.slop = slop;
	    }

	    /**
	     * Score a candidate doc for all slop-valid position-combinations (matches) 
	     * encountered while traversing/hopping the PhrasePositions.
	     * <br> The score contribution of a match depends on the distance: 
	     * <br> - highest score for distance=0 (exact match).
	     * <br> - score gets lower as distance gets higher.
	     * <br>Example: for query "a b"~2, a document "x a b a y" can be scored twice: 
	     * once for "a b" (distance=0), and once for "b a" (distance=2).
	     * <br>Pssibly not all valid combinations are encountered, because for efficiency  
	     * we always propagate the least PhrasePosition. This allows to base on 
	     * PriorityQueue and move forward faster. 
	     * As result, for example, document "a b c b a"
	     * would score differently for queries "a b c"~4 and "c b a"~4, although 
	     * they really are equivalent. 
	     * Similarly, for doc "a b c b a f g", query "c b"~2 
	     * would get same score as "g f"~2, although "c b"~2 could be matched twice.
	     * We may want to fix this in the future (currently not, for performance reasons).
	     */
	    protected final float phraseFreq() throws IOException {
	        int end = initPhrasePositions();
	        
	        float freq = 0.0f;
	        boolean done = (end<0);
	        while (!done) {
	            PhrasePositions pp = (PhrasePositions) pq.pop();
	            int start = pp.position;
	            int next = ((PhrasePositions) pq.top()).position;

	            boolean tpsDiffer = true;
	            for (int pos = start; pos <= next || !tpsDiffer; pos = pp.position) {
	                if (pos<=next && tpsDiffer)
	                    start = pos;				  // advance pp to min window
	                if (!pp.nextPosition()) {
	                    done = true;          // ran out of a term -- done
	                    break;
	                }
	                tpsDiffer = !pp.repeats || termPositionsDiffer(pp);
	            }

	            int matchLength = end - start;
	            if (matchLength <= slop)
	                freq = addToFreq(freq,freqScore(start,matchLength)); // score match
	            
	            if (pp.position > end)
	                end = pp.position;
	            pq.put(pp);				  // restore pq
	        }

	        return freq;
	    }
	    
	    
	    /**
	     * Init PhrasePositions in place.
	     * There is a one time initializatin for this scorer:
	     * <br>- Put in repeats[] each pp that has another pp with same position in the doc.
	     * <br>- Also mark each such pp by pp.repeats = true.
	     * <br>Later can consult with repeats[] in termPositionsDiffer(pp), making that check efficient.
	     * In particular, this allows to score queries with no repetiotions with no overhead due to this computation.
	     * <br>- Example 1 - query with no repetitions: "ho my"~2
	     * <br>- Example 2 - query with repetitions: "ho my my"~2
	     * <br>- Example 3 - query with repetitions: "my ho my"~2
	     * <br>Init per doc w/repeats in query, includes propagating some repeating pp's to avoid false phrase detection.  
	     * @return end (max position), or -1 if any term ran out (i.e. done) 
	     * @throws IOException 
	     */
	    private int initPhrasePositions() throws IOException {
	        int end = 0;
	        
	        // no repeats at all (most common case is also the simplest one)
	        if (checkedRepeats && repeats==null) {
	            // build queue from list
	            pq.clear();
	            for (PhrasePositions pp = first; pp != null; pp = pp.next) {
	                pp.firstPosition();
	                if (pp.position > end)
	                    end = pp.position;
	                pq.put(pp);         // build pq from list
	            }
	            return end;
	        }
	        
	        // position the pp's
	        for (PhrasePositions pp = first; pp != null; pp = pp.next)
	            pp.firstPosition();
	        
	        // one time initializatin for this scorer
	        if (!checkedRepeats) {
	            checkedRepeats = true;
	            // check for repeats
	            HashMap m = null;
	            for (PhrasePositions pp = first; pp != null; pp = pp.next) {
	                int tpPos = pp.position + pp.offset;
	                for (PhrasePositions pp2 = pp.next; pp2 != null; pp2 = pp2.next) {
	                    int tpPos2 = pp2.position + pp2.offset;
	                    if (tpPos2 == tpPos) { 
	                        if (m == null)
	                            m = new HashMap();
	                        pp.repeats = true;
	                        pp2.repeats = true;
	                        m.put(pp,null);
	                        m.put(pp2,null);
	                    }
	                }
	            }
	            if (m!=null)
	                repeats = (PhrasePositions[]) m.keySet().toArray(new PhrasePositions[0]);
	        }
	        
	        // with repeats must advance some repeating pp's so they all start with differing tp's       
	        if (repeats!=null) {
	            // must propagate higher offsets first (otherwise might miss matches).
	            Arrays.sort(repeats,  new Comparator() {
	                public int compare(Object x, Object y) {
	                    return ((PhrasePositions) y).offset - ((PhrasePositions) x).offset;
	                }});
	            // now advance them
	            for (int i = 0; i < repeats.length; i++) {
	                PhrasePositions pp = repeats[i];
	                while (!termPositionsDiffer(pp)) {
	                  if (!pp.nextPosition())
	                      return -1;    // ran out of a term -- done  
	                } 
	            }
	        }
	      
	        // build queue from list
	        pq.clear();
	        for (PhrasePositions pp = first; pp != null; pp = pp.next) {
	            if (pp.position > end)
	                end = pp.position;
	            pq.put(pp);         // build pq from list
	        }

	        return end;
	    }

	    // disalow two pp's to have the same tp position, so that same word twice 
	    // in query would go elswhere in the matched doc
	    private boolean termPositionsDiffer(PhrasePositions pp) {
	        // efficiency note: a more efficient implemention could keep a map between repeating 
	        // pp's, so that if pp1a, pp1b, pp1c are repeats term1, and pp2a, pp2b are repeats 
	        // of term2, pp2a would only be checked against pp2b but not against pp1a, pp1b, pp1c. 
	        // However this would complicate code, for a rather rare case, so choice is to compromise here.
	        int tpPos = pp.position + pp.offset;
	        for (int i = 0; i < repeats.length; i++) {
	            PhrasePositions pp2 = repeats[i];
	            if (pp2 == pp)
	                continue;
	            int tpPos2 = pp2.position + pp2.offset;
	            if (tpPos2 == tpPos)
	                return false;
	        }
	        return true;
	    }
	}

}
