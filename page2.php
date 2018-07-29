<?php
session_start();
?>



    <!DOCTYPE <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Page Title</title>
    </head>

    <body>
        <div>
            <br>
            <?php
                echo "Hey ! " . $_SESSION['lastName'] . " " . $_SESSION['firstName'] . ", tu as " . $_SESSION['age'] . " ans.";
            ?>
            <h3>Suprise !!</h3>
            <p>C'était une blague ! Tu es toujours du côté lumineux.</p>

        </div>

        <a href="index.php">Pour remonter dans le temps c'est par ici !</a>
    </body>

    </html>