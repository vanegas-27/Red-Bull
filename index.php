<?php

include("./src/php/database/persistencia.php");

$bd = new Bd();

$baseDatos = "redbull";


// seccion banner
$queryBanners = $bd -> read($baseDatos,"banners");
$nodoBanners = "";
$cont = 1;

if($queryBanners){
    foreach($queryBanners as $baner){
        if($cont == 1){
            $nodoBanners .= "<div class='carousel-item active'>";
        }else{
            $nodoBanners .= "<div class='carousel-item'>";
        }
        $nodoBanners .= "
            <img src='$baner[3]' class='d-block w-100' >
        </div>\n
        ";
        if($cont == 4){
            break;
        }
        $cont++;
    }
}

// fin seccion banner





// seccion eventos

$queryEventos = $bd -> read($baseDatos,"eventos");
$nodoEventos = "";
$nodoEventos2 = "";
$iteEvent = 0;

if($queryEventos){
    foreach($queryEventos as $evento){
        $iteEvent += 1;
        // if($iteEvent <= 1){
        //     $nodoEventos .= "
        //     <div>
        //         <span>$evento[1]</span>
        //         <img src='$evento[3]' alt='esenarios de nuestros artistas' class='img-fluid' loading='lazy'>
        //         <h3>$evento[2]</h3>
        //     </div>
        //     <div class='d-flex justify-content-between align-items-center'>
        //         <p>$evento[4]...<a href='#'>Read More</a></p>
        //         <div class='d-flex justify-content-between align-items-center '>
        //             <i class='bi bi-caret-left m-1'></i>
        //             <i class='bi bi-caret-right m-1'></i>
        //         </div>
        //     </div>\n
        //     ";
        // }

        if($iteEvent <= 3){
            $nodoEventos2 .= "

            <article class='d-flex'>
                <figure class='col-md-3'>
                    <img src='$evento[3]' class='img-fluid w-100' loading='lazy'>
                </figure>
                <div class='m-1 col-md-9'>
                    <h3>$evento[2]</h3>
                    <p>$evento[4]... <a href='#'>Read More</a></p>
                    <span>$evento[1]</span>
                </div>
            </article>\n
            ";
        }

    }
}

// fin seccion eventos



//seccion Torneos

$queryTorneos = $bd -> read($baseDatos,"torneos");
$nodoTorneos = "";
$nodoTorneos2 = "";
$iteTorneos = 0;


if($queryTorneos){
    foreach($queryTorneos as $torneo){
        $nodoTorneos .= "
        <img src='$torneo[3]' class='img-fluid' loading='lazy'>\n
        ";

        if($iteTorneos <= 3){
            $nodoTorneos2 .= "
            <article class='d-flex m-2'>
                <figure class='imgFooter col-md-6'>
                    <img src='$torneo[3]' class='img-fluid' loading='lazy'>
                </figure>
                <div class='m-1 col-md-6'>
                    <h3>$torneo[2]</h3>
                    <p>$torneo[4]... <a href='#'>Read More</a></p>
                    <span>$torneo[1]</span>
                </div>
            </article>\n
            ";
        }

    }
}

// fin seccion Logros



//seccion Logros

$queryLogros = $bd -> read($baseDatos,"logros");
$nodoLogros = "";
$nodoLogros2 = "";
$iteLogros = 0;

if($queryLogros){
    foreach($queryLogros as $logro){
        $iteLogros += 1;
        $nodoLogros .= "
        <img src='$logro[3]' class='img-fluid' loading='lazy'>
        ";

        if($iteLogros <= 3){
            $nodoLogros2 .= "
            <article class='d-flex m-2'>
                <figure class='imgFooter col-md-6'>
                    <img src='$logro[3]' class='img-fluid' loading='lazy'>
                </figure>
                <div class='m-1 col-md-6'>
                    <h3>$logro[2]</h3>
                    <p>$logro[4]... <a href='#'>Read More</a></p>
                    <span>$logro[1]</span>
                </div>
            </article>\n
            ";
        }

    }
}

// fin seccion Logros




//seccion Post

$queryPost = $bd -> read($baseDatos,"post");
$nodoPost = "";

if($queryPost){
    foreach($queryPost as $post){

        $nodoPost .= "
        <article class='mb-3'>
            <figure>
                <img src='$post[3]' class='img-fluid postImg' loading='lazy'>
            </figure>
            <h4>$post[2]</h4>
            <p>$post[4]... <a href='#'>Read More</a></p>
        </article>\n
        ";
    }
}

// fin seccion Post


// inicio comentarios
$bd -> createTableC("redbull","comentarios");

$conn = $bd -> conectionBd("redbull");

$sql = "SELECT * FROM comentarios;";

$comentarios = "";

$queryComentarios = mysqli_query($conn,$sql);

if($queryComentarios){
    $contComen = 1;
    while($row = mysqli_fetch_array($queryComentarios)){

        if($contComen == 6){
            break;
        }

        $comentarios .= "
        <div class='mb-3'>
            <p>".$row["comentario"]."...</p>
            <span class=' d-flex justify-content-between'><strong>By: ".$row["nombre"]."</strong><i>".$row["fecha"]."</i></span>
        </div>
        \n";

        $contComen++;
    };


}



//fin comentario


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Bull| Te da alas  los mejores en noticias de deporte mundialmente, fresstyle, autos, bebidas, ropa </title>

    <!-- iconos de la pagina oficial de Red Bull-->
    <link rel="icon" sizes="16x16" href="https://img.redbull.com/images/c_scale,w_16/favicons/www.redbull.com/favicon/favicon-16.png">
    <link rel="icon" sizes="32x32" href="https://img.redbull.com/images/c_scale,w_32/favicons/www.redbull.com/favicon/favicon-32.png">
    <link rel="icon" sizes="96x96" href="https://img.redbull.com/images/c_scale,w_96/favicons/www.redbull.com/app-icon/favicon-96.png">


    <!-- link de jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!--descripcion de pagina-->
    <meta name="description"
        content="
            Red Bull, la icónica bebida energética, ha cautivado a consumidores de todo el mundo con su fórmula única y refrescante que combina taurina, cafeína y vitaminas para proporcionar una dosis instantánea de energía. Diseñada para impulsar el rendimiento físico y mental, Red Bull ha trascendido su función original como una bebida estimulante para convertirse en un símbolo de estilo de vida activo y aventurero.">

    <!--palabras claves-->
    <meta name="keywords"
        content="Estimulante, Taurina, Cafeína Vitaminas, Refrescante, Deportes, extremos, Patrocinio, Alas, Sabor, Rendimiento, Estilo de vida, activo Marca de bebidas, Marketing, Aventura, Innovación, Fórmula 1, Música, Desempeño, físico">

    <!--para decirle al los robots que la pagina sea mas visible al usuario y pueda ser indexada-->
    <meta name="robots" content="index,follow">

    <!--author-->
    <meta name="author" content="Davinson Andres Vanegas Tabares">

    <!--derechos de autor-->
    <meta name="copyright" content="Davinson vanegas">

    <!--cache-->
    <meta http-equiv="cache-control" content="cache">
    <!--tiempo de cache-->
    <meta http-equiv="expires" content="0">


    <!-- link para el css bootstrap 5.0.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!--link de icons de bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!--fuente de textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;400&display=swap" rel="stylesheet">

    <!--estilos propios-->
    <link rel="stylesheet" type="text/css" href="./css/index.css">

    <script src="./src/js/index.js"></script>


</head>

<body class="container-fluid">

<header class="row container-fluid">
        <!--- navegacion bootstrap-->
        <nav class="navbar bg-body-tertiary p-0 p-sm-2">

            <div class="container-fluid p-0 p-sm-2">

                <figure class="col-md-3 d-flex justify-content-between container-fluid" >
                    <img src="./assets/icons/redbullcom-logo.svg" type="img/svg" alt="Logo Red Bull" class="img-fluid" loading="lazy">
                    <button class="navbar-toggler menHamn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
                    </button>
                </figure>

                <figure class="col-md-9">
                    <img src="./assets/images/bannerPrincipal.webp" alt="banner promocional" type="img/webp" class="img-fluid" loading="lazy">
                </figure>

                <div class="offcanvas-header">

                <div class="offcanvas offcanvas-start bg-transparent" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                    <div class="offcanvas-header">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    <button type="button" class="btn-close bg-primary" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li> <a href=".">Home</a></li>
                            <li><a href="./src/php/interfaces/productos.php?categoria=Deports">Deports</a></li>
                            <li> <a href="./src/php/interfaces/productos.php?categoria=Freestyle">Freestyle</a></li>
                            <li><a href="./src/php/interfaces/productos.php?categoria=Cars">Cars</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </nav>
          <!-- hasta aca-->

          <nav class="container-fluid ">
            <ul class="d-flex justify-content-evenly col-md-12">
                <li> <a href=".">Home</a></li>
                <li><a href="./src/php/interfaces/productos.php?categoria=Deports">Deports</a></li>
                <li> <a href="./src/php/interfaces/productos.php?categoria=Freestyle">Freestyle</a></li>
                <li><a href="./src/php/interfaces/productos.php?categoria=Cars">Cars</a></li>
            </ul>
        </nav>

</header>

    <div class="row container-fluid container_main_aside">

        <main class="container_main col-md-8">

            <!-- banner de bootstrap-->
            <div id="carouselExample" class="carousel slide container_main_img_banner">
                <div class="carousel-inner">

                <?= $nodoBanners?>

                </div>
                <div class="arrows d-flex">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <i class="bi bi-caret-left arrow" aria-hidden="true"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <i class="bi bi-caret-right arrow" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            <section class="row">

              <article class="col-md-6 container_main_notice product">
                    <!-- battalas de frestyle o eventos de marca-->

                    <?= $nodoEventos ?>


                    <div>
                        <span>Desarrollador</span>
                        <img src='./assets/images/mia.jpeg' alt='foto mia' class='img-fluid' loading='lazy'>
                        <h3>Davinson vanegas</h3>
                    </div>
                    <div class='d-flex justify-content-between align-items-center'>
                        <p>joven apasiona por la tecnologia y el desarrollo de sortware.<a href='https://github.com/vanegas-27' target="_blanck">Read More</a></p>
                        <div class='d-flex justify-content-between align-items-center '>
                        <a onClick= 'javascript:leftside()'><i class='bi bi-caret-left m-1 product-left'></i></a>
                        <a onClick= 'javascript:rightside()'><i class='bi bi-caret-right m-1 product-right'></i></a>
                        </div>
                    </div>

                </article>

                <div class="col-md-6 container_main_notice_info">
                    <!-- battalas de frestyle concluidas las 3 mas recientes-->

                    <?= $nodoEventos2 ?>

                </div>

            </section>

            <section class="container_main_category">

                <!-- secicion de renderizado por categoria freestyle , automoviles , artistas , bebidas-->
                <article>
                    <ul class="justify-content-between col-12 listCategory" >
                            <li >Deports</li>
                            <li >Freestyle</li>
                            <li >Cars</li>
                        <li><a href="./src/php/interfaces/productos.php">View All</a></li>
                    </ul>

                    <div class="row mb-3 articulos">

                    </div>
                </article>

            </section>
        </main>

        <aside class="container_aside col-md-4">

        <!-- fotos de nuestros deportistas-->
            <section class="container_aside_img">

                <?= $nodoTorneos?>

            </section>

            <!-- redes sociales -->
            <section>
                <h3>Our Social Media</h3>
                <span></span>
                <div class="d-flex container_aside_redes justify-content-between">
                    <ul class="m-1">
                        <li><i class="bi bi-facebook"></i> Facebook</li>
                        <li><i class="bi bi-twitter"></i> Twitter</li>
                        <li><i class="bi bi-youtube"></i> Youtube</li>
                        <li><i class="bi bi-instagram"></i> Instragram</li>
                        <li><i class="bi bi-pinterest"></i> Pinterst</li>
                    </ul>
                    <ul class="m-1">
                        <li>31k follower</li>
                        <li>31k follower</li>
                        <li>31k follower</li>
                        <li>31k follower</li>
                        <li>31k follower</li>
                    </ul>
                </div>
            </section>

            <!-- foto/s de logros-->
            <figure >
                <?= $nodoLogros?>
            </figure>

            <section>

                <ul class="ulAside">
                    <li class="liAside">Trending</li>
                </ul>
                <!-- articulos de productos nuevos-->

                <?= $nodoPost?>

            </section>
        </aside>
    </div>

    <!--banner promocional-->
    <div class="banner container">
        <img src="./assets/images/banner2.jpg" alt="marca promocional en carro de la formula 1" class="img-fluid" loading="lazy">
    </div>


    <footer class="row ">


        <div class="row col-sm-6 col-md-4  notices">
            <h5>Editor's Pick</h5>

            <!-- info adicional de la seccion de -> nuestros deportistas-->
            <?= $nodoLogros2 ?>

            <h6 class="p-3">View All</h6>

        </div>


        <div class="row col-sm-6 col-md-4 notices">
            <h5>Popular Post</h5>

            <!-- informacion extra de los logros de la seccion -> foto/s de logros-->
            <?= $nodoTorneos2?>

            <h6 class="p-3">View All</h6>
        </div>

        <div class=" col-sm-6 col-md-4">
            <h5>Recent comments</h5>
            <?= $comentarios ?>
            <!-- comenarios de la gente-->
            <!-- <div class="mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque repudiandae commodi voluptas ipsa...</p>
                <span class=" d-flex justify-content-between"><strong>By: Abhishek Sharma</strong><i>19 October 2023</i></span>
            </div> -->
            <h6 class="p-3"><a href="./src/php/interfaces/comentarios.php?nombre=davidson">View All</a></h6>
        </div>

        <div class="d-flex  flex-wrap justify-content-between copy">
           <p class="">&copy;copyright 2023 All Rights Reserved</p>
           <ul class="d-flex flex-wrap m-0 gap-4">
            <li>Terms and Conditions</li>
            <li>Privacy Policy</li>
            <li>Disclaimer</li>
            <li>Advertisement</li>
           </ul>
        </div>
    </footer>

    <aside class="menuLateral">
        <div>
            <ul>
                <li><a href="./src/php/interfaces/login.php"><i class="bi bi-file-lock2-fill"></i></a>Login</li>
            </ul>
            <!-- Button trigger modal -->
            <ul data-bs-toggle="modal" data-bs-target="#exampleModal">
                <li><i class="bi bi-chat-left-dots-fill"></i>Comentario</li>
            </ul>
        </div>
    </aside>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="row p-2 m-2">
                    <h6 class="modal-title fs-5 col-11" id="exampleModalLabel">Dejanos un comentario.</h6>
                    <button type="button" class="btn-close col-1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./src/php/procesos/comentarios.php" method="post" class="p-3" enctype="multipart/form-data">
                    <input type="text" class="form-control m-1" name="nombre" placeholder="Nombre..." required>
                    <label for="usu">Foto Usuario</label>
                    <input type="date" class="form-control m-1" name="fecha" id="usu" required>
                    <input type="file" class="form-control m-1" name="imagenUsu" id="usu" required>
                    <textarea type="text" class="form-control m-1" name="comentario" placeholder="comentario..." required></textarea>

                    <button type="submit" class="btn btn-outline-primary m-2">enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>



        window.numero = 0;

        function leftside() {


            if(numero <= 0){
                return;
            }else{
                numero-=1;
            }



            $.ajax({
                url : "./src/php/renders/renderProduct.php",
                type : "POST",
                data : {
                    lado : "izquierda",
                    num : numero,
                },

                beforeSend : function(){
                    console.log('peticon enviada left');
                },

                success : function(data){
                    $('.product').html(data);
                },

                complete : function(){
                    console.log('se completo');
                    console.log(numero);
                }

            });
        }



       function rightside() {

        if(numero >= 2){
            return;
        }else{
            numero+=1;
        }

                $.ajax({
                    url : "./src/php/renders/renderProduct.php",
                    type : "POST",
                    data : {
                        lado : "derecha",
                        num : numero
                    },

                    beforeSend : function(){
                        console.log('peticon enviada rigt');
                    },

                    success : function(data){
                        $('.product').html(data);
                    },

                    complete : function(){
                        console.log('se completo');
                        console.log(numero);
                    }

                });
        }


</script>

</html>
