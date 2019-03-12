#!/usr/bin/php
<?php

#!/usr/bin/php
// <?php

// // $str = trim($argv[1]);
// // while (strpos($str, "  ") !== false)
// // 		$str = str_replace("  ", " ", $str);
// // $regex_space = "/\s/";
// // $array = preg_split($regex_space, $str);
// // print_r($array);
// // echo "\n";

// // $regex_week_day = "/^((L|l)undi|(M|m)ardi|(M|m)ercredi|(J|j)eudi|(V|v)endredi|(S|s)amedi|(D|d)imanche)$/";
// // if (preg_match($regex_week_day, $array[0]))
// // 	echo "ok_week_day\n";
// // else
// // 	echo "ko_week_day\n";

// // $regex_day_number = "/^[0-9]{1,2}$/u";
// // if (preg_match($regex_day_number, $array[1]))
// // 	echo "ok_day_number\n";
// // else
// // 	echo "ko_day_number\n";


// // $regex_month = "/^((J|j)anvier|(F|f)evrier|(M|m)ars|(A|a)vril|(M|m)ai|(J|j)uin|(J|j)uillet|(A|a)out|(S|s)eptembre|(O|o)ctobre|(N|n)ovembre|(D|d)ecembre)$/";
// // if (preg_match($regex_month, $array[2]))
// // 	echo "ok_month\n";
// // else
// // 	echo "ko_month\n";

// // $regex_year = "/^[0-9]{4}$/u";
// // if (preg_match($regex_year, $array[3]))
// // 	echo "ok_year\n";
// // else
// // 	echo "ko_year\n";

// // $regex_time = "/^[012][0-4]:[0-5][0-9]:[0-5][0-9]$/u";
// // if (preg_match($regex_time, $array[4]))
// // 	echo "ok_time\n";
// // else
// // 	echo "ko_time\n";

// // $i = count($array);
// // if ($i == 5)
// // 	echo "5 elements in array\n";
// // else
// // 	echo "no 5 elements in array\n";

// // $j = 1;
// // while ($j < 5)
// // {
// // 	$array1[$j] = $array[$j];
// // 	$j++;
// // }
// // print_r($array1);
// // echo "\n";

// // $array1 = preg_replace('/(J|j)anvier/', 'january', $array1);
// // $array1 = preg_replace('/(F|f)evrier/', 'february', $array1);
// // $array1 = preg_replace('/(M|m)ars/', 'march', $array1);
// // $array1 = preg_replace('/(A|a)vril/', 'april', $array1);
// // $array1 = preg_replace('/(M|m)ai/', 'may', $array1);
// // $array1 = preg_replace('/(J|j)uin/', 'june', $array1);
// // $array1 = preg_replace('/(J|j)uillet/', 'july', $array1);
// // $array1 = preg_replace('/(A|a)out/', 'august', $array1);
// // $array1 = preg_replace('/(S|s)eptembre/', 'september', $array1);
// // $array1 = preg_replace('/(O|o)ctobre/', 'october', $array1);
// // $array1 = preg_replace('/(N|n)ovembre/', 'november', $array1);
// // $array1 = preg_replace('/(D|d)ecembre/', 'december', $array1);


// // $ret = implode(" ", $array1);
// // echo "ret---> ";
// // print($ret);
// // echo "\n";

// // $time = strtotime($ret);
// // echo "time---> ";
// // print($time);
// // echo "\n";


// function check_week_day($array)
// {
// 	$regex_week_day = "/^((L|l)undi|(M|m)ardi|(M|m)ercredi|(J|j)eudi|(V|v)endredi|(S|s)amedi|(D|d)imanche)$/";
// 	if (preg_match($regex_week_day, $array[0]))
// 	{
// 		echo "ok_week_day\n";
// 		return (1);
// 	}
// 	else
// 	{
// 		echo "ko_week_day\n";
// 		return (0);
// 	}
// }

// function check_day_number($array)
// {
// 	print_r($array);
// 	echo "\n";
// 	$regex_day_number = "/^[0-9]{1,2}$/u";
// 	if (preg_match($regex_day_number, $array[1]))
// 	{
// 		echo "ok_day_number\n";
// 		return (1);
// 	}
// 	else
// 	{
// 		echo "ko_day_number\n";
// 		return (0);
// 	}
// }

// function check_month($array)
// {
// 	$regex_month = "/^((J|j)anvier|(F|f)evrier|(M|m)ars|(A|a)vril|(M|m)ai|(J|j)uin|(J|j)uillet|(A|a)out|(S|s)eptembre|(O|o)ctobre|(N|n)ovembre|(D|d)ecembre)$/";
// 	if (preg_match($regex_month, $array[2]))
// 	{
// 		echo "ok_month\n";
// 		return (1);
// 	}
// 	else
// 	{
// 		echo "ko_month\n";
// 		return (0);
// 	}
// }

// function check_year($array)
// {
// 	$regex_year = "/^[0-9]{4}$/u";
// 	if (preg_match($regex_year, $array[3]))
// 	{
// 		echo "ok_year\n";
// 		return (1);
// 	}
// 	else
// 	{
// 		echo "ko_year\n";
// 		return (0);
// 	}
// }

// function check_time($array)
// {
// 	$regex_time = "/^[012][0-4]:[0-5][0-9]:[0-5][0-9]$/u";
// 	if (preg_match($regex_time, $array[4]))
// 	{
// 		// echo "ok_time\n";
// 		return (1);
// 	}
// 	else
// 	{
// 		// echo "ko_time\n";
// 		return (0);
// 	}
// }

// // int function count_array($array)
// // {
// // 	$i = count($array);
// // 	if ($i == 5)
// // 	{
// // 		echo "5 elements in array\n";
// // 	}
// // 	else
// // 		echo "no 5 elements in array\n";
// // }

// // function ret($argc, $argv)
// // {
// 	if ($argc > 1)
// 	{
// 		$str = trim($argv[1]);
// 		while (strpos($str, "  ") !== false)
// 			$str = str_replace("  ", " ", $str);
// 		$regex_space = "/\s/";
// 		$array = preg_split($regex_space, $str);
// 		print_r($array);
// 		echo "\n";
// 		if (count($array) == 5)
// 		{
// 			if (check_week_day($array) == 1 && check_day_number($array) == 1 &&
// 			check_month($array) == 1 && check_year($array) == 1 && check_time($array) == 1)
// 			{
// 				$j = 1;
// 				while ($j < 5)
// 				{
// 					$array1[$j] = $array[$j];
// 					$j++;
// 				}
// 				print_r($array1);
// 				echo "\n";
// 				$array1 = preg_replace('/(J|j)anvier/', 'january', $array1);
// 				$array1 = preg_replace('/(F|f)evrier/', 'february', $array1);
// 				$array1 = preg_replace('/(M|m)ars/', 'march', $array1);
// 				$array1 = preg_replace('/(A|a)vril/', 'april', $array1);
// 				$array1 = preg_replace('/(M|m)ai/', 'may', $array1);
// 				$array1 = preg_replace('/(J|j)uin/', 'june', $array1);
// 				$array1 = preg_replace('/(J|j)uillet/', 'july', $array1);
// 				$array1 = preg_replace('/(A|a)out/', 'august', $array1);
// 				$array1 = preg_replace('/(S|s)eptembre/', 'september', $array1);
// 				$array1 = preg_replace('/(O|o)ctobre/', 'october', $array1);
// 				$array1 = preg_replace('/(N|n)ovembre/', 'november', $array1);
// 				$array1 = preg_replace('/(D|d)ecembre/', 'december', $array1);
// 				$ret = implode(" ", $array1);
// 				echo "ret---> ";
// 				print($ret);
// 				echo "\n";

// 				$time = strtotime($ret);
// 				echo "time---> ";
// 				print($time);
// 				echo "\n";
// 			}
// 			else
// 				echo "Wrong Format\n";
// 		}
// 		else
// 			echo "Wrong Format\n";
// 	}
// }



// $j = 1;
// while ($j < 5)
// {
// 	$array1[$j] = $array[$j];
// 	$j++;
// }
// print_r($array1);
// echo "\n";


// $array1 = preg_replace('/(J|j)anvier/', 'january', $array1);
// $array1 = preg_replace('/(F|f)evrier/', 'february', $array1);
// $array1 = preg_replace('/(M|m)ars/', 'march', $array1);
// $array1 = preg_replace('/(A|a)vril/', 'april', $array1);
// $array1 = preg_replace('/(M|m)ai/', 'may', $array1);
// $array1 = preg_replace('/(J|j)uin/', 'june', $array1);
// $array1 = preg_replace('/(J|j)uillet/', 'july', $array1);
// $array1 = preg_replace('/(A|a)out/', 'august', $array1);
// $array1 = preg_replace('/(S|s)eptembre/', 'september', $array1);
// $array1 = preg_replace('/(O|o)ctobre/', 'october', $array1);
// $array1 = preg_replace('/(N|n)ovembre/', 'november', $array1);
// $array1 = preg_replace('/(D|d)ecembre/', 'december', $array1);

// $ret = implode(" ", $array1);
// echo "ret---> ";
// print($ret);
// echo "\n";

// $time = strtotime($ret);
// echo "time---> ";
// print($time);
// echo "\n";











































	<!-- $regexp1 = "/((?=^)(\s*))|((\s*)(?>$))/si"; -->

1. остальные буквы в дне недели могут быть маленькими и большими или только маленькими?
2. разделить,чтобы было 4 пробела


// $i = 0;
// while ($i++ != 1000)
// 	echo "X";
// echo "\n";

// how print string, if there only spaces
// print_r(ft_split(""));
// print_r(str_split("     "));
// echo "\n";
// print_r(ft_split("     "));
// echo "\n";
// print_r(ft_split2("     "));
// echo "\n";
// print_r(str_split("   "));
// echo "\n";
// print_r(ft_split2("   "));


// function stdin_stream()
// {
//     while ($line = fgets(STDIN))
//     {
//         yield $line;
//     }
// }
// foreach (stdin_stream() as $line) 
    // $number = readline("Enter a number: ");



// <!-- // ord($string); -->
// <!-- // natcasesort($array); -->
// <!-- but you need to change the sorting rule: 

// 1. now it will need to be case insensitive and place all the characters in alphabetical order first, 

// 2. then numbers, 

// 3.and finally all the other characters, each in the following 3 groups following the ASCII order. -->

// while($f = fgets(STDIN))
// {
// 	$number = readline("Enter a number: ");
// 	echo 'You picked the number: '.$number;
// }
		// while ($number)
		// {
		// 	$number += 256;
		// }
		// $number %= 256;
		// echo sprintf("%04d", $number);
		// print($number);
		// echo "is not a number";

// function my_add($p1, $p2)
// {
// 	return $p1 + $p2;
// }

// print("Hello, World!\n");

// $my_var = 42;
// $my_str = "World";
// // $my_tab = array("zero", "un", "dexu");
// $my_tab = explode(";", "zero;un;deux");
// $my_hash = array("key1" => "val1", "key2" => "val2");
// echo "$my_var\n$my_str";

// $result = "21" + "21";
// echo "$result\n";

// $my_tab[0] = "00";

// echo $my_tab[0];
// echo "\n";
// echo $my_hash["key1"]."\n";

// echo "$my_tab\n\n";

// print_r($my_tab);

// echo my_add("36","6");

// if ($my_tab[1] == "un")
// {
// 	echo "OK";
// }
// else
// {
// 	echo "KO";
// }

// echo "$argc\n";
// print_r($argv);

// foreach ($my_tab as $elem)
// // foreach ($argv as $elem)
// {
// 	echo "$elem\n";
// }


// $arr = array(1, 2, 3, 4);
// foreach ($arr as &$value) {
//     $value = $value * 2;
// }
// // массив $arr сейчас таков: array(2, 4, 6, 8)
// unset($value); // разорвать ссылку на последний элемент

// echo "arr=";
// print_r($arr);
// echo "\n";


// $mystring = 'bhhhac';
// $findme   = 'a';
// $pos = strpos($mystring, $findme);
// if ($pos === false) {

//     echo "Строка '$findme' не найдена в строке '$mystring'";
//     echo "\n";
//     echo $pos;
// } else {
//     echo "Строка '$findme' найдена в строке '$mystring'";
//     echo " в позиции $pos";
//     echo "\n";
//     echo $pos;
// }




// $tab = array("b", "c", "a");
// $tab1 = array("a", "b", "c");

// if (ft_is_sort($tab) == true)
// 	echo "The array is sorted\n";
// else
// 	echo "The array is not sorted\n";


// $array1 = array("a" => "green", "red", "blue", "red");
// $array2 = array("b" => "green", "yellow", "red");
// $result = array_diff($array1, $array2);

// print_r($result);
?>