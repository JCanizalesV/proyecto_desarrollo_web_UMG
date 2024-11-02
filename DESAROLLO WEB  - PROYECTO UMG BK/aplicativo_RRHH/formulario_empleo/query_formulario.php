<?php

require("../conexion/bd_conexion.php");

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Primera división, campos informativos
    $puesto = $_POST['puesto'];
    $medio = $_POST['medio'];
    $otra_plaza = $_POST['otra_plaza'];
    $pretension = $_POST['pretension'];
    $horario = $_POST['horario'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fin = $_POST['hora_fin'];
    $fin_de_semana = $_POST['fin_de_semana'];
    $turnos_rotativos = $_POST['turnos_rotativos'];
    $inicio_labores = $_POST['inicio_labores'];
    $disponibilidad_viajar = $_POST['disponibilidad_viajar'];


    // Sección de datos personales
    $nombres = $_POST['nombres'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $lugar_nacimiento = $_POST['lugar_nacimiento'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion_actual = $_POST['direccion_actual'];
    $zona = $_POST['zona'];
    $estado_civil = $_POST['estado_civil'];
    $dpi = $_POST['dpi'];
    $extendido = $_POST['extendido'];
    $nit = $_POST['nit'];
    $telefono_casa = $_POST['telefono_casa'];
    $telefono_celular = $_POST['telefono_celular'];
    $telefono_emergencias = $_POST['telefono_emergencias'];
    $afiliacion_igss = $_POST['afiliacion_igss'];
    $carne_irtra = $_POST['carne_irtra'];
    $pasaporte = $_POST['pasaporte'];
    $licencia = $_POST['licencia'];
    $religion = $_POST['religion'];
    $tipo_sangre = $_POST['tipo_sangre'];
    $email = $_POST['email'];

    // Datos FAmiliares

    $nombre_padre = $_POST['nombre_padre'] ?? '';
    $edad_padre = $_POST['edad_padre'] ?? '';
    $trabajo_padre = $_POST['trabajo_padre'] ?? '';
    $telefono_padre = $_POST['telefono_padre'] ?? '';
    $nombre_madre = $_POST['nombre_madre'] ?? '';
    $edad_madre = $_POST['edad_madre'] ?? '';
    $trabajo_madre = $_POST['trabajo_madre'] ?? '';
    $telefono_madre = $_POST['telefono_madre'] ?? '';
    $nombre_conyuge = $_POST['nombre_conyuge'] ?? '';
    $edad_conyuge = $_POST['edad_conyuge'] ?? '';
    $trabajo_conyuge = $_POST['trabajo_conyuge'] ?? '';
    $telefono_conyuge = $_POST['telefono_conyuge'] ?? '';
    $nombre_hijo_0 = $_POST['nombre_hijo_0'];
    $edad_hijo_0 = $_POST['edad_hijo_0'];
    $trabajo_hijo_0 = $_POST['trabajo_hijo_0'];
    $telefono_hijo_0 = $_POST['telefono_hijo_0'];
    $nombre_hijo_1 = $_POST['nombre_hijo_1'];
    $edad_hijo_1 = $_POST['edad_hijo_1'];
    $trabajo_hijo_1 = $_POST['trabajo_hijo_1'];
    $telefono_hijo_1 = $_POST['telefono_hijo_1'];
    $nombre_hermano_0 = $_POST['nombre_hermano_0'];
    $edad_hermano_0 = $_POST['edad_hermano_0'];
    $trabajo_hermano_0 = $_POST['trabajo_hermano_0'];
    $telefono_hermano_0 = $_POST['telefono_hermano_0'];
    $nombre_hermano_1 = $_POST['nombre_hermano_1'];
    $edad_hermano_1 = $_POST['edad_hermano_1'];
    $trabajo_hermano_1 = $_POST['trabajo_hermano_1'];
    $telefono_hermano_1 = $_POST['telefono_hermano_1'];

    // Sección datos escolares

    // Recibir datos del formulario de educación
    $grado_primaria = $_POST['grado_primaria'] ?? '';
    $institucion_primaria = $_POST['institucion_primaria'] ?? '';
    $anio_primaria = $_POST['anio_primaria'] ?? '';

    $grado_secundaria = $_POST['grado_secundaria'] ?? '';
    $institucion_secundaria = $_POST['institucion_secundaria'] ?? '';
    $anio_secundaria = $_POST['anio_secundaria'] ?? '';

    $grado_diversificado = $_POST['grado_diversificado'] ?? '';
    $institucion_diversificado = $_POST['institucion_diversificado'] ?? '';
    $anio_diversificado = $_POST['anio_diversificado'] ?? '';

    $grado_universitario = $_POST['grado_universitario'] ?? '';
    $institucion_universitaria = $_POST['institucion_universitaria'] ?? '';
    $anio_universitaria = $_POST['anio_universitaria'] ?? '';

    $grado_postgrado = $_POST['grado_postgrado'] ?? '';
    $institucion_postgrado = $_POST['institucion_postgrado'] ?? '';
    $anio_postgrado = $_POST['anio_postgrado'] ?? '';

    $estudia_actualmente = $_POST['estudia_actualmente'] ?? '';
    $carrera_actual = $_POST['carrera_actual'] ?? '';
    $institucion_actual = $_POST['institucion_actual'] ?? '';
    $horario_actual = $_POST['horario_actual'] ?? '';

    $windows = $_POST['windows'] ?? '';
    $office = $_POST['office'] ?? '';
    $bases_datos = $_POST['bases_datos'] ?? '';
    $otros_lenguajes = $_POST['otros_lenguajes'] ?? '';
    $detalles_lenguajes = $_POST['detalles_lenguajes'] ?? '';
    $otros_cursos = $_POST['otros_cursos'] ?? '';
    $detalles_cursos = $_POST['detalles_cursos'] ?? '';


    $otras_habilidades = $_POST['habilidades'] ?? '';

    // Variables de Idiomas
    $ingles_hablado = $_POST['ingles_hablado'] ?? 0; // Valor por defecto 0 si no se establece
    $ingles_escrito = $_POST['ingles_escrito'] ?? 0; // Valor por defecto 0 si no se establece

    // Otros Idiomas
    $otros_idiomas = $_POST['otros_idiomas'] ?? '';
    $idioma = $_POST['idioma'] ?? '';
    $idioma_hablado = $_POST['idioma_hablado'] ?? 0; // Valor por defecto 0 si no se establece
    $idioma_escrito = $_POST['idioma_escrito'] ?? 0; // Valor por defecto 0 si no se establece
    $estatus = "Pendiente";




try {
    // Preparar la consulta de inserción
    $sql = "INSERT INTO solicitud_empleo (
        puesto, medio, otra_plaza, pretension, horario, hora_inicio, hora_fin, fin_de_semana, turnos_rotativos, inicio_labores, disponibilidad_viajar,
        nombres, apellido_p, apellido_m, lugar_nacimiento, fecha_nacimiento, direccion_actual, zona, estado_civil, dpi, extendido, nit, telefono_casa, telefono_celular, telefono_emergencias, afiliacion_igss, carne_irtra, pasaporte, licencia, religion, tipo_sangre, email,
        nombre_padre, edad_padre, trabajo_padre, telefono_padre,
        nombre_madre, edad_madre, trabajo_madre, telefono_madre,
        nombre_conyuge, edad_conyuge, trabajo_conyuge, telefono_conyuge,
        nombre_hijo1, edad_hijo1, trabajo_hijo1, telefono_hijo1,
        nombre_hijo2, edad_hijo2, trabajo_hijo2, telefono_hijo2,
        nombre_hermano1, edad_hermano1, trabajo_hermano1, telefono_hermano1,
        nombre_hermano2, edad_hermano2, trabajo_hermano2, telefono_hermano2,grado_primaria, institucion_primaria, anio_primaria,
    grado_secundaria, institucion_secundaria, anio_secundaria,
    grado_diversificado, institucion_diversificado, anio_diversificado,
    grado_universitario, institucion_universitaria, anio_universitaria,
    grado_postgrado, institucion_postgrado, anio_postgrado,
    estudia_actualmente, carrera_actual, institucion_actual, horario_actual,
    windows, office, bases_datos, otros_lenguajes, detalles_lenguajes,
    otros_cursos, detalles_cursos, habilidades, ingles_hablado, ingles_escrito, otros_idiomas, idioma, idioma_hablado, idioma_escrito, estatus
    ) VALUES (
        :puesto, :medio, :otra_plaza, :pretension, :horario, :hora_inicio, :hora_fin, :fin_de_semana, :turnos_rotativos, :inicio_labores, :disponibilidad_viajar,
        :nombres, :apellido_p, :apellido_m, :lugar_nacimiento, :fecha_nacimiento, :direccion_actual, :zona, :estado_civil, :dpi, :extendido, :nit, :telefono_casa, :telefono_celular, :telefono_emergencias, :afiliacion_igss, :carne_irtra, :pasaporte, :licencia, :religion, :tipo_sangre, :email,
        :nombre_padre, :edad_padre, :trabajo_padre, :telefono_padre,
        :nombre_madre, :edad_madre, :trabajo_madre, :telefono_madre,
        :nombre_conyuge, :edad_conyuge, :trabajo_conyuge, :telefono_conyuge,
        :nombre_hijo1, :edad_hijo1, :trabajo_hijo1, :telefono_hijo1,
        :nombre_hijo2, :edad_hijo2, :trabajo_hijo2, :telefono_hijo2,
        :nombre_hermano1, :edad_hermano1, :trabajo_hermano1, :telefono_hermano1,
        :nombre_hermano2, :edad_hermano2, :trabajo_hermano2, :telefono_hermano2,:grado_primaria, :institucion_primaria, :anio_primaria,
    :grado_secundaria, :institucion_secundaria, :anio_secundaria,
    :grado_diversificado, :institucion_diversificado, :anio_diversificado,
    :grado_universitario, :institucion_universitaria, :anio_universitaria,
    :grado_postgrado, :institucion_postgrado, :anio_postgrado,
    :estudia_actualmente, :carrera_actual, :institucion_actual, :horario_actual,
    :windows, :office, :bases_datos, :otros_lenguajes, :detalles_lenguajes,
    :otros_cursos, :detalles_cursos,:otras_habilidades, :ingles_hablado, :ingles_escrito, :otros_idiomas, :idioma, :idioma_hablado, :idioma_escrito,:estatus)";
    // Preparar la declaración
    $stmt = $conexionbd->prepare($sql); 

    // Vincular los parámetros
    $stmt->bindParam(':puesto', $puesto);
    $stmt->bindParam(':medio', $medio);
    $stmt->bindParam(':otra_plaza', $otra_plaza);
    $stmt->bindParam(':pretension', $pretension);
    $stmt->bindParam(':horario', $horario);
    $stmt->bindParam(':hora_inicio', $hora_inicio);
    $stmt->bindParam(':hora_fin', $hora_fin);
    $stmt->bindParam(':fin_de_semana', $fin_de_semana);
    $stmt->bindParam(':turnos_rotativos', $turnos_rotativos);
    $stmt->bindParam(':inicio_labores', $inicio_labores);
    $stmt->bindParam(':disponibilidad_viajar', $disponibilidad_viajar);

    // Vincular parametros personales

    $stmt->bindParam(':nombres', $nombres);
    $stmt->bindParam(':apellido_p', $apellido_p);
    $stmt->bindParam(':apellido_m', $apellido_m);
    $stmt->bindParam(':lugar_nacimiento', $lugar_nacimiento);
    $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
    $stmt->bindParam(':direccion_actual', $direccion_actual);
    $stmt->bindParam(':zona', $zona);
    $stmt->bindParam(':estado_civil', $estado_civil);
    $stmt->bindParam(':dpi', $dpi);
    $stmt->bindParam(':extendido', $extendido);
    $stmt->bindParam(':nit', $nit);
    $stmt->bindParam(':telefono_casa', $telefono_casa);
    $stmt->bindParam(':telefono_celular', $telefono_celular);
    $stmt->bindParam(':telefono_emergencias', $telefono_emergencias);
    $stmt->bindParam(':afiliacion_igss', $afiliacion_igss);
    $stmt->bindParam(':carne_irtra', $carne_irtra);
    $stmt->bindParam(':pasaporte', $pasaporte);
    $stmt->bindParam(':licencia', $licencia);
    $stmt->bindParam(':religion', $religion);
    $stmt->bindParam(':tipo_sangre', $tipo_sangre);
    $stmt->bindParam(':email', $email);


    // Datos Familiares
    $stmt->bindParam(':nombre_padre', $nombre_padre);
    $stmt->bindParam(':edad_padre', $edad_padre);
    $stmt->bindParam(':trabajo_padre', $trabajo_padre);
    $stmt->bindParam(':telefono_padre', $telefono_padre);

    $stmt->bindParam(':nombre_madre', $nombre_madre);
    $stmt->bindParam(':edad_madre', $edad_madre);
    $stmt->bindParam(':trabajo_madre', $trabajo_madre);
    $stmt->bindParam(':telefono_madre', $telefono_madre);

    $stmt->bindParam(':nombre_conyuge', $nombre_conyuge);
    $stmt->bindParam(':edad_conyuge', $edad_conyuge);
    $stmt->bindParam(':trabajo_conyuge', $trabajo_conyuge);
    $stmt->bindParam(':telefono_conyuge', $telefono_conyuge);

    // Hijos
    $stmt->bindParam(':nombre_hijo1', $nombre_hijo_0);
    $stmt->bindParam(':edad_hijo1', $edad_hijo_0);
    $stmt->bindParam(':trabajo_hijo1', $trabajo_hijo_0);
    $stmt->bindParam(':telefono_hijo1', $telefono_hijo_0);

    $stmt->bindParam(':nombre_hijo2', $nombre_hijo_1);
    $stmt->bindParam(':edad_hijo2', $edad_hijo_1);
    $stmt->bindParam(':trabajo_hijo2', $trabajo_hijo_1);
    $stmt->bindParam(':telefono_hijo2', $telefono_hijo_1);

    // Hermanos
    $stmt->bindParam(':nombre_hermano1', $nombre_hermano_0);
    $stmt->bindParam(':edad_hermano1', $edad_hermano_0);
    $stmt->bindParam(':trabajo_hermano1', $trabajo_hermano_0);
    $stmt->bindParam(':telefono_hermano1', $telefono_hermano_0);

    $stmt->bindParam(':nombre_hermano2', $nombre_hermano_1);
    $stmt->bindParam(':edad_hermano2', $edad_hermano_1);
    $stmt->bindParam(':trabajo_hermano2', $trabajo_hermano_1);
    $stmt->bindParam(':telefono_hermano2', $telefono_hermano_1);

    $stmt->bindParam(':grado_primaria', $grado_primaria);
    $stmt->bindParam(':institucion_primaria', $institucion_primaria);
    $stmt->bindParam(':anio_primaria', $anio_primaria);

    $stmt->bindParam(':grado_secundaria', $grado_secundaria);
    $stmt->bindParam(':institucion_secundaria', $institucion_secundaria);
    $stmt->bindParam(':anio_secundaria', $anio_secundaria);

    $stmt->bindParam(':grado_diversificado', $grado_diversificado);
    $stmt->bindParam(':institucion_diversificado', $institucion_diversificado);
    $stmt->bindParam(':anio_diversificado', $anio_diversificado);

    $stmt->bindParam(':grado_universitario', $grado_universitario);
    $stmt->bindParam(':institucion_universitaria', $institucion_universitaria);
    $stmt->bindParam(':anio_universitaria', $anio_universitaria);

    $stmt->bindParam(':grado_postgrado', $grado_postgrado);
    $stmt->bindParam(':institucion_postgrado', $institucion_postgrado);
    $stmt->bindParam(':anio_postgrado', $anio_postgrado);

    $stmt->bindParam(':estudia_actualmente', $estudia_actualmente);
    $stmt->bindParam(':carrera_actual', $carrera_actual);
    $stmt->bindParam(':institucion_actual', $institucion_actual);
    $stmt->bindParam(':horario_actual', $horario_actual);

    $stmt->bindParam(':windows', $windows);
    $stmt->bindParam(':office', $office);
    $stmt->bindParam(':bases_datos', $bases_datos);
    $stmt->bindParam(':otros_lenguajes', $otros_lenguajes);
    $stmt->bindParam(':detalles_lenguajes', $detalles_lenguajes);
    $stmt->bindParam(':otros_cursos', $otros_cursos);
    $stmt->bindParam(':detalles_cursos', $detalles_cursos);

    $stmt->bindParam(':otras_habilidades', $otras_habilidades);
    $stmt->bindParam(':ingles_hablado', $ingles_hablado);
    $stmt->bindParam(':ingles_escrito', $ingles_escrito);
    $stmt->bindParam(':otros_idiomas', $otros_idiomas);
    $stmt->bindParam(':idioma', $idioma);
    $stmt->bindParam(':idioma_hablado', $idioma_hablado);
    $stmt->bindParam(':idioma_escrito', $idioma_escrito);
    $stmt->bindParam(':estatus', $estatus);

    // Ejecutar la consulta
    $stmt->execute();

// Suponiendo que estás en un script PHP donde se ha procesado un formulario
echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Resultado del Formulario</title>
    <style>
        .message-container {
            margin: 50px;
            padding: 20px;
            border-radius: 8px;
            background-color: #f8f9fa; /* Color de fondo claro */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message-container text-center">
            <h2 class="text-success">Formulario enviado con éxito!</h2>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
';



} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



} else {

    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Resultado del Formulario</title>
        <style>
            .message-container {
                margin: 50px;
                padding: 20px;
                border-radius: 8px;
                background-color: #f8f9fa; /* Color de fondo claro */
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="message-container text-center">
                <h2 class="text-danger">Formulario no enviado, vuelva a intentar!</h2>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    ';

}


?>
