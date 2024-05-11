<?php
require('../private/init.php');
include(SHARED_PATH . 'header.php');
$artistas = todo_de_tabla('artistas');
?>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Titulo de la Cancion *</label>
                    <input type="text" name="titulo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Artista al que corresponde*</label>
                    <select name="ArtistaID">
                        <?php 
                        while ($row = $artistas -> fetch_assoc()){
                            echo '<option value="'.$row['ID'].'">'.$row['Nombre'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="text-end">
                    <input type="submit" value="Crear Cancion" class="btn btn-success">
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