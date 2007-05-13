--TEST--
Bug #39508 (imagefill crashes with small images 3 pixels or less)
--SKIPIF--
<?php 
	if (!extension_loaded('gd')) die("skip gd extension not available\n"); 
	if (!GD_BUNDLED) die('skip external GD libraries always fail');
?>
--FILE--
<?php
$im = imagecreatetruecolor(3,1);
$bgcolor = imagecolorallocatealpha($im,255, 255, 0, 0);
imagefill($im,0,0,$bgcolor);
print_r(imagecolorat($im, 1,0));
?>
--EXPECTF--
16776960
