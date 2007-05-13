--TEST--
Sybase-CT bug #6339 (invalid Sybase-link resource)
--SKIPIF--
<?php require('skipif.inc'); ?>
--FILE--
<?php
/* This file is part of PHP test framework for ext/sybase_ct
 *
 * $Id: bug6339.phpt,v 1.1 2004/01/24 02:18:13 thekid Exp $ 
 */

  require('test.inc');
  
  // Suppress "Changed database context" warnings
  sybase_min_server_severity(11);
  sybase_connect(HOST, USER, PASSWORD);
  var_dump(sybase_fetch_row(sybase_query('select 1')));
  sybase_close();
?>
--EXPECTF--
array(1) {
  [0]=>
  int(1)
}
