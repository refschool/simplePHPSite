<?php
session_start();
include_once('inc/head.php');
include_once('inc/pdo.php');
?>

<html lang="en">
<?php
// on redirige vers login si on n'est pas authentifié
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
} else {
    echo '<h1>mise à jours de password</h1>';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // détection soumission de formulaire
        echo "vous venez de soumettre le mot de passe";
        // update du mot de passe
        // TODO : vérifier que l'ancien mot de passe concorde avec la base
        $password = password_hash($_POST['passwordNew'], PASSWORD_DEFAULT);
        $sql = "UPDATE utilisateurs SET password='" . $password . "' WHERE email = '" . $_SESSION['email'] . "'";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(); // pour l'instant on ne checke pas la réussite

        // on revient à la page de profil
        header('Location: profil.php');
    }
?>

    <form action="updatePassword.php" method='POST'>
        <label for="passwordOld">Ancien mot de passe</label><br>
        <input type="password" name="passwordOld" required><br>
        <label for="passwordNew">Nouveau mot de passe</label><br>
        <input type="password" name="passwordNew" required><br>
        <input type="submit" value="Soumettre">

    </form>


<?php
}
?>