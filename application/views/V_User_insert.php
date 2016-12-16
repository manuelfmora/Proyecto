  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Hacer un</span>
              <h2>Registro</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/User_insert/Usuario' ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">                     
                      <input type="text" class="form-control" value="<?= set_value('nombre_usu') ?>" placeholder="Nombre de Usuario" name="nombre_usu">
                      <?= form_error('nombre_usu'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="email" class="form-control" value="<?= set_value('correo') ?>"placeholder="Email" name="correo">
                      <?= form_error('correo'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="password" class="form-control" placeholder="Contraseña" name="clave">
                        <?php
                            if (!EMPTY($errorclave)) {

                                echo $errorclave;                                                        

                            }
                            if (EMPTY($errorclave)):?>
                               <?= form_error('clave'); ?>                                                    
                        <?php endif ?>  
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repetir Contraseña" name="rep_clave">
                       <?php
                        if (!EMPTY($errorclave)) {

                            echo $errorclave;
                        }
                        if (EMPTY($errorclave)):
                            ?>                                                     
                            <?= form_error('rep_clave'); ?>
                        <?php endif ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('nombre_persona') ?>" placeholder="Nombre" name="nombre_persona" maxlength="40">
                        <?= form_error('nombre_persona'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('apellidos_persona') ?>" placeholder="Apellidos" name="apellidos_persona" maxlength="60">
                        <?= form_error('apellidos_persona'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('dni') ?>" placeholder="DNI" name="dni" class="input-text" maxlength="9">
                        <?= form_error('dni'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">

                    </div>
                  </div>
                    <input type="hidden" name="estado" value="B">
                  <button type="submit" name="GuardarUsuario" class="mu-readmore-btn">Registrarse</button>
                </div>
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->
