<?php
require('../private/init.php');

actualizar_elemento($_POST['ID'], $_POST['Campo'], $_POST['Valor']);
db_disconnect($db);

header("Location: show.php?ID=" . $_POST['ID']);
exit;