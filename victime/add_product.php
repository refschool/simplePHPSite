<?php
ini_set('session.cookie_samesite', 'None');
ini_set('session.cookie_secure', 'true');
session_start();
if (isset($_POST['produit'])) {
    $_SESSION['panier'][] = $_POST['produit'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Site légitime</title>
</head>

<body>
    <h1>Ajout de produit</h1>
    <!-- si la CB est enregistrée c'est plus facile de payer -->
    <form action="add_product.php" method="POST">
        <input type="text" name="produit" value="<?= $_GET['produit'] ?? "samsung S10" ?>">
        <br><button type="submit">Ajouter au panier</button>
        <?php
        if (isset($_SESSION['panier'])) {
            print_r($_SESSION['panier']);
        }

        ?>
    </form>
</body>

</html>