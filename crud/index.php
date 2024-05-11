<?php
require('private/init.php');
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Proyecto Pines</h1>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="categorias/index.php" class="btn btn-primary">Ver Categorías</a>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <a href="marcas/index.php" class="btn btn-secondary">Ver Marcas</a>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <a href="materiales/index.php" class="btn btn-warning">Ver Materiales</a>
        </div>
    </div>
</div>

<?php
include('shared/footer.php');


    
