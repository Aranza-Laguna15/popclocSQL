<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: php/intro-page.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="../images/logo.png" />
    <title>Pop Cloc </title>
<!-- Custom CSS -->
    <link href="bootstrap-3.3.6-dist/css/dashboard.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bootstrap-3.3.6-dist/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">
 
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Pop Cloc</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    
                    <li class="page-scroll">

             <form class="navbar-form navbar-right" action="php/login.php" method="post">
            <div class="form-group">
            <input type="text" placeholder="Correo" class="form-control" name="correo">
            </div>
            <div class="form-group">
             <input type="password" placeholder="Contraseña" class="form-control" name="contraseña">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Entrar</button><br>
</form> </li>
<li>
<a href="php/registro.php">Crear una cuenta</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="images/apple-icon-144x144.png" alt="">
                    <div class="intro-text">
                        <span class="name">Pop Cloc</span>
                        <hr class="star-light">
                        <span class="skills">Escribe tu futuro...</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Acerca de </h2>
                    <hr class="star-ligt">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <h3>MISIÓN</h3>
                    <p>Ofrecer un curso de enseñanza de la ortografía española basada en los mejores métodos para las personas que desean mejorar su dicción y escritura de forma gratuita.</p>
                </div>
                <div class="col-lg-4">
                    <h3>Visión</h3>
                    <p>Ser una plataforma reconocida en Latinoamérica por los grandes beneficios que ofrece a los usuarios en el aprendizaje y perfeccionamiento de un idioma, y así crecer implementando la enseñanza de otros idiomas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Desarrolladores</h3>
                        <p>Ing. Aranza Laguna</p>
                        <p>Ing. Ivan Flores </p>
                        <p>Ing. Manuel Islas</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Siguenos en las redes sociales</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/Popcloc/" class="btn-social btn-outline facebook"><i class="facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/PopCloc" class="btn-social btn-outline twitter"><i class="twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/pop.cloc/" class="btn-social btn-outline instagram"><i class="instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Descarga nuestra app</h3>
                        <p>No olvides descargar nuestra aplicación movil para tu Android gratis en la <a href="https://play.google.com/store?hl=es_419">Play Store</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
 <!-- Bootstrap Core JavaScript -->
     <script src="bootstrap-3.3.6-dist/libs/jquery-1.11.3.min.js"></script>
<!-- jQuery -->
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

  
</body>

</html>
