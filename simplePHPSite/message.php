<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message board</title>
</head>

<body>
    <?php
    $messages = [
        0 => [
            "title" => "Yvon",
            "message" => "<h1>Bonjour tout le monde</h1>"
        ],
        // 1 => [
        //     "title" => "Yvon",
        //     "message" => "<script>alert('hello')</script>"
        // ],
        2 => [
            "title" => "Salutation",
            "message" => "<a href='javascript:(function(){alert(\"salut\")})()'>Click here</a>"
        ],
    ]


    ?>

    <table>
        <?php
        foreach ($messages as $m) {
            echo "<tr>";
            echo "<td>" . $m['title'] . "<br>"
                . $m['message'] .
                "</td>";
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>