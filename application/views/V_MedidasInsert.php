 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Medidas</span>
              <center>
                  <span class="mu-subtitle">de</span>
              </center>
              
              <h2>Atención a la Diversidad</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">
               <!-- Formulario sin PDF -->  
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/MedidasAD/insertaDatos'?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?= set_value('censo') ?>" placeholder="Censo" name="censo" >
                        <?= form_error('censo'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <?php print_r('La  id essssssssss:'.$idAlumno)?>"
                        <input type="text" class="form-control" value="<?= set_value('ev_ps') ?>" placeholder="Evaluación Psicopeda" name="ev_ps">
                        <?= form_error('ev_ps'); ?>
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">
                        
                        <input type="text" class="form-control" value="<?= set_value('dic_es') ?>" placeholder="Dictamen Escolarización" name="dic_es" >
                        <?= form_error('dic_es'); ?>
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