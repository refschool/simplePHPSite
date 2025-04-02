<body>

    <div class="container">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= ($_POST['email'] ??  "") ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password 1</label>
                <input type="text" class="form-control" name="password1" id="password1" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password 2</label>
                <input type="text" class="form-control" name="password2" id="password2" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Créer mon compte" id="btn">

        </form>
    </div>
</body>

</html>