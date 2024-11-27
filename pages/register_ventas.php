<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Venta</title>
</head>
<body>
    <h1>Registrar Venta</h1>
    <form action="registrar_venta.php" method="POST">
        <label for="detalle">Detalle de la Venta:</label>
        <input type="text" id="detalle" name="detalle" required><br><br>

        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" required><br><br>

        <label for="metodopago">Método de Pago:</label>
        <select id="metodopago" name="metodopago" required>
            <option value="1">Efectivo</option>
            <option value="2">Tarjeta</option>
            <option value="3">Transferencia</option>
        </select><br><br>

        <button type="submit">Registrar Venta</button>
    </form>
</body>
</html>
