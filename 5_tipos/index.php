<?php

$operacao = "5" * 12;
echo $operacao . " " . gettype($operacao);

$preco = "119.99";

echo gettype($preco) . "<br>";

$preco = (float) $preco;

if(is_float($preco)){
    echo "Virou float!";
}

//is_int( );
//is_float( );
//is_string( );
//is_boolean( );
//is_null( );