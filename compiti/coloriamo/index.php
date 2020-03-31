<?php

include_once "functions.php";

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Coloriamo le parole!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <form method="get" action="index.php">
            <label for="r">Rosso</label>
            <?php generate_options("r1"); ?>
            <?php generate_options("r2"); ?>
            <br />
            <label for="g">Verde</label>
            <?php generate_options("g1"); ?>
            <?php generate_options("g2"); ?>
            <br />
            <label for="b">Blu</label>
            <?php generate_options("b1"); ?>
            <?php generate_options("b2"); ?>
            <br />
            <label for="word">Parola da colorare</label>
            <input id="word" name="word"> <br />
            <button type="submit">Coloriamo!</button>
            <br /> <br />
        </form>

        <span id="result">
            <?php
                if (array_key_exists("word", $_GET) && strlen($_GET['word']) > 0) {
                    $color = generate_hex_color();
                    $word = $_GET['word'];
                    echo "<span style=\"color: $color\">$word</span> (<code>$color</code>)";
                }
            ?>
        </span>
    </div>
</body>
</html>
