<?php 
include_once 'includes/db.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Zona del Cliente</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">

</head>
<body>

    <!--================ Header Inicio =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="../img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Manu -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="../index.html">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="../quienes-somos.html">Quíenes somos</a></li>
                            <li class="nav-item"><a class="nav-link" href="../mision-y-vision.html">Misión y visíon</a>
                            </li>
                            <li class="nav-item">
                                <a href="../productos.html" class="nav-link">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a href="../servicios.html" class="nav-link">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li class=""><a class="sign_up" href="includes/logout.php">Cerrar sesión</a></li>
                        </ul>
                    </div>
                    </div>
            </nav>
        </div>
    </header>
    <!--================ Heder =================-->
    <!--================ Banner =================-->
    <section class="hero-banner d-flex align-items-center">
        <div class="fondo-banner-6">

        </div>
        <div class="container text-center" style="z-index: 1;">
            <h2>Zona del Cliente</h2>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Zona del Cliente</li>
                </ol>
            </nav>
        </div>

    </section>
  
    <section>
    <!---============= Fin Banner =================-->

    <section class="faq_area area-padding-top">
    <blockquote class="generic-blockquote">
    <h1 class="bienvenida">Bienvenido <?php echo  $_SESSION['user']  ?> esta es tu Zona del Cliente</h1>  
    </blockquote>
    </section>

    <section class="faq_area area">
    <div class="">

            <div class="container">
                <div class="section-top-border">
                    <h2 class="mb-30 title_color">Tus compras</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <blockquote class="generic-blockquote">
                            <div class="tabla1">
                                <?php
                                echo "<div class='tbl-header'>";
                                echo "<table border='1'; class='tbl-header';>";
                                echo "<tr class=''>";
                                echo "<th>codigo de la compra</td>";
                                echo "<th>Descripción</td>";
                                echo "<th>Total</td>";
                                echo "<th>Id del usuario</td>";
                                echo "<th>Username</td>";
                                echo "</tr>";
                                echo "</table>";
                                echo "</div>";
                                ?>
                                <?php 
                                echo"<div class='tbl-content'>";
                                echo "<table>";
                                $prueba= $_SESSION['user'];
                                $query2 = $this->connect()->prepare('SELECT * FROM compras WHERE username = ?');
                                $query2->execute(array($prueba));       
                                $arreglo=$query2->fetch(PDO::FETCH_NUM);  
                                while($arreglo=$query2->fetch(PDO::FETCH_NUM)){
                                echo "<tr class='tbl-content'>";
                                echo "<td>$arreglo[0]</td>";
                                echo "<td>$arreglo[1]</td>";
                                echo "<td>$arreglo[2]</td>";
                                echo "<td>$arreglo[3]</td>";
                                echo "<td>$arreglo[4]</td>";
                                echo "</tr>";  }
                                echo "</table>";
                                echo "</div>";
                                ?>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </section>

    <!-- ================ footer ================= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Sobre nosostros</h4>
                    <p>Somos una empresa de venta de embutidos al detal y al mayor, dedicados a satisfacer tus
                        necesidades.</p>
                    <div class="footer-logo">
                        <img src="../img/logo.png" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Información de Contacto</h4>
                    <div class="footer-address">
                        <p>Ubicación: Maracay estado Aragua.</p>
                        <span>Teléfono: +584124118188</span>
                        <span>Email : Nelsonrondon36@gmail.com</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Cuentas</h4>
                    <div class="footer-address">
                        <span>Banco Bicenterio: ** *** **** *** </span>
                        <span>Banco BNC: ** *** **** *** </span>
                        <span>Pago Movíl: ** *** **** *** </span>
                    </div>

                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="#" method="get">
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Tu correo"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu correo '">
                                <div class="input-group-append">
                                    <button class="btn click-btn" type="submit">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!--Copyright -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta
                    página esta hecha
                    <i class="fa fa-heart" aria-hidden="true"></i> by
                    <a href="https://www.instagram.com/nelson_swag1/?hl=en" target="_blank">Nelson Rondón</a>
                    <!-- Copyright -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="https://www.facebook.com/1xSWAG">
                        <i class="ti-facebook"></i>
                    </a>
                    <a href="https://www.facebook.com/1xSWAG">
                        <i class="ti-twitter-alt"></i>
                    </a>
                    <a href="https://www.facebook.com/1xSWAG">
                        <i class="ti-dribbble"></i>
                    </a>
                    <a href="https://www.facebook.com/1xSWAG">
                        <i class="ti-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ Fin footer Area ================= -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/animate-css/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
</body>
</html>