<!-- Detail VIEW -->

<?php
    include "controller.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <?php include "head.php" ?>
    <title>Leggi articolo</title>
</head>
<body>
    <div class="container mt-4">
        <a href="list.php">Torna indietro</a>
        <h1><?= $article["title"] ?></h1>
        <p class="lead">
            <?= $article["subtitle"] ?>
        </p>

        <?php foreach ($images as $image) { ?>
            <img src="/static/images/<?= $image["path"] ?>" class="img-fluid" alt="Immagine">
        <?php } ?>

        <p><?= $article["body"] ?></p>
    </div>
</body>
</html>
