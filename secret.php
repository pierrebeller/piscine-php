<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modif</title>
    </head>
    <body>
    <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "Beller")
    {
        ?>
        <h1>Modifier article:</h1>
        <form action="add_article.php" method="POST">
        <table>
        <tr>
        <th>Type:</th>
        <th><input type="text" name="type" /></th>
        </tr>
        <tr>
            <th>Prix:</th>
            <th><input type="text" name="prix" /></th>
        </tr>




        </table><br />
        Submit <input type="submit" name="submit" value="OK"/></form>
        <?php
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
 
    </body>
</html>


<input type="text" name="type" /><br />
<input type="text" name="prix" /><br />
<input type="text" name="quantité" /><br />
<input type="text" name="cat_1" /><br />
<input type="text" name="cat_2" /><br />
<input type="text" name="cat_3" /><br />
<input type="text" name="cat_4" /><br />
<!-- <form action="add_article.php" method="POST">
        Type: <input type="text" name="type" /><br />
        Prix: <input type="text" name="prix" /><br />
        Quantité: <input type="text" name="quantité" /><br />
        Catégorie 1: <input type="text" name="cat_1" /><br />
        Catégorie 2: <input type="text" name="cat_2" /><br />
        Catégorie 3: <input type="text" name="cat_3" /><br />
        Catégorie 4: <input type="text" name="cat_4" /><br />
        Submit <input type="submit" name="submit" value="OK"/>

               <th>Prix:</th> 
        <th>Quantité:</th> 
        <th>Catégorie 1:</th> 
        <th>Catégorie 2:</th> 
        <th>Catégorie 3:</th> 
        <th>Catégorie 4:</th> 
        </form> -->