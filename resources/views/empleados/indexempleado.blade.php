<?php
    $conexion=mysqli_connect('localhost','root','','tracto');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>

</body>
</html>

<!-- CSS FILES -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/bootstrap-icons.css" rel="stylesheet">

<link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">

<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" class="logo img-fluid" alt="Autopartes Tracto">
            <span>
                Autopartes Tracto de Mexico
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " href="/empleado">Empleados</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tecnico">Tecnicos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Causes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                        id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">News</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                        <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <section class="empleados section-padding">

        <div class="container">
            <h1>Empleados</h1>

            <a href="empleado/create"><button>Agregar empleado</button></a><br><br>

                <table class="table table-bordered border-1">
                    <tr>
                        <td>ID</td>
                        <td>Nombre completo</td>
                        <td>Nombre corto</td>
                        <td>Correo electronico</td>
                        <td>Numero de nomina</td>
                        <td>Puesto</td>
                        <td>Departamento</td>
                        <td>Fecha de ingreso</td>
                        <td>Detalles</td>
                    </tr>

                    <?php
                    $sql="SELECT * from empleados";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                        
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nomb_completo'] ?></td>
                        <td><?php echo $mostrar['nomb_corto'] ?></td>
                        <td><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['n_nomina'] ?></td>
                        <td><?php echo $mostrar['puesto'] ?></td>
                        <td><?php echo $mostrar['departamento'] ?></td>
                        <td><?php echo $mostrar['fecha_ingreso'] ?></td>
                        @foreach ($empleados as $empleado)
                            <td><a href="empleado/{{ $empleado->id }}"><button>Detalles</button></a></td>
                            @unset($empleado)
                        @endforeach
                    </tr>
                    <?php
                    }
                    ?>
                    
                </table>
                    <ul>
                        @foreach ($empleados as $empleado)
                            <li>{{ $empleado['nomb_completo'] }} - {{ $empleado['nomb_corto'] }} - {{ $empleado['correo'] }} - {{ $empleado['n_nomina'] }} - {{ $empleado['puesto'] }} - {{ $empleado['departamento'] }} - {{ $empleado['fecha_ingreso'] }} <a href="empleado/{{ $empleado->id }}"><button>Detalles</button></a></li>
                        @endforeach

                    </ul>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                <img src="images/logo.png" class="logo img-fluid" alt="">
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone me-2"></i>

                    <a href="tel: 305-240-9671" class="site-footer-link">
                        305-240-9671
                    </a>
                </p>

                <p class="text-white d-flex">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                        donate@charity.org
                    </a>
                </p>

                <p class="text-white d-flex mt-3">
                    <i class="bi-geo-alt me-2"></i>
                    Akershusstranda 20, 0150 Oslo, Norway
                </p>

                <a href="#" class="custom-btn btn mt-3">Get Direction</a>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-7 col-12">
                    <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                        Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a><br>Distribution:
                        <a href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div>

                <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-linkedin"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/counter.js"></script>
<script src="js/custom.js"></script>

</body>

</html>