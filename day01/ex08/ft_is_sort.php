#!/usr/bin/php
<?php

function ft_is_sort($array)
{
	$save = $array;
	$str1 = $array;
	$str = $array;
	print_r($save);
	sort($str, SORT_STRING);
	rsort($str1, SORT_STRING);
	if ($save == $str)
		return true;
	else if ($save == $str1)
		return true;
	else
		return false; 
}

?>