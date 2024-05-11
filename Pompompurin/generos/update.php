<?php
require('../private/init.php');

actualizar_genero($_POST['ID'], $_POST['Nombre']);
db_disconnect($db);

header("Location: show.php?ID=" . $_POST['ID']);
exit;