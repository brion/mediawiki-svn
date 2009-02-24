<?php

class WWUtil {
    static function connect($server, $user, $password, $database) {
	$db = mysql_connect($server, $user, $password) or die("Connection Failure to Database: " . mysql_error());
	mysql_select_db($database, $db) or die ("Database not found: " . mysql_error());
	mysql_query("SET NAMES UTF8;", $db) or die ("Database not found: " . mysql_error());

	if (isset($this)) $this->db = $db;
	return $db;
    }

    static function query($sql, $db = NULL) {
	if ($db == NULL && isset($this)) $db = $this->$db;

	if ($debug) {
	    print htmlspecialchars($sql);
	}

	$result = mysql_query($sql, $db);

	if(!$result) {
		$error = mysql_error($db);
		$errno = mysql_errno($db);
		throw new Exception("$error (#$errno)");
	}

	return $result;
    }

    function queryConceptsForTerm($lang, $term) {
	global $wwTablePrefix;

	$term = trim($term);

	$sql = "SELECT * FROM {$wwTablePrefix}_{$lang}_meaning "
	      . " WHERE term_text = \"" . mysql_real_escape_string($term) . "\""
	      . " ORDER BY freq DESC "
	      . " LIMIT 100";

	return $this->query($sql);
    }

    function queryLocalConcept($lang, $id) {
	global $wwTablePrefix;

	$term = trim($term);

	$sql = "SELECT * FROM {$wwTablePrefix}_{$lang}_concept_info "
	      . " WHERE concept = $id ";

	return $this->query($sql);
    }

    static function authFailed($realm) {
	    header("Status: 401 Unauthorized", true, 401);
	    header('WWW-Authenticate: Basic realm="'.$realm.'"');
	    die();
    }

    static function doBasicHttpAuth($passwords, $realm) {
	  if (!isset($_SERVER['PHP_AUTH_USER'])) {
	      authFailed();
	  }

	  $usr = $_SERVER['PHP_AUTH_USER'];
	  if (!isset($passwords[$usr])) {
	      authFailed();
	  }

	  $pw = $_SERVER['PHP_AUTH_PW'];
	  if ($pw != $passwords[$usr]) {
	      authFailed();
	  }

	  return $usr;
    }

    static function printSelector($name, $choices, $current = NULL) {
	print "\n\t\t<select name=\"".htmlspecialchars($name)."\" id=\"".htmlspecialchars($name)."\">\n";

	foreach ($choices as $choice => $name) {
	    $sel = $choice == $current ? " selected=\"selected\"" : "";
	    print "\t\t\t<option value=\"".htmlspecialchars($choice)."\"$sel>".htmlspecialchars($name)."</option>\n";
	}

	print "</select>";
    }
}
