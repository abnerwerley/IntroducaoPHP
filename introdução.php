<?php

$idade = 20;
$nome = "Abner";
$empresa = "FireDev";
$cargo = "Desenovlvedor Back-end Júnior";

echo 'Olá mundo!' . PHP_EOL; // END OF LINE

//echo gettype($cargo);

//echo "\r\n";
//Concatenação em aspas simples:
//echo 'Olá mundo, eu sou o '. $nome.', trabalho na '.$empresa .' como '.$cargo .' e tenho '.$idade. ' anos';

//em aspas duplas não preciso concatenar,
echo "Eu sou o $nome, trabalho na $empresa como $cargo e tenho $idade anos.\n";
$gostei = "Gostei";
//echo "Eu \"$gostei\" de front-end.";
