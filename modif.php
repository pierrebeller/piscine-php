<?php
if ($_POST['login'] === "" || $_POST['oldpw'] === "" || $_POST['newpw'] === "" || $_POST['submit'] != "OK")
{
	echo "ERROR\n";
	exit();
}
if (!file_exists('../private/') || !file_exists('../private/passwd'))
{
	echo "ERROR\n";
	exit();
}
$array = unserialize(file_get_contents('../private/passwd'));
$test = hash('sha512', $_POST['oldpw']);
foreach ($array as $key => $value)
{
	if ($key === $_POST['login'])
	{
		if ($value === $test)
		{
			$array[$_POST['login']] = hash('sha512', $_POST['newpw']);
			file_put_contents('../private/passwd', serialize($array));
			echo "OK\n";
			exit();
		}
		else 
		{
			echo "ERROR\n";
			exit();
		}
	}
	else 
	{
		echo "ERROR\n";
		exit();
	}
}
?>