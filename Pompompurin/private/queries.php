<?php
function todo_de_tabla($tabla){
    global $db;
    $sql = "SELECT * FROM $tabla ORDER BY ID ASC";
    return mysqli_query($db, $sql);
}
function todo_de_tablaLIMIT($tabla){
    global $db;
    $sql = "SELECT * FROM $tabla ORDER BY ID ASC LIMIT 4";
    return mysqli_query($db, $sql);
}
//Artistas
function nuevo_artista($artista,$info,$Album,$ImagenFondo,$ImagenTarjeta,$ImagenCarusel,$GeneroID){
    global $db;
    $sql = "INSERT INTO artistas (Nombre,Info,Album,Imagen_Fondo,Imagen_Tarjetas,Imagen_Carusel,GeneroID) VALUES ('$artista','$info','$Album','$ImagenFondo','$ImagenTarjeta','$ImagenCarusel','$GeneroID')";
    return mysqli_query($db, $sql);
}

function artista_por_id($id){
    global $db;
    $sql = "SELECT * FROM artistas WHERE ID=$id";
    return mysqli_query($db, $sql);
}

function actualizar_artista($id,$artista,$info,$Album,$ImagenFondo,$ImagenTarjeta,$ImagenCarusel,$GeneroID){
    global $db;
    $sql = "UPDATE artistas SET Nombre='$artista', Info='$info', Album='$Album',Imagen_Fondo='$ImagenFondo',Imagen_Tarjetas='$ImagenTarjeta',Imagen_Carusel='$ImagenCarusel', GeneroID = '$GeneroID' WHERE ID=$id";
    return mysqli_query($db, $sql);
}


function eliminar_artista($id){
    global $db;
    $sql = "DELETE FROM artistas WHERE ID=$id";
    return mysqli_query($db, $sql);
}

function por_Genero($GeneroID){
    global $db;
    $sql = "SELECT * FROM artistas WHERE GeneroID=$GeneroID LIMIT 4;";
    return mysqli_query($db, $sql);
}


//Generos
function nuevo_genero($genero){
    global $db;
    $sql = "INSERT INTO generos (Nombre) VALUES ('$genero')";
    return mysqli_query($db, $sql);
}

function genero_por_id($id){
    global $db;
    $sql = "SELECT * FROM generos WHERE ID=$id";
    return mysqli_query($db, $sql);
}

function actualizar_genero($id,$genero){
    global $db;
    $sql = "UPDATE generos SET Nombre='$genero' WHERE ID=$id";
    return mysqli_query($db, $sql);
}


function eliminar_genero($id){
    global $db;
    $sql = "DELETE FROM generos WHERE ID=$id";
    return mysqli_query($db, $sql);
}

//Canciones
function nueva_cancion($cancion,$ArtistaID){
    global $db;
    $sql = "INSERT INTO canciones (titulo,ArtistaID) VALUES ('$cancion','$ArtistaID')";
    return mysqli_query($db, $sql);
}
function canciones_por_Artista($ArtistaID){
    global $db;
    $sql = "SELECT * FROM canciones WHERE ArtistaID='$ArtistaID'";
    return mysqli_query($db, $sql);
}

function canciones_por_id($id){
    global $db;
    $sql = "SELECT * FROM canciones WHERE ID=$id";
    return mysqli_query($db, $sql);
}

function actualizar_cancion($id,$cancion,$ArtistaID){
    global $db;
    $sql = "UPDATE canciones SET titulo='$cancion', ArtistaID='$ArtistaID' WHERE ID=$id";
    return mysqli_query($db, $sql);
}


function eliminar_cancion($id){
    global $db;
    $sql = "DELETE FROM canciones WHERE ID=$id";
    return mysqli_query($db, $sql);
}

