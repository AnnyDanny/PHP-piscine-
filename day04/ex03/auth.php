<?php

function auth($login, $passwd)
{
	if ($login !== "" || $passwd !== "")
	{
		$file = '../private/passwd';
		$p = hash('whirlpool', $passwd);
		$user = unserialize(file_get_contents($file));
		foreach ($user as $key => $val)
		{
			if ($val['login'] === $login)
			{
				if ($val['passwd'] === $p)
					return TRUE;
			}
		}
	}
	return FALSE;
}

?>