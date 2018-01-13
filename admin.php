<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <p>Mot de passe admin:</p>
        <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
    </body>
</html>