<?php
include("../database/persistencia.php");

$bd = new Bd();



$metodo = $_GET['metodo'];
$tabla = $_GET['tabla'];

$fecha = $_POST['fecha'];
$encabezado = $_POST['encabezado'];
$categoria = $_POST['categoria'];

$descripcion = $_POST['descripcion'];
$urlImag = $_FILES['imagen']['tmp_name'];
$nameImg = "imagen_".time()."_".$_FILES['imagen']['name'];

$location = "./src/upload/$nameImg";

$array = array($fecha,$encabezado,$location,$descripcion,$categoria);

if($metodo == "crear"){

    $bd -> insertDate("redbull",$tabla,$array);
    move_uploaded_file($urlImag,"../../upload/$nameImg");
    header("Location: ../interfaces/dashboard.php");

}else if($metodo == "actualizar"){

    $id = $_GET['id'];

    $array = array($fecha,$encabezado,$location,$descripcion,$id);

    $bd -> update("redbull",$tabla,$array);

    move_uploaded_file($urlImag,"../../upload/$nameImg");

    header("Location: ../interfaces/dashboard.php");

}else if($metodo == "eliminar"){

    $array = array("id",$_GET['id']);

    $bd -> delete("redbull",$tabla,$array);

    header("Location: ../interfaces/dashboard.php");
}else{
    echo"error en el metodo";
    // header("Location: ../interfaces/dashboard.php");
}

// //original de artuculo




