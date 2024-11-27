<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['rutpersonal'])) {
    header("Location: login.php"); // Redirigir al login si no hay sesión activa
    exit();
}

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "db-sicosi"; // Cambia al nombre real de tu base de datos

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$detalle = $_POST['detalle'];
$monto = $_POST['monto'];
$metodopago = $_POST['metodopago'];

// Obtener el RUT personal del usuario autenticado
$rutpersonal = $_SESSION['rutpersonal'];

// Insertar los datos en la tabla ventas
$sql = "INSERT INTO ventas (rutpersonal, detalle, monto, metodopago) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $rutpersonal, $detalle, $monto, $metodopago);

if ($stmt->execute()) {
    echo "Venta registrada exitosamente.";
} else {
    echo "Error al registrar la venta: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
