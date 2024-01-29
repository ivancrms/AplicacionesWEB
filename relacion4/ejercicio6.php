<?php
include ("funciones2.php");
$array = generaArrayInt(10);
echo "Array generado: " . implode(", ", $array);
echo "<br/>Mínimo: " . minimoArrayInt($array);
echo "<br/>Máximo: " . maximoArrayInt($array);
?>
