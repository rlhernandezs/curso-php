<?php

    // Switch Case
    echo "Switch Case<br/><br/>";

    $diaDaSemana = date("w");

    //echo $diaDaSemana;

    switch ($diaDaSemana) {

        case 0:
        echo "Domingo";
        break;

        case 1:
        echo "Segunda-Feira";
        break;

        case 2:
        echo "Terça-Feira";
        break;

        case 3:
        echo "Quarta-Feira";
        break;

        case 4:
        echo "Quinta-Feira";
        break;

        case 5:
        echo "Sexta-Feira";
        break;

        case 0:
        echo "Sábado";
        break;

        default:
        echo "Data inválida!"
        break;

    }

?>