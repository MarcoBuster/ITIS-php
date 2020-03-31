<!DOCTYPE html>
<html lang="it">
<head>
    <title>Esercizio 1</title>
</head>

<body>
    <h1>Esercizio 1</h1>
    <?php
        $shopping_list = ["banane", "pere", "mele"];
    ?>

    <ul>
        <?php
            foreach ($shopping_list as $el)
                echo "<li>$el</li>";
        ?>
    </ul>
</body>
</html>

