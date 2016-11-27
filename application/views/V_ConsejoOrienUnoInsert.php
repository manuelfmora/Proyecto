 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">INSERTAR</span>
              <h2>Consejo Orientador</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">
               <!-- Formulario sin PDF -->  
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/ConsejoOrienUno/insertar/'.$idAlumno?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group"> 
                        <select name="nombre">
                            <option value="">Opciones</option>
                            <option value="absentismo">Mat. Aplicadas</option>
                            <option value="acoso">Mat. Académicas</option>
                            <option value="ident">F.P.B.</option>
                            <option value="solicitud">C.F.Grado Medio</option>
                            <option value="solicitud">Bachillerato Ciencias</option>
                            <option value="solicitud">Bachillerato HH y CC.SS</option>
                            <option value="solicitud">Bachillerato Artes</option>
                        </select>
                    </div>
                  </div>        
                  <div class="col-md-6">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('fecha') ?>" placeholder="Fecha (dd/mm/aaaa)" name="fecha">
                        <?= form_error('fecha'); ?>
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