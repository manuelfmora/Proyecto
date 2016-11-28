<!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Seleccione Un Alumno/a</span>
              <h2>Consejo Orientador</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form"  action= "<?= base_url() . 'index.php/ConsejoOrien/Buscar' ?>"  method="POST" >
                      <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
                      </div>                                      
                      <button type="submit" class="mu-send-btn" value="entrar" name="entrar">Buscar</button>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->