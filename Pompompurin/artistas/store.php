<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];


nuevo_artista($_POST['Nombre'],$_POST['Info'],$_POST['Album'],$_POST['Imagen_Fondo'],$_POST['Imagen_Tarjetas'],$_POST['Imagen_Carusel'],$_POST['GeneroID']);
db_disconnect($db);

//al acabar la accion te direcciona el header a la nueva ubicación
header("Location: ../formulario.php");
exit;