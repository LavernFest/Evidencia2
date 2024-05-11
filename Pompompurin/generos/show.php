<?php
require('../private/init.php');
$id = $_GET['ID'];
$genero = mysqli_fetch_assoc(genero_por_id($id));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 text-center">
                <h1 class="mb-0">Genero: <?= $genero['ID'] ?></h1>
            </header>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Nombre: </b><?= $genero['Nombre'] ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="edit.php?ID=<?= $genero['ID'] ?>" class="btn btn-warning me-4">Editar</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Eliminar
            </button>
        </div>
    </div>
    <br>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>¿Estás seguro que quieres eliminarla?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                <!-- <button type="button" class="btn btn-danger">Eliminar</button> -->

                <a href="delete.php?ID=<?= $genero['ID'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col text-end">
            <a href="../formulario.php" class="btn btn-secondary">Regresar</a>
        </div>
    </div>

</div>

<?php
include(SHARED_PATH . 'footer.php');