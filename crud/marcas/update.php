<?php
require('../private/init.php');

actualizar_marca($_POST['ID'], $_POST['Marca_Nombre']);
db_disconnect($db);

header("Location: show.php?ID=" . $_POST['ID']);
exit;