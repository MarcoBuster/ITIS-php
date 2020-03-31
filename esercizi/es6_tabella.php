<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Esercizio 6 - tabella</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
</head>
<body>
    <div class="container pt-4">
        <h2>Inserisci i dati</h2>
        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <div class="row">
                <div class="col">
                    <label for="inputName">Nome</label>
                    <input id="inputName" class="form-control" placeholder="Nome" name="name">
                </div>
                <div class="col">
                    <label for="inputLastName">Cognome</label>
                    <input id="inputLastName" class="form-control" placeholder="Cognome" name="last_name">
                </div>
                <div class="col">
                    <label for="inputTeacher">Docente</label>
                    <select class="custom-select" id="inputTeacher" name="type">
                        <option>Docente</option>
                        <option>Studente</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button class="btn btn-block btn-success" type="submit">Inserisci</button>
                </div>
                <div class="col">
                    <button class="btn btn-block btn-danger" type="reset">Cancella campi</button>
                </div>
            </div>
        </form>
        <?php
            session_start();
            if (array_key_exists("name", $_POST)) {
                $data = [
                    "name" => $_POST["name"],
                    "last_name" => $_POST["last_name"],
                    "email" => $_POST["email"],
                    "type" => $_POST["type"],
                ];

                if (!array_key_exists("last_index", $_SESSION))
                    $i = $_SESSION['last_index'] = 0;
                else
                    $i = $_SESSION['last_index'];
                if (!array_key_exists("data", $_SESSION))
                    $_SESSION["data"] = array();
                $_SESSION["data"][$i] = $data;
                $_SESSION["last_index"] = $i+1;
            }
        ?>

        <h2 class="mt-4">Riepilogo</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Ruolo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (array_key_exists("data", $_SESSION)) {
                        foreach ($_SESSION['data'] as $row) {
                            $name = $row['name'];
                            $last_name = $row['last_name'];
                            $email = $row['email'];
                            $type = $row['type'];
                            echo "<tr>";
                            echo "<td>$name</td>";
                            echo "<td>$last_name</td>";
                            echo "<td>$email</td>";
                            echo "<td>$type</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

