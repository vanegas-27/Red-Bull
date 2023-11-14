<?php
include("../database/persistencia.php");

$bd = new Bd();



$metodo = $_GET['metodo'];
$tabla = $_GET['tabla'];

$fecha = $_POST['fecha'];
$encabezado = $_POST['encabezado'];

$descripcion = $_POST['descripcion'];
$urlImag = $_FILES['imagen']['tmp_name'];
$nameImg = "imagen_".time()."_".$_FILES['imagen']['name'];

$location = "./src/upload/$nameImg";

$bd -> createTable("redbull",$tabla);

$array = array($fecha,$encabezado,$location,$descripcion);

if($metodo == "crear"){
    $bd -> insertDate("redbull",$tabla,$array);
    move_uploaded_file($urlImag,"../../upload/$nameImg");
    header("Location: ../interfaces/dashboard.php");

}else if($metodo == "actualizar"){
    echo"procesando...";
}else if($metodo == "eliminar"){
    echo"procesando...";
}else{
    echo"error en el metodo";
    // header("Location: ../interfaces/dashboard.php");
}
