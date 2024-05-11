<?php
require('private/init.php');
include(SHARED_PATH . 'header.php'); 
include('arreglos.php')
?>
<div class="container">
    <div class="row">
        <div class="col-12">
                <?php 
                    for ($r=0; $r < count($Contactanos); $r++) {
                        foreach ($Contactanos[$r] as $llave => $columna) {
                            switch ($llave) {
                                case 'Comentarios':
                                    $ComentariosV = $columna;
                                    break;
                                case 'inforedes':
                                    $inforedesV = $columna;
                                    break;
                                case 'Problemas':
                                    $ProblemasV = $columna;
                                    break;
                                case 'servicios':
                                    $serviciosV = $columna;
                                    break;
                                default:
                                    echo '<p>Algo Salio mal</p>';
                                    break;
                            }
                        }

                        echo '<div class="text-center">';
                                echo '<h2>CONTÁCTANOS</h2>';
                                //echo '<h3.Contacto>¿Tienes algún comentario?, dejánoslo saber</h3.Contacto>';
                                echo '<h3>'.$ComentariosV.'</h3>';
                                echo '<p>'.$inforedesV.'</p>';
                                //echo '<h2.Contacto>¿Tienes algún problema?, comentalo y haznos saber cómo ayudarte</h3.Contacto>';
                                echo '<br><h3>'.$ProblemasV.'</h3>';
                                echo '<br><p>'.$serviciosV.'</p>';
                        echo '</div>';
                    }

                ?>
        </div>
    </div>
</div>
<?php
    include('shared/footer.php');
?>