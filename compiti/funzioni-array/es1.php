<?php

function var_type($v) {
    return gettype($v);
}

echo var_type(5) . "<br />";
echo var_type('c') . "<br />";
echo var_type("ciao") . "<br />";
echo var_type(["11", 2, '3']) . "<br />";
