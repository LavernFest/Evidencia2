<?php
    include('head.php');
    include('arreglos.php');
?>
<div class="container">
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
                                echo '<a href="artista.php" class="'.$iconoTV.'"></a>';
                                echo '<a href="artista.php" class="'.$iconoDV.'"></a>';
                                echo '<a href="artista.php" class="'.$iconoWV.'"></a>';
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