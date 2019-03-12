#!/usr/bin/php
<?php

if ($argc > 1)
{
	$regexp = "/\s{2,}/";
	$str1 = preg_replace($regexp, ' ', $argv[1]);
	$regex1 = "/((?=^)(\s*))|((\s*)(?>$))/si";
	$str2 = preg_replace($regex1, "", $str1);
	print($str2."\n");
}

?>
