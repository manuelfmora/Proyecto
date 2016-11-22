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
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/Medidasad/insertar/'.$idAlumno?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <center>
                            <div style="color: White"><h3>Modalidades</h3></div>
                        </center>
                            
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <div class="checkbox" style="color: White; text-align: left; ">
                            <label>
                              <input type="checkbox" value="<?= set_value('apoyo educativo') ?>" name="nombre">
                              APOYO EDUCATIVO
                            </label><br>
                            <label>
                              <input type="checkbox" value="<?= set_value('compensatoria') ?>" name="nombre">
                              COMPENSATORIA
                            </label><br>
                            <label>
                              <input type="checkbox" value="<?= set_value('nombre') ?>" name="nombre">
                              A.T.A.L.
                            </label><br>
                            <label>
                              <input type="checkbox" value="<?= set_value('nombre') ?>" name="nombre">
                              G.F.
                            </label>
                          </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <div class="checkbox" style="color: White; text-align: left; ">
                        <label>
                          <input type="checkbox" value="<?= set_value('nombre') ?>" name="nombre">
                          P.M.A.R.
                        </label><br>
                        <label>
                          <input type="checkbox" value="<?= set_value('nombre') ?>" name="nombre">
                          P.E.
                        </label><br>
                        <label>
                          <input type="checkbox" value="<?= set_value('nombre') ?>" name="nombre">
                          ACNS
                        </label><br>
                        <label>
                          <input type="checkbox" value="<?= set_value('nombre') ?>" name="nombre">
                          ACI
                        </label>
                      </div>
                    
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('fecha_ini') ?>" placeholder="Fecha de Inicio (dd/mm/aaaa)" name="fecha_ini">
                        <?= form_error('fecha_ini'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('fecha_fin') ?>" placeholder="Fecha de Fin (dd/mm/aaaa)" name="fecha_fin">
                        <?= form_error('fecha_fin'); ?>
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">                
                      <textarea class="form-control" rows="5" value="<?= set_value('observaciones') ?>"  placeholder="Observaciones" name="observaciones"></textarea>                        
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