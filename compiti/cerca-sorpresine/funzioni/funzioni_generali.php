<?php

// Ho dovuto mettere qua la configurazione perchè non riuscivo ad includerla facendo
// include "../configuration.php";

const DB_HOST = "mysql";
const DB_USER = "root";
const DB_PASSWORD = "ROOT";
const DB_NAME = "collezione_sorpresine";

function connect_to_database()  {
    return mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}

function execute_query($query) {
    $conn = connect_to_database();
    if (!$conn) {
        echo "<span class='text-danger'>Errore di connessione al database</span>";
        return false;
    }

    $res = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($res))
        $rows[] = $row;
    return $rows;
}
