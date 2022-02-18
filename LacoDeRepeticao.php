<?php

echo "Os números entre 1000 e 1999 que quando divididos por 11 o resto é 5 são: \n";

$numero = 1000;
while ($numero <= 1999) {
    if ($numero % 11 == 5) {
        echo "$numero\n";
    }
    $numero++;
}
