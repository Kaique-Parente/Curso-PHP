<?php
/*
Soma dos Números Pares
Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.
*/

function sumEvenNumbers($valor){
    $soma = 0;
    
    for($i=1; $i<=$valor; $i++){
        if($i % 2 == 0){
            $soma += $i;
        }
    }
    return $soma;
}
