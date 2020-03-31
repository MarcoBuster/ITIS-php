<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Elimina tupla - checkbox button</title>
    <?php include "head.php"; ?>
</head>
<body>
    <div class="container py-3">
        <h1>Elimina tupla - <span class="text-muted">checkbox button edition</span></h1>

        <?php
        if (!isset($_POST))
            return;

        $ids = [];
        foreach ($_POST as $key => $value) {
            if (strlen($key) < 8)
                continue;
            if (substr($key, 0, 7) !== "delete_")
                continue;
            $ids[] = substr($key, 7, 1);
        }

        if (count($ids) > 0) {
            $res = deleteRows($ids);
            if ($res === false)
                echo "<div class='alert alert-danger'>Errore durante l'eliminazione degli elementi</div>";
            else {
                $letter = $res > 1 ? 'i' : 'o';
                echo "<div class='alert alert-success'>$res element$letter eliminat$letter</div>";
            }
        }
        ?>

        <form method="post" action="index.php">
            <?php printTable(getRows()) ?>
            <button type="submit" class="btn btn-primary">Distruggi tuple</button>
        </form>
    </div>
</body>
