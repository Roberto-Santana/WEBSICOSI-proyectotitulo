<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilos generales */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, white, #9cf0c0);
            color: #333;
        }
        
        /* Contenedor de login */
        .login-container {
            width: 100%;
            max-width: 360px;
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #2ECC71;
        }
        
        /* Estilo de los campos del formulario */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus {
            border-color: #4A90E2;
            outline: none;
        }
        
        /* Estilo del botón */
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #2ECC71;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .btn:hover {
            background-color: #357ABD;
        }
        
        /* Mensajes de error y éxito */
        .error {
            color: #E74C3C;
            margin-top: 10px;
            font-size: 14px;
        }
        
        .success {
            color: #2ECC71;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <?php
    // Definición de usuario y contraseña correctos
    $usuarioCorrecto = "usuario";
    $contrasenaCorrecta = "1234";
    $mensaje = "";

    // Verificación si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        // Validación de usuario y contraseña
        if ($usuario === $usuarioCorrecto && $contrasena === $contrasenaCorrecta) {
            $mensaje = "<p class='success'>Inicio de sesión exitoso.</p>";
        } else {
            $mensaje = "<p class='error'>Usuario o contraseña incorrectos.</p>";
        }
    }
    ?>

    <!-- Formulario de Login -->
    <form method="POST" action="">
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <button type="submit" class="btn">Ingresar</button>
        <a href="register.php" style="text-decoration:none; color:black;">
            <p style="padding-top:8px;">Crear una cuenta</p>
        </a>
    </form>

    <!-- Mostrar mensaje de éxito o error -->
    <?php echo $mensaje; ?>
</div>

</body>
</html>
