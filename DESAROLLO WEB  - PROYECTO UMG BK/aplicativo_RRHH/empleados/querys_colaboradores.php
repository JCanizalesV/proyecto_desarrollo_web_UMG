<?php



/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */


session_start();
require("../conexion/bd_conexion.php");
// Verifica si la sesión del usuario está activa
if (!isset($_SESSION['usuario'])) {
    // Redirige a la página de inicio de sesión si no está autenticado
    header("Location: ../rrhh_login.php"); 
    exit();
}


// Consulta para traer los datos de centros de costos
$query = $conexionbd->prepare("SELECT 
    id, fecha_hora, puesto, medio, otra_plaza, pretension, horario, hora_inicio, hora_fin, 
    fin_de_semana, turnos_rotativos, inicio_labores, disponibilidad_viajar, nombres, 
    apellido_p, apellido_m, lugar_nacimiento, fecha_nacimiento, direccion_actual, zona, 
    estado_civil, dpi, extendido, nit, telefono_casa, telefono_celular, telefono_emergencias, 
    afiliacion_igss, carne_irtra, pasaporte, licencia, religion, tipo_sangre, email, 
    nombre_padre, edad_padre, trabajo_padre, telefono_padre, nombre_madre, edad_madre, 
    trabajo_madre, telefono_madre, nombre_conyuge, edad_conyuge, trabajo_conyuge, 
    telefono_conyuge, nombre_hijo1, edad_hijo1, trabajo_hijo1, telefono_hijo1, 
    nombre_hijo2, edad_hijo2, trabajo_hijo2, telefono_hijo2, nombre_hermano1, 
    edad_hermano1, trabajo_hermano1, telefono_hermano1, nombre_hermano2, edad_hermano2, 
    trabajo_hermano2, telefono_hermano2, grado_primaria, institucion_primaria, 
    anio_primaria, grado_secundaria, institucion_secundaria, anio_secundaria, 
    grado_diversificado, institucion_diversificado, anio_diversificado, 
    grado_universitario, institucion_universitaria, anio_universitaria, 
    grado_postgrado, institucion_postgrado, anio_postgrado, estudia_actualmente, 
    carrera_actual, institucion_actual, horario_actual, windows, office, bases_datos, 
    otros_lenguajes, detalles_lenguajes, otros_cursos, detalles_cursos, habilidades, 
    ingles_hablado, ingles_escrito, otros_idiomas, idioma, idioma_hablado, idioma_escrito, estatus
FROM solicitud_empleo WHERE estatus = 'Aprobada';
");
$query->execute();
$lista_form = $query->fetchAll(PDO::FETCH_ASSOC);

// Guardar los resultados en una sesión para su uso en la interfaz
$_SESSION['listado_form_completo'] = $lista_form;

//print_r($lista_cc);


?>
