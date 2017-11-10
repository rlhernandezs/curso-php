<?php

    // Conhecendo os Tipos de Dados em PHP

    // Tipos básicos
    $nomes = "Hcode"; // string
    $site = 'www.hcode.com.br'; // string
    $ano = 2017; // número inteiro
    $salario = 5500.99; // número flutuante
    $bloqueado = false; // booleano
    // Tipos compostos
    $frutas = array("abacaxi", "laranja", "manga"); // array



    echo $frutas[1];

    echo "<br/><br/>";


    $anoNascimento = 1987;

    $nome = "Rafael";

    $sobrenome = "De Lima Hernandez";

    $nomeCompleto = $nome." ".$sobrenome; // "." Concatenar

    echo $nomeCompleto;

    exit;

    echo "</br>";

    unset($nomeCompleto); // "unset" Destruir variável da memória

    if (isset($nomeCompleto)){
        // "isset" Validar a existência da variável na memória
        echo $nomeCompleto;

    }

    $nascimento = new DateTime();
    
    //var_dump($nascimento);
    
    $arquivo = fopen("index.php", "r");
    
    //var_dump($arquivo);
    
    $nulo = NULL;
    
    //var_dump($nulo);

?>