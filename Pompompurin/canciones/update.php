<?php
require('../private/init.php');

actualizar_cancion($_POST['ID'], $_POST['titulo'],$_POST['ArtistaID']);
db_disconnect($db);

header("Location: show.php?ID=" . $_POST['ID']);
exit;