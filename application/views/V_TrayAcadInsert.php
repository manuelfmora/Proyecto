 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">INSERTAR</span>
              <h2>Trayect. Academica</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">
               <!-- Formulario sin PDF -->  
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/TrayAcad/insertar/'.$idAlumno?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('ano_academico') ?>" placeholder="Año Académico" name="ano_academico">
                        <?= form_error('ano_academico'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('grupo') ?>" placeholder="Gurpo" name="grupo">
                        <?= form_error('grupo'); ?>
                    </div>
                  </div>                    
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('evaluaciones') ?>" placeholder="Evaluaciones" name="evaluaciones">
                        <?= form_error('evaluaciones'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('observaciones') ?>" placeholder="Observaciones" name="observaciones">
                        <?= form_error('observaciones'); ?>
                    </div>
                  </div>                      
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('pendientes') ?>" placeholder="Asignaturas Pendientes" name="pendientes">
                        <?= form_error('pendientes'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('promocion') ?>" placeholder="Promocion" name="promocion">
                        <?= form_error('promocion'); ?>
                    </div>
                  </div>   
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('Titulacion') ?>" placeholder="Titulación" name="titulacion">
                        <?= form_error('titulacion'); ?>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('fecha_ev') ?>" placeholder="Fecha Evaluación (dd/mm/aaaa)" name="fecha_ev">
                        <?= form_error('fecha_ev'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('propuesta') ?>" placeholder="Propuesta" name="propuesta">
                        <?= form_error('propuesta'); ?>
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('inte_grup') ?>" placeholder="Integración Grupal" name="inte_grup">
                        <?= form_error('inte_grup'); ?>
                    </div>
                  </div> 
                    
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('tutor') ?>" placeholder="Tutor" name="tutor">
                        <?= form_error('tutor'); ?>
                    </div>
                  </div>

                    <center>
                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="hidden" name="idAlumno" value="<?=$idAlumno?>">
                          <button type="submit" name="aceptar" class="mu-readmore-btn">Aceptar</button>
                      </div>
                    </div>
                  </center>
                </div>
              </form> <!-- / Formulario sin PDF -->      
            </div>               
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Insert students -->