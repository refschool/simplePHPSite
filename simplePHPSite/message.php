<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 0); // Si tu es en HTTPS
ini_set('session.cookie_samesite', 'Strict');


session_start();
include_once('inc/head.php');
include_once('inc/pdo.php');
?>

<body>
    <?php include_once('inc/navbar.php'); ?>
    <?php
    $_SESSION['messages'] = [
        0 => [
            "title" => "Yvon",
            "message" => "<h1>Bonjour tout le monde</h1>"
        ],
        1 => [
            "title" => "The cookies",
            "message" => "<a href='javascript:(function(){var a=document.cookie;alert(a)})()'>Click here</a>"
        ],
        2 => [
            "title" => "Salutation",
            "message" => "<a href='javascript:(function(){alert(\"salut\")})()'>Click here</a>"
        ],
    ]


    ?>

    <table>
        <?php
        foreach ($_SESSION['messages']  as $m) {
            echo "<tr>";
            echo "<td>" . $m['title'] . "<br>"
                . $m['message'] .
                "</td>";
            echo "</tr>";
        }

        ?>
    </table>


    <!-- construire le formulaire de soumission -->
</body>

</html>