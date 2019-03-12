#!/usr/bin/php
<?php

function check_week_day($array)
{
	$regex_week_day = "/^((L|l)undi|(M|m)ardi|(M|m)ercredi|(J|j)eudi|(V|v)endredi|(S|s)amedi|(D|d)imanche)$/";
	if (preg_match($regex_week_day, $array[0]))
		return (1);
	else
		return (0);
}
function check_day_number($array)
{
	$regex_day_number = "/^[0-9]{1,2}$/u";
	if (preg_match($regex_day_number, $array[1]))
		return (1);
	else
		return (0);
}
function check_month($array)
{
	$regex_month = "/^((J|j)anvier|(F|f)evrier|(M|m)ars|(A|a)vril|(M|m)ai|(J|j)uin|(J|j)uillet|(A|a)out|(S|s)eptembre|(O|o)ctobre|(N|n)ovembre|(D|d)ecembre)$/";
	if (preg_match($regex_month, $array[2]))
		return (1);
	else
		return (0);
}
function check_year($array)
{
	$regex_year = "/^[0-9]{4}$/u";
	if (preg_match($regex_year, $array[3]))
		return (1);
	else
		return (0);
}
function check_time($array)
{
	$regex_time = "/^[012][0-4]:[0-5][0-9]:[0-5][0-9]$/u";
	if (preg_match($regex_time, $array[4]))
		return (1);
	else
		return (0);
}
if ($argc > 1)
{

	$mon = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
	$str = trim($argv[1]);
	while (strpos($str, "  ") !== false)
		$str = str_replace("  ", " ", $str);
	$regex_space = "/\s/";
	$array = preg_split($regex_space, $str);
	date_default_timezone_set("Europe/Paris");
	if (count($array) == 5)
	{
		if (check_week_day($array) == 1 && check_day_number($array) == 1 &&
		check_month($array) == 1 && check_year($array) == 1 && check_time($array) == 1)
		{
			$j = 1;
			while ($j < 5)
			{
				$array1[$j] = $array[$j];
				$j++;
			}
			$nbr = 1;
			foreach($mon as $a)
			{
				if (strtolower($array1[2]) == $a)
					break;
				$nbr++;
			}
			$day = intval($array1[1]);
			$year = intval($array1[3]);
			$p_time = explode(":", $array1[4]);
			$hour = intval($p_time[0]);
			$min = intval($p_time[1]);
			$sec = intval($p_time[2]);
			$res = mktime($hour, $min, $sec, $nbr, $day, $year);
			print($res);
			echo "\n";
		}
		else
			echo "Wrong Format\n";
	}
	else
		echo "Wrong Format\n";
}

?>
