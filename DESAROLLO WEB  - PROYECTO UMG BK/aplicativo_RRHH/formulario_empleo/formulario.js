    document.getElementById('horario').addEventListener('change', function() {
        var detalleHorario = document.getElementById('horario-detalle');
        if (this.value === 'lunes-viernes') {
            detalleHorario.style.display = 'block';
        } else {
            detalleHorario.style.display = 'none';
        }
    });



var familiaresAgregados = {
    "padre": false,
    "madre": false,
    "conyuge": false,
    "hijos": 0,
    "hermanos": 0
};

function agregarFamiliar() {
    var familiarSelect = document.getElementById('familiar');
    var familiar = familiarSelect.value;
    var familiaresDiv = document.getElementById('familiares');

    // Verificar si se ha agregado este familiar
    if (familiaresAgregados[familiar] === true) {
        alert('Ya has agregado este familiar.');
        familiarSelect.selectedIndex = 0; // Limpiar selección
        return;
    }

    // Crear estructura HTML para el familiar
    if (familiar !== 'hijo' && familiar !== 'hermano') {
        var nuevoFamiliarHTML = `
            <div id="${familiar}_section" >
                <h3 class="titulo-seccion">${familiarSelect.options[familiarSelect.selectedIndex].text}</h3>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="nombre_${familiar}" class="label">Nombre:</label>
                        <input type="text" id="nombre_${familiar}" name="nombre_${familiar}" required class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="edad_${familiar}" class="label">Edad:</label>
                        <input type="number" id="edad_${familiar}" name="edad_${familiar}" required class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="trabajo_${familiar}" class="label">Lugar de Trabajo:</label>
                        <input type="text" id="trabajo_${familiar}" name="trabajo_${familiar}" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="telefono_${familiar}" class="label">Teléfono:</label>
                        <input type="tel" id="telefono_${familiar}" name="telefono_${familiar}" required class="input-campo">
                    </div>
                </div>
                <button type="button" onclick="eliminarFamiliar('${familiar}')" class="">Eliminar</button>
            </div>
        `;
        familiaresDiv.insertAdjacentHTML('beforeend', nuevoFamiliarHTML);
        familiaresAgregados[familiar] = true; // Marcar como agregado
    } else if (familiar === 'hijo') {
        agregarHijo();
    } else if (familiar === 'hermano') {
        agregarHermano();
    }

    familiarSelect.selectedIndex = 0; // Limpiar selección después de agregar
}

function agregarHijo() {
    var hijosDiv = document.getElementById('familiares');
    var hijoIndex = familiaresAgregados.hijos;

    if (hijoIndex < 2) {
        var nuevoHijoHTML = `
            <div id="hijo_${hijoIndex}"">
                <h3 class="titulo-seccion">Hijo (a) ${hijoIndex + 1}</h3>
                <div class="grid-container">
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="nombre_hijo_${hijoIndex}" class="label">Nombre:</label>
                        <input type="text" id="nombre_hijo_${hijoIndex}" name="nombre_hijo_${hijoIndex}" required class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="edad_hijo_${hijoIndex}" class="label">Edad:</label>
                        <input type="number" id="edad_hijo_${hijoIndex}" name="edad_hijo_${hijoIndex}" required class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="trabajo_hijo_${hijoIndex}" class="label">Lugar de Trabajo:</label>
                        <input type="text" id="trabajo_hijo_${hijoIndex}" name="trabajo_hijo_${hijoIndex}" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="telefono_hijo_${hijoIndex}" class="label">Teléfono:</label>
                        <input type="tel" id="telefono_hijo_${hijoIndex}" name="telefono_hijo_${hijoIndex}" required class="input-campo">
                    </div>
                </div>
                <button type="button" onclick="eliminarHijo(${hijoIndex})" class="">Eliminar</button>
            </div>
        `;
        hijosDiv.insertAdjacentHTML('beforeend', nuevoHijoHTML);
        familiaresAgregados.hijos++; // Incrementar contador de hijos
    } else {
        alert('Ya has agregado el máximo de 2 hijos.');
    }
}

function agregarHermano() {
    var hermanosDiv = document.getElementById('familiares');
    var hermanoIndex = familiaresAgregados.hermanos;

    if (hermanoIndex < 2) {
        var nuevoHermanoHTML = `
            <div id="hermano_${hermanoIndex}">
                <h3 class="titulo-seccion">Hermano (a) ${hermanoIndex + 1}</h3>
                <div class="grid-container">

                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="nombre_hermano_${hermanoIndex}" class="label">Nombre:</label>
                        <input type="text" id="nombre_hermano_${hermanoIndex}" name="nombre_hermano_${hermanoIndex}" required class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="edad_hermano_${hermanoIndex}" class="label">Edad:</label>
                        <input type="number" id="edad_hermano_${hermanoIndex}" name="edad_hermano_${hermanoIndex}" required class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 3;">
                        <label for="trabajo_hermano_${hermanoIndex}" class="label">Lugar de Trabajo:</label>
                        <input type="text" id="trabajo_hermano_${hermanoIndex}" name="trabajo_hermano_${hermanoIndex}" class="input-campo">
                    </div>
                    <div class="grid-item" style="grid-column: span 1;">
                        <label for="telefono_hermano_${hermanoIndex}" class="label">Teléfono:</label>
                        <input type="tel" id="telefono_hermano_${hermanoIndex}" name="telefono_hermano_${hermanoIndex}" required class="input-campo">
                    </div>
                </div>
                <button type="button" onclick="eliminarHermano(${hermanoIndex})" class="">Eliminar</button>
            </div>
        `;
        hermanosDiv.insertAdjacentHTML('beforeend', nuevoHermanoHTML);
        familiaresAgregados.hermanos++; // Incrementar contador de hermanos
    } else {
        alert('Ya has agregado el máximo de 2 hermanos.');
    }
}


function eliminarFamiliar(familiar) {
    var familiarDiv = document.getElementById(`${familiar}_section`);
    if (familiarDiv) {
        familiarDiv.remove();
        familiaresAgregados[familiar] = false; // Marcar como no agregado
    }
}

function eliminarHijo(index) {
    var hijoDiv = document.getElementById(`hijo_${index}`);
    if (hijoDiv) {
        hijoDiv.remove();
        familiaresAgregados.hijos--; // Decrementar contador de hijos
    }
}

function eliminarHermano(index) {
    var hermanoDiv = document.getElementById(`hermano_${index}`);
    if (hermanoDiv) {
        hermanoDiv.remove();
        familiaresAgregados.hermanos--; // Decrementar contador de hermanos
    }
}


function toggleEstudiaActualidad() {
    var estudiaSelect = document.getElementById('estudia_actualmente');
    var estudiosDiv = document.getElementById('estudios_actuales');

    if (estudiaSelect.value === 'Si') {
        estudiosDiv.style.display = 'grid';
    } else {
        estudiosDiv.style.display = 'none';
    }
}

function toggleOtrosProgramas() {
    // Aquí puedes agregar lógica si necesitas manejar cambios en los programas
}

function toggleOtrosLenguajes() {
    var otrosLenguajesSelect = document.getElementById('otros_lenguajes');
    var otrosLenguajesInput = document.getElementById('otros_lenguajes_input');

    if (otrosLenguajesSelect.value === 'Si') {
        otrosLenguajesInput.style.display = 'grid';
    } else {
        otrosLenguajesInput.style.display = 'none';
    }
}

function toggleOtrosCursos() {
    var otrosCursosSelect = document.getElementById('otros_cursos');
    var otrosCursosInput = document.getElementById('otros_cursos_input');

    if (otrosCursosSelect.value === 'Si') {
        otrosCursosInput.style.display = 'block';
    } else {
        otrosCursosInput.style.display = 'none';
    }
}


function toggleOtrosIdiomas() {
    const otrosIdiomasInput = document.getElementById('otros_idiomas_input');
    const otrosIdiomasSelect = document.getElementById('otros_idiomas');
    if (otrosIdiomasSelect.value === 'Si') {
        otrosIdiomasInput.style.display = 'grid';
    } else {
        otrosIdiomasInput.style.display = 'none';
        // Limpiar campos al cerrar
        document.getElementById('idioma').value = '';
        document.getElementById('idioma_hablado').value = '';
        document.getElementById('idioma_escrito').value = '';
    }
}

function checkPercentage(input) {
    if (input.value < 0) {
        input.value = 0;
    }
    if (input.value > 100) {
        input.value = 100;
    }
}

// Función para guardar todos los datos del formulario en LocalStorage
function saveFormData() {
    const formElements = document.querySelectorAll('input, select');
    formElements.forEach((element) => {
        if (element.type !== 'submit') {
            localStorage.setItem(element.id, element.value);
        }
    });
}

// Función para cargar todos los datos del formulario desde LocalStorage
function loadFormData() {
    const formElements = document.querySelectorAll('input, select');
    formElements.forEach((element) => {
        if (localStorage.getItem(element.id)) {
            element.value = localStorage.getItem(element.id);
        }
    });
}

// Función para incrementar y verificar el contador de actualizaciones
function checkReloadCounter() {
    let reloadCounter = localStorage.getItem('reloadCounter') || 0;
    reloadCounter++;
    localStorage.setItem('reloadCounter', reloadCounter);

    if (reloadCounter >= 3) {
        localStorage.clear(); // Reinicia el formulario después de 3 recargas
        localStorage.setItem('reloadCounter', 0); // Reinicia el contador
    }
}

// Eventos para guardar los datos al cambiar el valor de un campo
document.addEventListener('DOMContentLoaded', () => {
    loadFormData();  // Carga los datos guardados al cargar la página
    checkReloadCounter();  // Verifica el contador de recargas

    // Guarda los datos al cambiar el valor de cualquier campo
    const formElements = document.querySelectorAll('input, select');
    formElements.forEach((element) => {
        element.addEventListener('change', saveFormData);
    });
});


// Función para mostrar una confirmación antes de refrescar o cerrar la página
window.addEventListener('beforeunload', (event) => {
    // Personaliza el mensaje que se mostrará
    event.preventDefault(); // Necesario para algunas versiones de navegadores
    event.returnValue = ''; // Esto mostrará una alerta de confirmación
});


    // Escuchar el evento submit del formulario
    document.querySelector('form').addEventListener('submit', (event) => {
        const confirmSend = confirm('¿Seguro que deseas enviar la Solicitud de Empleo?');
        if (!confirmSend) {
            event.preventDefault(); // Evitar el envío del formulario si el usuario cancela
        }
    });

    // Función para mostrar una confirmación antes de refrescar o cerrar la página
    window.addEventListener('beforeunload', (event) => {
        event.preventDefault(); // Necesario para algunas versiones de navegadores
        event.returnValue = ''; // Esto mostrará una alerta de confirmación
    });
