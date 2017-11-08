<?php
    
    require_once("inc/frete.php");

    $frete = new Frete(
        $cepDeOrigem = '14095050',
        $cepDeDestino = '14390000',
        $peso = 0.5,
        $comprimento = 4,
        $altura = 12,
        $largura = 16,
        $valor = 18
    );

    echo("Frete: R$ ".$frete->getValor());

    echo("Prazo: ".$frete->getPrazoEntrega()." dias.");

?>
