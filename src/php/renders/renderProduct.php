<?php

include("../database/persistencia.php");


$queryEventos = $bd -> read("redbull","eventos");


$rango =$queryEventos;

$numBanner = $_POST['num'];


    $banner = $queryEventos[$numBanner];
    $nodoEventos = "
    <div>
        <span>$banner[1]</span>
        <img src='$banner[3]' alt='esenarios de nuestros artistas' class='img-fluid' loading='lazy'>
        <h3>$banner[2]</h3>
    </div>
    <div class='d-flex justify-content-between align-items-center'>
        <p>$banner[4]...<a href='#'>Read More</a></p>
        <div class='d-flex justify-content-between align-items-center '>
            <a onClick= 'javascript:leftside()'><i class='bi bi-caret-left m-1 product-left'></i></a>
            <a onClick= 'javascript:rightside()'><i class='bi bi-caret-right m-1 product-right'></i></a>
        </div>
    </div>\n
    ";


echo($nodoEventos);



