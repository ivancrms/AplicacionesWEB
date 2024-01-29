<?php
$numeros = array();
$cuadrados = array();
$cubos = array();

for ($i = 0; $i < 20; $i++) {
    $numeros[$i] = rand(0, 100);
    $cuadrados[$i] = pow($numeros[$i], 2);
    $cubos[$i] = pow($numeros[$i], 3);
}

echo "\n";
echo "número cuadrado cubo \n";
for ($i = 0; $i < 20; $i++) {
    echo " " . $numeros[$i] . "     " . $cuadrados[$i] . "    " . $cubos[$i] . "\n";
}
echo "\n";
?>