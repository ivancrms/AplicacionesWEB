<?php
$array = generaArrayInt(10);
echo "Array generado: " . implode(", ", $array);
?>
<br/>
<?php
echo "Mínimo: " . minimoArrayInt($array);
?>
<br/>
<?php
echo "Máximo: " . maximoArrayInt($array);
?>