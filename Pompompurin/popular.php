<?php
require('private/init.php');
include(SHARED_PATH . 'header.php'); 
$artistasCarusel = todo_de_tabla('artistas');
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
                while ($row = $artistasCarusel -> fetch_assoc()){
                    echo '<div class="carousel-item text-center">';
                        echo '<a href="/POMPOM-BD/Pompompurin/artista.php" class="icono" style=\'background-image:url("'.$row["Imagen_Carusel"].'")\'></a>';
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
        include('shared/footer.php');
?>