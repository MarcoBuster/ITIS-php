<?php

function generate_options($name) {
    echo "<select name='$name'>";
    foreach (range(0, 15) as $i) {
        $h = strtoupper(dechex($i));
        echo "<option name='$h'>$h</option>";
    }
    echo "</select>";
}

function generate_hex_color() {
    return "#" . $_GET['r1'] . $_GET['r2'] . $_GET['g1'] . $_GET['g2'] . $_GET['b1'] . $_GET['b2'];
}
