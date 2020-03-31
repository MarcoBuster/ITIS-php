<?php
    if (array_key_exists('theme', $_POST)) {
        if ($_SESSION['theme'] == 'light')
            $_SESSION['theme'] = 'dark';
        else
            $_SESSION['theme'] = 'light';
    }

    if (isset($_SESSION) and array_key_exists('logged_user', $_SESSION)) {
        $user = $_SESSION['logged_user'];
        $theme = $_SESSION['theme'];
        $logged_date = $_SESSION['logged_date'];
    }
?>
