<?php
require('../private/init.php');
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Crear Material</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre *</label>
                    <input type="text" name="Material_Nombre" class="form-control">
                </div>

                <div class="text-end">
                    <input type="submit" value="Crear Material" class="btn btn-success">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');