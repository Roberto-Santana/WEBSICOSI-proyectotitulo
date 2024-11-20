<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Configuración General */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Contenedor Principal */
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Títulos */
        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #2ECC71;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 18px;
            font-weight: bold;
            color: #2ECC71;
            margin-bottom: 10px;
        }

        /* Etiquetas */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: black;
        }

        /* Campos de Entrada */
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input:focus, select:focus {
            border-color: #2ECC71;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        /* Botones */
        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #2ECC71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Agrupaciones */
        .form-section {
            margin-bottom: 20px;
        }

        .form-section legend {
            font-size: 18px;
            font-weight: bold;
            color: black;
            padding: 0 10px;
            border-bottom: 1px solid #ddd;
        }

        /* Opciones de Radio */
        .radio-group label {
            display: block;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .radio-group input {
            margin-right: 10px;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #2ECC71;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #2ECC71;
        }

        fieldset {
            border: none; /* Elimina el borde */
            padding: 0; /* Ajusta el relleno interno */
            margin: 0; /* Elimina el margen */
        }

        legend {
            font-size: 18px; /* Mantén el título visible */
            font-weight: bold;
            color: #007BFF; /* Color azul para destacar */
            margin-bottom: 10px;
            padding: 0;
        }
    </style>

</head>
<body>
    <header>
        <!-- Barra de navegación superior -->
        <div class="navbar-top">
            <div class="logo-nvtop">
                <img src="../img/logo-menu.png" alt="Logo de la empresa">
            </div>
            <div class="buttons-nvtop">
                <button class="btn-nvtop">Ver Usuario</button>
                <button class="btn-nvtop">Cerrar Sesión</button>
            </div>
        </div>

        <!-- Barra de navegación inferior -->
        <div class="navbar-bottom">
            <div class="buttons-nvbottom">
                <a class="btn-nvbottom" href="../index.php">Inicio</a>
                <a class="btn-nvbottom" href="suscripciones.php">Suscripción</a>
                <a class="btn-nvbottom" href="soporte.php">Soporte</a>
            </div>
        </div>
    </header>

    <!-- Barra de navegación lateral izquierda -->
    <nav class="sidebar-left">
        <ul class="nav-list">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="movimientos.php">Movimientos</a></li>
            <li><a href="saldos.php">Saldos</a></li>
            <li><a href="../pages/deudasycobros.php">Deudas y Cobros</a></li>
            <hr>
            <li><a href="inventario.php">Inventario</a></li>
            <hr>
            <li><a href="pedidos.php">Pedidos</a></li>
        </ul>
    </nav>

    <!-- Contenido principal -->
    <div class="main-content">

        <div class="container">
            <h1>Carrito de Suscripciones</h1>
            <form id="carritoForm">
                <!-- Opciones de Suscripción -->
                <fieldset class="form-section">
                    <legend>Selecciona tu Suscripción</legend>
                    <label class="radio-option">
                        <input type="radio" name="suscripcion" value="mensual" required>
                        Suscripción Mensual - $9.990
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="suscripcion" value="anual">
                        Suscripción Anual - $89.990 (25% de descuento)
                    </label>
                </fieldset>

                <!-- Datos de Facturación -->
                <fieldset class="form-section">
                    <legend>Datos de Facturación</legend>
                    <div class="form-group">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu número de teléfono" required>
                    </div>
                </fieldset>

                <!-- Documento de Identidad -->
                <fieldset class="form-section">
                    <legend>Documento de Identidad</legend>
                    <div class="form-group">
                        <label for="tipoDocumento">Tipo de Documento:</label>
                        <select id="tipoDocumento" name="tipoDocumento" required>
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="RUT">RUT</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="documento">Número de Documento:</label>
                        <input type="text" id="documento" name="documento" placeholder="Ingresa tu número de documento" required>
                    </div>
                </fieldset>

                <!-- Botón de Acción -->
                <div class="form-actions">
                    <button type="submit" class="btn">Proceder al Pago</button>
                </div>
            </form>
        </div>


        <script src="../js/script.js"></script>
    </div>

</body>
</html>