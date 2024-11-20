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
            max-width: 700px;
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
        
        /* Contenedor para los campos del formulario */
        .form-row {
            display: flex;
            flex-wrap: wrap; /* Permite que los campos se ajusten a la siguiente fila */
            gap: 20px; /* Espacio entre los elementos */
        }

        .form-group {
            flex: 1 1 calc(50% - 20px); /* 50% del ancho menos el espacio entre los campos */
            min-width: 220px;
            margin-bottom: 20px;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
        }
        
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus {
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

        .compact-date {
            display: flex;
            flex-direction: column;
            max-width: 300px; /* Ajustar según el diseño */
            margin: 0 auto;
        }

        .date-fields {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Ajusta el espacio entre campos */
        }

        .date-fields select.form-control {
            width: 100%; /* Asegura que cada select sea del mismo ancho */
            max-width: 32%; /* Limita el tamaño para que quepan 3 campos en una fila */
            padding: 8px; /* Mantén el mismo relleno */
            font-size: 14px; /* Consistencia en tamaño de fuente */
            border: 1px solid #ccc; /* Bordes iguales */
            border-radius: 4px; /* Bordes redondeados */
        }

        .date-fields select {
            flex: 1;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Crear una cuenta</h2>

    <!-- Formulario de Login -->
    <form method="POST" action="">
        <div class="form-row">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="apellidopat">Apellido Paterno:</label>
                <input type="text" id="apellidopat" name="apellidopat" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="apellidomat">Apellido Materno:</label>
                <input type="text" id="apellidomat" name="apellidomat" required>
            </div>
            <div class="form-group">
                <label for="rutpersonal">RUT Personal:</label>
                <input type="text" id="rutpersonal" name="rutpersonal" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
            <label for="nacionalidad">Nacionalidad:</label>
                <select id="nacionalidad" name="nacionalidad" required>
                    <option value="Chile">Chile</option>
                    <option disabled>────────────────────────</option>
                    <option value="Afganistán">Afganistán</option>
                    <option value="Albania">Albania</option>
                    <option value="Alemania">Alemania</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                    <option value="Arabia Saudita">Arabia Saudita</option>
                    <option value="Argelia">Argelia</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaiyán">Azerbaiyán</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Baréin">Baréin</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Belice">Belice</option>
                    <option value="Benín">Benín</option>
                    <option value="Bielorrusia">Bielorrusia</option>
                    <option value="Birmania (Myanmar)">Birmania (Myanmar)</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                    <option value="Botsuana">Botsuana</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Brunéi">Brunéi</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Bután">Bután</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Camboya">Camboya</option>
                    <option value="Camerún">Camerún</option>
                    <option value="Canadá">Canadá</option>
                    <option value="Catar">Catar</option>
                    <option value="Chad">Chad</option>
                    <option value="China">China</option>
                    <option value="Chipre">Chipre</option>
                    <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoras">Comoras</option>
                    <option value="Congo (República Democrática del)">Congo (República Democrática del)</option>
                    <option value="Congo (República del)">Congo (República del)</option>
                    <option value="Corea del Norte">Corea del Norte</option>
                    <option value="Corea del Sur">Corea del Sur</option>
                    <option value="Costa de Marfil">Costa de Marfil</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croacia">Croacia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egipto">Egipto</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Eslovaquia">Eslovaquia</option>
                    <option value="Eslovenia">Eslovenia</option>
                    <option value="España">España</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Esuatini">Esuatini</option>
                    <option value="Etiopía">Etiopía</option>
                    <option value="Filipinas">Filipinas</option>
                    <option value="Finlandia">Finlandia</option>
                    <option value="Fiyi">Fiyi</option>
                    <option value="Francia">Francia</option>
                    <option value="Gabón">Gabón</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Granada">Granada</option>
                    <option value="Grecia">Grecia</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bisáu">Guinea-Bisáu</option>
                    <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haití">Haití</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hungría">Hungría</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Irak">Irak</option>
                    <option value="Irán">Irán</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Islandia">Islandia</option>
                    <option value="Islas Marshall">Islas Marshall</option>
                    <option value="Islas Salomón">Islas Salomón</option>
                    <option value="Israel">Israel</option>
                    <option value="Italia">Italia</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japón">Japón</option>
                    <option value="Jordania">Jordania</option>
                    <option value="Kazajistán">Kazajistán</option>
                    <option value="Kenia">Kenia</option>
                    <option value="Kirguistán">Kirguistán</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Laos">Laos</option>
                    <option value="Lesoto">Lesoto</option>
                    <option value="Letonia">Letonia</option>
                    <option value="Líbano">Líbano</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libia">Libia</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituania">Lituania</option>
                    <option value="Luxemburgo">Luxemburgo</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malasia">Malasia</option>
                    <option value="Malaui">Malaui</option>
                    <option value="Maldivas">Maldivas</option>
                    <option value="Malí">Malí</option>
                    <option value="Malta">Malta</option>
                    <option value="Marruecos">Marruecos</option>
                    <option value="Mauricio">Mauricio</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="México">México</option>
                    <option value="Micronesia">Micronesia</option>
                    <option value="Moldavia">Moldavia</option>
                    <option value="Mónaco">Mónaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Níger">Níger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Noruega">Noruega</option>
                    <option value="Nueva Zelanda">Nueva Zelanda</option>
                    <option value="Omán">Omán</option>
                    <option value="Países Bajos">Países Bajos</option>
                    <option value="Pakistán">Pakistán</option>
                    <option value="Palaos">Palaos</option>
                    <option value="Panamá">Panamá</option>
                    <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Perú">Perú</option>
                    <option value="Polonia">Polonia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Reino Unido">Reino Unido</option>
                    <option value="República Centroafricana">República Centroafricana</option>
                    <option value="República Checa">República Checa</option>
                    <option value="República Dominicana">República Dominicana</option>
                    <option value="Ruanda">Ruanda</option>
                    <option value="Rumanía">Rumanía</option>
                    <option value="Rusia">Rusia</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                    <option value="San Marino">San Marino</option>
                    <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                    <option value="Santa Lucía">Santa Lucía</option>
                    <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leona">Sierra Leona</option>
                    <option value="Singapur">Singapur</option>
                    <option value="Siria">Siria</option>
                    <option value="Somalia">Somalia</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudáfrica">Sudáfrica</option>
                    <option value="Sudán">Sudán</option>
                    <option value="Sudán del Sur">Sudán del Sur</option>
                    <option value="Suecia">Suecia</option>
                    <option value="Suiza">Suiza</option>
                    <option value="Surinam">Surinam</option>
                    <option value="Tailandia">Tailandia</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Tayikistán">Tayikistán</option>
                    <option value="Timor Oriental">Timor Oriental</option>
                    <option value="Togo">Togo</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                    <option value="Túnez">Túnez</option>
                    <option value="Turkmenistán">Turkmenistán</option>
                    <option value="Turquía">Turquía</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Ucrania">Ucrania</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistán">Uzbekistán</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Yibuti">Yibuti</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabue">Zimbabue</option>
                </select>
            </div>
            <div class="form-group compact-date">
                <label for="dia">Fecha de nacimiento:</label>
                <div class="date-fields">
                    <select id="dia" name="dia" class="form-control" required>
                        <option value="" disabled selected>Día</option>
                    </select>

                    <select id="mes" name="mes" class="form-control" required>
                        <option value="" disabled selected>Mes</option>
                        <option value="01">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>

                    <select id="anio" name="anio" class="form-control" required>
                        <option value="" disabled selected>Año</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <button type="submit" class="btn">Registrarse</button>
        <a href="login.php" style="text-decoration:none; color:black;">
            <p style="padding-top:8px;">Iniciar sesión</p>
        </a>

    </form>
</div>

<script>
    // Obtener elementos
    const diaSelect = document.getElementById("dia");
    const mesSelect = document.getElementById("mes");
    const anioSelect = document.getElementById("anio");

    // Función para verificar si un año es bisiesto
    function esBisiesto(year) {
        return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
    }

    // Función para actualizar los días del mes seleccionado
    function actualizarDias() {
        const mes = mesSelect.value;
        const anio = parseInt(anioSelect.value);
        let maxDias;

        if (mes === "02") { // Febrero
            maxDias = esBisiesto(anio) ? 29 : 28;
        } else if (["04", "06", "09", "11"].includes(mes)) { // Meses con 30 días
            maxDias = 30;
        } else { // Meses con 31 días
            maxDias = 31;
        }

        // Limpiar y rellenar opciones del select de días
        diaSelect.innerHTML = '<option value="" disabled selected>Día</option>';
        for (let i = 1; i <= maxDias; i++) {
            const option = document.createElement("option");
            option.value = i.toString().padStart(2, "0");
            option.textContent = i.toString().padStart(2, "0");
            diaSelect.appendChild(option);
        }
    }

    // Generar años (1900 a 14 años antes del actual)
    const currentYear = new Date().getFullYear();
    const maxYear = currentYear - 14;
    const minYear = 1900;

    for (let year = maxYear; year >= minYear; year--) {
        const option = document.createElement("option");
        option.value = year;
        option.textContent = year;
        anioSelect.appendChild(option);
    }

    // Eventos para actualizar días cuando cambian mes o año
    mesSelect.addEventListener("change", actualizarDias);
    anioSelect.addEventListener("change", actualizarDias);
</script>
</body>
</html>
