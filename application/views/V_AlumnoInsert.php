 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Insertar un</span>
              <h2>Alumno</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/AlumnoInsert/Student' ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('apellidos_persona') ?>" placeholder="Apellidos" name="apellidos_persona" maxlength="60">
                        <?= form_error('apellidos_persona'); ?>
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
                        <input type="text" class="form-control" value="<?= set_value('nie') ?>" placeholder="NIE" name="nie" class="input-text" maxlength="7">
                        <?= form_error('nie'); ?>
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
                        <input type="date" class="form-control" value="<?= set_value('fechaNac') ?>" placeholder="Fecha Nacimiento" name="fechaNac">
                      <?= form_error('fechaNac'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('tipo') ?>" placeholder="Tipo" name="tipo" >
                        <?= form_error('tipo'); ?>
                    </div>
                  </div>                    
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="text" class="form-control" value="<?= set_value('nombreT1') ?>"placeholder="Nombre T1" name="nombreT1">
                      <?= form_error('nombreT1'); ?>
                   </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('dniT1') ?>"placeholder="DNI T1" name="dniT1">
                      <?= form_error('dniT1'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="text" class="form-control" value="<?= set_value('nombreT2') ?>"placeholder="Nombre T2" name="nombreT2">
                      <?= form_error('nombreT2'); ?>
                   </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('dniT2') ?>"placeholder="DNI T2" name="dniT2">
                      <?= form_error('dniT2'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('direccion') ?>" placeholder="Dirección" name="direccion" maxlength="40">
                        <?= form_error('direccion'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('cp') ?>" placeholder="Codigo Postal" name="cp">
                        <?= form_error('cp'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('poblacion') ?>" placeholder="Población" name="poblacion" >
                        <?= form_error('poblacion'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <?= $select ?> 
                    <?= form_error('cod_provincia'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('telefono1') ?>" placeholder="Teléfono1" name="telefono1" maxlength="9">
                        <?= form_error('telefono1'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('telefono2') ?>" placeholder="Teléfono2" name="telefono2" maxlength="9">
                        <?= form_error('telefono2'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('tipo') ?>" placeholder="Tipo" name="tipo" >
                        <?= form_error('tipo'); ?>
                    </div>
                  </div> 
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('situacion') ?>" placeholder="Situación" name="situacion" >
                        <?= form_error('situacion'); ?>
                    </div>
                  </div> 
                    <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('implicacion_escolar') ?>" placeholder="Implicación Escolar" name="implicacion_escolar">
                        <?= form_error('implicacion_escolar'); ?>
                    </div>
                  </div>                     
              
                  <button type="submit" name="GuardarUsuario" class="mu-readmore-btn">Registrarse</button>
                </div>
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Insert students -->
