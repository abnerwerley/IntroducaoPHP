<?php

$peso = 63;
$altura = 1.80;
$imc = $peso / $altura ** 2;

echo "Seu imc é $imc. Você está com o imc ";

if ($imc < 18.5) {
    echo 'abaixo';
} else if ($imc < 25) {
    echo 'dentro';
} else {
    echo 'acima';
}

echo ' do recomendado.';
