#!/usr/bin/php
<?php

while (1)
{
    echo "Enter a number: ";
    $number = fgets(STDIN);
    $number = trim($number);
    if (is_numeric($number))
   	{
		if ($number % 2 == 0)
		{
			echo "The number ";
			print($number);
			echo " is even\n";
		}
		else if ($number % 2 != 0)
		{
			echo "The number ";
			print($number);
			echo " is odd\n";
		}
	}
	else
	{
		if (feof(STDIN))
        {
            echo "\n";
            exit(0);
        }
        echo "'$number' is not a number\n";
	}
}
?>
