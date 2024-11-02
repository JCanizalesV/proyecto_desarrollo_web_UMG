
<?php

// Definir las variables de conexión
$host = 'localhost'; // Cambia esto según tu configuración
$nombre_bd = 'aplicativo_rrhh'; // Cambia esto al nombre de tu base de datos
$usuario_bd = 'root'; // Cambia esto a tu usuario de base de datos
$contraseña_bd = 'local0731'; // Cambia esto a tu contraseña de base de datos



try {
    // Conectar a la base de datos
    $conexionbd = new PDO("mysql:host=$host;dbname=$nombre_bd;charset=utf8", $usuario_bd, $contraseña_bd);
    $conexionbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conectado a la base de datos<br>';

/*    // Definimos los datos del nuevo usuario
    $usuario = 'admin';
    $contraseña = 'admin'; // Contraseña en texto plano
    $tipo_rol = 'admin';

    // Hashear la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    // Consulta de inserción
    $sql = "INSERT INTO usuarios (usuario, contraseña, tipo_rol) VALUES ('$usuario', '$contraseña_hash', '$tipo_rol')";
    
    // Ejecutamos la consulta
    $conexionbd->exec($sql);
    echo "Usuario agregado exitosamente."; */

} catch (PDOException $errores_bd) {
    // Se manejan los errores al momento de conectarnos a la BD
    echo "Error al conectar o ejecutar la consulta: " . $errores_bd->getMessage();
}
?>
