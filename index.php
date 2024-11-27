<?php
// Iniciar la sesión
session_start();

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

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir al login si no hay sesión activa
    header("Location: pages/login.php");
    exit();
}

// Datos del usuario en sesión
$rutpersonal = $_SESSION['rutpersonal'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; /* Dividimos el layout en 3 columnas */
            gap: 20px;
            padding: 0px;
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

            /* Estilos Generales para los Bloques */
        .block {
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Bloque de Utilidad - Ocupa todo el ancho */
        .utilidad {
            grid-column: span 3; /* Ocupa las 3 columnas */
            text-align: left;
        }

        .utilidad p {
            font-size: 2rem;
            font-weight: bold;
        }

        /* Bloques de Por Pagar, Venta y Total por Cobrar */
        .por-cobrar {
            grid-column: span 1; /* Cada uno ocupa 1 columna */
            text-align: center;
            background-color: #eaeaea;
        }

        .gastos {
            grid-column: span 1; /* Cada uno ocupa 1 columna */
            text-align: center;
            background-color: #ff8e8e;
        }

        .ventas {
            grid-column: span 1; /* Cada uno ocupa 1 columna */
            text-align: center;
            background-color: #93ff8e;
        }

        .ventas p, .gastos p, .por-cobrar p {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Bloque de Crecimiento */
        .crecimiento {
            grid-column: span 3; /* Gráfico de Crecimiento ocupa las 3 columnas */
            text-align: left;
        }

        .crecimiento p {
            font-size: 1.2rem;
            color: green; /* Ajustar color según diseño */
        }

        /* Bloque de Resumen por Mes */
        .resumen {
            grid-column: span 3; /* Resumen ocupa todo el ancho */
            text-align: left;
        }

        /* Tarjeta de Banco */
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

        .balance p {
            font-size: 1rem;
            font-weight: bold;
        }

        .movimientos ul {
            list-style-type: none;
            padding: 10px 0;
        }

        .movimientos li {
            padding: 5px 0;
        }

        .titulos {
            grid-column: span 3; /* Ocupa las 3 columnas */
            text-align: left;
        }

        /* Responsividad para pantallas pequeñas */
        @media (max-width: 768px) {
        .container {
            grid-template-columns: 1fr; /* Una columna en pantallas pequeñas */
        }

        .block {
            grid-column: span 1;
        }
        }
    </style>
</head>
<body>
    <header>
        <!-- Barra de navegación superior -->
        <div class="navbar-top">
            <div class="logo-nvtop">
                <img src="img/logo-menu.png" alt="Logo de la empresa">
            </div>
            <div class="buttons-nvtop">
                <button class="btn-nvtop">Ver Usuario</button>
                <button class="btn-nvtop" onclick="location.href='pages/logout.php';">Cerrar Sesión</button>
            </div>
        </div>

        <!-- Barra de navegación inferior -->
        <div class="navbar-bottom">
            <div class="buttons-nvbottom">
                <a class="btn-nvbottom" href="index.php">Inicio</a>
                <a class="btn-nvbottom" href="pages/suscripciones.php">Suscripción</a>
                <a class="btn-nvbottom" href="soporte.php">Soporte</a>
            </div>
        </div>
    </header>

    <!-- Barra de navegación lateral izquierda -->
    <nav class="sidebar-left">
        <ul class="nav-list">
            <li><a href="#">Inicio</a></li>
            <li><a href="pages/movimientos.php">Movimientos</a></li>
            <li><a href="pages/saldos.php">Saldos</a></li>
            <li><a href="pages/deudasycobros.php">Deudas y Cobros</a></li>
            <hr>
            <li><a href="pages/inventario.php">Inventario</a></li>
            <hr>
            <li><a href="pages/pedidos.php">Pedidos</a></li>
        </ul>
    </nav>

    <!-- Contenido principal -->
    <div class="main-content">
        <div class="container">
            <!-- Bloque de Utilidad -->
            <div class="utilidad">
                <h3>Utilidad Mes</h3>
                <p>$0</p>
            </div>

            <!-- Bloques de Por Pagar, Venta y Total por Cobrar -->
            <div class="block ventas">
                <h3>Ventas Día</h3>
                <p>$0</p>
                <small>Acumulado Mes: $0</small>
            </div>
            
            <div class="block gastos">
                <h3>Gastos Mes</h3>
                <p>$0</p>
            </div>

            <div class="block por-cobrar">
                <h3>Total por Cobrar Mes</h3>
                <p>$0</p>
                <small>Acumulado: $0</small>
            </div>

            <!-- Gráfico y Crecimiento -->
            <div class="crecimiento">
                <h3>Crecimiento respecto al mes anterior</h3>
                <p>+0%</p>
                <!-- Aquí puedes insertar el gráfico usando una librería -->
            </div>

            <!-- Resumen por mes -->
            <div class="resumen">
                <h3>Resumen por mes</h3>
                <canvas id="myChart" width="400" height="100"></canvas>
            </div>

            <div class="titulos">
                <h3>Saldo de cuentas</h3>
            </div>
            
            <div class="block efectivo">
                <div class="balance">
                <h2>$0</h2>
                <p>Caja General (Efectivo)</p>
                </div>
                <div class="movimientos">
                <h3>Resumen</h3>
                <ul>
                    <li>Abonos: $0</li>
                    <li>Egresos: $0</li>
                </ul>
                </div>
            </div>

            <div class="block tarjeta">
                <div class="balance">
                <h2>$0</h2>
                <p>Banco Santander (Banco)</p>
                </div>
                <div class="movimientos">
                <h3>Resumen</h3>
                <ul>
                    <li>Abonos: $0</li>
                    <li>Egresos: $0</li>
                </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets: [
                    {
                    label: 'Ventas',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                    },
                    {
                    label: 'Compras',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>