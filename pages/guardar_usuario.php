<?php
// Incluir archivo de conexión
include 'db_connect.php';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir datos del formulario
    $nombres = $_POST['nombres'] ?? null;
    $apellidopat = $_POST['apellidopat'] ?? null;
    $apellidomat = $_POST['apellidomat'] ?? null;
    $rutpersonal = $_POST['rutpersonal'] ?? null;
    $nacionalidad = $_POST['nacionalidad'] ?? null;
    $dia = $_POST['dia'] ?? null;
    $mes = $_POST['mes'] ?? null;
    $anio = $_POST['anio'] ?? null;
    $telefono = $_POST['telefono'] ?? null;
    $contrasena = $_POST['contrasena'] ?? null;
    $email = $_POST['email'] ?? null;

    // Combinar la fecha de nacimiento en formato AAAA-MM-DD
    $fecha_nacimiento = null;
    if ($dia && $mes && $anio) {
        $fecha_nacimiento = "$anio-$mes-$dia";
    }

    // Hash de la contraseña (opcional, pero recomendado)
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    // Preparar consulta para insertar datos
    $sql = "INSERT INTO usuarios (nombres, apellidopat, apellidomat, rutpersonal, nacionalidad, fecha_nacimiento, telefono, contrasena, email) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar declaración
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Enlazar parámetros
        $stmt->bind_param(
            "sssssssss",
            $nombres,
            $apellidopat,
            $apellidomat,
            $rutpersonal,
            $nacionalidad,
            $fecha_nacimiento,
            $telefono,
            $hashed_password,
            $email
        );

        // Ejecutar consulta
        if ($stmt->execute()) {
            echo "Usuario registrado exitosamente.";
        } else {
            echo "Error al registrar el usuario: " . $stmt->error;
        }

        // Cerrar declaración
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    echo "Acceso no válido.";
}
?>
