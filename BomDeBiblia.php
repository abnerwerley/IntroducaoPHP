<?php

$nome = "João";
$idade = 15;
if ($idade >= 16) { //or ou ||
    if ($nome == "Abner") {
        echo "Lamento $nome, você não pode participar do bom de bíblia.";
    } else {
        echo "Você tem que estudar o livro de Êxodo dos capítulos 25-40";
    }
} else if ($idade >= 13 && $idade <= 15) { //ou and
    echo "Você tem que estudar o livro de Rute";
    if ($nome == "João") {
        echo "\n";
        echo "Tá esperando o que fiotee?? O quiz é sábadão!";
    }
} else if ($idade <= 12 && $idade >= 10) {
    echo "Você tem que estudar o livro 'Meu planeta azul'";
}
