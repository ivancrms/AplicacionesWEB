<?
include 'funciones.php';
echo "Números primos entre 1 y 99999"
?>
<br>
<?
for ($i = 0; $i < 99999; $i++) {
    if (Capicua($i)) {
        echo "$i es primo.";
    }
}
?>