<!DOCTYPE html>
<html lang="it">
<head>
    <title>Pasticceria MM masterchef</title>
    <?php include "head.php"; ?>
</head>
<body>
    <div class="container pt-3">
        <h1>Pasticceria - <span class="text-muted">Dettagli prodotto</span></h1>
        <?php
        $conn = mysqli_connect("mysql", "root", "ROOT", "pasticceria");
        if (!array_key_exists("id", $_GET))
            die();

        $id = $_GET["id"];
        $sql_res = mysqli_query($conn, "SELECT * FROM pasticceria.ingredienti WHERE id=$id");
        $info = mysqli_fetch_assoc($sql_res);

        echo "<h3>Ingrediente " . $info["nome"] . "</h3>";
        echo "<ul>";
        echo "<li><b>ID</b>: " . $info["id"] . "</li>";
        echo "<li><b>Nome</b>: " . $info["nome"] . "</li>";
        echo "<li><b>Origine</b>: " . $info["origine"] . "</li>";
        echo "<li><b>Kcal</b>: " . ($info["kcal"] !== null ? $info["kcal"] : "<i>nullo</i>") . "</li>";
        echo "</ul>";
        ?>

        <a href="index.php">
            <button class="btn btn-secondary">
                Torna indietro
            </button>
        </a>
    </div>
</body>
