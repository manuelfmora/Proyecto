 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">INSERTAR</span>
              <h2>Entrevistas</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">
               <!-- Formulario sin PDF -->  
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/Entrevistas/insertar/'.$idAlumno?>" method="post">
                <div class="row">                  
                                   
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('fecha') ?>" placeholder="Fecha (dd/mm/aaaa)" name="fecha">
                        <?= form_error('fecha'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('motivo') ?>" placeholder="Motivo" name="motivo">
                        <?= form_error('motivo'); ?>
                    </div>
                  </div> 
              <div class="col-md-6">
                    <div class="form-group">
                        <div class="checkbox" style="color: White; text-align: left; ">
                            <label>
                              <input type="checkbox" value="madre" name="nombre[]">
                              Madre
                            </label><br>
                            <label>
                              <input type="checkbox" value="padre" name="nombre[]">
                              Padre
                            </label><br>
                            <label>
                              <input type="checkbox" value="tutor" name="nombre[]">
                              Tutor/a
                            </label><br>
                            <label>
                              <input type="checkbox" value="alumno" name="nombre[]">
                              Alumno/a
                            </label>
                            <label>
                              <input type="checkbox" value="otros" name="nombre[]">
                              Otros
                            </label>
                          </div>
                    </div>
                  </div>                 
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('temas') ?>" placeholder="Temas" name="temas">
                        <?= form_error('temas'); ?>
                    </div>
                  </div>
<!--                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('acuerdos') ?>" placeholder="Acuerdos" name="acuerdos">
                        <?= form_error('acuerdos'); ?>
                    </div>
                  </div> -->
                    <!--   ---------------------------  -->

                  
                    
                  <div class="col-md-12">
                    <div class="form-group">                
                      <textarea class="form-control" rows="5" value="<?= set_value('acuerdos') ?>"  placeholder="Acuerdos" name="acuerdos"></textarea>                        
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