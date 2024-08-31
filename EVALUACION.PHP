<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Compra</title>
</head>
<body>
    <h1>Calculadora de Compra</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Leer datos del formulario
        $p1 = (float) $_POST['precio1'];
        $c1 = (int) $_POST['cantidad1'];
        $p2 = (float) $_POST['precio2'];
        $c2 = (int) $_POST['cantidad2'];
        $p3 = (float) $_POST['precio3'];
        $c3 = (int) $_POST['cantidad3'];

        // Calcular subtotal
        $subtotal = $p1 * $c1 + $p2 * $c2 + $p3 * $c3;

        // Calcular impuestos y descuentos
        $impuestos = $subtotal * 0.15;
        $descuento = $subtotal * 0.10;
        $totalFinal = $subtotal + $impuestos - $descuento;

        // Mostrar resultados
        echo "<h2>Resultados</h2>";
        echo "Subtotal: S/ " . number_format($subtotal, 2) . "<br>";
        echo "Impuestos: S/ " . number_format($impuestos, 2) . "<br>";
        echo "Descuento: S/ " . number_format($descuento, 2) . "<br>";
        echo "Total final: S/ " . number_format($totalFinal, 2);
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
