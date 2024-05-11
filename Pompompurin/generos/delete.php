<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

eliminar_genero($_GET['ID']);

db_disconnect($db);

//???
header("Location: ../formulario.php");
exit;