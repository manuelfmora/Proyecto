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
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/ConsejoOrienUno/modificar/'.$datos['idAlumno']?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group"> 
                        <select name="opciones">
                            <option value="">Opciones</option>
                            <option value="Mat. Aplicadas" <?php if ($datos['opciones'] == "Mat. Aplicadas") echo "selected" ?> >Mat. Aplicadas</option>
                            <option value="Mat. Académicas" <?php if ($datos['opciones'] == "Mat. Académicas") echo "selected" ?> >Mat. Académicas</option>
                            <option value="F.P.B." <?php if ($datos['opciones'] == "F.P.B.") echo "selected" ?> >F.P.B.</option>
                            <option value="C.F.Grado Medio" <?php if ($datos['opciones'] == "C.F.Grado Medio") echo "selected" ?> >C.F.Grado Medio</option>
                            <option value="Bachillerato Ciencias" <?php if ($datos['opciones'] == "Bachillerato Ciencias") echo "selected" ?> >Bachillerato Ciencias</option>
                            <option value="Bachillerato HH y CC.SS" <?php if ($datos['opciones'] == "Bachillerato HH y CC.SS") echo "selected" ?> >Bachillerato HH y CC.SS</option>
                            <option value="Bachillerato Artes" <?php if ($datos['opciones'] == "Bachillerato Artes") echo "selected" ?> >Bachillerato Artes</option>
                        </select>
                    </div>
                  </div>        
                  <div class="col-md-6">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['fecha'] ?>" placeholder="Fecha (dd/mm/aaaa)" name="fecha">
                        <?= form_error('fecha'); ?>
                    </div>
                  </div> 

                    <center>
                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="hidden" name="idAlumno" value="<?= $datos['idAlumno'] ?>">
                          <button type="submit" name="aceptar" value="aceptar" class="mu-readmore-btn">Aceptar</button>
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