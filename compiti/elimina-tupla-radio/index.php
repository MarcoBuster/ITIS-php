<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Elimina tupla - radio button</title>
    <?php include "head.php"; ?>
</head>
<body>
    <div class="container py-3">
        <h1>Elimina tupla - <span class="text-muted">radio button edition</span></h1>

        <?php
        if (isset($_POST) && array_key_exists("delete", $_POST)) {
            $id = $_POST["delete"];
            if ($id === "none")
                echo "<div class='alert alert-danger'>Non hai selezionato nessun elemento da eliminare</div>";
            else {
                $res = deleteRow($id);
                if ($res === false)
                    echo "<div class='alert alert-danger'>Errore durante l'eliminazione dell'elemento</div>";
                else
                    echo "<div class='alert alert-success'>Elemento con ID=$id eliminato</div>";
            }
        }
        ?>

        <form method="post" action="index.php">
            <input type="radio" name="delete" value="none" style="display: none;" checked>
            <?php printTable(getRows()) ?>
            <button type="submit" class="btn btn-primary">Distruggi tupla</button>
        </form>
    </div>
</body>
