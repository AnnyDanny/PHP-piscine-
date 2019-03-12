#!/usr/bin/php
<?PHP

function ft_split(string $str)
{
	$str = trim($str);
	while (strpos($str, "  ") !== false)
		$str = str_replace("  ", " ", $str);
	if (!count($array))
		return ($tmp = array());
	$array = explode(" ", $str);
	sort($array);
	return $array;
}

?>
