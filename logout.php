<?php
session_start();
function	logout()
{
	$_SESSION['logged_on_user'] = "";
	echo $_SESSION['logged_on_user']."\n";
}
?>
