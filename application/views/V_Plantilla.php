<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>SpicyX | Home</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon">

        <!-- Font awesome -->
        <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">   
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/slick.css">    
        <!-- Date Picker -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap-datepicker.css">    
        <!-- Theme color -->
        <link id="switcher" href="<?= base_url() ?>assets/css/theme-color/default-theme.css" rel="stylesheet">     

        <!-- Main style sheet -->
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">    


        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <?php $this->session->set_userdata(array('URL' => current_url())); ?>
        <!-- Pre Loader -->
<!--        <div id="aa-preloader-area">
            <div class="mu-preloader">
                <img src="<?= base_url() ?>assets/img/preloader.gif" alt=" loader img">
            </div>
        </div>-->
        <!--START SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#">
            <i class="fa fa-angle-up"></i>
            <span>Top</span>
        </a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start header section -->
        <header id="mu-header">  
            <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->                                                        
                        <!--  Image based logo  -->
                        <a class="navbar-brand" href="index.html"><img src="<?= base_url() ?>assets/img/logo.png" alt="Logo img"></a> 
                        <!--  Text based logo  -->
             <!--           <a class="navbar-brand" href="index.html"><span>SpicyX</span></a>   -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">

                            <!-- SESIÓN NO INCIADA -->
                            <?php if (!SesionIniciadaCheck()): //Sólo mostrar si la sesión iniciada ?>
                                <li><a href="<?= base_url() . 'index.php/Login' ?>" >LOGIN</a></li>
                                <a href="#login"></a>
                            <?php endif; ?> 
                                
                             <!-- SESIÓN INCIADA -->   
                            <?php if (SesionIniciadaCheck()): //Sesión iniciada ?> 
                             <!--Menú Original -->  
                            <li><a href="#mu-slider">HOME</a></li>
                              <!-- Menú salir -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">HOLA:  <?= $this->session->userdata('username'); ?><span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">                
                                        <li>
                                            <a href="<?= base_url() . 'index.php/Login/Logout' ?>">SALIR</a>
                                        </li>
                                    
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">MI CUENTA<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">          
                                                    <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Usuario</a></li>                                    
                                                    <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Usuario</a></li>                                          
                                            </ul>
                                        </li>
                                    </ul>
                            </li>

                        <!-- Menú Opciones usuario-->
                       
                            <!-- /Menú Opciones usuario-->
                            <!-- Menú Opciones Alumnos-->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">ALUMNADO<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu"> 
  <!----------------------------------------------------------------------------------------------------------------------------------------------->

                                    <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                    <li><a href="<?= base_url() . 'index.php/AlumnoModify' ?>">Modificar Alumno</a></li>                                    
                                    <li><a href="<?= base_url() . 'index.php/AlumnoRemove' ?>">Eliminar Alumno</a></li>                                          
                                </ul>
                            </li>
                            
                            
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">AT. DIVERSIDAD<span class="caret"></span></a>
                               <ul class="dropdown-menu" role="menu">                            
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">NEAE<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu"> 
                                            <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                            <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Alumno</a></li>                                    
                                            <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Alumno</a></li>                                          
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">MEDIDAS EDUCATIVAS<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu"> 
                                            <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                            <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Alumno</a></li>                                    
                                            <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Alumno</a></li>                                          
                                        </ul>
                                    </li>
                               </ul>    
                            </li>
                            
                                                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">AT. DIVERSIDAD<span class="caret"></span></a>
                               <ul class="dropdown-menu" role="menu"> 
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">PROTOCOLOS<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu"> 
                                            <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                            <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Alumno</a></li>                                    
                                            <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Alumno</a></li>                                          
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">ENTREVISTAS<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu"> 
                                            <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                            <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Alumno</a></li>                                    
                                            <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Alumno</a></li>                                          
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">TRAY. ACADEMICA<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu"> 
                                            <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                            <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Alumno</a></li>                                    
                                            <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Alumno</a></li>                                          
                                        </ul>
                                    </li> 
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">TRANSITO<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu"> 
                                            <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                            <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Alumno</a></li>                                    
                                            <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Alumno</a></li>                                          
                                        </ul>
                                    </li>
                          
                               </ul>    
                            </li>

                             <!----->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">CONSEJO ORIENTADOR<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu"> 
                                    <li><a href="<?= base_url() . 'index.php/AlumnoInsert' ?>">Insertar Alumno</a></li>  
                                    <li><a href="<?= base_url() . 'index.php/UserModify' ?>">Modificar Alumno</a></li>                                    
                                    <li><a href="<?= base_url() . 'index.php/UserRemove' ?>">Eliminar Alumno</a></li>                                          
                                </ul>
                            </li>
                            
                            <!----->



                             <!-- /Menú Opciones Alumnos-->
                            <?php endif; ?> 
                        </ul>                            
                    </div><!--/.nav-collapse -->       
                </div>          
            </nav> 
        </header>
        <!-- End header section -->


        <!-- Start slider  -->
        <section id="mu-slider">
            <div class="mu-slider-area"> 
                <!-- Top slider -->
                <div class="mu-top-slider">
                    <!-- Top slider single slide -->
                    <div class="mu-top-slider-single">
                        <img src="<?= base_url() ?>assets/img/slider/1.jpg" alt="img">
                        <!-- Top slider content -->
                        <div class="mu-top-slider-content">
                            <span class="mu-slider-small-title">DEPARTAMENTO </span>
                            <h2 class="mu-slider-title">DE ORIENTACIÓN</h2><!--
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
                            <a href="#" class="mu-readmore-btn">READ MORE</a>-->
                        </div>
                        <!-- / Top slider content -->
                    </div>
                    <!-- / Top slider single slide -->    
                    <!-- Top slider single slide -->
                    <div class="mu-top-slider-single">
                        <img src="<?= base_url() ?>assets/img/slider/2.jpg" alt="img">
                        <!-- Top slider content -->
                        <div class="mu-top-slider-content">
                            <span class="mu-slider-small-title">DEPARTAMENTO </span>
                            <h2 class="mu-slider-title">DE ORIENTACIÓN</h2><!--
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
                            <a href="#" class="mu-readmore-btn">READ MORE</a>-->
                        </div>
                        <!-- / Top slider content -->
                    </div>
                    <!-- / Top slider single slide --> 
                    <!-- Top slider single slide -->
                    <div class="mu-top-slider-single">
                        <img src="<?= base_url() ?>assets/img/slider/3.jpg" alt="img">
                        <!-- Top slider content -->
                        <div class="mu-top-slider-content">
                            <span class="mu-slider-small-title">DEPARTAMENTO </span>
                            <h2 class="mu-slider-title">DE ORIENTACIÓN</h2><!--
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
                            <a href="#" class="mu-readmore-btn">READ MORE</a>
                        </div>-->
                        <!-- / Top slider content -->
                    </div>
                    <!-- / Top slider single slide -->    
                </div>
            </div>
        </section>
        
        <!-- End slider  -->

        <!-- --------------------------------------------------------------------------------------- -->
        <!--Cargamos le vista home -->
        <?php
        if (isset($cuerpo)) {
            echo $cuerpo;
        }
        ?>

     <!-- --------------------------------------------------------------------------------------- -->

        <!--    <div class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <span id="copyright">
                                Copyright &copy; 2014 <a href="#">Company Name</a>
                            </span>
        
                    </div>  /.col-md-6 
                        <div class="col-md-4 col-sm-6">
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                            </ul>
                        </div>  /.col-md-6 
                    </div>  /.row 
                </div>  /.container 
            </div>  /.site-footer 
        
            
            <script src="<?= base_url() ?>assets/js/vendor/jquery-1.10.1.min.js"></script>
            <script>window.jQuery || document.write('<script src="<?= base_url() ?>assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
            <script src="<?= base_url() ?>assets/js/jquery.easing-1.3.js"></script>
            <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
            <script src="<?= base_url() ?>assets/js/plugins.js"></script>
            <script src="<?= base_url() ?><?= base_url() ?>assets/js/main.js"></script>
             templatemo 401 sprint 
        </body>
        </html>-->

        <!-- Start Footer -->
        <footer id="mu-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-footer-area">
                            <div class="mu-footer-social">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                <a href="#"><span class="fa fa-youtube"></span></a>
                            </div>
                            <div class="mu-footer-copyright">
                                <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
                            </div>         
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- jQuery library -->
        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>  
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>   
        <!-- Slick slider -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/slick.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/waypoints.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.counterup.js"></script>
        <!-- Date Picker -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-datepicker.js"></script> 

        <!-- Custom js -->
        <script src="<?= base_url() ?>assets/js/custom.js"></script> 

    </body>
</html>