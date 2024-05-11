<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];


nueva_cancion($_POST['titulo'],$_POST['ArtistaID']);
db_disconnect($db);

//al acabar la accion te direcciona el header a la nueva ubicación
header("Location: ../formulario.php");
exit;