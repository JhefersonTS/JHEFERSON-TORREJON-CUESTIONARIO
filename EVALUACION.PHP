<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desarrolla un script en PHP para calcular el costo total de una compra en una tienda en línea.</title>
</head>
<body>
    <h1>Calcular el costo total de una compra en una tienda en línea</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $p1 = (float) $_POST['precio1'];
        $c1 = (int) $_POST['cantidad1'];
        $p2 = (float) $_POST['precio2'];
        $c2 = (int) $_POST['cantidad2'];
        $p3 = (float) $_POST['precio3'];
        $c3 = (int) $_POST['cantidad3'];

        // Calcular el subtotal
        $subtotal = $p1 * $c1 + $p2 * $c2 + $p3 * $c3;

        // Calcular impuestos, descuento y total final
        $impuestos = $subtotal * 0.15;
        $descuento = $subtotal * 0.10;
        $totalFinal = $subtotal + $impuestos - $descuento;

        // Mostrar resultados
        echo "<h2>Resultados</h2>";
        echo "Subtotal de la Compra: S/ " . round($subtotal, 2) . "<br>";
        echo "Monto de Impuestos: S/ " . round($impuestos, 2) . "<br>";
        echo "Descuento Aplicado: S/ " . round($descuento, 2) . "<br>";
        echo "Total final de la compra: S/ " . round($totalFinal, 2);
    }
    ?>

    <form method="post">
        Precio 1: <input type="number" step="0.01" name="precio1" required>
        Cantidad 1: <input type="number" name="cantidad1" required><br><br>

        Precio 2: <input type="number" step="0.01" name="precio2" required>
        Cantidad 2: <input type="number" name="cantidad2" required><br><br>

        Precio 3: <input type="number" step="0.01" name="precio3" required>
        Cantidad 3: <input type="number" name="cantidad3" required><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>

