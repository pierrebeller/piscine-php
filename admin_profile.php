<?php
session_start();
header("Content-Type: Text/html");
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modif</title>
    </head>
    <body>
    <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "Beller")
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
            <th>Catégorie 1:</th>
            <th><input type="text" name="cat1" /></th>
        </tr>
        <tr>
            <th>Catégorie 2:</th>
            <th><input type="text" name="cat2" /></th>
        </tr>
        <tr>
            <th>Catégorie 3:</th>
            <th><input type="text" name="cat3" /></th>
        </tr>
        <!-- <tr>
            <th>Catégorie 4:</th>
            <th><input type="text" name="cat_4" /></th>
        </tr> -->
        <tr>
            <th>Submit:</th>
            <th><input type="submit" name="submit" value="Submit"/></th>
        </tr>
        </table><br />
        </form>';
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
 
    </body>
</html>
