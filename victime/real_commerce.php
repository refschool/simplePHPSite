<?php

// header("X-Frame-Options: DENY");
ini_set('session.cookie_samesite', 'None'); // marche sur Edge, plus sur Chrome
ini_set('session.cookie_secure', 'true');
session_start();
if (isset($_GET['produit'])) {
    $_SESSION['panier'][] = $_GET['produit'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Site légitime</title>
</head>

<body>
    <h1>Bienvenue sur notre site sécurisé LOL</h1>
    <!-- si la CB est enregistrée c'est plus facile de payer -->
    <form action="paiement_commerce.php" method="POST">
        <button type="submit">Payer maintenant</button>
        <?php
        if (isset($_SESSION['panier'])) {
            print_r($_SESSION['panier']);
        }

        ?>
    </form>
</body>

</html>