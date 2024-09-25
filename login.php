<?php
// Configuración de la base de datos
$databasePath = 'base_de_datos.db'; 

// Crear una conexion a la base de datos sqlite
try {
    $pdo = new PDO('sqlite:' . $databasePath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar y ejecutar la consulta para obtener el usuario
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['password'] === $password) {
        // Establecer sesion
        session_start();
        $_SESSION['user'] = $user;

        // Redirigir segun el rol
        switch ($user['role']) {
            case 'admin':
                header('Location: inicio.php');
                break;
            case 'alumno':
                header('Location: inicio.php');
                break;
            case 'padre':
                header('Location: inicio.php');
                break;
            case 'profesor':
                header('Location: inicio.php');
                break;
            case 'coordinador':
                header('Location: inicio.php');
                break;
            case 'preceptor':
                header('Location: inicio.php');
                break;
            default:
                echo "Rol no reconocido.";
                exit;
        }
    } else {
        echo "Correo electrónico o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Iniciar Sesión</title>
  <link href="styles.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <style>
      body {
        margin: 0;
        padding: 0;
        font-family: "Roboto", sans-serif;
        background: linear-gradient(150deg, #ffffff, #017f9b);
        height: 100vh;
      }

      .formulario {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: #ffff;
        border-radius: 10px;
      }

      .formulario h1 {
        text-align: center;
        padding: 0 0 2px;
      }

      .formulario form {
        padding: 0 40px;
        box-sizing: border-box;
      }

      form .usuario {
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
      }

      .usuario input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
      }

      .user::-webkit-input-placeholder { 
        font-family: "Roboto", sans-serif;
      }

      .recordar {
        margin: -5px 0 20px 5px;
        cursor: pointer;
      }

      .recordar a:hover {
        text-decoration: none;
        color: #0b187b;
      }

      .recordar a{
        color: #000000;
        text-decoration: none;
      }

      input[type="submit"] {
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: #006AAC;
        border-radius: 25px;
        font-size: 18px;
        color: #ffff;
        cursor: pointer;
        outline: none;
      }

      input[type="submit"]:hover {
        border-color: #000000;
        transition: .5s;
      }

      .inicio {
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #000000;
      }

      .inicio a {
        color: #000000;
        text-decoration: none;
      }

      .inicio a:hover {
        color: #0b187b;
      }
  </style>
</head>

<body>
  <div class="formulario">
    <h1>Inicio de Sesión</h1>
    <form method="post">
      <div class="usuario">
        <input class="user" type="text" name="email" placeholder="Correo Electrónico" autocomplete="off" maxlength="50" minlength="15" required>
      </div>
      <div class="usuario">
        <input id="password" class="user" type="password" name="password" placeholder="Contraseña" autocomplete="off" minlength="10" required>
      </div>
      <div class="recordar">
        <input type="checkbox" id="togglePassword" style="margin-right: 10px;">
        <label for="togglePassword">Mostrar Contraseña</label>
      </div>
      <div class="recordar"><a href="mailto:movilidad.secundaria@bue.edu.ar">¿Olvido su contraseña?</a></div>
      <input type="submit" value="Ingresar">
      <div class="inicio">
        <a href="index.php">Volver a Inicio</a>
      </div>
    </form>
  </div>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('change', function (e) {
      // Cambiar el tipo de input a text o password
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
    });
  </script>
</body>
</html>