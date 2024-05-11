<?php
require('../private/init.php');

actualizar_artista($_POST['ID'], $_POST['Nombre'],$_POST['Info'],$_POST['Album'],$_POST['Imagen_Fondo'],$_POST['Imagen_Tarjetas'],$_POST['Imagen_Carusel'],$_POST['GeneroID']);
db_disconnect($db);

header("Location: show.php?ID=" . $_POST['ID']);
exit;