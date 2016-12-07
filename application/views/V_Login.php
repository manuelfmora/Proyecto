<?php /*
 * VISTA que pide usuario y contraseña para iniciar sesión en la aplicación con la opción de registrarse en la página o restablecer la contraseña.
 */
?>

  <!-- Start Contact section -->
  <section id="mu-contact">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="mu-contact-area">
                      <div class="mu-title">
                          <span class="mu-subtitle">Introsduzca sus datos</span>
                          <h2>Login</h2>
                          <i class="fa fa-spoon"></i>              
                          <span class="mu-title-bar"></span>
                      </div>
                      <div class="mu-contact-content">
                          <div class="row">
                              <div class="cart-view-table">

                                  <div class="mu-contact-content"><!--Contenedor--><!----><!----><!----><!----><!----><!----><!----><!---->
                                      <div class="row"><!-- Columna Derecha  -->

                                          <div class="col-md-6"><!--Columna Izquierda -->

                                              <div class="mu-contact-left"> <!-- FORMULARIO -->                       


                                                  <form class="mu-contact-form" action="<?= base_url() . 'index.php/Login' ?>" method="POST">
                                                      <div class="form-group">
                                                          <label for="">Usuario</label>
                                                          <input type="text" class="form-control" placeholder="Usuario"  name="username" autofocus>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="">Password</label>
                                                          <input type="password" class="form-control"  placeholder="Password"  name="clave" value="">
                                                          <?php
                                                          if (isset($error))
                                                              echo $error;
                                                          ?>
                                                      </div>
                                                      <div class="form-group">
                                                          <center>
                                                              <button type="submit" class="mu-send-btn" value="entrar" name="entrar">Login</button>
                                                          </center>                           
                                                      </div>
                                                  </form><!--/FORMULARIO -->
                                              </div>
                                          </div>     

                                          <div class="col-md-6">
                                              <div class="mu-contact-right">
                                                  <div class="mu-contact-widget">                      
                                                      <h3>¿No tienes cuenta?</h3>
                                                      <h4><a style="color: #ff6666;" href="<?= base_url() . 'index.php/User_insert' ?>">Registrate ahora!</a></h4>

                                                  </div>
                                                  <div class="mu-contact-widget">
                                                      <a href="<?= base_url() . 'index.php/RestaurarClave' ?>"><h3>¿Olvidaste tu contraseña?</h3></a>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div><!--/ Contenedor -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</section>
<!-- End Contact section -->
