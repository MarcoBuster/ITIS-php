<?php
    session_start();
    include "php_init.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Compito 1 - Guida PHP</title>
    <?php include "head.php" ?>
</head>
<body>
    <?php include "intestazione.php"; ?>
    <?php include "menu.php"; ?>

    <div class="container pt-2 mt-3">
        <?php if (isset($user)) { ?>
            <h4>Area personale</h4>
            <ul class="mb-0">
                <li><b>Nome utente</b>: <?= $user ?></li>
                <li>
                    <b>Ora di login</b>: <?= date('H:i:s d/m/Y', $logged_date) ?>
                    (loggato da <?= floor((time() - $logged_date) / 60) ?> minuti)
                </li>
                <li>
                    <b>Tema scelto</b>: <?= $theme ?>
                    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" name="theme" class="d-inline-flex">
                        <input class="d-none" name="theme">
                        <button class="btn btn-secondary btn-sm mt-2">
                            Passa a tema
                            <?php if (isset($theme) and $theme == "light") { ?>
                                scuro
                            <?php } else { ?>
                                chiaro
                            <?php } ?>
                        </button>
                    </form>
                </li>
            </ul>
            <form method="post" action="index.php" name="logout" class="d-inline-flex">
                <input class="d-none" name="logout">
                <button class="btn btn-danger mt-2">Logout</button>
            </form>

        <?php } else { ?>
            <p class="text-danger">Esegui il login per sbloccare tutti i contenuti.</p>
        <?php } ?>
    </div>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/pooper.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
</body>
<body>