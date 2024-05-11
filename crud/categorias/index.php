<?php
require('../private/init.php');

$categorias = todo_de_tabla('categorias');

include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Todas las categorías</h1>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="create.php" class="btn btn-success">Crear</a>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while( $row = $categorias->fetch_assoc() ){ ?>
                        <tr>
                            <td><?= $row['ID'] ?></td>
                            <td><?= $row['Categoria_Nombre'] ?></td>
                            <td>
                                <a href="show.php?ID=<?= $row['ID'] ?>" class="btn btn-secondary">Ver</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="../index.php" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');