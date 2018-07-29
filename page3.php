



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
 
    <title>Page Title</title>
    
</head>
<body>

    <div>
        <p> Voici ton identifiant :
            <?php
                if (isset($_COOKIE['name'])) {
                    echo $_COOKIE['name'];
                }
            ?>
        </p>
        <p>Et voilà ton mot de passe :
            <?php
                if (isset($_COOKIE['password'])) {
                    echo $_COOKIE['password'];
                }
                
            ?>
        </p>
    </div>

    <h2>Exercice 5</h2>
    <p>Tu veux changer la saveur de ton cookie ? C'est par ici : </p>
    <form action="user.php" method="post">
        <br>
        <fieldset>
            <p> 1er ingrédient : login
                <input type="text" name="nom" required> &nbsp; 2eme ingrédient : mot de passe
                <input type="password" name="motdepasse" required>
                <button type="submit">Click me</button>
            </p>
        </fieldset>
    </form>

</body>
</html>