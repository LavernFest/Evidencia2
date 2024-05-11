<?php
require('../private/init.php');

actualizar_material($_POST['ID'], $_POST['Material_Nombre']);
db_disconnect($db);

header("Location: show.php?ID=" . $_POST['ID']);
exit;