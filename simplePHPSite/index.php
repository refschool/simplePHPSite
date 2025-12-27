<?php
//http://formapedia.test:8888/MDSB1/B1BANCKEND/PHP%20DAY3-4-5/index.php

ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 0); // Si tu es en HTTPS
ini_set('session.cookie_samesite', 'Strict');

session_start();
include_once('inc/head.php');
include_once('inc/pdo.php');
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php include_once('inc/navbar.php'); ?>
    <?php
    // si l'utilisateur n'est pas connecté afficher un lien pour aller vers la page login.php
    // si l'utilisateur est connecté afficher un message d'accueil avec l'email.
    //  "Bonjour yvon.huynh@gmail.com"
    // Utiliser le mécanisme de session  (session_start() et $_SESSION)
    if (isset($_SESSION['email'])) {
        echo "Bonjour " . $_SESSION['email'];
    } else {
        echo "Veuillez vous <a href='login.php'>connecter</a>";
    }
    ?>
</body>

</html>