
<?php 

session_start();

require '../header/header.php'; 
?>




<link rel="stylesheet" href="../formulario_empleo/estilos/form_estilos_vista.css">


<div style="margin-left: 250px; padding: 20px;">


    <div class="container mt-3">
        <h2 class="text-center mb-4">Gestión - Solicitudes de Empleo</h2>
        <br>

        <?php 
            session_start();
            require("../formulario_empleo/query_vista_form.php");
            $listado_form_completo = $_SESSION['listado_form_completo']; 
            ?>    

        <?php 
        if (isset($_SESSION['alert'])) {
            echo '<div class="alert alert-' . $_SESSION['alert']['type'] . ' alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 1050;">';
            echo $_SESSION['alert']['message'];
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
            unset($_SESSION['alert']); // Limpiar la alerta después de mostrar
        }
        ?>  


<div class="modal fade" id="modal_datos_cc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl"> <!-- Modal más ancho con modal-xl -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Detalle de la Solicitud</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Formulario para editar los datos en una cuadrícula de 12 columnas -->
                <form action="" method="post">
                    <div class="container-fluid">
                        <div class="row g-3">
                        <h5 class="fw-bold mt-3" style="text-align: center;">Información de la Solicitud</h5>

                            <!-- Fila 1-->
                            <div class="col-md-1">
                                <label for="id">ID</label>
                                <input type="text" name="id" id="id" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="fecha_hora">Fecha y Hora de la Solicitud    </label>
                                <input type="text" name="fecha_hora" id="fecha_hora" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="puesto">Puesto al que Aplica</label>
                                <input type="text" name="puesto" id="puesto" class="form-control" readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="medio">Cómo se enteró de la plaza</label>
                                <input type="text" name="medio" id="medio" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="otra_plaza">Otra Plaza a la que aplicaría</label>
                                <input type="text" name="otra_plaza" id="otra_plaza" class="form-control" readonly>
                            </div>

                            <!-- Fila 2-->
                            <div class="col-md-2">
                                <label for="pretension">Pretensión Salarial</label>
                                <input type="text" name="pretension" id="pretension" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="horario">Horario Laboral</label>
                                <input type="text" name="horario" id="horario" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="hora_inicio">Horario Inicio</label>
                                <input type="text" name="hora_inicio" id="hora_inicio" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="hora_fin">Horario Fin</label>
                                <input type="text" name="hora_fin" id="hora_fin" class="form-control" readonly>
                            </div>


                            <div class="col-md-2">
                                <label for="fin_de_semana">Trabajaría Fines de Semana</label>
                                <input type="text" name="fin_de_semana" id="fin_de_semana" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="turnos_rotativos">Turnos Rotativos</label>
                                <input type="text" name="turnos_rotativos" id="turnos_rotativos" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="inicio_labores">Cuándo puede iniciar labores</label>
                                <input type="text" name="inicio_labores" id="inicio_labores" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="disponibilidad_viajar">Disponibilidad para Viajar</label>
                                <input type="text" name="disponibilidad_viajar" id="disponibilidad_viajar" class="form-control" readonly>
                            </div>

                            <hr>
                            <!-- Sección datos personales-->
                            <h5 class="fw-bold mt-3" style="text-align: center;">Información Personal</h5>


                            <div class="col-md-5">
                                <label for="nombre_completo">Nombre Completo</label>
                                <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="lugar_nacimiento">Lugar de Nacimiento</label>
                                <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" readonly>
                            </div>
                            <div class="col-md-1">
                                <label for="edad">Edad</label>
                                <input type="text" name="edad" id="edad" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="direccion_actual">Dirección Actual</label>
                                <input type="text" name="direccion_actual" id="direccion_actual" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="zona">Zona</label>
                                <input type="text" name="zona" id="zona" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="estado_civil">Estado Civil</label>
                                <input type="text" name="estado_civil" id="estado_civil" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="dpi">DPI</label>
                                <input type="text" name="dpi" id="dpi" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="extendido">Extendido en</label>
                                <input type="text" name="extendido" id="extendido" class="form-control" readonly>
                            </div>


                            <div class="col-md-3">
                                <label for="nit">NIT</label>
                                <input type="text" name="nit" id="nit" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="telefono_casa">Teléfono Casa</label>
                                <input type="text" name="telefono_casa" id="telefono_casa" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="telefono_celular">Teléfono Celular</label>
                                <input type="text" name="telefono_celular" id="telefono_celular" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="telefono_emergencias">Teléfono Emergencias</label>
                                <input type="text" name="telefono_emergencias" id="telefono_emergencias" class="form-control" readonly>
                            </div>


                            <div class="col-md-2">
                                <label for="afiliacion_igss">Afiliación IGSS</label>
                                <input type="text" name="afiliacion_igss" id="afiliacion_igss" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="carne_irtra">Carné IRTRA</label>
                                <input type="text" name="carne_irtra" id="carne_irtra" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="pasaporte">Pasaporte</label>
                                <input type="text" name="pasaporte" id="pasaporte" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="licencia">Licencia</label>
                                <input type="text" name="licencia" id="licencia" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="religion">Religión</label>
                                <input type="text" name="religion" id="religion" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="tipo_sangre">Tipo de Sangre</label>
                                <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" readonly>
                            </div>

                            <hr>

                            <h5 class="fw-bold mt-3" style="text-align: center;">Información Familiar</h5>


                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th class="col-parentesco">Parentesco</th>
                                            <th class="col-nombre">Nombre</th>
                                            <th class="col-edad">Edad</th>
                                            <th class="col-telefono">Teléfono</th>
                                            <th class="col-trabajo">Trabajo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-parentesco">Padre</td>
                                            <td class="col-nombre"><span id="nombre_padre"></span></td>
                                            <td class="col-edad"><span id="edad_padre"></span></td>
                                            <td class="col-telefono"><span id="telefono_padre"></span></td>
                                            <td class="col-trabajo"><span id="trabajo_padre"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Madre</td>
                                            <td class="col-nombre"><span id="nombre_madre"></span></td>
                                            <td class="col-edad"><span id="edad_madre"></span></td>
                                            <td class="col-telefono"><span id="telefono_madre"></span></td>
                                            <td class="col-trabajo"><span id="trabajo_madre"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Cónyuge</td>
                                            <td class="col-nombre"><span id="nombre_conyuge"></span></td>
                                            <td class="col-edad"><span id="edad_conyuge"></span></td>
                                            <td class="col-telefono"><span id="telefono_conyuge"></span></td>
                                            <td class="col-trabajo"><span id="trabajo_conyuge"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Hijo 1</td>
                                            <td class="col-nombre"><span id="nombre_hijo1"></span></td>
                                            <td class="col-edad"><span id="edad_hijo1"></span></td>
                                            <td class="col-telefono"><span id="telefono_hijo1"></span></td>
                                            <td class="col-trabajo"><span id="trabajo_hijo1"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Hijo 2</td>
                                            <td class="col-nombre"><span id="nombre_hijo2"></span></td>
                                            <td class="col-edad"><span id="edad_hijo2"></span></td>
                                            <td class="col-telefono"><span id="telefono_hijo2"></span></td>
                                            <td class="col-trabajo"><span id="trabajo_hijo2"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Hermano 1</td>
                                            <td class="col-nombre"><span id="nombre_hermano1"></span></td>
                                            <td class="col-edad"><span id="edad_hermano1"></span></td>
                                            <td class="col-telefono"><span id="telefono_hermano1"></span></td>
                                            <td class="col-trabajo"><span id="trabajo_hermano1"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Hermano 2</td>
                                            <td class="col-nombre"><span id="nombre_hermano2"></span></td>
                                            <td class="col-edad"><span id="edad_hermano2"></span></td>
                                            <td class="col-telefono"><span id="telefono_hermano2"></span></td>
                                            <td class="col-trabajo"><span id="trabajo_hermano2"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                            <hr>


                            <h5 class="fw-bold mt-3" style="text-align: center;">Información Académica</h5>

                            <!-- Tabla para los datos educativos -->
                            <div class="table-responsive mt-4">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th class="col-parentesco">Nivel Educativo</th>
                                            <th class="col-nombre">Grado</th>
                                            <th class="col-edad">Institución</th>
                                            <th class="col-telefono">Año</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-parentesco">Primaria</td>
                                            <td class="col-nombre"><span id="grado_primaria"></span></td>
                                            <td class="col-edad"><span id="institucion_primaria"></span></td>
                                            <td class="col-telefono"><span id="anio_primaria"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Secundaria</td>
                                            <td class="col-nombre"><span id="grado_secundaria"></span></td>
                                            <td class="col-edad"><span id="institucion_secundaria"></span></td>
                                            <td class="col-telefono"><span id="anio_secundaria"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Diversificado</td>
                                            <td class="col-nombre"><span id="grado_diversificado"></span></td>
                                            <td class="col-edad"><span id="institucion_diversificado"></span></td>
                                            <td class="col-telefono"><span id="anio_diversificado"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Universitario</td>
                                            <td class="col-nombre"><span id="grado_universitario"></span></td>
                                            <td class="col-edad"><span id="institucion_universitaria"></span></td>
                                            <td class="col-telefono"><span id="anio_universitaria"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="col-parentesco">Postgrado</td>
                                            <td class="col-nombre"><span id="grado_postgrado"></span></td>
                                            <td class="col-edad"><span id="institucion_postgrado"></span></td>
                                            <td class="col-telefono"><span id="anio_postgrado"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5 class="fw-bold mt-3" style="text-align: center;">Información Adicional</h5>

                            <!-- Información Adicional -->
                            <div class="col-md-2">
                                <label for="estudia_actualmente">Estudia Actualmente</label>
                                <input type="text" name="estudia_actualmente" id="estudia_actualmente" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="carrera_actual">Carrera o Estudio</label>
                                <input type="text" name="carrera_actual" id="carrera_actual" class="form-control" readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="institucion_actual">Institución</label>
                                <input type="text" name="institucion_actual" id="institucion_actual" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="horario_actual">Horario</label>
                                <input type="text" name="horario_actual" id="horario_actual" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="windows">Conocimiento en Windows</label>
                                <input type="text" name="windows" id="windows" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="office">Conocimiento en Office</label>
                                <input type="text" name="office" id="office" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="bases_datos">Bases de Datos</label>
                                <input type="text" name="bases_datos" id="bases_datos" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="otros_lenguajes">Otros Lenguajes</label>
                                <input type="text" name="otros_lenguajes" id="otros_lenguajes" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="detalles_lenguajes">Detalles de Lenguajes</label>
                                <input type="text" name="detalles_lenguajes" id="detalles_lenguajes" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="otros_cursos">Otros Cursos</label>
                                <input type="text" name="otros_cursos" id="otros_cursos" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="detalles_cursos">Detalles de Cursos</label>
                                <input type="text" name="detalles_cursos" id="detalles_cursos" class="form-control" readonly>
                            </div>


                            <hr>
                            
                            <!-- Sección Adicional de Idiomas y Habilidades -->
                            <div class="col-md-12">
                                <label for="habilidades">Otras habilidades</label>
                                <input type="text" name="habilidades" id="habilidades" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="ingles_hablado">Inglés Hablado</label>
                                <input type="text" name="ingles_hablado" id="ingles_hablado" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="ingles_escrito">Inglés Escrito</label>
                                <input type="text" name="ingles_escrito" id="ingles_escrito" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="otros_idiomas">Otro idioma</label>
                                <input type="text" name="otros_idiomas" id="otros_idiomas" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="idioma">Detalle de idioma adicional</label>
                                <input type="text" name="idioma" id="idioma" class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="idioma_hablado">Idioma Hablado</label>
                                <input type="text" name="idioma_hablado" id="idioma_hablado" class="form-control" readonly>
                            </div>

                            <div class="col-md-2">
                                <label for="idioma_escrito">Idioma Escrito</label>
                                <input type="text" name="idioma_escrito" id="idioma_escrito" class="form-control" readonly>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="text-end mb-3">
    <a href="../formulario_empleo/descargar_csv.php" class="btn btn-success">Descargar CSV</a>
</div>
  

<div class="table-container">
    <div class="table-responsive">
        <table id="tabla_cc" class="table table-sm table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 15%;">Nombre Completo</th>
                    <th style="width: 10%;">DPI</th>
                    <th style="width: 10%;">NIT</th>
                    <th style="width: 15%;">Email</th>
                    <th style="width: 10%;">Celular</th>
                    <th style="width: 15%;">Estatus</th>
                    <th style="width: 10%;"><i class="fas fa-search"></i></th>
                </tr>
            </thead>
            <tbody id="tablaContenido">
                <?php foreach ($listado_form_completo as $registro_form): ?>
                    <tr>
                        <td><?= htmlspecialchars($registro_form['nombres'] . ' ' . $registro_form['apellido_p'] . ' ' . $registro_form['apellido_m']) ?></td>
                        <td><?= htmlspecialchars($registro_form['dpi']) ?></td>
                        <td><?= htmlspecialchars($registro_form['nit']) ?></td>
                        <td><?= htmlspecialchars($registro_form['email']) ?></td>
                        <td><?= htmlspecialchars($registro_form['telefono_celular']) ?></td>
                        <td><?= htmlspecialchars($registro_form['estatus']) ?></td>
                        <td>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_datos_cc"
                            onclick="
                                document.getElementById('id').value='<?= htmlspecialchars($registro_form['id']) ?>';
                                document.getElementById('fecha_hora').value='<?= htmlspecialchars($registro_form['fecha_hora']) ?>';
                                document.getElementById('puesto').value='<?= htmlspecialchars($registro_form['puesto']) ?>';
                                document.getElementById('medio').value='<?= htmlspecialchars($registro_form['medio']) ?>';
                                document.getElementById('otra_plaza').value='<?= htmlspecialchars($registro_form['otra_plaza']) ?>';
                                document.getElementById('pretension').value='<?= htmlspecialchars($registro_form['pretension']) ?>';
                                document.getElementById('horario').value='<?= htmlspecialchars($registro_form['horario']) ?>';
                                document.getElementById('hora_inicio').value='<?= htmlspecialchars($registro_form['hora_inicio']) ?>';
                                document.getElementById('hora_fin').value='<?= htmlspecialchars($registro_form['hora_fin']) ?>';
                                document.getElementById('fin_de_semana').value='<?= htmlspecialchars($registro_form['fin_de_semana']) ?>';
                                document.getElementById('turnos_rotativos').value='<?= htmlspecialchars($registro_form['turnos_rotativos']) ?>';
                                document.getElementById('inicio_labores').value='<?= htmlspecialchars($registro_form['inicio_labores']) ?>';
                                document.getElementById('disponibilidad_viajar').value='<?= htmlspecialchars($registro_form['disponibilidad_viajar']) ?>';
                                document.getElementById('nombre_completo').value = '<?= htmlspecialchars($registro_form['nombres'] . ' ' . $registro_form['apellido_p'] . ' ' . $registro_form['apellido_m']) ?>';
                                document.getElementById('lugar_nacimiento').value = '<?= htmlspecialchars($registro_form['lugar_nacimiento']) ?>';
                                document.getElementById('direccion_actual').value = '<?= htmlspecialchars($registro_form['direccion_actual']) ?>';
                                document.getElementById('zona').value = '<?= htmlspecialchars($registro_form['zona']) ?>';
                                document.getElementById('estado_civil').value = '<?= htmlspecialchars($registro_form['estado_civil']) ?>';
                                document.getElementById('dpi').value = '<?= htmlspecialchars($registro_form['dpi']) ?>';
                                document.getElementById('extendido').value = '<?= htmlspecialchars($registro_form['extendido']) ?>';
                                document.getElementById('nit').value = '<?= htmlspecialchars($registro_form['nit']) ?>';
                                document.getElementById('telefono_casa').value = '<?= htmlspecialchars($registro_form['telefono_casa']) ?>';
                                document.getElementById('telefono_celular').value = '<?= htmlspecialchars($registro_form['telefono_celular']) ?>';
                                document.getElementById('telefono_emergencias').value = '<?= htmlspecialchars($registro_form['telefono_emergencias']) ?>';
                                document.getElementById('afiliacion_igss').value = '<?= htmlspecialchars($registro_form['afiliacion_igss']) ?>';
                                document.getElementById('carne_irtra').value = '<?= htmlspecialchars($registro_form['carne_irtra']) ?>';
                                document.getElementById('pasaporte').value = '<?= htmlspecialchars($registro_form['pasaporte']) ?>';
                                document.getElementById('licencia').value = '<?= htmlspecialchars($registro_form['licencia']) ?>';
                                document.getElementById('religion').value = '<?= htmlspecialchars($registro_form['religion']) ?>';
                                document.getElementById('tipo_sangre').value = '<?= htmlspecialchars($registro_form['tipo_sangre']) ?>';
                                document.getElementById('email').value = '<?= htmlspecialchars($registro_form['email']) ?>';
                                let fechaNacimiento = '<?= htmlspecialchars($registro_form['fecha_nacimiento']) ?>';
                                        
                                // Convertir la fecha al formato adecuado (YYYY-MM-DD) si no está en ese formato
                                const partesFecha = fechaNacimiento.split(/[-\/]/);
                                if (partesFecha.length === 3) {
                                    // Asume que la fecha viene en formato DD-MM-YYYY o similar
                                    fechaNacimiento = `${partesFecha[2]}-${partesFecha[1]}-${partesFecha[0]}`;
                                }
                                
                                // Asignar la fecha de nacimiento en el campo correspondiente
                                document.getElementById('fecha_nacimiento').value = fechaNacimiento;

                                // Calcular la edad
                                const nacimiento = new Date(fechaNacimiento);
                                const hoy = new Date();
                                let edad = hoy.getFullYear() - nacimiento.getFullYear();
                                const mes = hoy.getMonth() - nacimiento.getMonth();
                                if (mes < 0 || (mes === 0 && hoy.getDate() < nacimiento.getDate())) {
                                    edad--;
                                        }
                                        
                                // Asignar la edad calculada al campo correspondiente
                                document.getElementById('edad').value = edad;

                                document.getElementById('nombre_padre').textContent = '<?= htmlspecialchars($registro_form['nombre_padre']) ?>';
                                document.getElementById('edad_padre').textContent = '<?= htmlspecialchars($registro_form['edad_padre']) ?>';
                                document.getElementById('telefono_padre').textContent = '<?= htmlspecialchars($registro_form['telefono_padre']) ?>';
                                document.getElementById('trabajo_padre').textContent = '<?= htmlspecialchars($registro_form['trabajo_padre']) ?>';

                                document.getElementById('nombre_madre').textContent = '<?= htmlspecialchars($registro_form['nombre_madre']) ?>';
                                document.getElementById('edad_madre').textContent = '<?= htmlspecialchars($registro_form['edad_madre']) ?>';
                                document.getElementById('telefono_madre').textContent = '<?= htmlspecialchars($registro_form['telefono_madre']) ?>';
                                document.getElementById('trabajo_madre').textContent = '<?= htmlspecialchars($registro_form['trabajo_madre']) ?>';

                                document.getElementById('nombre_conyuge').textContent = '<?= htmlspecialchars($registro_form['nombre_conyuge']) ?>';
                                document.getElementById('edad_conyuge').textContent = '<?= htmlspecialchars($registro_form['edad_conyuge']) ?>';
                                document.getElementById('telefono_conyuge').textContent = '<?= htmlspecialchars($registro_form['telefono_conyuge']) ?>';
                                document.getElementById('trabajo_conyuge').textContent = '<?= htmlspecialchars($registro_form['trabajo_conyuge']) ?>';

                                document.getElementById('nombre_hijo1').textContent = '<?= htmlspecialchars($registro_form['nombre_hijo1']) ?>';
                                document.getElementById('edad_hijo1').textContent = '<?= htmlspecialchars($registro_form['edad_hijo1']) ?>';
                                document.getElementById('telefono_hijo1').textContent = '<?= htmlspecialchars($registro_form['telefono_hijo1']) ?>';
                                document.getElementById('trabajo_hijo1').textContent = '<?= htmlspecialchars($registro_form['trabajo_hijo1']) ?>';

                                document.getElementById('nombre_hijo2').textContent = '<?= htmlspecialchars($registro_form['nombre_hijo2']) ?>';
                                document.getElementById('edad_hijo2').textContent = '<?= htmlspecialchars($registro_form['edad_hijo2']) ?>';
                                document.getElementById('telefono_hijo2').textContent = '<?= htmlspecialchars($registro_form['telefono_hijo2']) ?>';
                                document.getElementById('trabajo_hijo2').textContent = '<?= htmlspecialchars($registro_form['trabajo_hijo2']) ?>';

                                document.getElementById('nombre_hermano1').textContent = '<?= htmlspecialchars($registro_form['nombre_hermano1']) ?>';
                                document.getElementById('edad_hermano1').textContent = '<?= htmlspecialchars($registro_form['edad_hermano1']) ?>';
                                document.getElementById('telefono_hermano1').textContent = '<?= htmlspecialchars($registro_form['telefono_hermano1']) ?>';
                                document.getElementById('trabajo_hermano1').textContent = '<?= htmlspecialchars($registro_form['trabajo_hermano1']) ?>';

                                document.getElementById('nombre_hermano2').textContent = '<?= htmlspecialchars($registro_form['nombre_hermano2']) ?>';
                                document.getElementById('edad_hermano2').textContent = '<?= htmlspecialchars($registro_form['edad_hermano2']) ?>';
                                document.getElementById('telefono_hermano2').textContent = '<?= htmlspecialchars($registro_form['telefono_hermano2']) ?>';
                                document.getElementById('trabajo_hermano2').textContent = '<?= htmlspecialchars($registro_form['trabajo_hermano2']) ?>';
                                document.getElementById('grado_primaria').textContent = '<?= htmlspecialchars($registro_form['grado_primaria']) ?>';
                                document.getElementById('institucion_primaria').textContent = '<?= htmlspecialchars($registro_form['institucion_primaria']) ?>';
                                document.getElementById('anio_primaria').textContent = '<?= htmlspecialchars($registro_form['anio_primaria']) ?>';

                                document.getElementById('grado_secundaria').textContent = '<?= htmlspecialchars($registro_form['grado_secundaria']) ?>';
                                document.getElementById('institucion_secundaria').textContent = '<?= htmlspecialchars($registro_form['institucion_secundaria']) ?>';
                                document.getElementById('anio_secundaria').textContent = '<?= htmlspecialchars($registro_form['anio_secundaria']) ?>';

                                document.getElementById('grado_diversificado').textContent = '<?= htmlspecialchars($registro_form['grado_diversificado']) ?>';
                                document.getElementById('institucion_diversificado').textContent = '<?= htmlspecialchars($registro_form['institucion_diversificado']) ?>';
                                document.getElementById('anio_diversificado').textContent = '<?= htmlspecialchars($registro_form['anio_diversificado']) ?>';

                                document.getElementById('grado_universitario').textContent = '<?= htmlspecialchars($registro_form['grado_universitario']) ?>';
                                document.getElementById('institucion_universitaria').textContent = '<?= htmlspecialchars($registro_form['institucion_universitaria']) ?>';
                                document.getElementById('anio_universitaria').textContent = '<?= htmlspecialchars($registro_form['anio_universitaria']) ?>';

                                document.getElementById('grado_postgrado').textContent = '<?= htmlspecialchars($registro_form['grado_postgrado']) ?>';
                                document.getElementById('institucion_postgrado').textContent = '<?= htmlspecialchars($registro_form['institucion_postgrado']) ?>';
                                document.getElementById('anio_postgrado').textContent = '<?= htmlspecialchars($registro_form['anio_postgrado']) ?>';
                                document.getElementById('estudia_actualmente').value = '<?= htmlspecialchars($registro_form['estudia_actualmente']) ?>';
                                document.getElementById('carrera_actual').value = '<?= htmlspecialchars($registro_form['carrera_actual']) ?>';
                                document.getElementById('institucion_actual').value = '<?= htmlspecialchars($registro_form['institucion_actual']) ?>';
                                document.getElementById('horario_actual').value = '<?= htmlspecialchars($registro_form['horario_actual']) ?>';

                                document.getElementById('windows').value = '<?= htmlspecialchars($registro_form['windows']) ?>';
                                document.getElementById('office').value = '<?= htmlspecialchars($registro_form['office']) ?>';
                                document.getElementById('bases_datos').value = '<?= htmlspecialchars($registro_form['bases_datos']) ?>';

                                document.getElementById('otros_lenguajes').value = '<?= htmlspecialchars($registro_form['otros_lenguajes']) ?>';
                                document.getElementById('detalles_lenguajes').value = '<?= htmlspecialchars($registro_form['detalles_lenguajes']) ?>';

                                document.getElementById('otros_cursos').value = '<?= htmlspecialchars($registro_form['otros_cursos']) ?>';
                                document.getElementById('detalles_cursos').value = '<?= htmlspecialchars($registro_form['detalles_cursos']) ?>';
                                
                                document.getElementById('habilidades').value = '<?= htmlspecialchars($registro_form['habilidades']) ?>';
                                document.getElementById('ingles_hablado').value = '<?= htmlspecialchars($registro_form['ingles_hablado']) ?>';
                                document.getElementById('ingles_escrito').value = '<?= htmlspecialchars($registro_form['ingles_escrito']) ?>';
                                document.getElementById('otros_idiomas').value = '<?= htmlspecialchars($registro_form['otros_idiomas']) ?>';

                                document.getElementById('idioma').value = '<?= htmlspecialchars($registro_form['idioma']) ?>';
                                document.getElementById('idioma_hablado').value = '<?= htmlspecialchars($registro_form['idioma_hablado']) ?>';
                                document.getElementById('idioma_escrito').value = '<?= htmlspecialchars($registro_form['idioma_escrito']) ?>';
                                                        
                                                        ">
                            <i class="fas fa-chart-bar"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_accion_solicitud"
                            onclick="document.getElementById('registro_id').value = '<?= htmlspecialchars($registro_form['id']) ?>';">
                            <i class="fas fa-sync-alt"></i>
                        </button>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="modal fade" id="modal_accion_solicitud" tabindex="-1" aria-labelledby="modalAccionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAccionLabel">Acciones en Solicitud</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formAccionSolicitud" action="query_vista_form.php" method="POST">
                    <input type="hidden" name="registro_id" id="registro_id" value="">
                    <input type="hidden" name="accion_boton" id="accion_boton" value="">
                    <p>Seleccione una acción para la solicitud.</p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="setAccion('rechazarSolicitud');">Rechazar</button>
                <button type="button" class="btn btn-primary" onclick="setAccion('iniciar_proceso_contratacion');">Aprobar Solicitud</button>
            </div>
        </div>
    </div>
</div>




    <script>
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                // Ocultar la alerta usando Bootstrap
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 5000); // Ocultar después de 5 segundos
    </script>


<script>
$(document).ready(function() {
    $('#tabla_cc').DataTable({
        // Opciones personalizadas si las necesitas
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se encontraron registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
});


function rechazarSolicitud() {
        const id = document.getElementById('registro_id').value;
        // Aquí puedes agregar la lógica para rechazar la solicitud, como hacer una llamada a una API o redirigir a otra página
        console.log("Solicitud rechazada con ID:", id);
        // Ejemplo: redirigir a un script PHP para manejar la acción
        // window.location.href = "rechazar.php?id=" + id;
    }

    function iniciarProcesoContratacion() {
        const id = document.getElementById('registro_id').value;
        // Aquí puedes agregar la lógica para iniciar el proceso de contratación
        console.log("Iniciando proceso de contratación para ID:", id);
        // Ejemplo: redirigir a otro script PHP
        // window.location.href = "iniciar_contratacion.php?id=" + id;
    }

    function setAccion(accion) {
        document.getElementById('accion_boton').value = accion; // Asigna la acción al campo oculto
        document.getElementById('formAccionSolicitud').submit(); // Envía el formulario
    }

</script>



</html>

