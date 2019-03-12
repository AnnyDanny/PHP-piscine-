#!/usr/bin/php
<?php

if ($argc != 2)
	echo "Incorrect Parameters\n";

function check_char($str, $char)
{
	$length = strlen($str);
	$i = 0;
	while ($i < $length)
	{
		$str1 = str_replace($char, '', $str);
    	$i++;
	}
	return $str1;
}

if ($argc == 2)
{
	$str1 = check_char($argv[1], " ");
	if (strpos($argv[1], "+") !== false)
	{
		$array = explode("+", $str1);
		if (ctype_digit($array[0]) && ctype_digit($array[1]))
			echo ($array[0] + $array[1]. "\n");
		else
			echo "Syntax Error\n";
	}
	else if (strpos($str1, "-") !== false)
	{
		$array = explode("-", $str1);
		if (ctype_digit($array[0]) && ctype_digit($array[1]))
			echo ($array[0] - $array[1]. "\n");
		else
			echo "Syntax Error\n";
	}
	else if (strpos($str1, "*") !== false)
	{
		$array = explode("*", $str1);
		if (ctype_digit($array[0]) && ctype_digit($array[1]))
			echo ($array[0] * $array[1]. "\n");
		else
			echo "Syntax Error\n";
	}
	else if (strpos($str1, "/") !== false)
	{
		$array = explode("/", $str1);
		if (ctype_digit($array[0]) && ctype_digit($array[1]))
			echo ($array[0] / $array[1]. "\n");
		else
			echo "Syntax Error\n";
	}
	else if (strpos($str1, "%") !== false)
	{
		$array = explode("%", $str1);
		if (ctype_digit($array[0]) && ctype_digit($array[1]))
			echo ($array[0] % $array[1]. "\n");
		else
			echo "Syntax Error\n";
	}
	else
		echo "Syntax Error\n";
}

?>