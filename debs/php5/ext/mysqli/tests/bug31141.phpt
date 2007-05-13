--TEST--
Bug #31141 testcase (properties)
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
class Test extends mysqli
{
	public $test = array();

	function foo()
	{
		$ar_test = array("foo", "bar");
		$this->test = &$ar_test;
	}
}

$my_test = new Test;
$my_test->foo();
var_dump($my_test->test);
?>
--EXPECTF--
array(2) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
}
