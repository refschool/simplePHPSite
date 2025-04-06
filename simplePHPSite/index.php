<?php
//http://formapedia.test:8888/MDSB1/B1BANCKEND/PHP%20DAY3-4-5/index.php
session_start();
include_once('inc/head.php');
include_once('inc/pdo.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Accueil</title>
</head>

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