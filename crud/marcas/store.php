<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

nueva_marca($_POST['Marca_Nombre']);
db_disconnect($db);

header("Location: index.php");
exit;