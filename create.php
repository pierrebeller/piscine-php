<?php
function create($login, $passwd)
{
	if ($login === "" || $passwd === "")
		exit();
	if (!file_exists('../private/'))
		mkdir('../private/', 0777, true);
	if (!file_exists('../private/passwd'))
		file_put_contents('../private/passwd', null);
	$array = unserialize(file_get_contents('../private/passwd'));
	foreach ($array as $key => $value)
	{
		if ($key === $login)
			exit();
	}
	$array[$login] = hash('sha512', $passwd);
	file_put_contents('../private/passwd', serialize($array));
}
?>
