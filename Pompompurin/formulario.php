<?php
require('private/init.php');
include(SHARED_PATH . 'header.php');

include('arreglos.php');
$artistas = todo_de_tabla('artistas');
$generos = todo_de_tabla('generos');
$canciones = todo_de_tabla('canciones');
?>
<!--Formulario-->



<div class="container py-5">
    <!-- botones -->
    <div class="row">
        <div class="col-1">
            <a href="#Artistas" class="btn btn-success">Ir a Artistas</a>
        </div>
        <div class="col-2">
            <a href="#Generos" class="btn btn-success">Ir a Generos</a>
        </div>
        <div class="col-2">
            <a href="#Canciones" class="btn btn-success">Ir a Canciones</a>
        </div>
    </div>
    <!-- Artistas -->
    <div id="Artistas">
    <div class="row">
        <div class="col-12">
            <div class="rectangle mt-4 mb-4">
                <h3 class="px-4 py-4">Artistas</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="artistas/create.php" class="btn btn-success">Agregar Artistas</a>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while( $row = $artistas ->fetch_assoc() ){ ?>
                        <tr>
                            <td><?= $row['ID'] ?></td>
                            <td><?= $row['Nombre'] ?></td>
                            <td>
                                <a href="artistas/show.php?ID=<?= $row['ID'] ?>" class="btn btn-secondary">Ver</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
    </div>
    <!-- FIN Artistas -->

    <!-- Generos -->
    <div id="Generos">
    
        <div class="row">
            <div class="col-12">
                <div class="rectangle mt-4 mb-4">
                    <h3 class="px-4 py-4">Generos</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-end">
                <a href="generos/create.php" class="btn btn-success">Agregar Genero</a>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Genero</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php while( $row = $generos ->fetch_assoc() ){ ?>
                            <tr>
                                <td><?= $row['ID'] ?></td>
                                <td><?= $row['Nombre'] ?></td>
                                <td>
                                    <a href="generos/show.php?ID=<?= $row['ID'] ?>" class="btn btn-secondary">Ver</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
    </div>
    <!-- FIN Generos -->

    <!-- Canciones -->
    <div id="Canciones">
    
        <div class="row">
            <div class="col-12">
                <div class="rectangle mt-4 mb-4">
                    <h3 class="px-4 py-4">Canciones</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-end">
                <a href="canciones/create.php" class="btn btn-success">Agregar Cancion</a>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Cancion</th>
                            <th>Artista</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php while( $row = $canciones ->fetch_assoc() ){ ?>
                            <tr>
                                <td><?= $row['ID'] ?></td>
                                <td><?= $row['titulo'] ?></td>
                                <td><?= $row['ArtistaID'] ?></td>
                                <td>
                                    <a href="canciones/show.php?ID=<?= $row['ID'] ?>" class="btn btn-secondary">Ver</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
    </div>
    <!-- FIN Canciones -->
    </div>
</div>

<br>

<?php
    include('shared/footer.php');
?>