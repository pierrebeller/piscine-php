<?php
include 'auth.php';
include 'create.php';
include	'logout.php';

session_start();
header('Location: ./index.php');
if ($_POST['submit'] == "Log in")
{
	if ($_POST['login'] && $_POST['passwd'])
	{
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['passwd'] = $_POST['passwd'];
	}
	if (auth($_SESSION['login'], $_SESSION['passwd']))
		$_SESSION['logged_on_user'] = $_SESSION['login'];
	else 
	{
		$_SESSION['logged_on_user'] = "";
		echo "ERROR\n";
	}
}
else if ($_POST['submit'] == "Sign up")
{
	create($_POST['login'], $_POST['passwd']);
	if (auth($_SESSION['login'], $_SESSION['passwd']))
		$_SESSION['logged_on_user'] = $_SESSION['login'];
}
else if ($_POST['submit'] == "Log out")
{
	logout();
}
?>
