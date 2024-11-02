<?php
session_start(); // Asegúrate de que la sesión esté iniciada

// Verifica si la sesión del usuario está activa
if (!isset($_SESSION['usuario'])) {
    // Redirige a la página de inicio de sesión si no está autenticado
    header("Location: rrhh_login.php"); // Cambia esta ruta según la ubicación de tu archivo de inicio de sesión
    exit();
}
?>
