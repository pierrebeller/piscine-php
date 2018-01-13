<?PHP
session_start();
header("Content-Type: text/html");
?>
<html>
<head>
	<title>ft_minishop</title>
<head>
<body>
<div id="header">
<div id="user">
<?PHP
if ($_SESSION['logged_on_user'] == NULL)
{
	echo '
	<form action="login.php" method="POST">
		<table>
			<tr>
				<th>Identifiant:</th>
				<th><input type="text" name="login" /></th>
				<th><input type="submit" name="submit" value="Sign up"/></th>
			</tr>
			<tr>
				<th>Mot de passe:</th>
				<th><input type="password" name="passwd" /></th>
				<th><input type="submit" name="submit" value="Log in"/></th>
			</tr>
		</table>
	</form>';
}
else if ($_SESSION['logged_on_user'] != NULL)
	echo'
	<table>
		<form action="login.php" method="POST">
			<tr>
				<th><a href="my_accoutn.html">Profil</a></th>
				<th><input type="submit" name="submit" value="Log out"/></th>
			</tr>
		</form>
	</table>';
?>
</div
</div>
</body>
</html>
