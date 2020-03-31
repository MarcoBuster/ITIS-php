<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Esercizio 4</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3 pb-5">
        <h1>Esercizio 4 - pagato</h1>

        Complimenti! Hai completato l'ordine con successo.

        <?php
            $data = $_POST;
            if (!$data)  // no data is provided, return
                return

            $total_price = 0;
        ?>

        <h3>Informazioni anagrafiche</h3>
        <p>
            <b>Il tuo nome:</b> <?=$data['name']?> <br />
            <b>La tua email:</b> <?=$data['email']?>
        </p>

        <h3>Prodotti ordinati</h3>
        <?php for ($i=0; $i<5; $i++) : ?>
            <?php
                $product_name = $data['productName' . $i];
                $product_quantity = $data['productQuantity' . $i];
                $product_price = $data['productPrice' . $i] * $product_quantity;
                $total_price += $product_price;
            ?>
            <h5 class="mb-0 mt-2"><?=$product_name?></h5>
            <b>Quantità: </b> <?=$product_quantity?> <br />
            <b>Prezzo:</b> <?=$product_price?>€ <br />
        <?php endfor ?>

        <hr />

        <b>Prezzo totale: </b> <?=$total_price?>€
    </div>
</body>
</html>
