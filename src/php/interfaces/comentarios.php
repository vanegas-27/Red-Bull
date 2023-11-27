<?php
require('../database/persistencia.php');

$bd = new Bd();
// $baseDatos = "id21559697_redbull";
$baseDatos ="redbull";

$nodos = "";

if(isset($_GET['nombre'])){

    $nombre = $_GET['nombre'];

    $resul = $bd -> search($baseDatos,"comentarios",["nombre",$nombre]);

    $sql = "SELECT * FROM comentarios;";

    $resul = mysqli_query($conn,$sql);


    while($row = mysqli_fetch_array($resul)){
        $nodos .="
        <article class='col-12 col-sm-6 col-xl-4 container-article scale-up-br'>
            <div>
                <img src='../../../".$row['imagen']."' alt='Foto de producto' class='img-fluid'>
            </div>
            <div class='container-parrafo'>
                <h5 class='price'>".$row['nombre']."</h5>
                <p>".$row['comentario']."</p>
                <span>".$row['fecha']."</span>
            </div>
        </article>\n";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishine | los mejores cosmeticos y accesorios baratos y de buena calidad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../../../css/productos/index.css">
</head>
<body>

    <header class="container-fluid row container-header">
        <div class="col-12 col-md-3">
            <img src="../../../assets/icons/redbullcom-logo.svg" alt="Logo de la empresa">
        </div>

        <figure class="col-md-9">
            <img src="../../../assets/images/bannerPrincipal.webp" alt="banner promocional" type="img/webp" class="img-fluid" loading="lazy">
        </figure>

    </header>

    <main class="row container-fluid main justify-content-center">

        <section class="row row-cols-4">

            <?php if(empty($nodos)):?>
                <h2 class="col-12 col-md-6">Lo sentimos, no se encontraron resultados... </h2>
            <?php else: ?>
                <?=$nodos;?>
            <?php endif; ?>

        </section>

    </main>
</body>
</html>
