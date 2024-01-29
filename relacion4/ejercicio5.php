<?php
include ("funciones2.php");
$array = generaArrayInt(10);
echo "Array generado: " . implode(", ", $array) . "<br/>";
echo "Mínimo: " . minimoArrayInt($array);
?>