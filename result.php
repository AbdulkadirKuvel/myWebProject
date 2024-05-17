<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>İletişim Verileri</title>
</head>

<body>
    <div class="container connect">
        <h2>
            <h2>Gönderilmiş Veriler</h2>
        </h2>
        <p>
            <?php
                echo $_POST["first name"];
                echo $_POST["last name"];
            ?>
        </p>
    </div>
</body>

</html>