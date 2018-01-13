<?php
function auth($login, $passwd)
{
	if (!file_exists('../private/passwd'))
		return (FALSE);
	$test = hash('sha512', $passwd);
	$array = unserialize(file_get_contents('../private/passwd'));
	foreach ($array as $key => $value)
	{
		if ($login === $key && $test === $value)
			return (TRUE);
	}
	return (FALSE);
}
?>