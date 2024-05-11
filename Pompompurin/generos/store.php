<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];


nuevo_genero($_POST['Nombre']);
db_disconnect($db);

//al acabar la accion te direcciona el header a la nueva ubicación
header("Location: ../formulario.php");
exit;