<?php
session_start();
include ("modif.php");
// header("Location: ./profile.php");
$fd = fopen("../private/passwd", r);
$array = unserialize(file_get_contents("../private/passwd"));
if ($_SESSION['logged_on_user'] == "admin" && $_POST['login'] != "admin")
{
	if ($_POST['submit'] == "Add" && $_POST['login'] && $_POST['passwd'])
	{
		$array[$_POST['login']] == hash("whirlpool", $_POST['passwd']);
		file_put_contents('../private/passwd', serialize($array));
	}

	if ($_POST['submit'] == "Delete")
	{
		foreach ($array as $key => $value)
		{
			if ($key == $_POST['login'])
				unset($array[$key]);
		}
		$array = array_values($array);
		file_put_contents('../private/passwd', serialize($array));
	}
	if ($_POST['submit'] == "Modif" && $_POST['newpw'] && $_POST['login'])
	{
		foreach ($array as $key => $value)
		{
			if ($key === $_POST['login'])
				$array[$key] = $_POST['newpw'];
		}
		file_put_contents('../private/passwd', serialize($array));
	}

}
elseif ($_SESSION['logged_on_user'] != "admin")
{
	if ($_POST['submit'] == "Delete")
	{
		if ((delete_user($_SESSION['logged_on_user'], $_POST['passwd'])) == true)
			logout();
	}
	if ($_POST['submit'] == "Modif")
		if ((modif_passwd($_SESSION['logged_on_user'], $_POST['oldpw'], $_POST['newpw'])) == true)
			logout();
}
?>