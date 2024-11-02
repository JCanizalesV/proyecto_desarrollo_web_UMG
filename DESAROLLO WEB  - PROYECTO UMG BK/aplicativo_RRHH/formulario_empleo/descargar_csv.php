<?php
session_start();
require("../conexion/bd_conexion.php");

// Verifica si la sesión del usuario está activa
if (!isset($_SESSION['usuario'])) {
    header("Location: ../rrhh_login.php");
    exit();
}

try {
    // Consulta para obtener los datos
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
FROM solicitud_empleo;");
    $query->execute();
    $lista_form = $query->fetchAll(PDO::FETCH_ASSOC);

    // Verifica si hay datos
    if (empty($lista_form)) {
        echo "No se encontraron datos.";
        exit();
    }

    // Nombre del archivo
    $filename = "solicitudes_empleo.csv";

    // Encabezados para la descarga
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Abrir el archivo en modo de escritura
    $output = fopen('php://output', 'w');

    // Escribir los encabezados de las columnas
    fputcsv($output, array_keys($lista_form[0]));

    // Escribir cada fila de datos en el archivo CSV
    foreach ($lista_form as $row) {
        fputcsv($output, $row);
    }

    // Cerrar el archivo
    fclose($output);
    exit();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
