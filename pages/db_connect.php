<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "db-sicosi"; // Cambia esto al nombre real de tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
