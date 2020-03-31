<html lang="it">
<head>
    <title>Esercizio 3</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table td {
            border: 1px solid black;
            text-align: center;
        }
        table th {
            padding-left: 5px;
            padding-right: 5px;
        }
        table tr:first-child th {
            text-align: left;
            padding-left: 10px;
        }
        table tr:first-child td {
            border-top: 0;
        }
        table tr td:first-child {
            border-left: 0;
            padding-left: 10px;
            padding-right: 10px;
            text-align: left;
        }
        table tr:last-child td {
            border-bottom: 0;
        }
        table tr td:last-child {
            border-right: 0;
        }

        .positive {
            background: green;https://www.classi.cloud/virtuali/pluginfile.php/3825/mod_resource/content/1/esempio_login.php
        }
        .not-great-not-terrible {
            background: yellow;
        }
        .negative {
            background: red;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Esercizio 3</h1>
    <?php
        $alunni = ["Maria", "Luca", "Giovanni", "Marco", "Chiara"];
        $storia = [8, 8, 4, 3, 2];
        $informatica = [9, 7, 8, 7, 6];
        $inglese = [10, 2, 8, 5, 7];
        $courses = [$storia, $informatica, $inglese];
    ?>
    <table>
        <thead>
        <tr>
            <th>Alunno</th>
            <th>Storia</th>
            <th>Informatica</th>
            <th>Inglese</th>
        </tr>
        </thead>
        <tbody>
        <?php
            for ($i=0; $i<sizeof($alunni); $i++) {
                echo "<tr>";
                echo "<td>$alunni[$i]</td>";
                for ($j=0; $j<sizeof($courses); $j++) {
                    $grade = $courses[$j][$i];
                    if ($grade > 6)
                        $class = "positive";
                    else if ($grade >= 5 && $grade < 6)
                        $class = "not-great-not-terrible";
                    else
                        $class = "negative";

                    echo "<td class=\"$class\">$grade</td>";
                }
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>

<?php
