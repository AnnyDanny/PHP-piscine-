#!/usr/bin/php
<?php

if ($argc == 2)
{
	$str = trim($argv[1] ,$character_mask = " \t\n\r\0\x0B");
	while (strpos($str, "  ") !== false)
		$str = str_replace("  ", " ", $str);
	print($str . "\n");
}

?>