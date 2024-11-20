<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <span>M</span>
            <p>Organizame</p>
        </div>
        <div class="navbar-menu">
            <a href="#">Inicio</a>
            <a href="#">Servicios</a>
            <a href="#">Precios</a>
            <a href="#">Iniciar sesión</a>
            <a href="#">Crear cuenta</a>
        </div>
    </div>
</body>
</html>
