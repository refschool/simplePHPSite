<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDir = "uploads/";
    $uploadFile = $uploadDir . basename($_FILES["file"]["name"]);

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
        echo "Le fichier a été téléchargé avec succès.";
    } else {
        echo "Erreur lors du téléchargement du fichier.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Upload de fichier</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Choisissez un fichier :</label>
        <input type="file" name="file" id="file" required>
        <button type="submit">Uploader</button>
    </form>
</body>

</html>