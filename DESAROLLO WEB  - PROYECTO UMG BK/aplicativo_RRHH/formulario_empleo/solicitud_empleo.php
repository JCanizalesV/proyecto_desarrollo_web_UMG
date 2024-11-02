<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formulario_empleo/estilos/estilos_form.css">
    <title>Solicitud de Empleo</title>
</head>
<body>

<div>
    <h1>SOLICITUD DE EMPLEO - GRUPO CYMSA</h1>

    <form action="query_formulario.php" method="post">

        <!-- Sección de DATOS PRINCIPALES -->
        <div class="seccion" id="datos-principales">
            <h2 class="titulo-seccion">DATOS PRINCIPALES</h2>

            <!-- Contenedor de cuadrícula para organizar los elementos en filas y columnas -->
            <div class="grid-container">
            
                <!-- Fila 1 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="puesto" class="label">Puesto al que Aplica:</label>
                    <input type="text" id="puesto" name="puesto" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 4;">
                    <label for="medio" class="label">¿Cómo se enteró de la Plaza?</label>
                    <input type="text" id="medio" name="medio" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="otra_plaza" class="label">Otra Plaza a la que Aplicaría:</label>
                    <input type="text" id="otra_plaza" name="otra_plaza" class="input-campo">
                </div>

                <!-- Fila 2 (cinco elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="pretension" class="label">Pretensión salarial (número):</label>
                    <input type="number" id="pretension" name="pretension" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="horario" class="label">Horario Laboral:</label>
                    <select id="horario" name="horario" required class="input-campo">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="lunes-viernes">Lunes a Viernes</option>
                    </select>
                </div>
                <div class="grid-item" style="grid-column: span 1;">
                    <label for="hora_inicio" class="label">De:</label>
                    <input type="time" id="hora_inicio" name="hora_inicio" class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 1;">
                    <label for="hora_fin" class="label">A:</label>
                    <input type="time" id="hora_fin" name="hora_fin" class="input-campo">
                </div>

                <div class="grid-item" style="grid-column: span 2;">
                    <label for="turnos_rotativos" class="label">¿Aceptaría turnos rotativos?</label>
                    <select id="turnos_rotativos" name="turnos_rotativos" required class="input-campo">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>


                <!-- Fila 3 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 3;">
                    <label for="fin_de_semana" class="label">¿Disponibilidad para trabajar fines de semana?</label>
                    <select id="fin_de_semana" name="fin_de_semana" required class="input-campo">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="grid-item" style="grid-column: span 2;">
                    <label for="disponibilidad_viajar" class="label">¿Disponibilidad para viajar?</label>
                    <select id="disponibilidad_viajar" name="disponibilidad_viajar" required class="input-campo">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="grid-item" style="grid-column: span 3;">
                    <label for="inicio_labores" class="label">¿Cuándo puede iniciar labores?</label>
                    <input type="text" id="inicio_labores" name="inicio_labores" required class="input-campo">
                </div>
            </div>

            <button type="button" onclick="mostrarSeccion('datos-personales')" class="btn-siguiente">Siguiente</button>
        </div>



        <!-- Sección de DATOS PERSONALES -->     
        <div class="seccion" id="datos-personales" style="display:none;">
            <h3 class="titulo-seccion">DATOS PERSONALES</h3>
            
            <!-- Contenedor de cuadrícula para organizar los elementos en filas y columnas -->
            <div class="grid-container">
        
                <!-- Fila 1 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="nombres" class="label">Nombres:</label>
                    <input type="text" id="nombres" name="nombres" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="apellido_p" class="label">Apellido Paterno:</label>
                    <input type="text" id="apellido_p" name="apellido_p" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="apellido_m" class="label">Apellido Materno:</label>
                    <input type="text" id="apellido_m" name="apellido_m" required class="input-campo">
                </div>

                <!-- Fila 2 (dos elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="lugar_nacimiento" class="label">Lugar de Nacimiento:</label>
                    <input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="fecha_nacimiento" class="label">Fecha de Nacimiento:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required class="input-campo">
                </div>

                <!-- Fila 3 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 3;">
                    <label for="direccion_actual" class="label">Dirección Actual:</label>
                    <input type="text" id="direccion_actual" name="direccion_actual" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 1;">
                    <label for="zona" class="label">Zona:</label>
                    <input type="text" id="zona" name="zona" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="estado_civil" class="label">Estado Civil:</label>
                    <select id="estado_civil" name="estado_civil" required class="input-campo">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Unido(a)">Unido(a)</option>
                        <option value="Separado(a)">Separado(a)</option>
                    </select>
                </div>

                <!-- Fila 4 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="dpi" class="label">No. de DPI:</label>
                    <input type="text" id="dpi" name="dpi" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="extendido" class="label">Extendido en:</label>
                    <input type="text" id="extendido" name="extendido" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="nit" class="label">NIT:</label>
                    <input type="text" id="nit" name="nit" required class="input-campo">
                </div>

                <!-- Fila 5 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="telefono_casa" class="label">Teléfono Casa:</label>
                    <input type="tel" id="telefono_casa" name="telefono_casa" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="telefono_celular" class="label">Teléfono Celular:</label>
                    <input type="tel" id="telefono_celular" name="telefono_celular" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="telefono_emergencias" class="label">Teléfono Emergencias:</label>
                    <input type="tel" id="telefono_emergencias" name="telefono_emergencias" required class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="afiliacion_igss" class="label">Afiliación IGSS:</label>
                    <input type="text" id="afiliacion_igss" name="afiliacion_igss" required class="input-campo">
                </div>


                <!-- Fila 6 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="carne_irtra" class="label">No. Carné IRTRA:</label>
                    <input type="text" id="carne_irtra" name="carne_irtra" class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="pasaporte" class="label">No. De Pasaporte:</label>
                    <input type="text" id="pasaporte" name="pasaporte" class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="licencia" class="label">No. De Licencia:</label>
                    <input type="text" id="licencia" name="licencia" class="input-campo">
                </div>

                <!-- Fila 7 (tres elementos en 8 columnas) -->
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="religion" class="label">Religión:</label>
                    <input type="text" id="religion" name="religion" class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 2;">
                    <label for="tipo_sangre" class="label">Tipo de Sangre:</label>
                    <input type="text" id="tipo_sangre" name="tipo_sangre" class="input-campo">
                </div>
                <div class="grid-item" style="grid-column: span 3;">
                    <label for="email" class="label">E-mail:</label>
                    <input type="email" id="email" name="email" required class="input-campo">
                </div>

            </div>

            <!-- Contenedor de botones -->
            <div class="botones-container">
                <button type="button" onclick="mostrarSeccion('datos-principales')" class="btn-siguiente">Anterior</button>
                <button type="button" onclick="mostrarSeccion('datos-familiares')" class="btn-siguiente">Siguiente</button>
            </div>

        </div>

                    
        <!-- Sección de DATOS FAMILIARES -->
        <div class="seccion" id="datos-familiares" style="display:none;">
            <div id="familiares">
                <h2 class="titulo-seccion">DATOS FAMILIARES</h2>
                
                <h3 class="titulo-seccion">Selecciona a tus familiares:</h3>
                
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 4;">
                        <label for="familiar" class="label">Selecciona un Familiar:</label>
                        <select id="familiar" name="familiar" class="input-campo" onchange="agregarFamiliar()">
                            <option value="" disabled selected>Seleccione un familiar</option>
                            <option value="padre">Padre</option>
                            <option value="madre">Madre</option>
                            <option value="conyuge">Cónyuge</option>
                            <option value="hijo">Hijo (a)</option>
                            <option value="hermano">Hermano (a)</option>
                        </select>
                    </div>

                    <div id="hijos_section" class="grid-item" style="grid-column: span 4; display: none;">
                        <label for="num_hijos" class="label">Cantidad de Hijos (máximo 4):</label>
                        <input type="number" id="num_hijos" name="num_hijos" min="0" max="4" class="input-campo" onchange="mostrarCamposHijos(this.value)">
                    </div>

                    <div id="hermanos_section" class="grid-item" style="grid-column: span 4; display: none;">
                        <label for="num_hermanos" class="label">Cantidad de Hermanos (máximo 4):</label>
                        <input type="number" id="num_hermanos" name="num_hermanos" min="0" max="4" class="input-campo" onchange="mostrarCamposHermanos(this.value)">
                    </div>
                </div>

                <!-- Contenedor dinámico donde se agregarán los familiares -->
                <div id="familiares-agregados"></div>
            </div>

            <!-- Contenedor de botones de navegación al final de la sección -->
            <div class="botones-container">
                <button type="button" onclick="mostrarSeccion('datos-personales')" class="btn-siguiente">Anterior</button>
                <button type="button" onclick="mostrarSeccion('datos-escolares')" class="btn-siguiente">Siguiente</button>
            </div>
        </div>


        <!-- Sección de DATOS ESCOLARES -->
        <div class="seccion" id="datos-escolares" style="display:none;">
            <div id="escolares">
                <h2 class="titulo-seccion">DATOS ACADÉMICOS</h2>

                <h4 class="titulo-seccion2">Primaria</h4>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="grado_primaria" class="label">Grado Alcanzado / Título Obtenido:</label>
                        <input type="text" id="grado_primaria" name="grado_primaria" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 4;">
                        <label for="institucion_primaria" class="label">Institución:</label>
                        <input type="text" id="institucion_primaria" name="institucion_primaria" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="anio_primaria" class="label">Año:</label>
                        <input type="number" id="anio_primaria" name="anio_primaria" class="input-campo">
                    </div>
                </div>

                <h2 class="titulo-seccion2">Secundaria</h2>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="grado_secundaria" class="label">Grado Alcanzado / Título Obtenido:</label>
                        <input type="text" id="grado_secundaria" name="grado_secundaria" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 4;">
                        <label for="institucion_secundaria" class="label">Institución:</label>
                        <input type="text" id="institucion_secundaria" name="institucion_secundaria" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="anio_secundaria" class="label">Año:</label>
                        <input type="number" id="anio_secundaria" name="anio_secundaria" class="input-campo">
                    </div>
                </div>

                <h3 class="titulo-seccion2">Diversificado</h3>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="grado_diversificado" class="label">Grado Alcanzado / Título Obtenido:</label>
                        <input type="text" id="grado_diversificado" name="grado_diversificado" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 4;">
                        <label for="institucion_diversificado" class="label">Institución:</label>
                        <input type="text" id="institucion_diversificado" name="institucion_diversificado" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="anio_diversificado" class="label">Año:</label>
                        <input type="number" id="anio_diversificado" name="anio_diversificado" class="input-campo">
                    </div>
                </div>

                <h3 class="titulo-seccion2">Universitaria</h3>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="grado_universitario" class="label">Grado Alcanzado / Título Obtenido:</label>
                        <input type="text" id="grado_universitario" name="grado_universitario" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 4;">
                        <label for="institucion_universitaria" class="label">Institución:</label>
                        <input type="text" id="institucion_universitaria" name="institucion_universitaria" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="anio_universitaria" class="label">Año:</label>
                        <input type="number" id="anio_universitaria" name="anio_universitaria" class="input-campo">
                    </div>
                </div>

                <h3 class="titulo-seccion2">Post Grado / Otros</h3>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="grado_postgrado" class="label">Grado Alcanzado / Título Obtenido:</label>
                        <input type="text" id="grado_postgrado" name="grado_postgrado" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 4;">
                        <label for="institucion_postgrado" class="label">Institución:</label>
                        <input type="text" id="institucion_postgrado" name="institucion_postgrado" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="anio_postgrado" class="label">Año:</label>
                        <input type="number" id="anio_postgrado" name="anio_postgrado" class="input-campo">
                    </div>
                </div>

                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 2;">
                        <label for="estudia_actualmente" class="label">¿Estudia Actualmente?</label>
                        <select id="estudia_actualmente" name="estudia_actualmente" class="input-campo" onchange="toggleEstudiaActualidad()">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>



                <div id="estudios_actuales" class="grid-container" style="display: none;">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="carrera_actual" class="label">Carrera:</label>
                        <input type="text" id="carrera_actual" name="carrera_actual" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="institucion_actual" class="label">Institución:</label>
                        <input type="text" id="institucion_actual" name="institucion_actual" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 2;">
                        <label for="horario_actual" class="label">Horario:</label>
                        <input type="text" id="horario_actual" name="horario_actual" class="input-campo">
                    </div>
                </div>

                <h3 class="titulo-seccion2">Programas que Maneja</h3>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="windows" class="label">Windows:</label>
                        <select id="windows" name="windows" class="input-campo">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
  
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="office" class="label">Office:</label>
                        <select id="office" name="office" class="input-campo">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                <div class="grid-item" style="grid-column: span 1;">
                    <label for="bases_datos" class="label">Bases de Datos:</label>
                    <select id="bases_datos" name="bases_datos" class="input-campo">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="grid-item" style="grid-column: span 2;">
                    <label for="otros_lenguajes" class="label">Otros Lenguajes de Programación:</label>
                    <select id="otros_lenguajes" name="otros_lenguajes" class="input-campo" onchange="toggleOtrosLenguajes()">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div id="otros_lenguajes_input" class="grid-item" style="grid-column: span 3; display: none;">
                    <label for="detalles_lenguajes" class="label">Especifique:</label>
                    <input type="text" id="detalles_lenguajes" name="detalles_lenguajes" class="input-campo">
                </div>

                <div class="grid-item" style="grid-column: span 2;">
                    <label for="otros_cursos" class="label">Otros Cursos o Diplomados:</label>
                    <select id="otros_cursos" name="otros_cursos" class="input-campo" onchange="toggleOtrosCursos()">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div id="otros_cursos_input" class="grid-item" style="grid-column: span 4; display: none;">
                    <label for="detalles_cursos" class="label">Especifique:</label>
                    <input type="text" id="detalles_cursos" name="detalles_cursos" class="input-campo">
                </div>
            </div>

            </div>

            <div class="botones-container">
                <button type="button" onclick="mostrarSeccion('datos-familiares')" class="btn-siguiente">Anterior</button>
                <button type="button" onclick="mostrarSeccion('datos-habilidades')" class="btn-siguiente">Siguiente</button>
            </div>
        </div>


<!-- Sección de Otras Habilidades -->
<div class="seccion" id="datos-habilidades" style="display:none;">
    <h2 class="titulo-seccion">OTRAS HABILIDADES</h2>

    <div class="grid-container">
        <div class="grid-item" style="grid-column: span 8;">
            <label for="habilidades" class="label">Otras Habilidades:</label>
            <input type="text" id="habilidades" name="habilidades" class="input-campo">
        </div>
    </div>

    <h3 class="titulo-seccion">Idiomas</h3>
    <div class="grid-container">
        <div class="grid-item" style="grid-column: span 2;">
            <label for="ingles_hablado" class="label">Inglés - Hablado:</label>
            <input type="number" id="ingles_hablado" name="ingles_hablado" placeholder="% Hablado" min="0" max="100" class="input-campo" oninput="checkPercentage(this)">
        </div>
        <div class="grid-item" style="grid-column: span 2;">
            <label for="ingles_escrito" class="label">Inglés - Escrito:</label>
            <input type="number" id="ingles_escrito" name="ingles_escrito" placeholder="% Escrito" min="0" max="100" class="input-campo" oninput="checkPercentage(this)">
        </div>

        <div class="grid-item" style="grid-column: span 2;">
            <label for="otros_idiomas" class="label">Otros Idiomas:</label>
            <select id="otros_idiomas" name="otros_idiomas" class="input-campo" onchange="toggleOtrosIdiomas()">
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>

    <!-- Sección que aparece al seleccionar "Sí" en Otros Idiomas -->
    <div id="otros_idiomas_input"  style="display: none; grid-template-columns: repeat(8, 1fr); gap: 10px;">
        <div class="grid-item" style="grid-column: span 2;">
            <label for="idioma" class="label">Idioma:</label>
            <input type="text" id="idioma" name="idioma" class="input-campo">
        </div>
        <div class="grid-item" style="grid-column: span 2;">
            <label for="idioma_hablado" class="label">% Hablado:</label>
            <input type="number" id="idioma_hablado" name="idioma_hablado" placeholder="% Hablado" min="0" max="100" class="input-campo" oninput="checkPercentage(this)">
        </div>
        <div class="grid-item" style="grid-column: span 2;">
            <label for="idioma_escrito" class="label">% Escrito:</label>
            <input type="number" id="idioma_escrito" name="idioma_escrito" placeholder="% Escrito" min="0" max="100" class="input-campo" oninput="checkPercentage(this)">
        </div>
    </div>

    <!-- Botón de navegación -->
    <div class="botones-container">
        <button type="button" onclick="mostrarSeccion('datos-escolares')" class="btn-siguiente">Anterior</button>
    </div>
</div>


</div>

<div style="display: flex; justify-content: center; margin-top: 20px;">
    <button type="submit" id="btnEnviar" class="btn btn-dark" style="display: none; background-color: #343a40; color: #ffffff; padding: 12px 25px; font-size: 15px; font-weight: bold; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s, transform 0.2s;">
        ENVIAR SOLICITUD DE EMPLEO
    </button>
</div>



    </form>
</div>
<script>
    function mostrarSeccion(idSeccion) {
        // Ocultar todas las secciones
        const secciones = document.querySelectorAll('.seccion');
        secciones.forEach(seccion => {
            seccion.style.display = 'none';
        });

        // Mostrar la sección actual
        document.getElementById(idSeccion).style.display = 'block';

        // Controlar la visibilidad del botón de enviar
        const btnEnviar = document.getElementById('btnEnviar');
        if (idSeccion === 'datos-habilidades') {
            btnEnviar.style.display = 'grid';
        } else {
            btnEnviar.style.display = 'none';
        }
    }
</script>

</body>
<script src="formulario.js"></script>

