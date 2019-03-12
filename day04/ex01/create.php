<?php

$file = '../private/passwd';
if (file_exists($file) === FALSE)
    mkdir('../private');
if ($_POST['login'] !== "" && $_POST['passwd'] !== "" && $_POST['submit'] == 'OK')
{
	$new['login'] = $_POST['login'];
	$new['passwd'] = hash('whirlpool', $_POST['passwd']);
	$file_content = unserialize(file_get_contents($file));
	foreach ($file_content as $log => $val)
	{
		if ($val['login'] === $_POST['login'])
		{
			echo "ERROR\n";
			$c = 1;
			return ;
		}
	}
	if ($c !== 1)
	{
		$file_content[] = $new;
		echo "OK\n";
	}
	$input = serialize($file_content);
	file_put_contents($file, $input);
}
else
{
	echo "ERROR\n";
	return ;
}

?>