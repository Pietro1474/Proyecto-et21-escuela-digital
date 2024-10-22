<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
  header('Location: login.php'); // Redirigir a la página de inicio de sesión si no está autenticado
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f4f8;
      color: #333;
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 250px;
      background-color: #005a9c;
      color: white;
      padding: 20px;
      position: fixed;
      top: 0;
      bottom: 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
    }

    .sidebar h2 {
      font-size: 20px;
      margin-bottom: 30px;
      text-align: center;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 0;
      font-size: 18px;
      transition: background-color 0.3s;
    }

    .sidebar a:hover {
      background-color: #0073e6;
      padding-left: 10px;
    }

    .sidebar footer {
      text-align: center;
      font-size: 14px;
      color: #ddd;
    }

    .main-content {
      margin-left: 250px;
      padding: 40px;
      flex-grow: 1;
    }

    .header {
      background-color: #f8f9fa;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .header h1 {
      font-size: 24px;
      color: #005a9c;
    }

    .profile-header {
      display: flex;
      align-items: center;
    }

    .profile-header img {
      border-radius: 50%;
      width: 50px;
      height: 50px;
      margin-left: 20px;
    }

    .profile-header div {
      display: flex;
      flex-direction: column;
      margin-left: 15px;
    }

    .profile-header h2 {
      margin: 0;
      font-size: 18px;
    }

    .profile-header p {
      margin: 0;
      color: #666;
    }

    .dashboard-content {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .dashboard-content h2 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    footer {
      margin-top: 30px;
      text-align: center;
      color: #666;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h2>Panel de Control</h2>
  <nav>
    <a href="materias.php">Materias</a>
    <a href="buscador.php">Buscador</a>
    <a href="mailto:rodriguez.nicolas.et21.21@gmail.com">Contactar</a>
    <a href="logout.php">Cerrar sesión</a>
  </nav>
  <footer>
    <p>2024 Tu Escuela. Todos los derechos reservados.</p>
  </footer>
</div>

<div class="main-content">
  <div class="header">
    <h1><?php echo htmlspecialchars($titulo); ?></h1>
    <div class="profile-header">
      <img src="img/user.png" alt="Avatar">
      <div>
        <h2><?php echo htmlspecialchars($username); ?></h2>
        <p><?php echo htmlspecialchars($username); ?></p>
      </div>
    </div>
  </div>

  <div class="dashboard-content">
    <?php echo $mensaje; ?>
    <?php echo $contenido; ?>
  </div>

  <footer>
    <p>2024 Tu Escuela. Todos los derechos reservados.</p>
  </footer>
</div>

</body>
</html>
