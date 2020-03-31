<!DOCTYPE html>
<html lang="it">
<head>
    <title>Esercizio 5</title>

    <style>
        ul {
            margin-top: 0;
        }
        h3 {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <h1>Esercizio 5</h1>

    <?php
        function print_array($array) {
            echo "<ul>";
            foreach ($array as $el) {
                echo "<li>" . $el . "</li>";
            }
            echo "</ul>";
        }

        $vet = [2, 8, 3, 10, 2, 9, 8, 11];

        echo "<h3>Prima di ordinare</h3>";
        print_array($vet);

        // Implementazione del bubble sort
        for ($i=sizeof($vet); $i>1; $i--)
            for ($j = 0; $j<($i-1); $j++)
                if ($vet[$j] > $vet[$j+1]) {
                    // Se l'elemento attuale è maggiore del successivo, swappa
                    $tmp = $vet[$j];
                    $vet[$j] = $vet[$j+1];
                    $vet[$j+1] = $tmp;
                }

        echo "<h3>Ordinato</h3>";
        print_array($vet);
    ?>
</body>

</html>
