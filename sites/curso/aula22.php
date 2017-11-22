<?php

    // Laços de Repetição - FOR
    echo "Laços de Repetição - FOR<br/><br/>";

    for ($i = 0; $i <= 1000; $i++) {

        if ($i > 200 && $i < 800) continue;

        if ($i === 900) break;

        echo "Contador FOR: ".$i."<br>";
        
    }

?>