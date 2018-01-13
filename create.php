<?php
if ($_POST['login'] === "" || $_POST['passwd'] === "" || $_POST['submit'] != "OK")
{
	echo "ERROR\n";
	exit();
}
if (!file_exists('../private/'))
	mkdir('../private/', 0777, true);
if (!file_exists('../private/passwd'))
{
	$array[$_POST['login']] = hash('sha512', $_POST['passwd']);
	file_put_contents('../private/passwd', serialize($array));
	echo "OK\n";
	exit();
}
$array = unserialize(file_get_contents('../private/passwd'));
foreach ($array as $key => $value)
{
	if ($key === $_POST['login'])
	{
		echo "ERROR\n";
		exit();
	}
}
$array[$_POST['login']] = hash('sha512', $_POST['passwd']);
file_put_contents('../private/passwd', serialize($array));
echo "OK\n";
?>