<?php
// 1/definition de constante
// -/email est unique  >> try catch
// 3/trim des inputs

// -/après authentification redirection vers la page index.php et 
// 5/un lien vers la page logout 
// est disponible
// -/la page logout.php permet de se déconnecter
// -/après authentification avec succès si on revient vers login.php 
// on est redirigé vers la page index


// connexion à la base de données MySQL
$dsn = 'mysql:host=localhost;dbname=simplephpsite';
$user = "root";
$pass = "";
$pdo = new \PDO($dsn, $user, $pass);
