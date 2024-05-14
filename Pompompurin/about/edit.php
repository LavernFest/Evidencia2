<?php
require('../private/init.php');
$id = $_GET['ID'];
$elemento = mysqli_fetch_assoc(elemento_por_id($id));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Editar Campo</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="ID" value="<?= $elemento['ID'] ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Campo *</label>
                    <input type="text" name="Campo" class="form-control" value="<?= $elemento['Campo'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Valor *</label>
                    <input type="text" name="Valor" class="form-control" value="<?= $elemento['Valor'] ?>">
                </div>

                <div class="text-end">
                    <input type="submit" value="Editar Elemento" class="btn btn-warning">
                </div>
            </form>

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