<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes Mensuales</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Fondo claro */
            color: #333;
        }

                /* Navbar Styles */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
        }
        
        .navbar-logo {
            display: flex;
            align-items: center;
        }
        
        .navbar-logo span {
            background-color: #32CD32; /* Lime green circle */
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            margin-right: 10px;
            font-weight: bold;
            font-size: 16px;
        }
        
        .navbar-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .navbar-menu a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            transition: color 0.3s ease;
        }
        
        .navbar-menu a:hover {
            color: #32CD32; /* Green highlight */
        }
        
        .navbar-menu a:last-child {
            background-color: #C71585; /* Purple button */
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            font-weight: bold;
        }
        
        .navbar-menu a:last-child:hover {
            background-color: #a0136e; /* Darker purple */
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .title {
            text-align: left;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        .subtitle {
            font-size: 20px;
            font-weight: bold;
            margin: 20px 0;
            color: #000;
        }

        .feature-list {
            list-style-type: none;
            padding: 0;
        }

        .feature-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }

        .feature-list li::before {
            content: "✔";
            color: #1d3557; /* Azul oscuro */
            margin-right: 10px;
            font-weight: bold;
        }

        .feature-title {
            font-weight: bold;
            color: #1d3557;
        }

        .feature-description {
            margin: 5px 0 0 25px;
        }
        .pricing-container {
            display: flex;
            gap: 20px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .pricing-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            flex: 1;
        }

        .pricing-card.featured {
            background-color: #e0f7e9; /* Verde claro */
            border: 2px solid #2d995b; /* Verde oscuro */
        }

        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-price {
            font-size: 2rem;
            font-weight: bold;
            color: #2d995b;
            margin: 10px 0;
        }

        .card-price span {
            font-size: 1rem;
            color: #333;
        }

        .card-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #2d995b;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .card-btn:hover {
            background-color: #238848;
        }

        .card-description {
            font-size: 0.9rem;
            color: #555;
            margin-top: 10px;
        }

        .badge {
            display: inline-block;
            background-color: #facc15; /* Amarillo */
            color: #333;
            font-size: 0.8rem;
            font-weight: bold;
            border-radius: 5px;
            padding: 2px 8px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo-nvtop">
                <img src="../img/logo-menu.png" alt="Logo de la empresa">
            </div>
        <div class="navbar-menu">
            <a href="#">Inicio</a>
            <a href="#">Servicios</a>
            <a href="#">Precios</a>
            <a href="#">Blog</a>
            <a href="#">Iniciar sesión</a>
            <a href="#">Crear cuenta</a>
        </div>
    </div>
    <div class="container">
        <h1 class="title">CONOCE EL PLAN PREMIUM DE SICOSI</h1>
        <h2 class="subtitle">EL PLAN PREMIUM INCLUYE:</h2>
        <ul class="feature-list">
            <li>
                <div>
                    <span class="feature-title">Sistema de stock y pedidos para su empresa</span>
                    <p class="feature-description">Podrán utilizar el sistema de stock y pedidos sin límites.</p>
                </div>
            </li>
            <li>
                <div>
                    <span class="feature-title">Eliminación de anuncios</span>
                    <p class="feature-description">Se eliminarán todos los anuncios para que tenga una oficina y dashboard libre de cualquier molestia.</p>
                </div>
            </li>
            <li>
                <div>
                    <span class="feature-title">Cuentas ilimitadas</span>
                    <p class="feature-description">Podrá agregar cuentas ilimitadas y logrará separarlos en diferentes tipos para un mejor orden.</p>
                </div>
            </li>
            <li>
                <div>
                    <span class="feature-title">Soporte prioritario</span>
                    <p class="feature-description">Tendrá asistencia prioritaria ante cualquier problema las 24 horas del día.</p>
                </div>
            </li>
            <li>
                <div>
                    <span class="feature-title">Satisfacción garantizada para nuestros servicios</span>
                    <p class="feature-description">Si no estás conforme con el servicio mensual, damos fin inmediato a suscripción y te devolvemos el dinero de ese período.</p>
                </div>
            </li>
        </ul>
    </div>

    <div class="pricing-container">
        <!-- Plan de inicio -->
        <div class="pricing-card featured">
            <div class="card-header">Plan de inicio</div>
            <div class="card-price">Libre</div>
            <a href="../index.php" class="card-btn">Comenzar ahora →</a>
            <p class="card-description">Plan con límites.<br>Sin tarjeta de crédito.</p>
        </div>

        <!-- Plan anual -->
        <div class="pricing-card">
            <div class="badge">AHORRE 25%</div>
            <div class="card-header">Plan anual</div>
            <div class="card-price">$7.499<span> / mes</span></div>
            <a href="suscripciones.php" class="card-btn">Continuar anualmente →</a>
            <p class="card-description">Facturado $89.990 anualmente.<br>$29.890 más barato de esta manera.</p>
        </div>

        <!-- Plan mensual -->
        <div class="pricing-card">
            <div class="card-header">Plan mensual</div>
            <div class="card-price">$9.990<span> / mes</span></div>
            <a href="suscripciones.php" class="card-btn">Continuar mensualmente →</a>
            <p class="card-description">Facturado $9.990 mensualmente.<br>El total es $119.880 por año.</p>
        </div>
    </div>
</body>
</html>