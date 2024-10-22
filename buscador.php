<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Buscador</title>
    <style>
        * {
            font-family: "Roboto", sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }
        header, main, footer {
            text-align: center;
            margin: 20px;
        }
        header {
            background-color: #4a90e2;
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        header::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background-color: white;
            border-radius: 2px;
        }
        header h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        header pre {
            font-size: 1em;
            opacity: 0.8;
        }
        main {
            flex: 1;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        main::before, main::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background-color: rgba(74, 144, 226, 0.2);
            border-radius: 50%;
            z-index: -1;
        }
        main::before {
            top: -150px;
            left: -150px;
        }
        main::after {
            bottom: -150px;
            right: -150px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 500;
            color: #555;
        }
        input, select {
            margin-bottom: 20px;
            padding: 15px;
            width: 100%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            transition: all 0.3s;
        }
        input:focus, select:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 10px rgba(74, 144, 226, 0.3);
            outline: none;
        }
        .inline-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .inline-group div {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        button {
            margin: 10px;
            padding: 15px 30px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #357ab8;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(1px);
        }

        .center-button {
            margin: 30px 0;
            text-align: center;
        }
        .center-button a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            margin: 10px;
            display: inline-block;
        }

        .center-button a:hover {
            color: #357ab8;
        }
        main a {
            color: #357ab8;
            text-decoration: none;
            font-size: 1.2em;
            margin-bottom: 10px;
            display: block;
        }
        main a:hover {
            color: #0026e1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            font-size: 1em;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #4a90e2;
            color: white;
        }
        footer {
            background-color: #4a90e2;
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .footer {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Buscar en el directorio público de Fragata Libertad</h1>
        <pre>Para buscar estudiantes, profesores y miembros del personal, complete los siguientes campos y haga clic en Buscar.</pre>
    </header>
    <main>
        <form action="buscador.php" method="post">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="nombre" autocomplete="off" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES); ?>">
            
            <label for="subname">Apellido</label>
            <input type="text" id="subname" name="subname" placeholder="apellido" autocomplete="off"value="<?php echo htmlspecialchars($_POST['subname'] ?? '', ENT_QUOTES); ?>">
            
            <label for="email">Mail</label>
            <input type="email" id="email" name="email" placeholder="mail" autocomplete="off"value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>">
            
            <div class="inline-group">
                <div>
                    <label for="year">Año</label>
                    <input type="hidden" id="year" name="year" value="<?php echo htmlspecialchars($_POST['year'] ?? '', ENT_QUOTES); ?>">
                    <select name="año" id="año">
                        <option value="nada" <?php echo !isset($_POST['año']) || $_POST['año'] == 'nada' ? 'selected' : ''; ?>>Seleccione</option>
                        <option value="1ro" <?php echo ($_POST['año'] ?? '') == '1ro' ? 'selected' : ''; ?>>1ro</option>
                        <option value="2do" <?php echo ($_POST['año'] ?? '') == '2do' ? 'selected' : ''; ?>>2do</option>
                        <option value="3ro" <?php echo ($_POST['año'] ?? '') == '3ro' ? 'selected' : ''; ?>>3ro</option>
                        <option value="4to" <?php echo ($_POST['año'] ?? '') == '4to' ? 'selected' : ''; ?>>4to</option>
                        <option value="5to" <?php echo ($_POST['año'] ?? '') == '5to' ? 'selected' : ''; ?>>5to</option>
                        <option value="6to" <?php echo ($_POST['año'] ?? '') == '6to' ? 'selected' : ''; ?>>6to</option>
                    </select>
                </div>
                <div>
                    <label for="division">División</label>
                    <input type="hidden" id="division" name="division" value="<?php echo htmlspecialchars($_POST['division'] ?? '', ENT_QUOTES); ?>">
                    <select name="división" id="división">
                        <option value="nada" <?php echo !isset($_POST['división']) || $_POST['división'] == 'nada' ? 'selected' : ''; ?>>Seleccione</option>
                        <option value="A" <?php echo ($_POST['división'] ?? '') == 'A' ? 'selected' : ''; ?>>1ra</option>
                        <option value="B" <?php echo ($_POST['división'] ?? '') == 'B' ? 'selected' : ''; ?>>2da</option>
                        <option value="C" <?php echo ($_POST['división'] ?? '') == 'C' ? 'selected' : ''; ?>>3ra</option>
                    </select>
                </div>
            </div>
            <button type="submit">Buscar</button>
            <button type="reset">Reiniciar</button>
        </form>

        <?php
        // Configuración de la base de datos
        $databasePath = 'base_de_datos.db';

        // Crear una conexión a la base de datos SQLite
        try {
            $pdo = new PDO('sqlite:' . $databasePath);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
            exit;
        }

        // Crear la tabla si no existe
        $sqlCreateTable = "
        CREATE TABLE IF NOT EXISTS alumnos (
            id INTEGER PRIMARY KEY,
            nombre VARCHAR(15),
            apellido VARCHAR(15),
            email VARCHAR(45),
            dni VARCHAR(8),
            anio INTEGER,
            division INTEGER
        );

        -- Tabla padres
        CREATE TABLE IF NOT EXISTS padres (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nombre VARCHAR(50),
            apellido VARCHAR(50),
            email VARCHAR(100),
            dni VARCHAR(15),
            telefono VARCHAR(20),
            hijo_nombre VARCHAR(50),
            hijo_apellido VARCHAR(50),
            FOREIGN KEY (hijo_nombre, hijo_apellido) REFERENCES alumnos(nombre, apellido)
        );

        -- Tabla preceptores
        CREATE TABLE IF NOT EXISTS preceptores (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nombre VARCHAR(50),
            apellido VARCHAR(50),
            dni VARCHAR(15),
            email VARCHAR(100),
            anio INTEGER,
            divisiones TEXT -- Almacena como texto separado por comas
        );

        -- Tabla coordinadores
        CREATE TABLE IF NOT EXISTS coordinadores (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nombre VARCHAR(50),
            apellido VARCHAR(50),
            dni VARCHAR(15),
            email VARCHAR(100),
            area VARCHAR(50)
        );

        -- Tabla profesores
        CREATE TABLE IF NOT EXISTS profesores (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nombre VARCHAR(50),
            apellido VARCHAR(50),
            dni VARCHAR(15),
            email VARCHAR(100),
            telefono VARCHAR(20),
            materia VARCHAR(50),
            anio INTEGER,
            division VARCHAR(10)
        );

        CREATE TABLE IF NOT EXISTS usuarios (
            id_usuario INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
            email VARCHAR(50),
            password TEXT,
            role TEXT
        );
        CREATE TABLE IF NOT EXISTS materias (
        id_materia INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre_materia TEXT,
        id_alumno INTEGER,
        bimestre_1_nota REAL,
        bimestre_1_faltas INTEGER,
        bimestre_1_asistencias INTEGER,
        bimestre_1_participacion REAL,
        bimestre_1_conducta TEXT,
        bimestre_2_nota REAL,
        bimestre_2_faltas INTEGER,
        bimestre_2_asistencias INTEGER,
        bimestre_2_participacion REAL,
        bimestre_2_conducta TEXT,
        bimestre_3_nota REAL,
        bimestre_3_faltas INTEGER,
        bimestre_3_asistencias INTEGER,
        bimestre_3_participacion REAL,
        bimestre_3_conducta TEXT,
        bimestre_4_nota REAL,
        bimestre_4_faltas INTEGER,
        bimestre_4_asistencias INTEGER,
        bimestre_4_participacion REAL,
        bimestre_4_conducta TEXT,
        nota_general REAL,
        FOREIGN KEY (id_alumno) REFERENCES alumnos(id)
    );
        ";

        $pdo->exec($sqlCreateTable);

        // Leer el archivo JSON
        $json = file_get_contents('json/alumnos.json');
        $alumnos = json_decode($json, true);

        if ($alumnos === null) {
            echo "Error al decodificar el archivo JSON.";
            exit;
        }

        // Preparar la consulta para insertar los datos
        $sql = "INSERT INTO alumnos (nombre, apellido, email, dni, anio, division) VALUES (:nombre, :apellido, :email, :dni, :anio, :division)";
        $stmt = $pdo->prepare($sql);

        // Insertar cada registro en la base de datos
        foreach ($alumnos as $alumno) {
            $stmt->execute([
                ':nombre' => $alumno['nombre'],
                ':apellido' => $alumno['apellido'],
                ':email' => $alumno['email'],
                ':dni' => $alumno['dni'],
                ':anio' => $alumno['anio'],
                ':division' => $alumno['division']
            ]);
        }

        // Función para eliminar acentos y convertir a minúsculas
        function remove_accents($string) {
            $string = strtolower($string);
            $string = preg_replace('/[áàäâã]/u', 'a', $string);
            $string = preg_replace('/[éèëê]/u', 'e', $string);
            $string = preg_replace('/[íìïî]/u', 'i', $string);
            $string = preg_replace('/[óòöôõ]/u', 'o', $string);
            $string = preg_replace('/[úùüû]/u', 'u', $string);
            $string = preg_replace('/[ç]/u', 'c', $string);
            return $string;
        }

        // Función para censurar el correo electrónico y el DNI
        function censurar_datos($email, $dni) {
            $email_censurado = preg_replace('/^[^@]*/', '*****', $email);
            $dni_censurado = substr($dni, 0, 2) . '******';
            return [$email_censurado, $dni_censurado];
        }

        // Comprobar si el usuario está logueado (esto es solo un ejemplo simple)
        $logged_in = isset($_SESSION['user']);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = remove_accents(trim(strtolower($_POST['name'])));
            $subname = remove_accents(trim(strtolower($_POST['subname'])));
            $email = remove_accents(trim(strtolower($_POST['email'])));

            $resultados = [];

            foreach ($alumnos as $alumno) {
                $alumnoName = remove_accents(strtolower($alumno['nombre']));
                $alumnoSubname = remove_accents(strtolower($alumno['apellido']));
                $alumnoEmail = remove_accents(strtolower($alumno['email']));

                if (($alumnoName == $name && $alumnoSubname == $subname) || $alumnoEmail == $email) {
                    if ($logged_in) {
                        $resultados[] = $alumno; 
                    } else {
                        list($censurado_email, $censurado_dni) = censurar_datos($alumno['email'], $alumno['dni']);
                        $alumno['email'] = $censurado_email;
                        $alumno['dni'] = $censurado_dni;
                        $resultados[] = $alumno;
                    }
                }
            }

            if (empty($resultados)) {
                echo "<p>No se encontraron coincidencias.</p>";
            } else {
                echo "<h2>Resultados de búsqueda:</h2>";
                echo "<table>";
                echo "<tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>DNI</th>
                        <th>Año</th>
                        <th>División</th>
                    </tr>";
                foreach ($resultados as $resultado) {
                    echo "<tr>
                            <td>{$resultado['nombre']}</td>
                            <td>{$resultado['apellido']}</td>
                            <td>{$resultado['email']}</td>
                            <td>{$resultado['dni']}</td>
                            <td>{$resultado['anio']}</td>
                            <td>{$resultado['division']}</td>
                        </tr>";
                }
                echo "</table>";
            }
        }
        ?>

        <div class="center-button">
            <a href="buscador.php" style="text-decoration: none; color: white;">
                <button type="button">Hacer otra búsqueda</button>
            </a>
        </div>
        <a href="index.php">Volver a inicio</a>
    </main>
    
    <footer>
        <div class="footer">
            <img src="img/logo.png" alt="logo" style="height: 48px;">
            <p>© 2024 Escuela Técnica Nº 21 D.E. 10.</p>    
        </div>
    </footer>
    <script>
            window.onload = function() {
        // Limpia la tabla al cargar la página
        document.getElementById('miTabla').innerHTML = '';
    };

    </script>
</body>
</html>
