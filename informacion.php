<?php
// Función para sanitizar y validar la entrada
function sanitize_section($section) {
    $valid_sections = [
        'autoridades',
        'nuestra_historia',
        'nuestros_objetivos',
        'perfil_egresado',
        'cooperadora',
        'biblioteca',
        'maestro_mayor_obras',
        'tecnico_computacion',
        'plan_estudios',
        'turno_noche',
        'proyectos',
        'atencion_victimas',
        'tutorias',
        'documentacion_resoluciones'
    ];

    // Validar y retornar la sección, o un valor por defecto
    return in_array($section, $valid_sections) ? $section : '';
}

// Obtener y sanitizar la sección de la URL
$section = isset($_GET['section']) ? sanitize_section($_GET['section']) : '';

// Contenido por defecto
$content = "<h1>Perfil del Preceptor</h1>
<h2>Que el preceptor sea capaz de:</h2>
        <ul>
        <li>Promover en los alumnos el sentido de responsabilidad, el compañerismo, solidaridad humana y el respeto por la normativa que rige la vida cotidiana escolar y toda otra acción o actitud que tienda a su mejor formación integral.</li>
        <li>Ser ante el alumno dentro y fuera de la escuela, un ejemplo de buenas maneras morales y de actitud.</li>
        <li>Interesarse por los problemas que tengan los alumnos a su cargo orientándolos debidamente para facilitarles su solución.</li>
        <li>Arbitrar los medios para el mejor aprovechamiento del tiempo libre de los alumnos, en el orden técnico y/o pedagógico.</li>
        <li>Contribuir para el mejor desarrollo de la marcha del establecimiento.</li>
        <li>Procurar que la disciplina y el comportamiento social del alumno surja naturalmente por el interés en el que debe suscitar la enseñanza que recibe y del ascendiente que surge de la responsabilidad afectiva.</li>
        ";

// Contenido basado en la sección
switch ($section) {
    case 'autoridades':
        $content = "<h1>Autoridades</h1><p>Aquí va la información sobre las autoridades.</p>";
        break;
    case 'nuestra_historia':
        $content = "<h1>Nuestra Historia</h1>
        <p>La Escuela Municipal de Educación Técnica N°21, ubicada en Buenos Aires, fue fundada el 12 de abril de 1945 y celebró su 79º aniversario en 2024. Creada por la Ley 12921, la escuela comenzó como un centro de formación de operarios, ofreciendo cursos en diversas especialidades técnicas hasta 1956.</p>
        <p>En 1956, la escuela cambió su nombre a Escuela Nacional de Educación Técnica N°45, y se implementó el “Curso de Construcción de Edificios”. En 1959, se creó el Consejo Nacional de Educación Técnica, que supervisaría todas las escuelas técnicas del país. En 1967, se rebautizó nuevamente como ESCUELA NACIONAL DE EDUCACIÓN TÉCNICA N°21 DE CAPITAL FEDERAL, y se comenzaron a ofrecer cursos de capacitación profesional.</p>
        <p>A lo largo de los años, la escuela se trasladó varias veces, hasta que en 1991, logró establecerse en su sede actual en Núñez 3638, gracias a un acuerdo con la Municipalidad de Buenos Aires. Desde 1989, se han impartido cursos de Técnico en Computación y otros programas en turnos diurnos y nocturnos. </p>
        <p>La trayectoria de la escuela ha estado marcada por un cambio constante de ubicación, funcionando en diferentes barrios como Belgrano y Saavedra. A pesar de estas dificultades, ha formado a más de 15,000 alumnos y ha contado con un valioso plantel de docentes a lo largo de su historia. </p>
        <h2>Mito y Realidad</h2>
        <p>Se decía que el edificio de la escuela era un antiguo casco de estancia, pero la verdad está más relacionada con la historia de la expansión de Buenos Aires. El área que actualmente ocupa la escuela fue loteada en los años 1870, y el terreno fue adquirido por Don Pastor Saráchaga en 1889. Desde su fundación, la escuela ha pasado por diversas etapas, incorporando nuevos cursos y especialidades. En 1991, finalmente ocupó un edificio propio, consolidando su presencia en la comunidad educativa. </p>
        <p>Desde su fundación, la escuela ha pasado por diversas etapas, incorporando nuevos cursos y especialidades. En 1991, finalmente ocupó un edificio propio, consolidando su presencia en la comunidad educativa. </p>
        <h2>Edificio y Herencia</h2>
        <p>El edificio original contaba con un patio, varias aulas y una cocina. A lo largo de los años, se han realizado modificaciones y ampliaciones, pero la estructura principal se ha mantenido mayormente intacta. Hoy, la E. M. E. T. Nº21 continúa siendo un pilar en la educación técnica, comprometida con la formación de futuras generaciones. </p>
        ";
        break;
    case 'nuestros_objetivos':
        $content = "<h1>Nuestros Objetivos</h1>
        <h2>Que la Institución logre:</h2>
        <ul>
        <li>Ser modelo de escuela creativa, motivadora y abierta al cambio (muy ambicioso).</li>
        <li>Afianzar actitudes de respeto mutuo, solidaridad, tolerancia y compromiso que favorezca y sean las bases concretas para una convivencia armónica dentro de la institución y fuera de ella.</li>
        <li>Resaltar los valores nacionales.</li>
        <li>Avanzar en el desarrollo de los procesos de enseñanza aprendizaje, a fin de mejorar la calidad educativa.</li>
        <li>Adaptarse a las exigencias del mercado laboral complejo y globalizado.</li>
        <li>Promover la participación democrática.</li>
        <li>Capacitar para el ejercicio responsable en la elaboración, construcción y respeto por las normas que rigen la institución.</li>
        <li>Proveer a la escuela de mecanismos eficaces y ajustados a la realidad institucional, para el tratamiento de los conflictos.</li>
        <li>Aumentar los contactos con organizaciones empresariales públicas y/o privadas, afines a las especialidades existentes, para promover un acercamiento de los alumnos a la realidad laboral, fuera del ámbito escolar.</li>
        </ul>
        <h2>Que la Institución logre:</h2>
        <ul>
        <li>Incorporar a la formación valores sociales e intelectuales que contribuirán a desarrollar su personalidad en un marco de compromiso, solidaridad y responsabilidad en su vida académica y vincular.</li>
        <li>Desarrollar actitudes de respeto, cooperación, tolerancia y compromiso, bases concretas para una convivencia armónica dentro de la institución y en su vida en sociedad.</li>
        <li>Concretar avances progresivos en los aspectos cognitivos en relación a conceptos y procedimientos cada vez más complejos.</li>
        <li>Valorar la capacitación como medio para abordar una exitosa inserción laboral y/o en estudios superiores.</li>
        <li>Desarrollar el pensamiento crítico, una visión analítica de la realidad y la toma de decisiones.</li>
        <li>Acrecentar el conocimiento del patrimonio cultural, valorando los símbolos patrios para afianzar el sentimiento de identidad nacional.</li>
        <li>Acrecentar el sentido de pertenencia a la institución educativa, a la comunidad y a la Nación a partir de su formación.</li>
        </ul>
        ";
        break;
    case 'perfil_egresado':
        $content = "<h1>Perfil de Egresado</h1>
        <h2>Que el alumno sea capaz de:</h2>
        <ul>
        <li>Actuar éticamente en la sociedad respetando los principios de participación, responsabilidad y solidaridad incorporados a lo largo de su escolaridad.</li>
        <li>Manifestar actitudes creativas frente a las situaciones que les sean presentadas dentro de la institución como fuera de ella.</li>
        <li>Aplicar los conocimientos técnicos específicos de la especialidad realizando una adecuada transferencia de los mismos en el ámbito laboral.</li>
        <li>Insertarse eficazmente tanto en el ámbito laboral como educativo posterior a su escolarización secundaria, desempeñándose con responsabilidad e idoneidad.</li>
        <li>Relacionarse adecuadamente para el desarrollo de trabajos en equipo o interdisciplinarios, respetando las opiniones y las decisiones consensuadas.</li>     
        <li>Adaptarse en el medio socio-cultural en el que le corresponda desempeñarse con los valores del buen ciudadano.</li>
        ";
        break;
    case 'cooperadora':
        $content = "<h1>Cooperadora</h1><p>Aquí va la información sobre la cooperadora.</p>";
        break;
    case 'biblioteca':
        $content = "<h1>Biblioteca</h1><p>Aquí va la información sobre la biblioteca.</p>";
        break;
    case 'maestro_mayor_obras':
        $content = "<h1>Maestro Mayor de Obras</h1><p>Aquí va la información sobre el curso de Maestro Mayor de Obras.</p>";
        break;
    case 'tecnico_computacion':
        $content = "<h1>Técnico en Computación</h1><p>Aquí va la información sobre el curso de Técnico en Computación.</p>";
        break;
    case 'plan_estudios':
        $content = "<h1>Plan de Estudios</h1><p>Aquí va la información sobre el plan de estudios.</p>";
        break;
    case 'turno_noche':
        $content = "<h1>Turno Noche</h1><p>Aquí va la información sobre el turno noche.</p>";
        break;
    case 'proyectos':
        $content = "<h1>Proyectos</h1><p>Aquí va la información sobre los proyectos.</p>";
        break;
    case 'atencion_victimas':
        $content = "<h1>Atención a Víctimas de Violencia</h1><p>Aquí va la información sobre la atención a víctimas de violencia.</p>";
        break;
    case 'tutorias':
        $content = "<h1>Tutorías</h1><p>Aquí va la información sobre tutorías.</p>";
        break;
    case 'documentacion_resoluciones':
        $content = "<h1>Documentación y Resoluciones</h1><p>Aquí va la información sobre la documentación y resoluciones.</p>";
        break;
}

// Mostrar el contenido
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $section ? ucfirst(str_replace('_', ' ', $section)) : 'Inicio'; ?></title>
    <meta name="description" content="<?php echo $section ? 'Información sobre ' . str_replace('_', ' ', $section) : 'Bienvenido a nuestro sitio'; ?>">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<style>
    body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: "Roboto", sans-serif;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 85px;
            padding: 5px 10%;
        }

        .header .logo {
            cursor: pointer;
            margin-right: auto;
        }

        .header .logo img {
            height: 70px;
            width: auto;
            transition: all 0.3s;
        }

        .buscador .search-box {
            display: flex;
        }

        .buscador .search-box input.contenedor-buscador {
            padding: 10px;
            border: 2px solid #a8a8a8;
            border-radius: 25px 0 0 25px;
            outline: none;
        }

        .buscador .search-box button.buscar {
            padding: 10px 20px;
            background-color: #a8a8a8;
            color: #fff;
            border: 2px solid #a8a8a8;
            border-left: none;
            border-radius: 0 25px 25px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buscador .search-box button.buscar:hover {
            background-color: #0056b3;
        }

        .search-box {
            position: relative;
        }

        .search-options {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
            top: 40px;
        }

        .search-options a {
            color: black;
            text-decoration: none;
            display: block;
        }

        .search-options a:hover {
            background-color: #f1f1f1;
        }

        .search-box:hover .search-options {
            display: block;
        }

        .header .nav-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .header .nav-links li {
            display: inline-block;
            padding: 0 20px;    
        }

        .header .nav-links li:hover {
            transform: scale(1.1);
        }

        .header .nav-links a {
            color: #000000;
            text-decoration: none;
            white-space: nowrap; 
        }

        .header .nav-links li a:hover {
            color: #0b187b;
        }

        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            min-width: 200px;  
            padding: 10px 0;   
        }

        .dropdown:hover .submenu {
            display: block;
        }

        .submenu li {
            width: 100%;
        }

        .submenu a {
            display: block;
            padding: 10px 20px;  
            white-space: nowrap;  
        }

        .arrow {
            margin-left: 5px;
        }

        .ta {
            position: relative;
            display: inline-block;
        }

        /* Main */
        main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .content {
            text-align: left;
            color: #000;
            padding: 20px;
            animation: fadeIn 1s forwards;
        }

        .content h1 {
            font-size: 3em;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: 500;
            text-align: center;
        }

        .content p {
            text-align: left;
            font-size: 13px;
            line-height: 2;
        }

        .content:hover { 
            transform: none;
        }

        /* Footer */
        footer {
            background-color: #ccc;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        /* Barra de Desplazamiento */
        ::-webkit-scrollbar {
            width: 10px; 
            border-radius: 10px; 
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;  
            border-radius: 10px;  
        }

        ::-webkit-scrollbar-thumb {
            background: #a8a8a8; 
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
            border-radius: 10px;
        }
</style>
</head>
<body>
<header class="header">
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Logo fragata"></a>
        </div>
        <nav>
           <ul class="nav-links">
                <li class="dropdown">
                    <a href="#" class="ta">Institucional<span class="arrow">&#9660;</span></a>
                    <ul class="submenu">
                        <li><a href="informacion.php?section=autoridades">Autoridades</a></li>
                        <li><a href="informacion.php?section=nuestra_historia">Nuestra Historia</a></li>
                        <li><a href="informacion.php?section=nuestros_objetivos">Nuestros Objetivos</a></li>
                        <li><a href="informacion.php?section=perfil_preceptor">Perfil de Preceptor</a></li>
                        <li><a href="informacion.php?section=perfil_egresado">Perfil de Egresado</a></li>
                        <li><a href="informacion.php?section=cooperadora">Cooperadora</a></li>
                        <li><a href="informacion.php?section=biblioteca">Biblioteca</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Academica<span class="arrow">&#9660;</span></a>
                    <ul class="submenu">
                        <li><a href="informacion.php?section=maestro_mayor_obras" class="info-link" data-titulo="Maestro Mayor de Obras">Maestro Mayor de Obras</a></li>
                        <li><a href="informacion.php?section=tecnico_computacion" class="info-link" data-titulo="Técnico en Computación">Técnico en Computación</a></li>
                        <li><a href="informacion.php?section=plan_estudios" class="info-link" data-titulo="Plan de Estudios">Plan de Estudios</a></li>
                        <li><a href="informacion.php?section=turno_noche" class="info-link" data-titulo="Turno Noche">Turno Noche</a></li>
                        <li><a href="informacion.php?section=proyectos" class="info-link" data-titulo="Proyectos">Proyectos</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Alumnos<span class="arrow">&#9660;</span></a>
                    <ul class="submenu">
                        <li><a href="informacion.php?section=atencion_victimas">Atención a Víctimas de Violencia</a></li>
                        <li><a href="informacion.php?section=tutorias">Tutorias</a></li>
                        <li><a href="informacion.php?section=documentacion_resoluciones">Documentación y Resoluciones</a></li>
                    </ul>
                </li>
                <li class="login">
                    <a href="login.php" aria-label="Iniciar Sesion">Iniciar Sesión</a>
                </li>
                <li class="buscador">
                    <div class="search-box">
                        <input type="text" placeholder="Buscar" class="contenedor-buscador" id="searchInput" autocomplete="off">
                        <div id="searchOptions" class="search-options">
                            <a href="buscador.php" id="searchLink">Buscar alumnos</a>
                        </div>
                        <button class="buscar">Buscar</button>
                    </div>
                </li>             
           </ul>            
        </nav>
    </header>

    <main>
    <div class="centro-informacion">
        <div class="content">
            <?php echo $content; ?>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p style="text-align: center; color: rgb(87, 87, 87);">2024 Escuela Técnica Nº 21 D.E. 10.</p>
        </div>
    </footer>
</body>
</html>

