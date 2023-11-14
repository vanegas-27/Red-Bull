<?php

include "../database/persistencia.php";

if(isset($_POST['pass'])){

    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $bd = new Bd();

    $emailExist = $bd -> exists("redbull","credenciales",["correo",$email]);
    $passExist  = $bd -> exists("redbull","credenciales",["password",$pass]);

    if($emailExist and $passExist){
        header("Location: ./dashboard.php");
    }else{
        echo "<script>alert('Usuario o contraseña incorrecta');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" href="../../../css/login/login.css">

</head>
<body>
    <form action="" method="post" class="row container m-auto">
        <figure class="d-none d-md-block col-md-6">
            <img src="../../../assets/images/usu.avif" alt="foto de login" class="img-fluid">
        </figure>

        <div class="col-12 col-md-6">
            <figure>
                <img src="../../../assets/images/usu.png" alt="banner de login" class="img-fluid">
            </figure>

            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>

            <div class="form-floating">
                <input name="pass" type="password" class="form-control" id="pass" placeholder="Password" required>
                <label for="pass">Password</label>
            </div>

            <button name="send" type="submit" class="btn btn-outline-primary m-3" >enviar</button>

        </div>

    </form>


</body>
</html>
