<html lang="en">
<?php
include_once('inc/head.php');
include_once('inc/pdo.php');
?>

<?php
if (empty($_POST)) {
    // phase de rendu du formulaire initial
?>

    <?php
    include_once('inc/body.php');
    ?>

    <?php
} else {
    // vérifie que les 2 mots de passe concordent
    // password1 et password2 sont égaux
    // et que le email soit rempli
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email  = $_POST['email'];

    // problème 1
    if (($password1 != $password2) || filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            echo "Vous n'avez pas rempli l'email correctement<br>";
        }
        if ($password1 != $password2) {
            echo "Les 2 mots de passe ne concordent pas<br>";
        }

    ?>

        <?php
        include('inc/body.php');
        ?>
    <?php
    } else {
        $password = password_hash($password1, PASSWORD_DEFAULT);
        // insertion de l'utilisateur dans la base de données
        $sql = "INSERT INTO `utilisateurs` (`id`, `email`, `password`) 
        VALUES (NULL, '$email', '$password')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        // avec hashage de mot de passe

        echo "<div><h2>Votre compte est créé</h2></div>";
    }

    ?>


<?php
}
?>