<?php
// TODO :  message plus robuste en cas de non existence 
// de l'utilisateur
include_once('inc/session_header.php');
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    // redirection vers la page index.php si on est déjà authentifié
    header('Location: index.php');
}
?>
<html lang="en">
<?php
include_once('inc/head.php');
include_once('inc/pdo.php');

// controle du email 
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $sql = "SELECT email,password FROM utilisateurs WHERE email='$email'";
    // $sql = "SELECT email,password FROM utilisateurs WHERE email='" . $email . "' and password='" . $_POST['password'] . "'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);



    // if ($result) {

    //     // header('Location: /index.php');
    //     echo "Vous êtes authentifié avec succès !";
    //     // on sette $_SESSION

    //     $_SESSION['email'] = $email;

    //     // redirection vers la page index.php
    //     header('Location: index.php');
    // }



    //controle mot de passe
    if ($result) {

        $passwordDB = $result['password'];
        $passwordFormulaire = $_POST['password'];

        $resultat_comparaison = password_verify($passwordFormulaire, $passwordDB);
        if ($resultat_comparaison === false) {
            echo "Mauvais mot de passe";
        } else {
            echo "Vous êtes authentifié avec succès !";
            // on sette $_SESSION
            $_SESSION['email'] = $email;

            // redirection vers la page index.php
            header('Location: index.php');
        }
    }
}

?>

<body>
    <?php
    if (!isset($_SESSION['email']) || (isset($result) && $result === false)) {


    ?>
        <?php include_once('inc/navbar.php'); ?>
        <div class="container">
            <?php
            if (isset($result) && $result === false) {
                echo "Utilisateur inexistant";
            }

            ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= ($_POST['email'] ??  "") ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" id="password" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Connexion" id="btn">

            </form>
        </div>
</body>
<?php
    }

?>