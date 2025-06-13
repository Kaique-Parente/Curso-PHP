<?php

    //Variável de Variável
    $x = "nome";

    echo "$x <br>";

    $$x = "Matheus";

    echo $nome;
    echo "<br>";
    
    //Variável de Referência
    $valor1 = 10;

    $valor2 = & $valor1;

    echo $valor1;
    echo "<br>";
    echo $valor2;
    echo "<br>";

    $valor2 = 15;

    echo "Após mudança! <br>";
    echo $valor1;
    echo "<br>";
    echo $valor2;
    echo "<br>";
?>