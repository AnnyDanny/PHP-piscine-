#!/usr/bin/php
<?php

if ($argc > 1)
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
	$array = explode(" ", $str);
	sort($array);
	$i = 0;
	$nb = count($array);
	while ($i < $nb)
		echo $array[$i++] . "\n";
}
?>