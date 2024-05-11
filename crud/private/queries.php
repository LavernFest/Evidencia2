<?php
function todo_de_tabla($tabla){
    global $db;
    $sql = "SELECT * FROM $tabla ORDER BY ID ASC";
    return mysqli_query($db, $sql);
}

//Categorias
function nueva_categoria($categoria){
    global $db;
    $sql = "INSERT INTO categorias (Categoria_Nombre) VALUES ('$categoria')";
    return mysqli_query($db, $sql);
}


function categoria_por_id($id){
    global $db;
    $sql = "SELECT * FROM categorias WHERE ID=$id";
    return mysqli_query($db, $sql);
}



function actualizar_categoria($id, $categoria_nombre){
    global $db;
    $sql = "UPDATE categorias SET Categoria_Nombre='$categoria_nombre' WHERE ID=$id";
    return mysqli_query($db, $sql);
}


function eliminar_categoria($id){
    global $db;
    $sql = "DELETE FROM categorias WHERE ID=$id";
    return mysqli_query($db, $sql);
}

//marcas
function nueva_marca($marca){
    global $db;
    $sql = "INSERT INTO marcas (Marca_Nombre) VALUES ('$marca')";
    return mysqli_query($db, $sql);
}


function marca_por_id($id){
    global $db;
    $sql = "SELECT * FROM marcas WHERE ID=$id";
    return mysqli_query($db, $sql);
}



function actualizar_marca($id, $marca_nombre){
    global $db;
    $sql = "UPDATE marcas SET Marca_Nombre='$marca_nombre' WHERE ID=$id";
    return mysqli_query($db, $sql);
}


function eliminar_marca($id){
    global $db;
    $sql = "DELETE FROM marcas WHERE ID=$id";
    return mysqli_query($db, $sql);
}

//materiales
function nuevo_material($material){
    global $db;
    $sql = "INSERT INTO materiales (Material_Nombre) VALUES ('$material')";
    return mysqli_query($db, $sql);
}


function material_por_id($id){
    global $db;
    $sql = "SELECT * FROM materiales WHERE ID=$id";
    return mysqli_query($db, $sql);
}



function actualizar_material($id, $material_nombre){
    global $db;
    $sql = "UPDATE materiales SET Material_Nombre='$material_nombre' WHERE ID=$id";
    return mysqli_query($db, $sql);
}


function eliminar_material($id){
    global $db;
    $sql = "DELETE FROM materiales WHERE ID=$id";
    return mysqli_query($db, $sql);
}
?>