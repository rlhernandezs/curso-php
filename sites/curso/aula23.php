<?php

    // Laços de Repetição - FOREACH
    echo "Laços de Repetição - FOREACH<br/><br/>";

    $meses = array(
                    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
                    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
             );
    
    foreach ($meses as $index => $mes) {

        echo "Índice: ".$index." - ";
        echo "O mês é ".$mes.".<br><br>";

    }

?>