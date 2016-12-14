 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">INTRODUZCA</span>
              <h2>Nueva Contraseña</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">
               
              <form class="mu-reservation-form" action="" method="POST">
                <div class="row">
                  <div class="col-md-12">

                  </div>                    
                  <div class="col-md-12">
                    <div class="form-group">

                      <div class="mu-title">
                        <h2>Usuario: <?=$username?></h2>
                      </div>
                   
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">

                        <input type="password" class="form-control" value="" placeholder="Nueva Contraseña" name="clave">
                        <?= form_error('clave'); ?>
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">
                       
                        <input type="password" class="form-control" value="" placeholder="Repita Nueva Contraseña" name="clave_rep">
                        <?= form_error('clave_rep'); ?>
                    </div>
                  </div>                     
                  <div class="col-md-12">

                    <center>
                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="hidden" name="username" value="<?=$username?>">
    
    
    
                          <button type="submit" name="entrar" class="mu-readmore-btn">Enviar</button>
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