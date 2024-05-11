<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

eliminar_material($_GET['ID']);

db_disconnect($db);

header("Location: index.php");
exit;