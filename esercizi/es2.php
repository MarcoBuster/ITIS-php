<!DOCTYPE html>
<html lang="it">
<head>
    <title>Esercizio 2</title>
</head>
<body>
    <h1>Esercizio 2</h1>
    <form method="POST" action="es2.php">
        <label for="inputName">Nome</label>
        <input name="name" id="inputName"> <br />

        <label for="inputDateOfBirth">Data di nascita</label>
        <input name="dateOfBirth" id="inputDateOfBirth" type="date"> <br />

        <button type="submit">Invia</button>
    </form>

    <?php
        $data = $_POST;
        if (!$data)  // if the request has no POST data, don't process it
            return;

        $date_birth = strtotime($data['dateOfBirth']);
        $today = time();
        $years = floor(($today - $date_birth) / (365*24*60*60));
        echo "<br/> <br/> <b>La tua eta calcolata è</b>: " . $years;

    ?>
</body>
</html>
