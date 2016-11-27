 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Necesidades Especiales</span>
              <center>
                  <span class="mu-subtitle">de</span>
              </center>
              
              <h2>Apoyo Educativo</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">

              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/Neae/insertar/'.$idAlumno?>" method="post">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="checkbox" style="color: White; text-align: left; ">
                        <label>
                          <input type="checkbox" value="DIS" name="nombre[]">
                          DIS
                        </label><br>
                        <label>
                          <input type="checkbox" value="DIA" name="nombre[]">
                          DIA
                        </label><br>
                        <label>
                          <input type="checkbox" value="Compensatoria" name="nombre[]">
                          Compensatoria
                        </label><br>
                        <label>
                          <input type="checkbox" value="AA.CC." name="nombre[]">
                          AA.CC.
                        </label>
                      </div>
                    
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                     <input type="text" class="form-control" value="<?= set_value('ev_ps') ?>" placeholder="Evaluación Psicopedagogica" name="ev_ps">
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
