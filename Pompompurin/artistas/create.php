<?php
require('../private/init.php');
include(SHARED_PATH . 'header.php'); 
$generos = todo_de_tabla('generos');
?>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre *</label>
                    <input type="text" name="Nombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Info *</label>
                    <input type="text" name="Info" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Album *</label>
                    <input type="text" name="Album" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Imagen principal *</label>
                    <input type="text" name="Imagen_Fondo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Imagen Tarjetas *</label>
                    <input type="text" name="Imagen_Tarjetas" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Imagen Carusel *</label>
                    <input type="text" name="Imagen_Carusel" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Genero al que corresponde*</label>
                    <select name="GeneroID">
                        <?php 
                        while ($row = $generos -> fetch_assoc()){
                            echo '<option value="'.$row['ID'].'">'.$row['Nombre'].'</option>';
                        }
                        ?>
                    </select>
                </div>


                <div class="text-end">
                    <input type="submit" value="Crear Artista" class="btn btn-success">
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