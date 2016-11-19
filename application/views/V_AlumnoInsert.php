 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Insertar</span>
              <h2>Alumno/a</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/AlumnoInsert/Alumno' ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('apellidos') ?>" placeholder="Apellidos" name="apellidos" maxlength="60">
                        <?= form_error('apellidos'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('nombre') ?>" placeholder="Nombre" name="nombre" maxlength="40">
                        <?= form_error('nombre'); ?>
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
                        <input type="text" class="form-control" value="<?= set_value('fechaNacimiento') ?>" placeholder="Fecha Nacimiento dd/mm/aaaa " name="fechaNacimiento">
                      <?= form_error('fechaNacimiento'); ?>
                    </div>
                  </div>

                   <!-- Edad Campo Calculado--->
                   
                   <!-- Foto Alumno --->
                 <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('datos_medicos') ?>" placeholder="Datos Médicos" name="datos_medicos" >
                        
                    </div>
                  </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('datos_psicologicos') ?>" placeholder="Datos Psicológicos" name="datos_psicologicos" >
                       
                    </div>
                  </div>          
                 <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('informe_medico') ?>" placeholder="Informe Médico" name="informe_medico" >
                        
                    </div>
                  </div>
                     
                  <div class="col-md-6">                      
                    <div class="form-group">                        
                      <input type="text" class="form-control" value="<?= set_value('nombreT1') ?>"placeholder="Tutor 1" name="nombreT1">
                      <?= form_error('nombreT1'); ?>
                   </div>
                  </div>    
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="text" class="form-control" value="<?= set_value('nombreT2') ?>"placeholder="Tutor 2" name="nombreT2">
                      
                   </div>
                  </div>
                  
                  <!--Empieza a fallar--->
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
                        <input type="text" class="form-control" value="<?= set_value('telefono1') ?>" placeholder="Teléfono 1" name="telefono1" maxlength="9">
                        <?= form_error('telefono1'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('telefono2') ?>" placeholder="Teléfono 2" name="telefono2" maxlength="9">
                        <?= form_error('telefono2'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('tipo') ?>" placeholder="Tipo Familia" name="tipo" >
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
                   <div class="col-md-6">
                   <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('curso') ?>" placeholder="Curso" name="curso">
                        <?= form_error('curso'); ?>
                   </div>
                  </div>
                   <div class="col-md-6">
                   <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('grupo') ?>" placeholder="Grupo" name="grupo">
                        <?= form_error('grupo'); ?>
                   </div>
                  </div>
                  <center>
                    <div class="col-md-12">
                      <div class="form-group">
                          <button type="submit" name="GuardarUsuario" class="mu-readmore-btn">Registrarse</button>
                      </div>
                    </div>
                  </center>
                </div>
              </form>      
            </div>               
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Insert students -->
