<?php
echo "bob@example.com<br>";
var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
echo "bobexample.com<br>";
var_dump(filter_var('bobexample.com', FILTER_VALIDATE_EMAIL));
echo "bob@example<br>";
var_dump(filter_var('bob@example', FILTER_VALIDATE_EMAIL));
echo "bob@example.application<br>";
var_dump(filter_var('bob@example.application', FILTER_VALIDATE_EMAIL));






$dsn = 'mysql:host=localhost;dbname=votre_base';
$pdo = new \PDO($dsn, $user, $pass);


$sql = 'SELECT * FROM table';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$result = $stmt->fetch(PDO::FETCH_CLASS);
