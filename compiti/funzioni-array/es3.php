<?php
    function calcola_funzione(float $a, float $b, float $c) {
        $delta = pow($b, 2) - (4 * $a * $c);
        echo $delta;
        if ($delta >= 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return [$x1, $x2];
        }
        else {
            return null;
        }
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Esercizio 3</title>
</head>
<body>
    <form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
        y = <input id="inputA" name="a" type="number" placeholder="a">x<sup>^2</sup> +
        <input id="inputB" name="b" type="number" placeholder="b">x +
        <input id="inputC" name="c" type="number" placeholder="c">
        <button type="submit">Calcola</button>
    </form>

    <br /> <h3>Risultato</h3>

    <?php
        if (!array_key_exists("a", $_GET) or !array_key_exists("b", $_GET) or !array_key_exists("c", $_GET)) {
            die();
        }
        $result = calcola_funzione($_GET["a"], $_GET["b"], $_GET["c"]);
        if ($result == null) {
            echo "Equazione in campo complesso.";
            die();
        } else { ?>
        <table>
            <thead>
            <tr>
                <th>x<sub>1</sub></th>
                <th>x<sub>2</sub></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?= $result[0] ?></td>
                <td><?= $result[1] ?></td>
            </tr>
            </tbody>
        </table>
    <?php } ?>
</body>
</html>
