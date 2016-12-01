<!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Seleccione Un Alumno/a</span>
              <h2>Acción Tutorial</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form"  action= "<?= base_url() . 'index.php/AccionTutorial/Buscar' ?>"  method="POST" >
                      <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
                      </div>                                      
                      <button type="submit" class="mu-send-btn" value="entrar" name="entrar">Buscar</button>
                    </form>
                  </div>
                </div>
                  
<!---------------------------------------------- MENÚ CURSOS --------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------->
                            <form class="mu-contact-form"  action= "<?= base_url() . 'index.php/AccionTutorial/BuscarCurso' ?>"  method="POST" >
                            <div class="col-md-1">
                                    
                                        <select name="cursos">
                                            <option value="">Curso</option>
                                            <option value="1">1º</option>
                                            <option value="2">2º</option>
                                            <option value="3">3º</option>
                                            <option value="4">4º</option>

                                        </select>
                                    
                            </div>
                            <div class="col-md-1">
                              
                                    <select name="grupos">
                                        <option value="">Grupo</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>

                                    </select>
                                </div>
                                <button type="submit" class="mu-send-btn" value="entrar" name="entrar">Buscar</button>
                            </form>
<!---------------------------------------------- / MENÚ CURSOS --------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------->                  

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->