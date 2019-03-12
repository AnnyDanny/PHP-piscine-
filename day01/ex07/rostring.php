#!/usr/bin/php
<?php

if ($argc > 1)
{
	$str = $argv[1];
	while (strpos($str, "  ") !== false)
		$str = str_replace("  ", " ", $str);
	$array = explode(" ", $str);
	$nb = count($array);
	$i = 1;
	while ($i < $nb)
		echo $array[$i++] . " ";
	echo $array[0]. "\n";
}

?>