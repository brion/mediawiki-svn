--TEST--
date_default_timezone_get() function [3]
--INI--
date.timezone=
--FILE--
<?php
	putenv('TZ=Europe/Rome');
	echo date_default_timezone_get(), "\n";

	date_default_timezone_set("America/Chicago");
	echo date_default_timezone_get(), "\n";
?>
--EXPECT--
Europe/Rome
America/Chicago
