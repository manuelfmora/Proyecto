 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">INSERTAR</span>
              <h2>Protocolos</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>

            <div class="mu-reservation-content">
               <!-- Formulario sin PDF -->  
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/Protocolos/modificar/'.$datos['idAlumno']?>" method="post">
          
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group"> 
                        <select name="nombre">

                            <option value="">Opciones</option>
                            <option value="absentismo" <?php if ($datos['nombre'] == "absentismo") echo "selected" ?> >Absentismo</option>
                            <option value="acoso" <?php if ($datos['nombre'] == "acoso") echo "selected" ?> >Acoso</option>
                            <option value="ident" <?php if ($datos['nombre'] == "ident") echo "selected" ?> >Identidad Genero</option>
                            <option value="solicitud" <?php if ($datos['nombre'] == "solicitud") echo "selected" ?> >Solicitud Atención Especif.</option>

                        </select>

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
                          <button type="submit" name="aceptar" value="aceptar" class="mu-readmore-btn">Aceptar</button>
                      </div>
                    </div>
                  </center>
                </div>
              </form>     
            </div>               
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Insert students -->