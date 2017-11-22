<?php

    // Estruturas Condicionais - If, Elself Else
    echo "Estruturas Condicionais - If, Elself Else<br/><br/>";

    $qualASuaIdade = 35;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if ($qualASuaIdade < $idadeCrianca) {

        echo "Criança";

    } elseif ($qualASuaIdade < $idadeMaior) {

        echo "Adolescente";

    } elseif ($qualASuaIdade < $idadeMelhor) {
        
        echo "Adulto";

    } else {

        echo "Idoso";

    }

    echo "<br><br>";

    echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade"; // Condição simples

?>