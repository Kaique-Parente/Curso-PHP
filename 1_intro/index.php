<?php
    //Exibir na tela
    echo "Hello World! <br>";

    //phpinfo(); informações do PHP

    //Variáveis
    $Nome = "Kaique";
    echo $Nome;
    echo "<br>";
    echo 5+7;
    echo "<br>";

    echo 12.5 + 1.36;
    echo "<br>";

    $idade = 20;
    echo "$Nome tem $idade anos!";
    echo "<br>";

    //Arrays
    $a = ["Matheus", 1, true];
    print_r($a); //Exibir array
    echo "<br>";

    echo $a[0];
    echo "<br>";

    $arrayAssos = [
        'Nome' => 'Teste', 
        'teste' => true, 
        'Nome' => 'Carlos'
    ];
    
    print_r($arrayAssos); // Vai pegar o novo nome e não o antigo
    echo "<br>";

    $nomeArrayAss = $arrayAssos['Nome'];

    if($arrayAssos['teste']){
        echo "Teste passou!";
        echo "<br>";
    }

    echo $nomeArrayAss; 
?>
