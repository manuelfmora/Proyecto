<?php //
/*
 * VISTA que pide el nombre de usuario para restablecer la contraseña en la aplicación a tráves del correo.
 */
?>
<!-- CUERPO-->

<!-- Start Contact section -->
<section id="login" id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Si has olvidado tu contraseña, ¡No te preocupes!<br> Introduce nombre tu de usuario y te enviaremos una nueva.</h4></span>
                        <h2>Restablecer Contraseña</h2>
                        <i class="fa fa-spoon"></i>              
                        <span class="mu-title-bar"></span>
                    </div>
                    <!-- Contenedor -->
                    <!-- Start Subscription section -->
                    <section id="mu-subscription">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-subscription-area">
                                        <form class="mu-subscription-form"  action="" method="POST">
                                            <input type="text" placeholder="Nombre de Usuario" name="username"  autofocus>

                                            <button type="submit" class="mu-readmore-btn" value="entrar" name="entrar">Enviar</button>
                                            <div class="col-md-6">
                                                <?= form_error('username'); ?>
                                            </div>
                                        </form>            
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </section>
                    <!-- End Subscription section -->
                </div>
                <!-- /Contenedor -->
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->

