<?php
require('../private/init.php');
include(SHARED_PATH . 'header.php');
$nosotros = todo_de_tabla('nosotros');
?>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre del próximo elemento</label>
                    <input type="text" name="Campo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nombre del Valor</label>
                    <input type="text" name="Valor" class="form-control">
                </div> 

                <div class="text-end">
                    <input type="submit" value="Crear elemento" class="btn btn-success">
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