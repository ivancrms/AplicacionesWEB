<?
$tipoCambio = 1.18;

if (isset($_GET["euro"])) {
    $euro = $_GET["euro"];
    if (is_numeric($euro)) {
        $cantidadDolares = $euro * $tipoCambio;
        echo "<h2>$euro euros son aproximadamente $cantidadDolares dólares</h2>";
    } else {
        echo "<p>Por favor, ingresa una cantidad válida en euros.</p>";
    }
}
?>