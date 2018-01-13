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

</div>
<div id="corps">
<?php
if ($_SESSION['logged_on_user'] === "admin") 
    {
        echo 
        '<h1>Modifier article:</h1>
        <form action="modif_article.php" method="POST">
        <table>
        <tr>
        <th>Type:</th>
        <th><input type="text" name="type" /></th>
        </tr>
        <tr>
            <th>Prix:</th>
            <th><input type="text" name="prix" /></th>
        </tr>
        <tr>
            <th>Quantité:</th>
            <th><input type="text" name="qte" /></th>
        </tr>
        <tr>
        <th>
        	<select name="cat1" size="1">
        	<option>Homme
        	<option>Femme
        	<option>Enfant
        	</select>
        </th>
        </tr>
        <tr>
        <th>
        	<select name="cat2" size="1">
        	<option>Pull
        	<option>Pantalon
        	<option>Chaussettes
        	</select>
        </th>
        </tr>
        <tr>
        <th>
        	<select name="cat3" size="1">
        	<option>Neuf
        	<option>Bon
        	<option>Occasion
        	</select>
        </th>
        </tr>
        <tr>
            <th>Submit:</th>
            <th><input type="submit" name="submit" value="Submit"/></th>
        </tr>
        </table>
        <br />
        </form>';
    }
else
{
    echo '<p>Mot de passe incorrect</p>';
}
 ?>
 
</div>
</div>
</body>
</html>


        <!-- //     <th>Catégorie 1:</th>
        //     <th><input type="text" name="cat1" /></th>
        // </tr>
        // <tr>
        //     <th>Catégorie 2:</th>
        //     <th><input type="text" name="cat2" /></th>
        // </tr>
        // <tr>
        //     <th>Catégorie 3:</th>
        //     <th><input type="text" name="cat3" /></th>
        // </tr>
        // <!-- <tr>
        //     <th>Catégorie 4:</th>
        //     <th><input type="text" name="cat_4" /></th>
        </tr> -->