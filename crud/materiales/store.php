<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

nuevo_material($_POST['Material_Nombre']);
db_disconnect($db);

header("Location: index.php");
exit;