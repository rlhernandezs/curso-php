<?php

    // Incluindo os Arquivos Com Include e Require
    echo "Incluindo os Arquivos Com Include e Require<br/><br/>";

    //include "aula19funcao.php";
    require_once "aula19funcao.php";
    require_once "aula19funcao.php";

    $resultado = somar(10, 5);

    echo "Resultado: ".$resultado;

?>