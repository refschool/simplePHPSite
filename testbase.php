<?php
// connexion à la base de données MySQL
$dsn = 'mysql:host=localhost;dbname=MDSB1';
$user = "root";
$pass = "root";
$pdo = new \PDO($dsn, $user, $pass);

var_dump($pdo);


// sélection des données dans la table utilisateurs
$sql = "SELECT * FROM utilisateurs";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

echo '<pre>';
print_r($result);
echo '</pre>';



// Insertion dans la base de données
$email = "referencementschol@gmail.com";
$password = "456";

$sql = "INSERT INTO `utilisateurs` (`id`, `email`, `password`) 
VALUES (NULL, '$email', '$password')";
$stmt = $pdo->prepare($sql);
$stmt->execute();







password'); DROP TABLE utilisateurs; --