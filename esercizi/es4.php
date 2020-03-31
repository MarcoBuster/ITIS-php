<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Esercizio 4</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <h1>Esercizio 4</h1>

        <form method="post" action="es4_checkout.php">
            <h3>Dati anagrafici</h3>
            <div class="form-group w-50">
                <label for="inputName">Nome</label>
                <input name="name" class="form-control" id="inputName">
            </div>

            <div class="form-group w-50">
                <label for="inputEmail">Email</label>
                <input name="email" class="form-control" id="inputEmail">
            </div>

            <h3>Prodotti</h3>
            <?php
                $times = 5;
                for ($i=0; $i<$times; $i++) : ?>
            <div class="form-inline mb-2">
                <div class="form-group mr-2">
                    <label for="inputProductName<?=$i?>" class="sr-only">Nome</label>
                    <input name="productName<?=$i?>" type="text" id="inputProductName<?=$i?>"
                           class="form-control" placeholder="Nome">
                </div>
                <div class="form-group mr-2">
                    <label for="inputProductQuantity<?=$i?>" class="sr-only">Quantità</label>
                    <input name="productQuantity<?=$i?>" type="number" id="inputProductQuantity<?=$i?>"
                           class="form-control" placeholder="Quantità">
                </div>
                <div class="form-group">
                    <label for="inputProductPrice<?=$i?>" class="sr-only">Prezzo</label>
                    <input name="productPrice<?=$i?>" type="number" id="inputProductPrice<?=$i?>"
                           class="form-control" placeholder="Prezzo">
                </div>
            </div>
            <?php endfor ?>
            <button type="submit" class="btn btn-outline-info">Invia</button>
        </form>
    </div>
</body>
</html>
