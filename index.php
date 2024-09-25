<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Integrado de Gestión Escolar</title>
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

        .centro-informacion {
            background-image: url('img/banner.jpg');
            background-position: center;
            background-size: cover;
            height: 105vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .content {
            text-align: center;
            color: #ffffff;
            padding: 20px;
            animation: fadeIn 1s forwards;
        }

        .content h1 {
            font-size: 3em;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .content p {
            font-size: 1.5em;
        }

        .content:hover { 
            transform: none;
        }

        /* Inscripción */
        .inscripcion {
            background-color: #ffffff;
            color: #000000;
            padding: 40px;
            margin: 20px 100px;
            border-radius: 10px;
            box-shadow: 0 5px 35px rgba(0,0,0,0.15);
        }

        .inscripcion h2 {
            font-size: 2em;
            font-weight: 500;
            margin-bottom: 20px;
        }

        /* Slider */
        .slider {
            position: relative;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
            border-radius: 10px;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
            padding: 20px;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 93%;
            width: 30px;
            height: 30px;
            padding: 10px;
            margin-top: -15px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            border-radius: 50%;
            user-select: none;
            background-color: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .slide h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .slide p, .slide ul, .slide a {
            font-size: 1.1em;
            line-height: 1.6;
        }

        .slide ul {
            margin-left: 20px;
        }

        .slide li {
            margin-bottom: 10px;
        }

        .slide a {
            color: #000000;
            text-decoration: none;
            font-weight: bold;
        }

        .slide a:hover {
            color: #0b187b;
        }

        /* Indicador Dots */
        .indicador-dots {
            text-align: center;
            padding: 20px 0;
        }

        .indicador-dots .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #a8a8a8;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .indicador-dots .dot.active {
            background-color: #717171;
        }

        /* Contacto */
        .contacto {
            position: relative;
            width: 70%; 
            margin: 0 auto;
            height: 104vh; 
            padding: 40px; 
            background-color: #ffffff;
            box-shadow: 0 10px 50px rgba(0,0,0,0.1);
            border-radius: 15px;
            transition: box-shadow 0.3s ease;
        }

        .contacto:hover {
            box-shadow: 0 15px 60px rgba(0,0,0,0.2);
        }

        .contacto .titulo-contacto {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.2em;
            font-family: 'Poppins', sans-serif;
        }

        .contacto .titulo-contacto h2 {
            color: #333333;
            font-weight: 600;
        }

        /* Caja Contenedora */
        .caja-contenedor {
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-template-rows: 5fr 4fr;
            grid-template-areas: 
            "form info"
            "form map";
            grid-gap: 20px;
            margin-top: 20px;
        }

        .contacto h3 {
            color: #222222;
            font-weight: 500;
            font-size: 1.6em;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        /* Formulario */
        .form-contacto {
            grid-area: form;
        }

        .forma-contenedor {
            width: 100%;
        }

        .form-contacto .row50 {
            display: flex;
            gap: 20px;
        }

        .input-contenedor {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: 50%;
        }

        .forma-contenedor .row100 .input-contenedor {
            width: 100%;
        }

        .input-contenedor span {
            color: #ccc;
            text-decoration: none;
            font-weight: 500;
        }

        .input-contenedor input, .input-contenedor textarea {
            padding: 12px;
            font-size: 1.1em;
            outline: none;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s ease;
        }

        .input-contenedor input:hover, .input-contenedor textarea:hover {
            border-color: #0b187b;
        }

        .input-contenedor input:focus, .input-contenedor textarea:focus {
            border-color: #0b187b;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        .boton-enviar {
            padding: 15px 30px;
            border: none;
            background-color: #0b187b;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .boton-enviar:hover {
            background-color: #0056b3;
        }

        .info-contacto {
            padding: 20px;
            background-color: #f8f8f8; /* Color de fondo para la sección */
            border-radius: 10px; /* Bordes redondeados */
        }

        .info-contacto h3 {
            text-align: center; /* Centrar el título */
            margin-bottom: 15px;
        }

        .info-contenedor {
            display: flex; /* Usar flexbox para el diseño */
            flex-direction: column; /* Cambiar la dirección a columna en pantallas pequeñas */
            align-items: center; /* Centrar los elementos */
            gap: 10px; /* Espacio entre los elementos */
        }

        .info-contenedor div {
            display: flex; /* Usar flexbox para icono y texto */
            align-items: center; /* Centrar verticalmente */
            gap: 10px; /* Espacio entre icono y texto */
            width: 100%; /* Tomar el ancho completo */
            max-width: 400px; /* Limitar el ancho máximo */
        }

        .info-contenedor a {
            text-decoration: none; /* Quitar subrayado de enlaces */
            color: #333; /* Color de texto */
        }

        .info-contenedor a:hover {
            color: #0056b3; /* Color en hover */
        }

        .redes {
            list-style: none; /* Quitar estilos de lista */
            display: flex; /* Usar flexbox para las redes sociales */
            justify-content: center; /* Centrar horizontalmente */
            padding: 0;
        }

        .redes li {
            margin: 0 10px; /* Espacio entre los iconos de redes sociales */
        }

        .redes a {
            font-size: 24px; /* Tamaño de los iconos */
            color: #333; /* Color de los iconos */
        }

        .redes a:hover {
            color: #0056b3; /* Color en hover */
        }

        /* Mapa */
        .mapa {
            grid-area: map;
            height: 100%;
            width: 100%;
        }

        .mapa iframe {
            width: 100%;
            height: 100%;
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

        /* Animaciones */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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
            <img src="img/logo.png" alt="Logo fragata">
        </div>
        <nav>
           <ul class="nav-links">
                <li class="dropdown">
                    <a href="#" class="ta">Institucional<span class="arrow">&#9660;</span></a>
                    <ul class="submenu">
                        <li><a href="#">Autoridades</a></li>
                        <li><a href="#">Nuestra Historia</a></li>
                        <li><a href="#">Nuestros Objetivos</a></li>
                        <li><a href="#">Perfil de Egresado</a></li>
                        <li><a href="#">Cooperadora</a></li>
                        <li><a href="#">Biblioteca</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Academica<span class="arrow">&#9660;</span></a>
                    <ul class="submenu">
                        <li><a href="informacion.php" class="info-link" data-titulo="Maestro Mayor de Obras">Maestro Mayor de Obras</a></li>
                        <li><a href="informacion.php" class="info-link" data-titulo="Técnico en Computación">Técnico en Computación</a></li>
                        <li><a href="informacion.php" class="info-link" data-titulo="Plan de Estudios">Plan de Estudios</a></li>
                        <li><a href="informacion.php" class="info-link" data-titulo="Turno Noche">Turno Noche</a></li>
                        <li><a href="informacion.php" class="info-link" data-titulo="Proyectos">Proyectos</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Alumnos<span class="arrow">&#9660;</span></a>
                    <ul class="submenu">
                        <li><a href="#">Atención a Víctimas de Violencia</a></li>
                        <li><a href="#">Tutorias</a></li>
                        <li><a href="#">Documentación y Resoluciones</a></li>
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
                <h1>Fragata Escuela Libertad</h1>
                <p>La ET N° 21 "Fragata Escuela Libertad" es una institución pública de Buenos Aires que ofrece capacitación profesional. Además de enseñar habilidades técnicas, se enfoca en inculcar valores éticos para adaptarse a las demandas laborales y sociales, promoviendo un desarrollo integral que incluya crecimiento personal y moral.</p>
            </div>
    </div>

    <div class="inscripcion">
        <h2>Inscripción</h2>
        <div class="slider">
            <div class="slides">
                <div class="slide" id="slide-1">
                    <h3>Paso 1</h3>
                    <p>Realiza la preinscripción en línea a través del siguiente enlace:</p>
                    <a href="https://www.buenosaires.gob.ar/educacion/estudiantes/inscripcionescolar" target="_blank">Preinscripción en línea</a>
                </div>
                <div class="slide" id="slide-2">
                    <h3>Paso 2</h3>
                    <p>Envía un correo electrónico a <a href="mailto:inscripcionesturnonoche@gmail.com">inscripcionesturnonoche@gmail.com</a> con la siguiente información:</p>
                    <ul>
                        <li>Apellido y nombres completos</li>
                        <li>Número de Documento</li>
                        <li>Carrera a la que se inscribe</li>
                        <li>Número de preinscripción</li>
                    </ul>
                </div>
                <div class="slide" id="slide-3">
                    <h3>Paso 3</h3>
                    <p>Recibirás una respuesta con un documento PDF adjunto. Reenvía por correo el documento PDF recibido junto con:</p>
                    <ul>
                        <li>Foto del documento de identidad</li>
                        <li>Título obtenido, constancia de estudios parciales o pase de otro establecimiento (lo que corresponda)</li>
                        <li>A la cuenta: <a href="mailto:movilidad.secundaria@bue.edu.ar">movilidad.secundaria@bue.edu.ar</a></li>
                    </ul>
                </div>
                <div class="slide" id="slide-4">
                    <h3>Paso 4</h3>
                    <p>Recibirás una respuesta con un documento PDF adjunto, necesario para realizar la inscripción. Una vez recibida la respuesta de MOVILIDAD, acércate a la Secretaría escolar con la siguiente documentación original y copia impresa:</p>
                    <ul>
                        <li>DNI</li>
                        <li>2 FOTOS 4X4</li>
                        <li>TÍTULO SECUNDARIO O PASE DE OTRO ESTABLECIMIENTO (según corresponda)</li>
                        <li>PARTIDA DE NACIMIENTO</li>
                        <li>DICTAMEN DE MOVILIDAD</li> 
                        <li>FACTURA DE SERVICIO CON EL DOMICILIO DONDE VIVE</li>
                        <li>Menores de 18 años deben concurrir acompañados por un adulto responsabl</li>
                    </ul>
                </div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
            <div class="indicador-dots">
                <span class="dot" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>

    <div class="contacto">
        <div class="titulo-contacto">
            <h2>Contactanos</h2>
        </div>
        <div class="caja-contenedor">
            <div class="form-contacto">
                <h3>Mandar un mensaje</h3>
                <form action="https://formsubmit.com/barrera.fernando.et21.21@gmail.com" method="post">
                    <div class="forma-contenedor">
                        <div class="row50">
                            <div class="input-contenedor">
                                <span>Nombre</span>
                                <input type="text" placeholder="nombre" required>
                            </div>
                            <div class="input-contenedor">
                                <span>Apellido</span>
                                <input type="text" placeholder="apellido" required>
                            </div>
                        </div>

                        <div class="row50">
                                <div class="input-contenedor">
                                    <span>Email</span>
                                    <input type="email" placeholder="random@gmail.com" required>
                                </div>
                                <div class="input-contenedor">
                                    <span>Numero</span>
                                    <input type="text" placeholder="+54 9 11 7312-8402">
                                </div>
                        </div>
                        
                        <div class="row100">
                            <div class="input-contenedor">
                                <span>Mensaje</span>
                                <textarea placeholder="Escribi tu mensaje..."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="input-contenedor">
                               <input type="submit" value="Enviar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="info-contacto">
                <h3>Informacion del Contacto</h3>
                <div class="info-contenedor">
                    <div>
                        <span><ion-icon name="location-outline"></ion-icon></span>
                        <a href="https://maps.app.goo.gl/wDjQBjic4Q2WVQwn9">Nuñez 3638, C1430AMF<br>Cdad. Autónoma de Buenos Aires</a>
                    </div>
                    <div>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <a href="mailto:et21web@gmail.com">et21web@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+11-4543-7363">011 4546-3878</a>
                    </div>
                    <ul class="redes">
                        <li><a href="https://www.instagram.com/escuelatecnica21/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href="https://www.facebook.com/ET21DE10/"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    </ul>
                </div>
            </div>
            <div class="map-contacto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13143.583400283876!2d-58.4782313!3d-34
                .5561923!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb68e3b0a9d41%3A0x6cde71d06b8f9ef2!2sEscuela%20T%C3%A9cn
                ica%20N%C2%BA21%20%22Fragata%20Escuela%20Libertad%22!5e0!3m2!1ses-419!2sar!4v1716216396533!5m2!1ses-419!2
                sar"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </main>

    <footer>
        <div class="footer">
            <p style="text-align: center; color: rgb(87, 87, 87);">2024 Escuela Técnica Nº 21 D.E. 10.</p>
        </div>
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const searchIcon = document.querySelector('.search-icon');
        const searchBox = document.querySelector('.search-box');
        const contentContainer = document.querySelector('.content');
        const searchContainer = document.querySelector('.buscador');

        searchIcon.addEventListener('click', function (event) {
            searchIcon.style.display = 'none';
            searchBox.classList.add('active');
            event.stopPropagation(); 
        });

        searchContainer.addEventListener('click', function (event) {
            event.stopPropagation(); 
        });

        document.addEventListener('click', function (event) {
            const clickedElement = event.target;
            
            if (!contentContainer.contains(clickedElement)) {
                searchIcon.style.display = 'block'; 
                searchBox.classList.remove('active'); 
            }
        });
    });

    let slideIndex = 0;
    showSlides(slideIndex);

    function changeSlide(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        const slides = document.getElementsByClassName("slide");
        const dots = document.getElementsByClassName("dot");
        if (n >= slides.length) { slideIndex = 0; }
        if (n < 0) { slideIndex = slides.length - 1; }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex].style.display = "block";
        dots[slideIndex].className += " active";
    }

    document.getElementById("searchInput").addEventListener("click", function() {
        document.getElementById("searchOptions").classList.toggle("show");
    });

    // Ocultar las opciones de búsqueda cuando se hace clic fuera de ellas
    window.addEventListener("click", function(event) {
        if (!event.target.matches("#searchInput")) {
            var dropdowns = document.getElementsByClassName("search-options");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    });
    </script>
</body>
</html>