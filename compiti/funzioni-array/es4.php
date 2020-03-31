<?php

$array = [
    0 => [
        "nome" => "mario",
        "cognome" => "rossi",
        "datanascita" => "10/10/1998",
        "tipologia" => "studente",
    ],
    1 => [
        "nome" => "andrea",
        "cognome" => "verdi",
        "datanascita" => "5/5/2010",
        "tipologia" => "tecnico",
    ],
    2 => [
        "nome" => "paolo",
        "cognome" => "arancioni",
        "datanascita" => "10/2/1999",
        "tipologia" => "studente",
    ],
    3 => [
        "nome" => "marta",
        "cognome" => "ongari",
        "datanascita" => "10/10/1998",
        "tipologia" => "tecnico",
    ],
];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Esercizio 4</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di nascita</th>
            <th>Tipologia</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($array as $item) {
                $nome = $item["nome"];
                $cognome = $item["cognome"];
                $datanascita = $item["datanascita"];
                $tipologia = $item["tipologia"];
                echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$cognome</td>";
                echo "<td>$datanascita</td>";
                echo "<td>$tipologia</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
