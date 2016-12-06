 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Modificar un</span>
              <h2>Alumno/a</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <form class="mu-reservation-form" action=" <?= site_url() . "/AlumnoOpciones/Modificar/"  .$datos['idAlumno']?>" method="post">
                <div class="row">
                    <div class="mu-title">
                  <div class="col-md-6">
                    <div class="form-group">
                         <h4 style="color: White">Apellidos</h4>
                        <input type="text" class="form-control" value="<?= $datos['apellidos'] ?>" placeholder="Apellidos" name="apellidos" maxlength="60">
                        <?= form_error('apellidos'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <h4 style="color: White">Nombre</h4>                       
                        <input type="text" class="form-control" value="<?= $datos['nombre'] ?>" placeholder="Nombre" name="nombre" maxlength="40">
                        <?= form_error('nombre'); ?>
                    </div>
                  </div> 
                  <div class="col-md-6">
                    <div class="form-group">
                        <h4 style="color: White">NIE</h4>                        
                        <input type="text" class="form-control" value="<?= $datos['nie'] ?>" placeholder="NIE" name="nie" class="input-text" maxlength="7" readonly = "readonly" >
                       
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <h4 style="color: White">Fecha Nacimiento</h4>                        
                        <input type="text" class="form-control" value="<?=$fecha ?>" placeholder="Fecha Nacimiento dd/mm/aaaa " name="fechaNacimiento">
                      <?= form_error('fechaNacimiento'); ?>
                    </div>
                  </div>

                   <!-- Edad Campo Calculado--->
                   
                   <!-- Foto Alumno --->
                 <div class="col-md-6">
                    <div class="form-group">                        
                        <h4 style="color: White">Datos Médicos</h4>
                        <input type="text" class="form-control" value="<?= $datos['datos_medicos'] ?>" placeholder="Datos Médicos" name="datos_medicos" >
                        
                    </div>
                  </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <h4 style="color: White">Datos Psicológicos</h4>
                        <input type="text" class="form-control" value="<?= $datos['datos_psicologicos'] ?>" placeholder="Datos Psicológicos" name="datos_psicologicos" >
                       
                    </div>
                  </div>          
                 <div class="col-md-12">
                    <div class="form-group">
                        <h4 style="color: White">Informe Médico</h4>
                        <input type="text" class="form-control" value="<?= $datos['informe_medico'] ?>" placeholder="Informe Médico" name="informe_medico" >
                        
                    </div>
                  </div>
                     
                  <div class="col-md-6">                      
                    <div class="form-group">                        
                        <h4 style="color: White">Nombre T1</h4>
                      <input type="text" class="form-control" value="<?= $datos['nombreT1'] ?>"placeholder="Tutor 1" name="nombreT1">
                      <?= form_error('nombreT1'); ?>
                   </div>
                  </div>    
                  <div class="col-md-6">
                    <div class="form-group"> 
                        
                        <h4 style="color: White">Nombre T2</h4>
                      <input type="text" class="form-control" value="<?= $datos['nombreT2'] ?>"placeholder="Tutor 2" name="nombreT2">
                      
                   </div>
                  </div>
                  
                  <!--Empieza a fallar--->
                  <div class="col-md-6">
                    <div class="form-group">
                        
                        <h4 style="color: White">Dirección</h4>
                        <input type="text" class="form-control" value="<?= $datos['direccion'] ?>" placeholder="Dirección" name="direccion" maxlength="40">
                        <?= form_error('direccion'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <h4 style="color: White">Código Postal</h4>
                        
                        <input type="text" class="form-control" value="<?= $datos['cp'] ?>" placeholder="Codigo Postal" name="cp">
                        <?= form_error('cp'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        
                        <h4 style="color: White">Población</h4>
                        <input type="text" class="form-control" value="<?= $datos['poblacion'] ?>" placeholder="Población" name="poblacion" >
                        <?= form_error('poblacion'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    
                    <h4 style="color: White">Provincias</h4>
                    <?= $select ?> 
                    <?= form_error('cod_provincia'); ?>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        
                        <h4 style="color: White">Teléfono 1</h4>
                        <input type="text" class="form-control" value="<?= $datos['telefono1'] ?>" placeholder="Teléfono 1" name="telefono1" maxlength="9">
                        <?= form_error('telefono1'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        
                        <h4 style="color: White">Teléfono 2</h4>
                        <input type="text" class="form-control" value="<?= $datos['telefono2'] ?>" placeholder="Teléfono 2" name="telefono2" maxlength="9">
                        <?= form_error('telefono2'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        
                        <h4 style="color: White">Tipo Familia</h4>
                        <input type="text" class="form-control" value="<?= $datos['tipo'] ?>" placeholder="Tipo Familia" name="tipo" >
                        <?= form_error('tipo'); ?>
                    </div>
                  </div> 
                    <div class="col-md-6">
                    <div class="form-group">
                        
                        <h4 style="color: White">Situación</h4>
                        <input type="text" class="form-control" value="<?= $datos['situacion'] ?>" placeholder="Situación" name="situacion" >
                        <?= form_error('situacion'); ?>
                    </div>
                  </div> 
                    <div class="col-md-12">
                    <div class="form-group">
                        
                        <h4 style="color: White">Implicación Escolar</h4>
                        <input type="text" class="form-control" value="<?= $datos['implicacion_escolar'] ?>" placeholder="Implicación Escolar" name="implicacion_escolar">
                        <?= form_error('implicacion_escolar'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                   <div class="form-group">
                        
                        <h4 style="color: White">Curso</h4>
                        <input type="text" class="form-control" value="<?= $datos['curso'] ?>" placeholder="Curso" name="curso">
                        <?= form_error('curso'); ?>
                   </div>
                  </div>
                   <div class="col-md-6">
                   <div class="form-group">
                       
                       <h4 style="color: White">Grupo</h4>
                        <input type="text" class="form-control" value="<?= $datos['grupo'] ?>" placeholder="Grupo" name="grupo">
                        <?= form_error('grupo'); ?>
                   </div>
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                         <input type="hidden" name="idAlumno" value="<?=$datos['idAlumno']?>">
                         <button type="submit" name="aceptar" value="aceptar" class="mu-readmore-btn">Aceptar</button>
                      </div>
                    </div>
                   <div class="col-md-6">
                      <div class="form-group">
                          <br>
                          <?php print_r($datos['idAlumno'])?>
                        <a class="mu-readmore-btn" href="<?= base_url().'index.php/AlumnoBuscar/BuscarUno/'.$datos['idAlumno'] ?>"> Cancelar</a> 
                      </div>
                    </div>
                      </div>
                </div><!--Fin class Roow-->
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Insert students -->
