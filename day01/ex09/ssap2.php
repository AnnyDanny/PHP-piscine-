#!/usr/bin/php
<?php

function create_my_str($argv, $argc)
{
	$i = 1;
	while ($i <= $argc)
	{
		$str .= " ".$argv[$i];
		$i++;
	}
	$str = trim($str);
	while (strpos($str, "  ") !== false)
		$str = str_replace("  ", " ", $str);
	return ($str);
}

function i_need_sort($str1, $str2)
{
	$little_str1 = strtolower($str1);
	$little_str2 = strtolower($str2);
	$i = 0;
	$sss = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($str1)) || ($i < strlen($str2)))
	{
		$pos1 = strpos($sss, $little_str1[$i]);
		$pos2 = strpos($sss, $little_str2[$i]);
		if ($pos1 < $pos2)
			return (-1);
		else if ($pos1 > $pos2)
			return (1);
		else
			$i++;
	}
}

if ($argc > 1)
{
	$str = create_my_str($argv, $argc);
	$array = str_word_count($str, 1, "!@#$%^*()-_=+\|'?/.,%6012345789:;<>");
	usort($array, "i_need_sort");
	foreach($array as $value)
		echo ("$value\n");
}

?>



