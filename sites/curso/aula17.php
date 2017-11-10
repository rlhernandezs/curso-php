<?php

    // Conhecendo os Operadores do PHP
    echo "Conhecendo os Operadores do PHP<br/><br/>";

    $nome = "Rafael"; // Atribuir

    echo $nome." De Lima Hernandez"; // Concatenar
    echo "<br/>";

    $nome .= " Hernandez"; // Atribuir concatenando

    echo $nome;
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $valorTotal = 0;

    $valorTotal += 100;

    $valorTotal += 25;

    echo $valorTotal;
    echo "<br/>";

    $valorTotal -= 75;

    $valorTotal -= 25;

    echo $valorTotal;
    echo "<br/>";

    $valorTotal *= .9;
    
    echo $valorTotal;
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $a = 10;
    $b = 2;

    echo $a+$b; // Adição
    echo "<br/>";

    echo $a-$b; // Subtração
    echo "<br/>";
    
    echo $a*$b; // Multiplicação
    echo "<br/>";
    
    echo $a/$b; // Divisão
    echo "<br/>";
    
    echo $a%$b; // Resto
    echo "<br/>";

?>