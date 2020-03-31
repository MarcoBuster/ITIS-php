<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Pasticceria MM masterchef</title>
    <?php include "head.php"; ?>
</head>
<body>
    <div class="container pt-3">
        <h1>Pasticceria</h1>
        <form method="get">
            <label for="selectIngredientType">Tipo di ingredienti</label>
            <select id="selectIngredientType" name="ingredient_type">
                <option value="tutti">Tutti</option>
                <option value="vegetale">Vegetale</option>
                <option value="animale" >Animale</option>
            </select>
            <button type="submit">Filtra</button>
        </form>

        <?php printTable(getRows()) ?>
    </div>
</body>
