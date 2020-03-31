<!DOCTYPE html>
<html lang="it">
<head>
    <title>Form</title>
</head>

<body>
<?php

var_dump($_POST);
var_dump($_SESSION);
var_dump($_COOKIE);
?>

<h1>Form</h1>

<label for="dummyInput">Input esterno:</label>
<input id="dummyInput">

<br /> <hr />

<form name="inputData" method="post" action="form.php">
    <label for="inputName">Nome</label>
    <input id="inputName" name="name"> <br /> <br />
    <label for="inputLastName">Cognome</label>
    <input id="inputLastName" name="lastName"> <br /> <br />
    <label for="inputPhoneNumber">Numero di telefono</label>
    <input id="inputPhoneNumber" name="phoneNumber" type="number" min="0" max="1000000000" step="1"> <br /> <br />
    <label for="inputDateBirth">Data di nascita</label>
    <input id="inputDateBirth" name="dateBirth" type="date"> <br /> <br />
    <button type="reset">Reset</button>
    <button type="submit">Invia</button>
</form>
</body>
</html>
