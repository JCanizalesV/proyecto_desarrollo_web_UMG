<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); // Solo una vez

require './conexion/bd_conexion.php'; // Asegúrate de que este archivo contenga la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consulta para buscar el usuario
    $stmt = $conexionbd->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $usuario_bd = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si el usuario existe y la contraseña es correcta
    if ($usuario_bd && password_verify($contraseña, $usuario_bd['contraseña'])) {
        // Iniciar sesión y redirigir según el tipo de rol
        $_SESSION['usuario'] = $usuario_bd['usuario'];
        $_SESSION['tipo_rol'] = $usuario_bd['tipo_rol'];
        
        // Redirigir a la página correspondiente según el rol
        if ($usuario_bd['tipo_rol'] === 'admin' || $usuario_bd['tipo_rol'] === 'rrhh') {
            header("Location: inicio_rrhh.php");
        }
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="./header/asg.png" alt="Logo" class="logo">
            <form method="POST" action="">
                <div class="input-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" required>
                </div>
                <div class="input-group">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" required>
                </div>
                <button type="submit" class="login-button">Ingresar</button>
            </form>
            <?php if (isset($error)): ?>
                <p class="error-message"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>


<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.login-box {
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 400px; /* Ancho del formulario aumentado */
    text-align: center;
}

.logo {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
}

.login-box h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    text-align: left;
    display: block;
    margin-bottom: 5px;
    font-size: 19px; /* Aumenta este valor para mayor tamaño */
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px; /* Puedes ajustar el tamaño aquí también si deseas */
}

.login-button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-button:hover {
    background-color: #0056b3;
}

.error-message {
    color: red;
    margin-top: 15px;
    font-size: 14px;
}

</style>