<?php
// include("../database/persistencia.php");

// $bd = new Bd();


// $tabla = $_POST['tabla'];
// $metodo = $_POST['metodo'];

// $fecha = $_POST['fecha'];
// $encabezado = $_POST['encabezado'];
// $imagen = $_POST['imagen'];
// $descripcion = $_POST['descripcion'];


// $bd -> createTable("redbull",$tabla);



// $array = array($fecha,$encabezado,$imagen,$descripcion);

// if($metodo == "crear"){
//     $bd -> insertDate("redbull",$tabla,$array);
// }else if($metodo == "actualizar"){
//     echo('en proceso...');
// }else{
//     echo('en proceso metodo...');
// }


// ---------------------------

include("../database/persistencia.php");

$bd = new Bd();


$metodo = $_GET['metodo'];
$tabla = $_GET['tabla'];

$fecha = $_POST['fecha'];
$encabezado = $_POST['encabezado'];

$descripcion = $_POST['descripcion'];
$urlImag = $_FILES['imagen']['tmp_name'];
$nameImg = "imagen_".time()."_".$_FILES['imagen']['name'];

move_uploaded_file($urlImag,"../../upload/$nameImg");

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
    header("Location: ../interfaces/dashboard.php");
}

//original de artuculo

