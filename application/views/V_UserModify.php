<!--
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-reservation-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Modificar los</span>
                        <h2>Datos Usuario</h2>
                        <i class="fa fa-spoon"></i>              
                        <span class="mu-title-bar"></span>
                    </div>
                    <div class="mu-reservation-content"> 
                        
                    
                            </div>firn row
                        </form>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
 Fin vista Modificar -->

  <!-- Start Contact section -->
  <section id="mu-contact">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="mu-contact-area">
                      <div class="mu-title">
                          <span class="mu-subtitle">Modificar los</span>
                          <h2>Datos Usuario</h2>
                          <i class="fa fa-spoon"></i>              
                          <span class="mu-title-bar"></span>
                      </div>
                      <div class="mu-contact-content">
                          <div class="row">
                              <div class="cart-view-table"><!--Contenedor--->
                                  
                            <form class="mu-reservation-form" action="<?= base_url() . 'index.php/UserModify/Modificar' ?>" method="post">
                            <div class="row">
                                <div class="mu-title">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <span class="mu-subtitle">Nombre de usuario:</span>      

                                            <input type="text" class="form-control" value="<?= $datos['nombre_usu'] ?>" placeholder="Nombre de Usuario" name="nombre_usu">
                                            <?= form_error('nombre_usu'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="mu-subtitle">Email:</span>                     
                                            <input type="email" class="form-control" value="<?= $datos['correo'] ?>" placeholder="Email" name="correo" maxlength="180">
                                            <?= form_error('correo'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <span class="mu-subtitle">Contraseña:</span>                  
                                            <input type="password" class="form-control" placeholder="Contraseña" name="clave">
                                            <?= form_error('clave'); ?>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="mu-subtitle">Nueva Contraseña:</span>                         
                                            <input type="password" class="form-control" placeholder="Nueva Contraseña" name="clave_nueva">
                                            <?php
                                            if (!EMPTY($errorclavenuevo)) {

                                                echo $errorclavenuevo;
                                            }
                                            ?>
                                            <?php
                                            if (!EMPTY($errorclave)) {

                                                echo $errorclave;
                                            }
                                            ?>  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="mu-subtitle">Repetir Contraseña:</span> 
                                            <input type="password" class="form-control" placeholder="Repetir Contraseña" name="rep_clave_nueva">
                                            <?php
                                            if (!EMPTY($errorclaverep)) {

                                                echo $errorclaverep;
                                            }
                                            ?> 
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <button type="submit" class="mu-readmore-btn" name="GuardarUsuario" value="Guardar Usuario">Guardar Cambios</button>
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