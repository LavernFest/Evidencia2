<?php
require('private/init.php');
include(SHARED_PATH . 'header.php'); 
$id = $_GET['ID'];
$artista = artista_por_id($id);
$canciones = canciones_por_Artista($id);
//include('arreglos.php');
?>

<div class="container">
            <?php
            while ($row = $artista -> fetch_assoc()) {
                echo '<div class="row">';
                    echo '<div class="col-12">';
                         echo '<img src="'.$row["Imagen_Fondo"].'" class="d-block w-100">';
                    echo '</div>';
                    echo '<div class="squareArt">';
                        echo '<div class="col-lg-3 col-md-6 col-sm-12 float-start px-4 py-4">';
                            echo '<div class="cardArt" style="width: 16rem;">';
                                echo '<img class="card-img-top" src='.$row["Imagen_Tarjetas"].'>';
                        echo '</div>';
                    echo '</div>';
                        echo '<div class="col-6 float-end px-4 py-4 artInfo">';
                            echo '<h2>'.$row["Nombre"].'</h2>';
                            echo '<div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star notchecked"></span>
                                <span class="fa fa-star notchecked"></span>';
                            echo '</div>
                            <br>';
                            echo '<p>'.$row["Info"].'</p>';
                        echo '</div>';
                    echo '</div>';
            echo '</div>';

            echo '<div class="row">';
            echo '<div class="col-12 justify-content-center">';
                echo '<div class="squareSongs">';
                    echo '<div class="float-start">';
                        echo '<h2>'.$row["Album"].'</h2>';
                        echo ' <img src="'.$row["Imagen_Carusel"].'">';
                    echo '</div>';
                    echo '<div class="Songs">';
                        echo '<h3>Canciones</h3>';
                        while ($row = $canciones -> fetch_assoc()) {
                            echo '<audio src="/Musica/'.$row["source"].'" controls>
                            <p>If you are reading this, it is because your browser does not support the audio element.</p>
                        </audio>';
                        }
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
            }
                /*
        echo '<div class="row">';
            echo '<div class="col-12">';
                 echo '<img src="'.$imagenFondoPAV.'" class="d-block w-100">';
            echo '</div>';
                echo '<div class="squareArt">';
                    echo '<div class="col-lg-3 col-md-6 col-sm-12 float-start px-4 py-4">';
                        echo '<div class="cardArt" style="width: 16rem;">';
                            echo '<img class="card-img-top" src='.$imagenArtistaPAV.'>';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="col-6 float-end px-4 py-4 artInfo">';
                        echo '<h2>'.$nombrePAV.'</h2>';
                        echo '<div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star notchecked"></span>
                            <span class="fa fa-star notchecked"></span>';
                        echo '</div>
                        <br>';
                        echo '<p>'.$descripcionPAV.'</p>';
                    echo '</div>';
                echo '</div>';
        echo '</div>';

        echo '<div class="row">';
            echo '<div class="col-12 justify-content-center">';
                echo '<div class="squareSongs">';
                    echo '<div class="float-start">';
                        echo '<h2>'.$albumPAV.'</h2>';
                        echo ' <img src="'.$imagenAlbumPAV.'">';
                    echo '</div>';
                    echo '<div class="Songs">';
                        echo '<h3>Canciones</h3>';
                        for ($i=0; $i < count($cancionPAV); $i++) { 
                            echo '<audio src="'.$cancionPAV[$i].'" controls>
                            <p>If you are reading this, it is because your browser does not support the audio element.</p>
                        </audio>';
                        }
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
                } */
            ?>
    </div>
</div>
<br>
<?php
    include('shared/footer.php');
?>