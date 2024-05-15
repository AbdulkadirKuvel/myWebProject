<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <title>Kontrol</title>
</head>

<body>
    <div class="control">
        <p class="display-3">
            <?php
            if (
                $_POST["username"] == "b221210002@ogr.sakarya.edu.tr" &&
                $_POST["password"] == "b221210002"
            ) {
                echo "HOŞGELDİN b221210002!";
            } else {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            ?>
        </p>
    </div>
</body>
