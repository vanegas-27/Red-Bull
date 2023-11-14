<?php

include("./src/php/database/persistencia.php");


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
                            <li>Home</li>
                            <li >Deports</li>
                            <li>Freestyle</li>
                            <li>Car's</li>
                            <li>Products</li>
                            <li>Artist</li>
                        </ul>
                    </div>
                </div>
            </div>
          </nav>
          <!-- hasta aca-->

          <nav class="container-fluid ">
            <ul class="d-flex justify-content-evenly col-md-12">
                <li>Home</li>
                <li>Deports</li>
                <li>Freestyle</li>
                <li>Car's</li>
                <li>Products</li>
                <li>Artist</li>
            </ul>
        </nav>

</header>

    <div class="row container-fluid container_main_aside">

        <main class="container_main col-md-8">

            <section class="container_main_img_banner">
                <!-- fotos de promocion de productos o batallas-->
                <img src="./assets/images/batalla.avif" type="img/avif" alt="esenarios de nuestros artistas" class="img-fluid" loading="lazy">
                <div class="arrows">
                    <i class="bi bi-caret-left"></i>
                    <i class="bi bi-caret-right"></i>
                </div>
            </section>

            <section class="row">

              <article class="col-md-6 container_main_notice">
                    <!-- battalas de frestyle concluidas banner-->
                    <div>
                        <span>19 oct 2023</span>
                        <img src="./assets/images/mainImg2.avif" type="img/avif" alt="" class="img-fluid">
                        <h3>News headiline will come here for thw feactude news section</h3>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p>couple of lines reload to News will...<a href="#">Read More</a></p>
                        <div class="d-flex justify-content-between align-items-center ">
                            <i class="bi bi-caret-left m-1"></i>
                            <i class="bi bi-caret-right m-1"></i>
                        </div>
                    </div>
                </article>

                <div class="col-md-6 container_main_notice_info">
                    <!-- battalas de frestyle concluidas las 3 mas recientes-->
                    <article class="d-flex">
                       <figure>
                            <img src="./assets/images/imgAside1.avif" alt="" type="img/jpg" class="img-fluid" loading="lazy">
                        </figure>
                        <div class="m-1">
                            <h3>News headiline will come here for thw feactude news section</h3>
                            <p>couple of lines reload to News will... <a href="#">Read More</a></p>
                            <span>19 oct 2023</span>
                        </div>
                    </article>
                </div>

            </section>

            <section class="container_main_category">

                <!-- secicion de renderizado por categoria freestyle , automoviles , artistas , bebidas-->
                <article>
                    <ul class="justify-content-between col-12">
                        <li>freestyle</li>
                        <li>Automoviles</li>
                        <li>Artistas</li>
                        <li>Productos</li>
                        <li><a href="#">View All</a></li>
                    </ul>

                    <div class="row mb-3">

                        <div class="col-sm-6 col-md-6 col-xl-4 container_main_category_img ">
                            <div>
                                <span>19 oct 2023</span>
                                <img src="./assets/images/mainImg2.avif" type="img/avif" alt="" class="img-fluid">
                                <h3>News headiline will come here section</h3>
                            </div>
                            <p>couple of lines reload to News for the game will...<a href="#">Read More</a></p>
                        </div>

                    </div>
                </article>

            </section>
        </main>

        <aside class="container_aside col-md-4">

        <!-- fotos de nuestros deportistas-->
            <section class="container_aside_img">
                <img src="./assets/images/imgAside1.avif" alt="" class="img-fluid" loading="lazy">
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
            <figure>
                <img src="./assets/images/imgAsidemen.avif" alt="" class="img-fluid" loading="lazy">
            </figure>

            <section>

                <ul class="ulAside">
                    <li class="liAside">Trending</li>
                </ul>
                <!-- articulos de productos nuevos-->
                <article class="mb-3">
                    <figure>
                        <img src="./assets/images/asideArtista1.avif" alt="" class="img-fluid" loading="lazy">
                    </figure>
                    <h4>News headiline will come here</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur elit... <a href="#">Read More</a></p>
                </article>

            </section>
        </aside>
    </div>

    <!--banner promocional-->
    <div class="banner container">
        <img src="./assets/images/banner2.jpg" alt="marca promocional en carro de la formula 1" class="img-fluid" loading="lazy">
    </div>


    <footer class="row ">


        <div class="col-sm-6 col-md-4  notices">
            <h5>Editor's Pick</h5>

            <!-- info adicional de la seccion de -> nuestros deportistas-->
            <article class="d-flex m-2">
                <figure class="imgFooter">
                    <img src="./assets/images/imgAside1.avif" alt="" type="img/jpg" class="img-fluid" loading="lazy">
                </figure>
                <div class="m-1">
                    <h3>News headiline will come here for thw feactude news section</h3>
                    <p>couple of lines reload to News will... <a href="#">Read More</a></p>
                    <span>19 oct 2023</span>
                </div>
            </article>

            <h6 class="p-3">View All</h6>

        </div>


        <div class="col-sm-6 col-md-4 notices">
            <h5>Popular Post</h5>

            <!-- informacion extra de los logros de la seccion -> foto/s de logros-->
            <article class="d-flex m-2">
                <figure class="imgFooter">
                    <img src="./assets/images/imgAside1.avif" alt="" type="img/jpg" class="img-fluid" loading="lazy">
                </figure>
                <div class="m-1">
                    <h3>News headiline will come here for thw feactude news section</h3>
                    <p>couple of lines reload to News will... <a href="#">Read More</a></p>
                    <span>19 oct 2023</span>
                </div>
            </article>

            <h6 class="p-3">View All</h6>
        </div>

        <div class="col-sm-6 col-md-4">
            <h5>Recent comments</h5>

            <!-- comenarios de la gente-->
            <div class="mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque repudiandae commodi voluptas ipsa...</p>
                <span class=" d-flex justify-content-between"><strong>By: Abhishek Sharma</strong><i>19 October 2023</i></span>
            </div>

            <h6 class="p-3">View All</h6>
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

</body>

</html>
