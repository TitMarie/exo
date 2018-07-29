
<?php
setcookie('name', $_POST['nom'], time() + 365*24*3600);
setcookie('password', $_POST['motdepasse'], time() + 365*24*3600);


header('Location: page3.php');
?>

