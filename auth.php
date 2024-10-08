<?php

// Evitar que el navegador guarde caché de la sesión
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

// Verificar si la sesión no está ya iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Iniciar la sesión solo si no ha sido iniciada
}

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    // Depuración: Ver qué pasa cuando no hay sesión
    error_log('El usuario no está autenticado. Redirigiendo a index.php');
    // Redirigir a la página de inicio de sesión si no está autenticado
    header('Location: index.php');
    exit;
} else {
    // Depuración: Mostrar qué usuario está autenticado
    error_log('Usuario autenticado: ' . $_SESSION['user']);
}
if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
    session_regenerate_id(true); // Regenerar el ID de sesión
}