<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .titulos {
            grid-column: span 3; /* Ocupa las 3 columnas */
            text-align: left;
        }
        .tarjeta {
            grid-column: span 1; /* Tarjeta ocupa una columna */
            background-color: #6f42c1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .efectivo {
            grid-column: span 1; /* Tarjeta ocupa una columna */
            background-color: green;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .block {
            display: flex;
            justify-content: space-between;
            align-items: left;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
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
                <button class="btn-nvbottom">Inicio</button>
                <button class="btn-nvbottom">Servicios</button>
                <button class="btn-nvbottom">Contacto</button>
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

    </div>
</body>
</html>