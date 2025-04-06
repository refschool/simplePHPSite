<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header('Content-Type: application/json');
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");


print_r($_POST);
print_r($_SESSION);

// Simulation d'un utilisateur connecté avec un cookie de session
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = 'victime';
    $_SESSION['email'] = 'victime@example.com';
}

// Si une requête POST est reçue, on met à jour l'email (vulnérable au CSRF)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    echo "Email mis à jour : " . htmlspecialchars($_SESSION['email']);
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Changer Email</title>
</head>

<body>
    <h2>Changer votre email</h2>
    <form method="POST" action="update_email.php">
        <input type="email" name="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>">
        <input type="submit" value="Mettre à jour">
    </form>
</body>

</html>