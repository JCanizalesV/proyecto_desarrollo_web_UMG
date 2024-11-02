<!-- Importar el header -->

<?php require '../header/header.php'; ?>

<link rel="stylesheet" href="../centro_costo/estilos/cc_estilos.css">


<div style="margin-left: 250px; padding: 20px;">


    <div class="container mt-3">
        <h2 class="text-center mb-4">Centro de Costo Grupo CYMSA</h2>
        <?php 
            session_start();
            include("../centro_costo/querys_cc.php");
            $listado_cc = $_SESSION['listado_centros'];
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

  
        <!-- Ventana modal para ingresar nuevo CC -->
        <div class="modal fade" id="modal_ingresar_cc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ingresar Centro de Costo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario para ingresar datos -->
                        <form action="querys_cc.php" method="post">
                            <label for="codigo_cc">Código</label>
                            <input type="text" name="codigo_cc" id="codigo_cc" maxlength="4" required class="form-control">

                            <label for="centro_de_costo">Centro de Costo</label>
                            <input type="text" name="centro_de_costo" id="centro_de_costo" required class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="accion" value="btnEnviar" class="btn btn-outline-dark">Enviar</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>

        <!-- Ventana modal para formulario de edición -->
        <div class="modal fade" id="modal_datos_cc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Centro de Costo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario para editar los datos -->
                        <form action="" method="post">
                            <label for="id_cc_edit">ID CC</label>
                            <input type="text" name="id_cc" id="id_cc_edit" required readonly class="form-control">

                            <label for="codigo_cc_edit">Código</label>
                            <input type="text" name="codigo_cc" id="codigo_cc_edit" maxlength="4" required class="form-control">

                            <label for="centro_de_costo_edit">Centro de Costo</label>
                            <input type="text" name="centro_de_costo" id="centro_de_costo_edit" required class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="accion" value="btnActualizar" class="btn btn-warning">Actualizar CC</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>



        <div class="table-container">
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modal_ingresar_cc">Nuevo CC</button>

    <div class="table-responsive">
        <table id="tabla_cc" class="table table-sm table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 15%;">Código</th>
                    <th style="width: 70%;">Centro de Costo</th>
                    <th style="width: 15%;">Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaContenido">
                <?php foreach ($listado_cc as $registro_cc): ?>
                    <tr>
                        <td><?= htmlspecialchars($registro_cc['codigo']) ?></td>
                        <td><?= htmlspecialchars($registro_cc['centro_de_costo']) ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_datos_cc"
                                    onclick="document.getElementById('id_cc_edit').value='<?= htmlspecialchars($registro_cc['id_cc']) ?>';
                                            document.getElementById('codigo_cc_edit').value='<?= htmlspecialchars($registro_cc['codigo']) ?>';
                                            document.getElementById('centro_de_costo_edit').value='<?= htmlspecialchars($registro_cc['centro_de_costo']) ?>';">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
</script>

</html>
