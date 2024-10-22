<?php
session_start();
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$rol = $_SESSION['user']['role'] ?? '';
$edit_roles = ['admin', 'profesor', 'preceptor', 'coordinador']; 
$can_edit = in_array($rol, $edit_roles);

$databasePath = 'base_de_datos.db';
try {
    $pdo = new PDO('sqlite:' . $databasePath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
    exit;
}

$query = "SELECT m.*, a.nombre, a.apellido FROM materias m
          JOIN alumnos a ON m.id_alumno = a.id";
$materias_stmt = $pdo->prepare($query);
$materias_stmt->execute();
$materias = $materias_stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Notas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General */
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f4f8;
    color: #333;
    display: flex;
}

h1 {
    color: #005a9c;
    margin-left: 280px;
    padding-top: 20px;
    font-size: 2rem;
    font-weight: 400;
}

/* Sidebar */
.sidebar {
    width: 150px;
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
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
}

.sidebar nav a {
    color: white;
    text-decoration: none;
    font-size: 1rem;
    padding: 10px 0;
    display: block;
    transition: background-color 0.3s;
}

.sidebar nav a:hover {
    background-color: #003f7d;
    padding-left: 10px;
}

/* Content Area */
.content {
    margin-left: 190px;
    padding: 20px;
    flex-grow: 1;
    height: 100vh;
    overflow-y: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    table-layout: fixed;
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
    word-wrap: break-word;
}

th {
    background-color: #005a9c;
    color: white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #e6f0fa;
}

@media screen and (max-width: 768px) {
    body {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .content {
        margin-left: 0;
        padding-top: 0;
    }

    table {
        font-size: 0.9rem;
    }
}

</style>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Panel de Control</h2>
        <nav>
            <a href="inicio.php">Inicio</a>
            <a href="materias.php">Materias</a>
            <a href="logout.php">Cerrar Sesión</a>
        </nav>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h1>Control de Notas - Cuatrimestres</h1>
        <table>
            <thead>
                <tr>
                    <th rowspan="2">N°</th>
                    <th rowspan="2">Cédula de Identidad</th>
                    <th colspan="2">1er Bimestre</th>
                    <th colspan="2">2do Bimestre</th>
                    <th colspan="2">1er Cuatrimestre</th>
                    <th colspan="2">3er Bimestre</th>
                    <th colspan="2">4to Bimestre</th>
                    <th colspan="2">2do Cuatrimestre</th>
                </tr>
                <tr>
                    <th>Nota</th>
                    <th>Faltas</th>
                    <th>Nota</th>
                    <th>Faltas</th>
                    <th>Nota</th>
                    <th>Faltas</th>
                    <th>Nota</th>
                    <th>Faltas</th>
                    <th>Nota</th>
                    <th>Faltas</th>
                    <th>Nota</th>
                    <th>Faltas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Suponiendo que se obtiene $materias desde la base de datos
                foreach ($materias as $index => $materia): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($materia['cedula']) ?></td>
                        <td><?= htmlspecialchars($materia['1er_bimestre_nota']) ?></td>
                        <td><?= htmlspecialchars($materia['1er_bimestre_faltas']) ?></td>
                        <td><?= htmlspecialchars($materia['2do_bimestre_nota']) ?></td>
                        <td><?= htmlspecialchars($materia['2do_bimestre_faltas']) ?></td>
                        <td><?= htmlspecialchars($materia['1er_cuatrimestre_nota']) ?></td>
                        <td><?= htmlspecialchars($materia['1er_cuatrimestre_faltas']) ?></td>
                        <td><?= htmlspecialchars($materia['3er_bimestre_nota']) ?></td>
                        <td><?= htmlspecialchars($materia['3er_bimestre_faltas']) ?></td>
                        <td><?= htmlspecialchars($materia['4to_bimestre_nota']) ?></td>
                        <td><?= htmlspecialchars($materia['4to_bimestre_faltas']) ?></td>
                        <td><?= htmlspecialchars($materia['2do_cuatrimestre_nota']) ?></td>
                        <td><?= htmlspecialchars($materia['2do_cuatrimestre_faltas']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
