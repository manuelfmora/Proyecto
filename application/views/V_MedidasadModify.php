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
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/Medidasad/modificar/'. $datos['idAlumno']?>" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <center>
                            <div style="color: White"><h3>Modalidades</h3></div>
                        </center>
                            
                    </div>
                  </div>
                    <?php $array = explode(',', $datos['nombre']) ?>
                  <?php
                  $ap = FALSE;$co = FALSE;$at = FALSE;$gf = FALSE;
                  $pm = FALSE;$pe = FALSE;$ac = FALSE;$aci = FALSE;

                  foreach ($array as $valor) {
                      if ($valor == 'apoyo educativo') {$ap = true;}
                      if ($valor == 'compensatoria') {$co = true;}
                      if ($valor == 'A.T.A.L.') {$at = true;}
                      if ($valor == 'G.F.') {$gf = true;}
                      if ($valor == 'P.M.A.R.') {$pm = true;}
                      if ($valor == 'P.E.') {$pe = true;}
                      if ($valor == 'ACNS') {$ac = true;}
                      if ($valor == 'ACI') {$aci = true;}
               
                  }
                  ?>
                  <div class="col-md-6">
                    <div class="form-group">
                        <div class="checkbox" style="color: White; text-align: left; ">
                            <label>
                              <input type="checkbox" value="apoyo educativo" name="nombre[]" <?php if ($ap == true) echo "checked" ?> >
                              APOYO EDUCATIVO
                            </label><br>
                            <label>
                              <input type="checkbox" value="compensatoria" name="nombre[]" <?php if ($co == true) echo "checked" ?> >
                              COMPENSATORIA
                            </label><br>
                            <label>
                              <input type="checkbox" value="A.T.A.L." name="nombre[]" <?php if ($at == true) echo "checked" ?> >
                              A.T.A.L.
                            </label><br>
                            <label>
                              <input type="checkbox" value="G.F." name="nombre[]" <?php if ($gf == true) echo "checked" ?> >
                              G.F.
                            </label>
                          </div>
                    
                 </div>
                      </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <div class="checkbox" style="color: White; text-align: left; ">
                        <label>
                          <input type="checkbox" value="P.M.A.R." name="nombre[]" <?php if ($pm == true) echo "checked" ?> >
                          P.M.A.R.
                        </label><br>
                        <label>
                          <input type="checkbox" value="P.E." name="nombre[]" <?php if ($pe == true) echo "checked" ?> >
                          P.E.
                        </label><br>
                        <label>
                          <input type="checkbox" value="ACNS" name="nombre[]" <?php if ($ac == true) echo "checked" ?> >
                          ACNS
                        </label><br>
                        <label>
                          <input type="checkbox" value="ACI" name="nombre[]" <?php if ($aci == true) echo "checked" ?> >
                          ACI
                        </label>
                      </div>
                    
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['fecha_ini'] ?>" placeholder="Fecha de Inicio (dd/mm/aaaa)" name="fecha_ini">
                        <?= form_error('fecha_ini'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['fecha_fin'] ?>" placeholder="Fecha de Fin (dd/mm/aaaa)" name="fecha_fin">
                        <?= form_error('fecha_fin'); ?>
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">                
                      <textarea class="form-control" rows="5" value=""  placeholder="Observaciones" name="observaciones"><?= $datos['observaciones'] ?></textarea>                        
                    </div>
                  </div> 
                    <center>
                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="hidden" name="idAlumno" value="<?= $datos['idAlumno'] ?>">
                          <button type="submit" name="aceptar" value="aceptar"class="mu-readmore-btn">Aceptar</button>
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
  <!-- End Insert studts -->