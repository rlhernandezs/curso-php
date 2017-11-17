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
    
    echo $a**$b; // Potência
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $a = 100;
    $b = 50;

    var_dump($a>$b); // Maior
    echo "<br/>";

    var_dump($a<$b); // Menor
    echo "<br/>";

    var_dump($a=$b); // Atribuir
    echo "<br/>";

    var_dump($a==$b); // Valida igualdade entre os valores das variáveis
    echo "<br/>";

    var_dump($a===$b); // Valida igualdade entre os valores e tipos das variáveis
    echo "<br/>";

    var_dump($a!=$b); // Valida diferença entre os valores das variáveis
    echo "<br/>";
    
    var_dump($a!==$b); // Valida igualdade entre os valores e tipos das variáveis
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $c = 50;
    $d = 35;

    var_dump($c<=>$d); // Space Ship 0 1 -1
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $e = NULL;
    $f = 7;
    $g = 10;

    echo $e ?? $f ?? $g; // Null Coalescing
    echo "<br/>";
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $incremento = 10;

    echo $incremento++;

    echo "<br/>";

    echo $incremento;
    
    echo "<br/>";
    
    echo ++$incremento;
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $decremento = 10;

    echo --$decremento;
    
    /////////////////////////////////////////
    echo "<br/>";
    /////////////////////////////////////////

    $resultdo = 10 + 3 / 2;

    echo "Resultado= ".$resultdo;

    echo "<br/>";

    $resultdo = (10 + 3) / 2;
    
    echo "Resultado= ".$resultdo;

    echo "<br/>";

    $resultdo = (10 + 3) / 2 > 5 && 10 + 5 < 3; // AND &&

    var_dump($resultdo);
    
    echo "<br/>";
    
    $resultdo = (10 + 3) / 2 > 5 || 10 + 5 < 3; // OR ||
    
    var_dump($resultdo);
    
?>