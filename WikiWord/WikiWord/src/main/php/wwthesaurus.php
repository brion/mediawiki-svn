<?php
require_once(dirname(__FILE__)."/wwutils.php");

	/** Unknown type, SHOULD not occurr in final data. MAY be used for
	 * resources that are referenced but where not available for analysis,
	 * or have not yet been analyzed. 
	 **/
	define('WW_RC_TYPE_UNKNOWN', 0);
	
	/**
	 * A "real" page, describing a concept.
	 */
	define('WW_RC_TYPE_ARTICLE', 10);
	
	/**
	 * This page is a supplemental part of an article, typically a transcluded
	 * subpage or simmilar.   
	 */
	define('WW_RC_TYPE_SUPPLEMENT', 15);
	
	
	/**
	 * A page solely defining a redirect/alias for another page
	 */
	define('WW_RC_TYPE_REDIRECT', 20);

	/**
	 * A disambuguation page, listing different meanings for the page title, 
	 * each linking to a article page.
	 */
	define('WW_RC_TYPE_DISAMBIG', 30);
	
	/**
	 * A page that contains a list of concepts that share some common property or quality,
	 * usually each linking to a page describing that concept.
	 */
	define('WW_RC_TYPE_LIST', 40);
	
	/**
	 * A category page.
	 */
	define('WW_RC_TYPE_CATEGORY', 50);
	
	/**
	 * This page does not contain relevant information for WikiWord
	 */
	define('WW_RC_TYPE_OTHER', 99);
	
	/**
	 * A page that is broken in some way, or was marked as bad or disputed. Such pages
	 * SHOULD generally be treated as if theys didn't exist.
	 */
	define('WW_RC_TYPE_BAD', 100);
	
	/**
	 * A resource that is not a page by itself, but merely a section of a page. Sections
	 * SHOULD always be part of a page of type ARTICLE, and are expected to descibe
	 * a narrower concept than the "parent" page.
	 */
	define('WW_RC_TYPE_SECTION', 200);


class WWThesaurus extends WWUTils {

    function queryConceptsForTerm($lang, $term, $norm = 3, $limit = 100) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$term = $this->normalize($term, $norm);

	$sql = "SELECT I.* FROM {$wwTablePrefix}_{$wwThesaurusDataset}_concept_info as I"
	      . " JOIN {$wwTablePrefix}_{$wwThesaurusDataset}_search_index as S ON I.concept = S.concept and I.lang = S.lang"
	      . " WHERE term = " . $this->quote($term) 
	      . " AND I.lang = " . $this->quote($lang) 
	      . " AND S.lang = " . $this->quote($lang) 
	      . " AND S.norm <= " . (int)$norm
	      . " ORDER BY S.score DESC "
	      . " LIMIT " . (int)$limit;

	#FIXME: query-lang vs. output-languages!

	return $this->query($sql);
    }

    function getConceptsForTerm($lang, $term, $limit = 100) {
	$rs = $this->queryConceptsForTerm($lang, $term);
	$list = WWUtils::slurpRows($rs);
	mysql_free_result($rs);
	return $this->buildConcepts($rs);
    }

    /*
    function queryConceptsForPage($lang, $page, $limit = 100) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$page = trim($page);

	$sql = "SELECT O.global_concept as id, O.* FROM {$wwTablePrefix}_{$lang}_resource as R "
	      . " JOIN {$wwTablePrefix}_{$lang}_about as A ON A.resource = R.id "
	      . " JOIN {$wwTablePrefix}_{$wwThesaurusDataset}_origin as O ON O.lang = \"" . mysql_real_escape_string($lang) . "\" AND A.concept = O.local_concept "
	      . " WHERE R.name = \"" . mysql_real_escape_string($page) . "\""
	      . " LIMIT " . (int)$limit;

	return $this->query($sql);
    }

    function getConceptsForPage($lang, $page, $limit = 100) {
	$rs = $this->queryConceptsForPage($lang, $page);
	$list = WWUtils::slurpRows($rs);
	mysql_free_result($rs);
	return $list;
    }

    function queryLocalConcepts($id) {
	global $wwTablePrefix, $wwThesaurusDataset;
	$sql = "SELECT O.lang, O.local_concept_name from {$wwTablePrefix}_{$wwThesaurusDataset}_origin as O ";
	$sql .= " WHERE O.global_concept = " . (int)$id;

	return $this->query($sql);
    }

    function getLocalConcepts($id) { //NOTE: deprecated alias for backward compat
	return getPagesForConcept($id);
    } */

    /*
    function queryLocalConceptInfo($lang, $id) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$sql = "SELECT O.*, C.*, F.*, definition FROM {$wwTablePrefix}_{$lang}_concept_info as F "
	      . " JOIN {$wwTablePrefix}_{$lang}_concept as C ON F.concept = C.id "
	      . " JOIN {$wwTablePrefix}_{$wwThesaurusDataset}_origin as O ON O.lang = \"" . mysql_real_escape_string($lang) . "\" AND F.concept = O.local_concept "
	      . " LEFT JOIN {$wwTablePrefix}_{$lang}_definition as D ON F.concept = D.concept "
	      . " WHERE O.local_concept = $id ";

	return $this->query($sql);
    }

    function queryConceptInfo($id, $lang) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$sql = "SELECT O.*, C.*, F.*, definition FROM  {$wwTablePrefix}_{$wwThesaurusDataset}_origin as O "
	      . " LEFT JOIN {$wwTablePrefix}_{$wwThesaurusDataset}_concept_info as F ON O.global_concept = F.concept "
	      . " LEFT JOIN {$wwTablePrefix}_{$lang}_concept as C ON O.local_concept = C.id "
	      . " LEFT JOIN {$wwTablePrefix}_{$lang}_definition as D ON O.local_concept = D.concept "
	      . " WHERE O.global_concept = $id AND O.lang = \"" . mysql_real_escape_string($lang) . "\" ";

	return $this->query($sql);
    }*/

    /*function getConceptInfo( $id, $lang = null ) {
	$result = $this->getConcept($id, $lang);

	$result['broader'] = $this->getBroaderForConcept($id);
	$result['narrower'] = $this->getNarrowerForConcept($id);
	$result['related'] = $this->getRelatedForConcept($id);

	if ( $lang ) {
	    $d = $this->getDefinitionForConcept($id);
	    $result['related'] = $d[$lang];
	}

	return $result;
    }*/

    /*
    function unpickle($s, $lang, $hasId=true, $hasName=true, $hasConf=true) {
	$ss = explode("\x1E", $s);
	$items = array();

	$fetchNames = false;

	foreach ($ss as $i) {
	    $r = explode("\x1F", $i);
	    $offs = -1;

	    if ($hasId)   $r['id']   = @$r[$offs += 1];
	    if ($hasName) $r['name'] = @$r[$offs += 1];
	    if ($hasConf) $r['conf'] = @$r[$offs += 1];

	    if ($hasId && !isset($r['name'])) 
	      $fetchNames = true;

	    if ($hasId) $items[ $r['id'] ] = $r;
	    else $items[] = $r;
	}

	if ($fetchNames) {
	    $names = $this->fetchNames(array_keys($items), $lang);

	    $keys = array_keys($items);
	    foreach ($keys as $k) {
		$id = $items[$k]['id'];
		$items[$k]['name'] = $names[$id];
	    }
	}

	return $items;
    }

    function fetchNames($ids, $lang) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$names = array();
	if (!$ids) return $names;

	$set = NULL;
	foreach ($ids as $id) {
	   if ($set===NULL) $set = "";
	   else $set .= ", ";
	   $set .= $id;
	}

	$sql = "select global_concept as id, local_concept_name as name from {$wwTablePrefix}_{$wwThesaurusDataset}_origin ";
	$sql .= "where global_concept in ($set) and lang = \"" . mysql_real_escape_string($lang) . "\" ";

	$res = $this->query($sql);

	while ($row = mysql_fetch_assoc($res)) {
	    $id = $row['id'];
	    $names[$id] = $row['name'];
	}
	
	mysql_free_result($res);

	return $names;
    }
    */

    function splitPages( $s ) {
	$pp = explode("|", $s);

	$pages = array();
	foreach ($pp as $p) {
	    list($t, $n) = explode(":", $p, 2);
	    $pages[$n] = (int)$t;
	}

	return $pages;
    }

    function splitConcepts( $s ) {
	$ss = explode("|", $s);

	$concepts = array();
	foreach ($ss as $p) {
	    list($id, $n) = explode(":", $p, 2);
	    $id = (int)$id;
	    $concepts[$id] = $n;
	}

	return $concepts;
    }

    /////////////////////////////////////////////////////////
    function getConceptInfo( $id, $lang = null, $fields = null ) {
	global $wwTablePrefix, $wwThesaurusDataset, $wwLanguages;

	#TODO: concept cache!

	if ( $fields && is_array($fields)) $fields = implode(", ", $fields);
	if ( !$fields ) $fields = "*";

	#TODO: scores, concept-type, ...

	$sql = "SELECT $fields FROM {$wwTablePrefix}_{$wwThesaurusDataset}_concept_info "
	    . " WHERE concept = ".(int)$id;

	if ($lang) {
	    if ( is_array($lang) ) $sql .= " AND lang IN " . $this->quoteSet($lang);
	    else $sql .= " AND lang = " . $this->quote($lang);
	}

	$r = $this->getRows($sql);
	if (!$r) return false;

	return $this->buildConcept($r);
    }

    function buildConcepts($rows) {
	$concepts = array();
	$buff = array();
	$id = null;
	foreach($rows as $row) {
	    if ( $id !== null && $id != $row['concept'] ) {
		if ($buff) {
			$concepts[$id] = $this->buildConcept($buff);
			$buff = array();
		}

		$id = null;
	    }

	    if ($id === null) $id = (int)$row['concept'];
	    $buff[] = $row;
	}

	return $concepts;
    }

    function buildConcept($rows) {
	$concept = array();
	$concept["languages"] = array();

	foreach ($rows as $row) {
	    if (!isset($concept["id"])) $concept["id"] = (int)$row["concept"];

	    $lang = $row["lang"];
	    $concept["languages"][] = $lang;

	    #TODO: scores, concept-type, ...

	    if (@$row["name"] !== null) $concept["name"][$lang] = $row["name"];
	    if (@$row["definition"] !== null) $concept["definition"][$lang] = $row["definition"];
	    if (@$row["pages"] !== null) $concept["pages"][$lang] = $this->splitPages($row["pages"]);

	    if (@$row["broader"] !== null) $concept["broader"][$lang] = $this->splitConcepts($row["broader"]);
	    if (@$row["narrower"] !== null) $concept["narrower"][$lang] = $this->splitConcepts($row["narrower"]);
	    if (@$row["similar"] !== null) $concept["similar"][$lang] = $this->splitConcepts($row["similar"]);
	    if (@$row["related"] !== null) $concept["related"][$lang] = $this->splitConcepts($row["related"]);

	    if (isset($concept["broader"][$lang]) && !isset($concept["broader"]["*"])) $concept["broader"]["*"] = array();
	    if (isset($concept["narrower"][$lang]) && !isset($concept["narrower"]["*"])) $concept["narrower"]["*"] = array();
	    if (isset($concept["similar"][$lang]) && !isset($concept["similar"]["*"])) $concept["similar"]["*"] = array();
	    if (isset($concept["related"][$lang]) && !isset($concept["related"]["*"])) $concept["related"]["*"] = array();

	    if (isset($concept["broader"][$lang])) $concept["broader"]["*"] += array_keys($concept["broader"][$lang]);
	    if (isset($concept["narrower"][$lang])) $concept["narrower"]["*"] += array_keys($concept["narrower"][$lang]);
	    if (isset($concept["similar"][$lang])) $concept["similar"]["*"] += array_keys($concept["similar"][$lang]);
	    if (isset($concept["related"][$lang])) $concept["related"]["*"] += array_keys($concept["related"][$lang]);
	    #FIXME: the above doesn't work as expected. what the fuck?!
	}

	if (isset($concept["broader"]["*"])) $concept["broader"]["*"] = array_unique($concept["broader"]["*"], SORT_NUMERIC);
	if (isset($concept["narrower"]["*"])) $concept["narrower"]["*"] = array_unique($concept["narrower"]["*"], SORT_NUMERIC);
	if (isset($concept["similar"]["*"])) $concept["similar"]["*"] = array_unique($concept["similar"]["*"], SORT_NUMERIC);
	if (isset($concept["broader"]["*"])) $concept["related"]["*"] = array_unique($concept["related"]["*"], SORT_NUMERIC);

	return $concept;
    }

    function getConcept( $id, $lang = null, $limit = 100 ) {
	return $this->getConceptInfo($id, $lang);
    }

    function getRelatedForConcept( $id, $lang = null, $limit = 100 ) {
	$concept = $this->getConceptInfo($id, $lang, "lang, related");
	if (!$concept) return false;
	else if ($lang) return $concept["related"][$lang];
	else return $concept["related"];
    }

    function getBroaderForConcept( $id, $lang = null, $limit = 100 ) {
	$concept = $this->getConceptInfo($id, $lang, "lang, broader");
	if (!$concept) return false;
	else if ($lang) return $concept["broader"][$lang];
	else return $concept["broader"];
    }

    function getNarrowerForConcept( $id, $lang = null, $limit = 100 ) {
	$concept = $this->getConceptInfo($id, $lang, "lang, narrower");
	if (!$concept) return false;
	else if ($lang) return $concept["narrower"][$lang];
	else return $concept["narrower"];
    }

    function getPagesForConcept( $id, $lang = null, $limit = 100 ) {
	if (!$lang) return false;

	$concept = $this->getConceptInfo($id, $lang, "lang, pages");
	if (!$concept) return false;
	else if ($lang) return array_keys( $concept["pages"][$lang] );
    }

    function getNamesForConcept( $id, $lang = null ) {
	$concept = $this->getConceptInfo($id, $lang, "lang, name");
	if (!$concept) return false;

	$result = array();
	foreach ($concept["languages"] as $ll) {
		if (@$concept["name@$ll"]) 
			$result[$ll] = $concept["name@$ll"];
	}

	return $result;
    }

    function getDefinitionForConcept( $id, $lang = null, $limit = 100 ) {
	$concept = $this->getConceptInfo($id, $lang, "lang, definition");
	if (!$concept) return false;

	$result = array();
	foreach ($concept["languages"] as $ll) {
		if (@$concept["definition@$ll"]) 
			$result[$ll] = $concept["definition@$ll"];
	}

	return $result;
    }

    function getTermsForConcept( $id, $lang = null, $limit = 100 ) {
	global $wwTablePrefix, $wwThesaurusDataset, $wwLanguages;

	if ( !$lang ) $lang = array_keys( $wwLanguages );
	if ( !is_array($lang) ) $lang = preg_split('![\\s,;|/:]\\s*!', $lang);
	$result = array();

	foreach ($lang as $ll) {
	    $sql = "SELECT M.term_text FROM {$wwTablePrefix}_{$ll}_meaning as M"
		  . " JOIN {$wwTablePrefix}_{$wwThesaurusDataset}_origin as O ON O.lang = \"" . mysql_real_escape_string($ll) . "\" AND M.concept = O.local_concept "
		  . " WHERE O.global_concept = " . (int)$id
		  . " ORDER BY freq DESC "
		  . " LIMIT " . (int)$limit;

	    $terms = $this->getList($sql, "term_text");
	    if ( $terms === false || $terms === null ) return false;
	    if ( !$terms ) continue;

	    $result[$ll] = $terms;
	}

	return $result;
    }

    function getLinksForConcept( $id, $lang = null, $limit = 100 ) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$sql = "SELECT C.* FROM {$wwTablePrefix}_{$wwThesaurusDataset}_concept as C "
	      . " JOIN  {$wwTablePrefix}_{$wwThesaurusDataset}_link as L ON L.target = C.id "
	      . " WHERE L.anchor = ".(int)$id
	      . " LIMIT " . (int)$limit;

	return $this->getRows($sql);
    }

    function getReferencesForConcept( $id, $lang = null, $limit = 100 ) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$sql = "SELECT C.* FROM {$wwTablePrefix}_{$wwThesaurusDataset}_concept as C "
	      . " JOIN  {$wwTablePrefix}_{$wwThesaurusDataset}_link as L ON L.anchor = C.id "
	      . " WHERE L.target = ".(int)$id
	      . " LIMIT " . (int)$limit;

	return $this->getRows($sql);
    }

    function getScoresForConcept( $id, $lang = null ) {
	global $wwTablePrefix, $wwThesaurusDataset;

	$sql = "SELECT S.* FROM {$wwTablePrefix}_{$wwThesaurusDataset}_concept_stats as S "
	      . " WHERE S.concept = ".(int)$id
	    ;

	$r = $this->getRows($sql);
	if ( !$r ) return false;

	return $r;
    }

}
