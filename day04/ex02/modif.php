<?php

$file = '../private/passwd';
if ($_POST['submit'] == 'OK' && $_POST['login'] !== "" && $_POST['oldpw'] !== "" && $_POST['newpw'] !== "")
{
	$tmp = unserialize(file_get_contents($file));
	if ($tmp)
	{
		$oldpw = hash('whirlpool', $_POST['oldpw']);
		foreach ($tmp as $key => $val)
		{
			if ($val['login'] === $_POST['login'] && $val['passwd'] === $oldpw)
			{
				echo "OK\n";
				$content['login'] = $val['login'];
				$content['passwd'] = hash('whirlpool', $_POST['newpw']);
				$check[] = $content;
				$c = 1;
			}
			else
			{
				$content[] = $val;
				$check[] = $content;
			}
		}
		if ($c != 1)
		{
			echo "ERROR\n";
			return ;
		}
		else if ($c == 1)
			file_put_contents($file, serialize($check));
	}
	else
	{
		echo "ERROR\n";
		return ;
	}
}
else
	echo "ERROR\n";

?>