<?php

function date_diffence(int $a, int $b) : int {
   return floor(($a - $b) / 60 / 60 / 24);
}

$now = time();
$my_birthday = 1004205600;

echo date_diffence($now, $my_birthday) . " giorni";
