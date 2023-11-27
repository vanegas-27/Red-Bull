<?php

include('../database/persistencia.php');

$bd = new Bd();

$query = $bd -> search("redbull","articulos",["categoria",$_POST['categoria']]);

$nodos = "";

while($row = mysqli_fetch_array($query)){
    $nodos .= "
    <div class='col-sm-6 col-md-6 col-xl-4 container_main_category_img '>
        <div>
            <span>".$row["fecha"]."</span>
            <img src='".$row["imagen"]."' class='img-fluid'>
            <h3>".$row["encabezado"]."</h3>
        </div>
        <p>".$row["descripcion"]."...<a href='#'>Read More</a></p>
    </div>\n
    ";
}
echo $nodos;
