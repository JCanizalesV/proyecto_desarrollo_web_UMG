<?php
session_start();
require("../conexion/bd_conexion.php");

// Asegúrate de que la variable $accion esté definida
$accion = isset($_POST['accion']) ? $_POST['accion'] : null;

switch($accion) {
    case "btnEnviar":
        $mensaje = '';
        $codigo_cc = isset($_POST['codigo_cc']) ? $_POST['codigo_cc'] : "";
        $centro_de_costo = isset($_POST['centro_de_costo']) ? $_POST['centro_de_costo'] : "";

        // Preparar y ejecutar la consulta SQL
        $query = $conexionbd->prepare("INSERT INTO tbl_cc (codigo, centro_de_costo) VALUES (:codigo, :centro_de_costo)");
        
        try {
            $query->bindParam(':codigo', $codigo_cc);
            $query->bindParam(':centro_de_costo', $centro_de_costo);
            $query->execute();
            $_SESSION['alert'] = ['type' => 'success', 'message' => 'Ingresado correctamente.'];
        } catch (PDOException $e) {
            $_SESSION['alert'] = ['type' => 'danger', 'message' => 'Error al ingresar el Centro de Costo: ' . $e->getMessage()];
        }

        // Redirigir de vuelta a la página original
        header("Location: cc.php");
        exit();
    break;

    case "btnActualizar":
        $id_cc = isset($_POST['id_cc']) ? $_POST['id_cc'] : "";
        $codigo_cc = isset($_POST['codigo_cc']) ? $_POST['codigo_cc'] : "";
        $centro_de_costo = isset($_POST['centro_de_costo']) ? $_POST['centro_de_costo'] : "";

        $query = $conexionbd->prepare("UPDATE tbl_cc SET codigo = :codigo, centro_de_costo = :centro_de_costo WHERE id_cc = :id_cc");
        $query->bindParam(':codigo', $codigo_cc);
        $query->bindParam(':centro_de_costo', $centro_de_costo);
        $query->bindParam(':id_cc', $id_cc);
        
        if ($query->execute()) {
            $_SESSION['alert'] = [
                'type' => 'success',
                'message' => 'Actualizado correctamente'
            ];
        } else {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'message' => 'Error al actualizar el Centro de Costo'
            ];
        }
    
        header("Location: cc.php");  
        exit();
    break;
}

// query para traer los datos centros de costos
$query = $conexionbd->prepare("SELECT id_cc, codigo, centro_de_costo FROM tbl_cc ORDER BY codigo ASC");
$query->execute();
$lista_cc = $query->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['listado_centros'] = $lista_cc;
?>
