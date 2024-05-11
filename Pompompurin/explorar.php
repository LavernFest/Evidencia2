<?php
require('private/init.php');
include(SHARED_PATH . 'header.php'); 
//include('arreglos.php')
$artistas = todo_de_tabla('artistas');
$generos = todo_de_tabla('generos');

$limite = 5;
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

                    while ($row = $artistas -> fetch_assoc()){
                        echo '<div class="carousel-item">';
                            echo '<div class="square px-4 py-4">';
                                echo '<h3 class="py-2">Artista Recomendado</h3>';
                                echo '<h2>'.$row['Nombre'].'</h2>';
                                echo '<p>'.$row['Info'].'</p>';
                                echo '<h3>'.$row['Album'].'</h3>';
                                echo '<a class="btn" href="artista.php?ID='.$row['ID'].'" role="button">Más del Artista</a>';
                            echo '</div>';
                            echo '<img src='.$row['Imagen_Fondo'].' class="d-block w-100">';
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

<!--ACORDEON-->
            <div class="accordion mt-4" id="accordiondeJingYuans">
                <?php 
                    while ($row = $generos -> fetch_assoc()){
                        $num=$row["ID"];
                            echo '<div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$num.'" aria-expanded="true" aria-controls="collapse'.$num.'">'.$row["Nombre"].'</button>
                            </h2>'; 
                            echo '<div id="collapse'.$num.'" class="accordion-collapse collapse show" data-bs-parent="#accordiondeJingYuans">';
                            echo '<div class="accordion-body">';
                            $artistas = por_Genero($num);
                                while ( $row2 = $artistas -> fetch_assoc() ){      
                                    echo '<div class="cuadro">';
                                        echo '<img src="'.$row2["Imagen_Carusel"].'">';
                                        echo '<a href="artista.php?ID='.$row2['ID'].'"><h3>'.$row2["Nombre"].'</h3></a>';
                                    echo '</div> ';
                                }
                            echo    '</div>';
                            echo  '</div>';
                            echo '</div>';
                    }
                ?>
            </div>
        </div>
<!--Fin DE ACORDEON-->           
        </div>
    </div>
</div>
<?php
    include('shared/footer.php');
?>