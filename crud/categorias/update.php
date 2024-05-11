<?php
require('../private/init.php');

actualizar_categoria($_POST['ID'], $_POST['Categoria_Nombre']);
db_disconnect($db);

header("Location: show.php?ID=" . $_POST['ID']);
exit;