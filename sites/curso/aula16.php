<?php

    // Escopo de Variável
    echo "Escopo de Variável<br/><br/>";

    $nome = "Rafael";

    function testeA(){

        global $nome;
        echo $nome;

    }

    function testeB(){

        $nome = "João";
        echo $nome." agora no testeB.";

    }

    testeA();

    echo "<br/>";

    testeB();

?>