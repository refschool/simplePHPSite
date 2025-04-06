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

<?php
// on redirige vers login si on n'est pas authentifié
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
} else {
    echo "voici vos informations:<br>";
    echo "Email : " . $_SESSION['email'];
    echo '<br>';
    echo "<a href='updatePassword.php'>Changer le mot de passe</a>";
}
?>