<?php
$numero = readline("Introduce un numero: ");
echo "Los primeros " . $numero . " términos de la serie de Fibonacci son: ";
    $primer_num = 0;
    $segundo_num = 1;
    echo $primer_num . " " . $segundo_num . " ";
    for ($i = 2; $i < $numero; $i++) {
        $siguiente_num = $primer_num + $segundo_num;
        echo $siguiente_num . " ";
        $primer_num = $segundo_num;
        $segundo_num = $siguiente_num;
    }
    echo "\n";
?>