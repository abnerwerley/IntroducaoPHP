<?php

//mostra os números ímpares de 1-100
for ($i = 1; $i <= 100; $i++) {

    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}
