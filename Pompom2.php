<?php
    include('head.php');
    include('artistas.php');
?>
<?php
    $titulo='PomPom';
?>
<div class="container">

<!--Carusel-->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div id="carousel3" class="carousel slide">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="square px-4 py-4">
                        <h2 class="py-2">Desliza para conocer a los artistas</h2>
                    </div>
                    <img src="Imagenes/pompomfondoS.svg" class="d-block w-100">
                </div>
                
                <?php 
                    for ($r=0; $r < count($personas); $r++) {
                        foreach ($personas[$r] as $llave => $columna) {
                            switch ($llave) {
                                case 'artista':
                                    $artistaV = $columna;
                                    break;
                                case 'Info':
                                    $infoV = $columna;
                                    break;
                                case 'album_mainstream':
                                    $albumV = $columna;
                                    break;
                                case 'imagen':
                                    $imagenV = $columna;
                                    break;
                                default:
                                    echo '<p>Algo Salio mal</p>';
                                    break;
                            }
                        }

                        echo '<div class="carousel-item">';
                            echo '<div class="square px-4 py-4">';
                                echo '<h3 class="py-2">Artista Recomendado</h3>';
                                echo '<h2>'.$artistaV.'</h2>';
                                echo '<p>'.$infoV.'</p>';
                                echo '<h3>'.$albumV.'</h3>';
                                echo '<a class="btn" href="#" role="button">Más del Artista</a>';
                            echo '</div>';
                            echo '<img src='.$imagenV.' class="d-block w-100">';
                        echo '</div>';
                    }

                ?>
                

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!--Fin Carousel-->

<div class="row">
    <div class="col-12">
        <div class="rectangle mt-4 mb-4">
            <h3 class="px-4 py-4">Últimos agregados</h3>
        </div>
    </div>
</div>

<div class="row">
    <?php
        echo '<p>hola</p>';
    ?>
    <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="Imagenes/26WILLIE-NELSON-STYLE-01-lvmp-articleLarge.webp" alt="Willie">
                    <div class="card-body">
                        <a class="nav-link" href="Artista.html">Artista</a>
                    </div>
                </div>
            </div>
</div>


</div>
<?php
    include('footer.php');
?>