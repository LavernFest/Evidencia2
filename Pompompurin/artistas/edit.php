<?php
require('../private/init.php');
$id = $_GET['ID'];
$artista = mysqli_fetch_assoc(artista_por_id($id));
$generos = todo_de_tabla('generos');
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Editar artista</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="ID" value="<?= $artista['ID'] ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Nombre *</label>
                    <input type="text" name="Nombre" class="form-control" value="<?= $artista['Nombre'] ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Info *</label>
                    <input type="text" name="Info" class="form-control" value="<?= $artista['Info'] ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Album *</label>
                    <input type="text" name="Album" class="form-control" value="<?= $artista['Album'] ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Imagen Principal *</label>
                    <input type="text" name="Imagen_Fondo" class="form-control" value="<?= $artista['Imagen_Fondo'] ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Imagen Tarjeta *</label>
                    <input type="text" name="Imagen_Tarjetas" class="form-control" value="<?= $artista['Imagen_Tarjetas'] ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Imagen_Carusel *</label>
                    <input type="text" name="Imagen_Carusel" class="form-control" value="<?= $artista['Imagen_Carusel'] ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Genero*</label>
                    <select name="GeneroID">
                        <?php 
                        while ($row = $generos -> fetch_assoc()){
                            echo '<option value="'.$row['ID'].'">'.$row['Nombre'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="text-end">
                    <input type="submit" value="Editar Artista" class="btn btn-warning">
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