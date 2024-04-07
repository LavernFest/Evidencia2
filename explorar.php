<?php
include('head.php');
include('arreglos.php')
?>
<div class="container">


    <!--CARRUSEL-->
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
<!--FINAL-->














            <div class="accordion mt-4" id="accordiondeJingYuans">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Romance</button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordiondeJingYuans">
                        <div class="accordion-body">
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción</h3></a>
                            </div> 
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción2</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción3</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción4</h3></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Folk</button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordiondeJingYuans">
                        <div class="accordion-body">
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción</h3></a>
                            </div> 
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción2</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción3</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción4</h3></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Instrumenetal</button>
                    </h2>
                    
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordiondeJingYuans">
                        <div class="accordion-body">
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción</h3></a>
                            </div> 
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción2</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción3</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción4</h3></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Rock Country</button>
                    </h2>
                    
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordiondeJingYuans">
                        <div class="accordion-body">
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción</h3></a>
                            </div> 
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción2</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción3</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción4</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Pop</button>
                    </h2>
                    
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordiondeJingYuans">
                        <div class="accordion-body">
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción</h3></a>
                            </div> 
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción2</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción3</h3></a>
                            </div>
                            <div class="cuadro">
                                <div class="squareSong">
                                </div>
                                <a href="Artista.html"><h3>Canción4</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Fin-->

        

                
        </div>
    </div>
</div>
<?php
include('footer.php');
?>