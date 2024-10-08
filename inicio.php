<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

    // Obtener el rol del usuario
    $rol = $_SESSION['user']['role'] ?? '';
    $username = $_SESSION['user']['username'] ?? '';
    
// Verificar el rol del usuario y definir el contenido
switch ($rol) {
    case 'admin':
        $titulo = 'Inicio';
        $mensaje = '<h1>hola admin</h1>';
        $contenido = '<p>Bienvenido al panel de administración.</p>';
        break;

    case 'alumno':
    case 'padre':
        $titulo = 'Inicio';
        $mensaje = '<h1>Hola alumno/padre</h1>';
        $contenido = '<p>Bienvenido a la plataforma.</p>
                      <p>Aquí puedes ver el calendario y otra información relevante.</p>';
        break;

    case 'profesor':
    case 'coordinador':
    case 'preceptor':  
        $titulo = 'Inicio';
        $mensaje = '<h1>Hola profesor/cordinador/preceptor</h1>';
        $contenido = '<p>Bienvenido a la plataforma.</p>
                      <p>Aquí puedes ver el calendario y otra información relevante.</p>';
        break;

    default:
        header('Location: index.php');
        exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($titulo); ?></title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f4f8;
      color: #333;
    }

    header {
      background-color: #005a9c;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      position: relative;
    }

    .header-logo {
      position: relative;
    }

    .header-logo img {
      height: 50px;
      width: auto; 
    }

    .profile-header {
      display: flex;
      align-items: center;
      position: relative;
    }

    .profile-header img {
      border-radius: 50%;
      width: 60px;
      height: 60px;
      margin-left: 20px;
      cursor: pointer;
    }

    .profile-options {
      display: none;
      position: absolute;
      top: 70px;
      right: 0;
      background-color: #005a9c;
      color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 10px;
      width: 150px;
      z-index: 1000;
      text-align: left;
    }

    .profile-options a {
      color: white;
      text-decoration: none;
      display: block;
      margin: 5px 0;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    .profile-options a:hover {
      color: #ffcc00;
    }

    .profile-header:hover .profile-options,
    .profile-options:hover {
      display: block;
    }

    main {
      padding: 20px;
      max-width: 1200px;
      margin: 20px auto;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    footer {
      background-color: #005a9c;
      color: white;
      text-align: center;
      padding: 15px 20px;
      position: fixed;
      bottom: 0;
      width: 100%;
      box-shadow: 0 -4px 8px rgba(0,0,0,0.1);
    }

    .profile-header div {
      display: flex;
      flex-direction: column;
      margin-left: 20px;
    }

    .profile-header h1 {
      margin: 0;
      font-size: 20px;
      color: #fff;
    }

    .profile-header p {
      margin: 0;
      color: #ddd;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        text-align: center;
      }

      .profile-header {
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
      }

      .profile-options {
        text-align: center;
        top: 70px;
        right: unset;
        left: 50%;
        transform: translateX(-50%);
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="header-logo">
      <img src="img/logo.png" alt="Logo">
    </div>
    <div class="profile-header">
      <img src="img/user.png" alt="Avatar">
      <div class="profile-options">
        <a href="#">Inscripciones</a>
        <a href="#">Materias</a>
        <a href="#">Contactar</a>
        <a href="login.php">Cerrar Sesión</a>
      </div>
      <div>
        <h1><?php echo htmlspecialchars($username); ?></h1>
        <p><?php echo htmlspecialchars($username); ?></p>
      </div>
    </div>
  </header>
  <main>
  <div class="card">
    <?php echo $mensaje; // Mostrar el mensaje correspondiente ?>
    <?php echo $contenido; // Mostrar el contenido correspondiente ?>
</div>
  </main>
  <footer>
    <p>2024 Tu Escuela. Todos los derechos reservados.</p>
  </footer>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const profileHeader = document.querySelector('.profile-header');
    const profileOptions = document.querySelector('.profile-options');
    
    profileHeader.addEventListener('mouseenter', function() {
      profileOptions.style.display = 'block';
    });

    profileOptions.addEventListener('mouseenter', function() {
      profileOptions.style.display = 'block';
    });

    profileHeader.addEventListener('mouseleave', function(event) {
      setTimeout(() => {
        if (!profileOptions.matches(':hover') && !profileHeader.matches(':hover')) {
          profileOptions.style.display = 'none';
        }
      }, 100);
    });

    profileOptions.addEventListener('mouseleave', function(event) {
      setTimeout(() => {
        if (!profileOptions.matches(':hover') && !profileHeader.matches(':hover')) {
          profileOptions.style.display = 'none';
        }
      }, 100);
    });
  });
</script>

</body>
</html>
