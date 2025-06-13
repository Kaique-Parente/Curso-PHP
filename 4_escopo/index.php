<?php

$idade = 20;

function chamarIdade(){
    global $idade;
    
    echo $idade;
}

function incrementarIdade(){
    // não funciona! global $idade;

    static $idadeAtual = 0;
    $idadeAtual++;
    
    echo "Idade Atual: $idadeAtual <br>";
}

chamarIdade();
echo "<br>";

incrementarIdade();
incrementarIdade();
incrementarIdade();

?>