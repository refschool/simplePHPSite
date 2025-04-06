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

    <body>
        <?php include_once('inc/navbar.php'); ?>
        <h1>mise à jours de password</h1>
        <form action="updatePassword.php" method="POST" class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-lg space-y-4">
            <div>
                <label for="passwordOld" class="block text-gray-700 font-medium mb-1">Ancien mot de passe</label>
                <input type="password" name="passwordOld" id="passwordOld" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="passwordNew" class="block text-gray-700 font-medium mb-1">Nouveau mot de passe</label>
                <input type="password" name="passwordNew" id="passwordNew" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <input type="submit" value="Soumettre"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
            </div>
        </form>



    <?php
}
    ?>
    </body>

</html>