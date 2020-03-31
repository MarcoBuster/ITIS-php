<?php
    session_start();

    $auth_user = "admin";
    $auth_password = "admin";

    if(array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
        if($_POST['username'] == $auth_user && $_POST['password'] == $auth_password) {
            $user = $_SESSION['logged_user'] = $auth_user;
            $theme = $_SESSION['theme'] = 'light';
            $logged_date = $_SESSION['logged_date'] = time();
        }
        else
            $error = 'Nome e password errate';
    }
    elseif (array_key_exists('logout', $_POST)) {
        session_destroy();  // destroy my SESSION not my planet
        unset($_SESSION);
    }
    include "php_init.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Compito 1</title>
    <?php include "head.php" ?>
</head>
<body>
    <?php include "intestazione.php"; ?>
    <?php include "menu.php"; ?>

    <div class="container pt-2 mt-3">
        <figure style="float: right; width: 15%;">
            <img alt="Snefiscida" class="img-fluid"
                 src="https://upload.wikimedia.org/wikipedia/commons/8/8d/Emperor_penguin.jpg">
            <figcaption><i>Gli sfeniscidi, o <a href="https://it.wikipedia.org/wiki/Tux_(mascotte)">tux</a></i></figcaption>
        </figure>

        <h2>La mia guida di PHP e bootstrap inizia qui.</h2>
        <p>
            Gli sfeniscidi (Spheniscidae Bonaparte, 1831) sono una famiglia di uccelli comunemente noti come pinguini. Sono l'unica famiglia dell'ordine Sphenisciformes.
        </p>
        <p>
            Sono gli uccelli più acquatici in assoluto. Il loro gruppo si è evoluto a partire da uccelli volatori, ma ora nessuna specie di pinguino è in grado di volare. Sono animali molto specializzati e sociali, hanno una forma idrodinamica e ali trasformate in pinne che li fanno perfetti nuotatori.
        </p>

        <?php if (!isset($user)) { ?>
            <p class="text-danger"><b>Esegui il login per sbloccare tutti i contenuti.</b></p>
        <?php } ?>
    </div>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/pooper.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
</body>
</html>
