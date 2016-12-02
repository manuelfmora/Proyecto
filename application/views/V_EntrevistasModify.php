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
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/Entrevistas/modificar/'.$datos['idAlumno']?>" method="post">
                <div class="row">                  
                                   
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['fecha'] ?>" placeholder="Fecha (dd/mm/aaaa)" name="fecha">
                        <?= form_error('fecha'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['motivo'] ?>" placeholder="Motivo" name="motivo">
                        <?= form_error('motivo'); ?>
                    </div>
                  </div>
                  <?php $array = explode(',', $datos['asistentes']) ?>
                  <?php
                  $m = FALSE;$p = FALSE;$t = FALSE;$a = FALSE;$o = FALSE;

                  foreach ($array as $valor) {
                      if ($valor == 'madre') {$m = true;}
                      if ($valor == 'padre') {$p = true;}
                      if ($valor == 'tutor') {$t = true;}
                      if ($valor == 'alumno') {$a = true;}
                      if ($valor == 'otros') {$o = true;}            
                  }
                  
                  ?>
              <div class="col-md-6">
                    <div class="form-group">
                        <div class="checkbox" style="color: White; text-align: left; ">
                            <label>
                              <input type="checkbox" value="madre" name="nombre[]" <?php if ($m == true) echo "checked" ?> >
                              Madre
                            </label><br>
                            <label>
                              <input type="checkbox" value="padre" name="nombre[]" <?php if ($p == true) echo "checked" ?> >
                              Padre
                            </label><br>
                            <label>
                              <input type="checkbox" value="tutor" name="nombre[]" <?php if ($t == true) echo "checked" ?> >
                              Tutor/a
                            </label><br>
                            <label>
                              <input type="checkbox" value="alumno" name="nombre[]" <?php if ($a == true) echo "checked" ?> >
                              Alumno/a
                            </label>
                            <label>
                              <input type="checkbox" value="otros" name="nombre[]" <?php if ($o == true) echo "checked" ?> >
                              Otros
                            </label>
                          </div>
                    </div>
                  </div>                 
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['temas'] ?>" placeholder="Temas" name="temas">
                        <?= form_error('temas'); ?>
                    </div>
                  </div>
<!--                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?/= $datos['fecha_ini'] ?>" placeholder="Acuerdos" name="acuerdos">
                        <?/= form_error('acuerdos'); ?>
                    </div>
                  </div> -->
                    <!--   ---------------------------  -->

                  
                    
                  <div class="col-md-12">
                    <div class="form-group">                
                      <textarea class="form-control" rows="5" value=""  placeholder="Acuerdos" name="acuerdos"><?= $datos['acuerdos'] ?></textarea>                        
                    </div>
                  </div> 
                    <center>
                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="hidden" name="idAlumno" value="<?=$datos['idAlumno']?>">
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