<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .movimientos-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .movimientos-table th, .movimientos-table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .movimientos-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .movimientos-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .movimientos-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .botones-container {
            display: flex;
            gap: 10px; /* Añade un pequeño espacio entre los botones */
            margin-top: 20px;
            justify-content: center;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .venta-btn {
            background-color: #4CAF50; /* Verde */
            color: white;
        }

        .compra-btn {
            background-color: #f44336; /* Rojo */
            color: white;
        }

        .btn:hover {
            opacity: 0.9; /* Efecto de opacidad al pasar el cursor */
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
        <h2>Movimientos</h2>
        <h3>Últimos Movimientos</h3>
        <table class="movimientos-table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-10-20</td>
                    <td>Venta de producto A</td>
                    <td>Venta</td>
                    <td>$500</td>
                </tr>
                <tr>
                    <td>2024-10-18</td>
                    <td>Pago de servicios</td>
                    <td>Gasto</td>
                    <td>-$200</td>
                </tr>
                <tr>
                    <td>2024-10-15</td>
                    <td>Venta de producto B</td>
                    <td>Venta</td>
                    <td>$750</td>
                </tr>
                <tr>
                    <td>2024-10-12</td>
                    <td>Compra de materiales</td>
                    <td>Gasto</td>
                    <td>-$300</td>
                </tr>
                <tr>
                    <td>2024-10-10</td>
                    <td>Venta de servicio X</td>
                    <td>Venta</td>
                    <td>$600</td>
                </tr>
            </tbody>
        </table>

        <div class="botones-container">
            <button class="btn venta-btn">Registrar una Venta</button>
            <button class="btn compra-btn">Registrar una Compra</button>
        </div>

        <h3 style="margin-top: 30px; margin-bottom: 0px;">Últimas ventas</h3>

        <table class="movimientos-table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Metodo de pago</th>
                    <th>Estado</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-10-20</td>
                    <td>Venta de producto A</td>
                    <td>Efectivo</td>
                    <td>Pagado</td>   
                    <td>$500</td>
                </tr>
                <tr>
                    <td>2024-10-20</td>
                    <td>Venta de producto A</td>
                    <td>Efectivo</td>
                    <td>Pagado</td>   
                    <td>$500</td>
                </tr>
                <tr>
                    <td>2024-10-20</td>
                    <td>Venta de producto A</td>
                    <td>Efectivo</td>
                    <td>Pagado</td>   
                    <td>$500</td>
                </tr>
            </tbody>
        </table>
        <h4 style="margin-top: 5px;">Ver el registro de ventas</h4>
        
        <h3 style="margin-top: 30px; margin-bottom: 0px;">Últimos gastos</h3>
        <table class="movimientos-table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Metodo de pago</th>
                    <th>Categoría</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-10-20</td>
                    <td>Cuenta de Luz Enero</td>
                    <td>Efectivo</td>
                    <td>Gastos generales</td>   
                    <td>-$500</td>
                </tr>
                <tr>
                    <td>2024-10-20</td>
                    <td>Cuenta de Luz Enero</td>
                    <td>Efectivo</td>
                    <td>Gastos generales</td>   
                    <td>-$500</td>
                </tr>
                <tr>
                    <td>2024-10-20</td>
                    <td>Cuenta de Luz Enero</td>
                    <td>Efectivo</td>
                    <td>Gastos generales</td>   
                    <td>-$500</td>
                </tr>
            </tbody>
        </table>
        <h4 style="margin-top: 5px;">Ver el registro de gastos</h4>
    </div>
</body>
</html>