<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<style>
</style>
<body>
<h2>Calculadora</h2>
    <form action="ejercicio4.php" method="post">
        Número 1:
        <input type="number" name="numero1" required><br/>
        Número 2:
        <input type="number" name="numero2" required><br/>
        Operador:
        <select name="operador" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>