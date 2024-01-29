<?php
echo "Múltiplos de 5 de 0 a 100 usando un bucle for: ";
for ($i = 0; $i <= 100; $i += 5) {
    echo $i . " ";
}
echo "\n";

echo "Múltiplos de 5 de 0 a 100 usando un bucle while: ";
$i = 0;
while ($i <= 100) {
    echo $i . " ";
    $i += 5;
}
echo "\n";

echo "Múltiplos de 5 de 0 a 100 usando un bucle do-while: ";
$i = 0;
do {
    echo $i . " ";
    $i += 5;
} while ($i <= 100);
echo "\n";
?>