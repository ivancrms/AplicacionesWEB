<?
if (isset($_GET["numero1"]) && isset($_GET["numero2"])) {
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $resultado = $numero1 * $numero2;
    echo "<h2>El resultado de la multiplicación es: $resultado</h2>";
} else {
    echo "<p>No has puesto ningun numero</p>";
}
 ?>