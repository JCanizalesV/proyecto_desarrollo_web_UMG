<?php
session_start(); // Iniciar la sesión
session_unset(); // Eliminar todas las variables de sesión
session_destroy(); // Destruir la sesión

// Redirigir a la página de inicio de sesión
header("Location: rrhh_login.php"); // Cambia esta ruta según tu archivo de inicio de sesión
exit();
?>
