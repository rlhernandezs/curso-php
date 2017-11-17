<?php

    // Strings em PHP
    echo "Strings em PHP<br/><br/>";

    $nome = "Hcode";

    $nome2 = 'Treinamentos';

    //var_dump($nome, $nome2);

    echo "ABC $nome.<br/>";

    echo 'DEF $nome.<br/>';
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $nome = "rafael hernandez";

    echo $nome;
    echo "<br/>";

    echo strtoupper($nome);
    echo "<br/>";

    echo strtolower($nome);
    echo "<br/>";

    echo ucwords($nome);
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $empresa = "Hcode";

    $empresa = str_replace("o", "0", $empresa);

    $empresa = str_replace("e", "3", $empresa);

    echo $empresa;

    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $frase = "A repetição é a mãe da retenção.";

    $palavra = "mãe";

    $q = strpos($frase, $palavra);

    $texto = substr($frase, 0, $q);

    $texto = substr($frase, $q + strlen($palavra), strlen($frase));

    //var_dump($q);

    echo $texto;

?>