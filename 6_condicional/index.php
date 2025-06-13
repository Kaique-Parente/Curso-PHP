<?php

$numero = 1;

if ($numero >= 5 || 1) {
    echo "Verdadeiro <br>";
}

echo $numero > 0 && $numero <= 2 ? "1" : "Falso";
echo "<br>";

$nome = "Lucas";

switch ($nome){
    case "Matheus":
        echo "Seu nome é Matheus!";
        break;
    case "Rodrigo":
        echo "Seu nome é Rodrigo!";
        break;
    default:
    echo "Você não é o Matheus nem o Rodrigo!";
    break;
}