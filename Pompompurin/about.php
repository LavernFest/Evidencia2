<?php
require('private/init.php');
include(SHARED_PATH . 'header.php'); 
$nosotros = todo_de_tabla('nosotros');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
                <?php 
                   echo '<div class="text-center">';
                   echo '<h2>ABOUT US</h2>';
                    while ($row = $nosotros -> fetch_assoc()){
                        
                                echo '<h3>'.$row['Campo'].'</h3>';
                                echo '<p>'.$row['Valor'].'</p>';
                        
                    }
                    echo '</div>';

                ?>
        </div>
    </div>
</div>
<?php
    include('shared/footer.php');
?>