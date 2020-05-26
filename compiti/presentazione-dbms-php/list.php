<!-- List VIEW -->

<?php
include "model.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <?php include "head.php" ?>
    <title>Lista articoli</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Tutti gli articoli</h1>

        <? var_dump(getAllArticles()) ?>
        <?php foreach (getAllArticles() as $article) { ?>
            <div class="card mb-2">
                <?php if ($article["path"] !== null) { ?>
                    <img src="/static/images/<?= $article["path"] ?>" class="card-img-top" alt="Article image">
                <?php } ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $article["title"] ?></h5>
                    <p class="card-text"><?= $article["subtitle"] ?></p>
                    <p class="text-muted">Da <?= $article["aa_name"] . " " . $article["aa_surname"] ?> scritto il <?= $article["creation_date"] ?></p>
                    <a href="details.php?id=<?= $article["id"] ?>" class="btn btn-primary">Leggi</a>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
