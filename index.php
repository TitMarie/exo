<?php
session_start();
$_SESSION['lastName']= "Kiki";
$_SESSION['firstName']= "Darth";
$_SESSION['age']= "16";


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>

<body>


    <h2>Exercice 1</h2>

    <?php
        //récuper l'adressse ip
    function get_ip() {
        // IP si internet partagé
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        // IP derrière un proxy
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        // Sinon : IP normale
        else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }
    
    echo "Votre navigateur est : " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
    echo "votre adresse ip est : " . get_ip() . "<br>";
    echo "Vous utiliser le server : " . $_SERVER['SERVER_NAME'];
    ?>
    
    <div>
        <br>
        <h2>Exercice 2</h2>
        <h3>Dirige toi vers le côté obscur...</h3>
        <p>Clique ici -->
            <a href="page2.php">Deviens mon apprenti</a>
        </p>

    </div>

    <h2>Exercice 3</h2>
    <form action="user.php" method="post">
        <br>

        <fieldset>
            <p> Login :
                <input type="text" name="nom" required> &nbsp; Mot de passe :
                <input type="password" name="motdepasse" required>
                <button type="submit">Click me</button>
            </p>
        </fieldset>
        
    </form>

</body>

</html>