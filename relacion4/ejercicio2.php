<?
include 'funciones.php';
echo "Números primos entre 1 y 1000"
?>
<br>
<?
for ($i = 0; $i < 1000; $i++) {
    if (Primo($i)) {
        echo "$i es primo.";
    }
}
?>

