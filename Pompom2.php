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

<!--Tarjetas-->
<div class="row">
    <div class="col-12">
        <div class="rectangle mt-4 mb-4">
            <h3 class="px-4 py-4">Últimos agregados</h3>
        </div>
    </div>
</div>

<div class="row">
    <?php
        for ($r=0; $r < count($tarjetas); $r++) {
            foreach ($tarjetas[$r] as $llave => $columna) {
                switch ($llave) {
                    case 'imagenT':
                        $imagenTV = $columna;
                        break;
                    case 'nombre':
                        $nombreV = $columna;
                        break;
                    default:
                        echo '<p>Algo Salio mal...</p>';
                        break;
                }
            }

            echo '<div class="col-lg-3 col-md-6 col-sm-12">';
                echo '<div class="card" style="width: 18rem;">';
                    echo '<img class="card-img-top" src='.$imagenTV.'>';
                    echo '<div class="card-body">';
                        echo '<a class="nav-link" href="Artista.html">'.$nombreV.'</a>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    ?>
</div>
<!--Fin Tarjetas-->



<!--Carrusel de iconos-->
<div class="row">
    <div class="col-12">
        <div class="rectangle mt-4 mb-4">
            <h3 class="px-4 py-4">Populares</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div id="carousel2" class="carousel carouselPopular slide">

            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                        <h2 class="py-2">Desliza para ver los Artistas Populares</h2>
                </div>

                <?php 
                    for ($r=0; $r < count($carruseliconos); $r++) {
                        foreach ($carruseliconos[$r] as $llave => $columna) {
                            switch ($llave) {
                                case 'iconoT':
                                    $iconoTV = $columna;
                                    break;
                                case 'iconoD':
                                    $iconoDV = $columna;
                                    break;
                                case 'iconoW':
                                    $iconoWV = $columna;
                                    break;
                                default:
                                    echo '<p>Algo Salio mal</p>';
                                    break;
                            }
                        }

                        echo '<div class="carousel-item text-center">';
                                echo '<a href="Artista.html" class="'.$iconoTV.'"></a>';
                                echo '<a href="Artista.html" class="'.$iconoDV.'"></a>';
                                echo '<a href="Artista.html" class="'.$iconoWV.'"></a>';
                        echo '</div>';
                    }
                ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

</div>
<?php
    include('footer.php');
?>