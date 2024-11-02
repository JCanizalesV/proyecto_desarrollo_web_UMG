<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

session_start();
require("../conexion/bd_conexion.php");
// Verifica si la sesión del usuario está activa
if (!isset($_SESSION['usuario'])) {
    // Redirige a la página de inicio de sesión si no está autenticado
    header("Location: ../rrhh_login.php"); 
    exit();
}



switch($accion) {
    case "btnEnviar":
        // Inicializar una variable de mensaje
        $mensaje = '';
        
        // Capturar los datos del formulario
        $codigo_cc = isset($_POST['codigo_cc']) ? $_POST['codigo_cc'] : "";
        $centro_de_costo = isset($_POST['centro_de_costo']) ? $_POST['centro_de_costo'] : "";

        // Preparar y ejecutar la consulta SQL
        $query = $conexionbd->prepare("INSERT INTO tbl_cc (codigo, centro_de_costo) VALUES (:codigo, :centro_de_costo)");
        
        try {
            $query->bindParam(':codigo', $codigo_cc);
            $query->bindParam(':centro_de_costo', $centro_de_costo);
            $query->execute();
            
            // Si se insertó correctamente
            $_SESSION['alert'] = ['type' => 'success', 'message' => 'Ingresado correctamente.'];
        } catch (PDOException $e) {
            // Si hubo un error
            $_SESSION['alert'] = ['type' => 'danger', 'message' => 'Error al ingresar el Centro de Costo: ' . $e->getMessage()];
        }

        // Redirigir de vuelta a la página original
        header("Location: cc.php");
        exit();
    break;

    case "btnActualizar":
        // Capturar los datos del formulario
        $id_cc = isset($_POST['id_cc']) ? $_POST['id_cc'] : "";
        $codigo_cc = isset($_POST['codigo_cc']) ? $_POST['codigo_cc'] : "";
        $centro_de_costo = isset($_POST['centro_de_costo']) ? $_POST['centro_de_costo'] : "";
    
        // Preparar y ejecutar la consulta SQL
        $query = $conexionbd->prepare("UPDATE tbl_cc SET codigo = :codigo, centro_de_costo = :centro_de_costo WHERE id_cc = :id_cc");
        $query->bindParam(':codigo', $codigo_cc);
        $query->bindParam(':centro_de_costo', $centro_de_costo);
        $query->bindParam(':id_cc', $id_cc);
        
        // Ejecutar la consulta
        if ($query->execute()) {
            // Establecer una alerta de éxito
            $_SESSION['alert'] = [
                'type' => 'success',
                'message' => 'Actualizado correctamente'
            ];
        } else {
            // Establecer una alerta de error
            $_SESSION['alert'] = [
                'type' => 'danger',
                'message' => 'Error al actualizar el Centro de Costo'
            ];
            
        }
    
        // Redirigir de vuelta a la página original
        header("Location: cc.php");  
        exit();
    break;
    
}



// query para traer los datos centros de costos
$query= $conexionbd -> prepare("SELECT id_cc, codigo, centro_de_costo FROM tbl_cc ORDER BY codigo ASC");
$query -> execute();
$lista_cc = $query ->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['listado_centros'] = $lista_cc;

//print_r($lista_cc);


// query para insertar datos a la tabla tbl_cc



?>