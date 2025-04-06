<?php
session_start();
/**
 * fonctionnalités de la page de profil
 * 1/pouvoir visualiser les informations de sont compte si on est authentifié
 * 2/pouvoir changer certaines informations de son compte
 * 3/on ne peut agir que sur les information de son propre compte
 * 4/si on n'est pas authentifié on est invité à le faire
 */
/**
 * 
 *   email :  Yvon
 *   Mettre à jour son mot de passe :
 *   |__________|    Soumettre Nouveau Mot de Passe
 *   14h00
 * 
 * 
 */
?>

<html lang="en">
<?php
include_once('inc/head.php');
include_once('inc/pdo.php');
?>

<body>
    <?php include_once('inc/navbar.php'); ?>
    <?php
    // on redirige vers login si on n'est pas authentifié
    if (!isset($_SESSION['email'])) {
        header('Location: login.php');
    } else {
        // selection des données de l'utilisateur
        $sql = "select * from utilisateurs where email='" . $_SESSION['email'] . "'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        echo '<div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-lg text-gray-800">';
        echo '<h2 class="text-xl font-semibold mb-4">Voici vos informations :</h2>';
        echo '<p class="mb-2"><span class="font-medium">Email :</span> ' . $result['email'] . '</p>';
        echo '<p class="mb-2"><span class="font-medium">Nom : </span> ' . $result['nom'] . '</p>';
        echo '<p class="mb-2"><span class="font-medium">Prenom : </span> ' . $result['prenom'] . '</p>';
        echo '<a href="updatePassword.php" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Changer le mot de passe</a>';
        echo '</div>';
    }
    ?>
</body>

</html>