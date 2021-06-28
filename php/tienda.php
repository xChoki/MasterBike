<!DOCTYPE html>
<html lang="en">

<head>

    <!-- TITLE -->
    <title>Tienda - MasterBike</title>

    <!-- META UTF-8 -->
    <meta charset="UTF-8">

    <!-- RESPONSIVE -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">

    <!-- EXTERNAL FILES -->
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu-style.css">
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/info.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/searchbar.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/searchbar.js"></script>

    <link rel="shortcut icon" href="images/logos/icono1.png">
</head>

<body>
    <header>
        <div class="container">
            <!-- MENU BUTTON-->
            <a href="../index.html"><h1>MasterBike</h1></a>
            <!--
                <img class="img-menu" src="images/logos/logoblanco1.png">
                -->
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>

            <!-- MENU -->
            <nav class="menu">
                <a href="#"><button type="button" class="btn float-right">Contacto</button></a>
                <a href="registrar.html"><button type="button" class="btn btn-secondary float-right">Registrarse</button></a>
                <a href="iniciar-sesion.html"><button type="button" class="btn btn-primary float-right">Iniciar sesion</button></a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Banner -->
        <section id="banner">
            <img src="../images/banner.jpg" alt="banner">
            <div class="container">
                <h2>Bienvenido a nuestra tienda</h2>
            </div>
        </section>

        <div class="container">
            <div class="busqueda">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h1>Tienda</h1>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="search-box">
                            <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                            <form action="" class="search-form">
                                <input type="text" placeholder="Search" id="search" autocomplete="off">
                            </form>
                            <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;" xml:space="preserve">
                                <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                                <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
                            </svg>
                            <div class="go-icon"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                $con=mysqli_connect("localhost","root","","masterbike") or die ("PROBLEMAS CON LA BASE DE DATOS");
                $registr=mysqli_query($con,"select nombre from producto") or die (mysqli_error($con));

                while($re=mysqli_fetch_array($registr))
                {
                echo '<div class="col-md-4 col-xs-12">';
                    echo '<div class="card mb-4">';
                        echo '<a href="#">';
                            echo '<img class="card-img-top" src="../images/bici2.jpg" alt="Card image cap" />';
                            echo '<div class="card-body text-dark bg-light rounded-3">';
                                echo '<h2 class="card-title text-center"> ' , $re['nombre'] , '</h2>';
                            echo '</div>';
                        echo '</a>';
                    echo '</div>';
                echo '</div>';
                }
                ?>
                
            </div>
        </div>
        </div>

    </main>
</body>

</html>