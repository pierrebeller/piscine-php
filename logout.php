<?php
session_start();
$_SESSION['logged_on_user'] = "";
echo $_SESSION['logged_on_user']."\n";
?>