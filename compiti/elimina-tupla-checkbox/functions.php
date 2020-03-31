<?php

function getRows() {
    $conn = mysqli_connect("mysql", "root", "ROOT", "polizza");

    $sql_res = mysqli_query($conn, "SELECT * FROM polizza.polizza");
    $rows = [];
    while ($row = mysqli_fetch_assoc($sql_res))
        $rows[] = $row;
    return $rows;
}

function printTable($rows) {
    echo "<table class='table'>";
    echo "<tr>";
    echo "<th></th>";
    echo "<th>ID</th>";
    echo "<th>Nome</th>";
    echo "<th>Prezzo</th>";
    echo "<th>Note contrattuali</th>";
    echo "</tr>";
    foreach ($rows as $row) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td><input type='checkbox' name='delete_$id' value='$id'></td>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $row["nomePolizza"] . "</td>";
        echo "<td>" . $row["prezzo"] . "</td>";
        echo "<td>" . $row["noteContrattuali"] . "</td>";
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
}

function deleteRows($ids) {
    $conn = mysqli_connect("mysql", "root", "ROOT", "polizza");
    foreach ($ids as $id) {
        $res = mysqli_query($conn, "DELETE FROM polizza.polizza WHERE id=$id");
        if ($res === false)
            return $res;
    }
    return count($ids);
}
