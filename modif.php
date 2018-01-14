<?php
function modif_passwd($login, $oldpw, $newpw)
{
	if ($login === "" || $oldpw === "" || $newpw === "")
		return (false);
	if (!file_exists('../private/') || !file_exists('../private/passwd'))
		return (false);
	$array = unserialize(file_get_contents('../private/passwd'));
	$test = hash('sha512', $oldpw);
	foreach ($array as $key => $value)
	{
		if ($key === $login)
		{
			if ($value === $test)
			{
				$array[$login] = hash('sha512', $newpw);
				file_put_contents('../private/passwd', serialize($array));
				return (true);
			}
			else 
				return (false);
		}
		else 
			return (false);
	}
}
function delete_user($login, $passwd)
{
	if ($login === "" || $passwd === "")
		return (false);
	if (!file_exists('../private/') || !file_exists('../private/passwd'))
		return (false);
	$array = unserialize(file_get_contents('../private/passwd'));
	$test = hash('sha512', $passwd);
	foreach ($array as $key => $value)
	{
		if ($key === $login)
		{
			if ($value === $test)
			{
				unset($array[$login]);
				$array = array_values($array);
				file_put_contents('../private/passwd', serialize($array));
				return (true);
			}
			else 
				return (false);
		}
		else 
			return (false);
	}
}
?>