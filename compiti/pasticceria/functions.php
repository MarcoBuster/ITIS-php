<?php

function getRows() {
    $conn = mysqli_connect("mysql", "root", "ROOT", "pasticceria");

    if (array_key_exists("ingredient_type", $_GET) && $_GET["ingredient_type"] !== "tutti" && $selection = $_GET["ingredient_type"])
        $sql_res = mysqli_query($conn, "SELECT * FROM pasticceria.ingredienti WHERE origine='$selection'");
    else
        $sql_res = mysqli_query($conn, "SELECT * FROM pasticceria.ingredienti");

    $rows = [];
    while ($row = mysqli_fetch_assoc($sql_res))
        $rows[] = $row;
    return $rows;
}

function printTable($rows) {
    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Origine</th>";
    echo "<th>Dettagli</th>";
    echo "</tr>";
    foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["origine"] . "</td>";
        echo "<td><a href='details.php?id=" . $row["id"] .  "'><button class='btn btn-primary'>Dettagli</button></a></td>";
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
}
