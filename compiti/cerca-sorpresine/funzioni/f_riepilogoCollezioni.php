<?php

include_once "funzioni_generali.php";

function estraiRiepilogo() : array {
    return execute_query(
        "SELECT nomeC, COUNT(s.idSorpresina) AS n_sorpresine, 
        SUM(s.presente = 1) AS n_presenti, 
        SUM(s.presente = 0) AS n_mancanti
        FROM collezione_sorpresine.collezioni c
        JOIN collezione_sorpresine.sorpresine s ON s.collezione = c.idCollezione
        GROUP BY idCollezione"
    );
}

function disegnaTab_riepilogo($dati) {
    ?>
    <table class="table">
        <thead>
        <tr>
            <th>Collezione</th>
            <th>Sorprese totali</th>
            <th>Sorprese possedute</th>
            <th>Sorprese mancanti</th>
            <th>Completo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($dati as $row) {
            ?>
            <tr>
                <td><?= $row["nomeC"] ?></td>
                <td><?= $row["n_sorpresine"] ?></td>
                <td><?= $row["n_presenti"] ?></td>
                <td><?= $row["n_mancanti"] ?></td>
                <td>
                    <?php
                        if ($row["n_presenti"] === $row["n_sorpresine"])
                            echo "<span class='text-success'>✅ Completo</span>";
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<?php
}
