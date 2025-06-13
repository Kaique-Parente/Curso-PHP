<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for($i = 0; $i < count($array); $i++){
    if($array[$i] % 2 == 0){
        echo $array[$i] . "<br>";
    }
}

$nomes = ["Matheus", "Maria", "José", "Pedro", "Romario"];

foreach($nomes as $nome){
    echo "O nome atual é: $nome <br>";
}

//break
//continue
//while()
//do while()