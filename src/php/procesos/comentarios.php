<?php

include('../database/persistencia.php');

//obtengo los datos
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$imagen = $_FILES['imagenUsu'];
$fecha = $_POST['fecha'];

//desglozo la imagen
$nombreImg = $imagen['name'];
$path = $imagen['tmp_name'];
$newName = "usuario_".time()."_$nombreImg";
$location = "./src/upload/$newName";

$bd = new Bd();

//inserto datos en table
$bd -> insertDateC("redbull","comentarios",[$nombre,$fecha,$location,$comentario]);

header("Location: ../../../index.php");

