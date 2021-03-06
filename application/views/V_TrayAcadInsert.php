 <!-- Start Insert students -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">INSERTAR</span>
              <h2>Trayect. Academica</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>              
            <div class="mu-reservation-content">
               <!-- Formulario sin PDF -->  
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/TrayAcad/insertar/'.$idAlumno?>" method="post">
                <div class="row">
               <div class="col-md-6">
                  <div class="form-group"> 
                        <select name="ano_academico">
                            <option value="">Año Academico</option>
                            <option value="2016/2017">2016/2017</option>
                            <option value="2017/2018">2017/2018</option>
                            <option value="2018/2019">2018/2019</option>
                            <option value="2019/2020">2019/2020</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2021/2022">2021/2022</option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2024/2025">2024/2025</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                    <div class="form-group"> 
                          <select name="evaluaciones">
                              <option value="">Evaluaciones</option>
                              <option value="Primera Evaluación">1ª Evaluación</option>
                              <option value="Segunda Evaluación">2ª Evaluación</option>
                              <option value="Evaluación Final">Evaluación Final</option>
                              <option value="Evaluación Extraordinaria">Evaluación Extraordinaria</option>
                          </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('fecha_ev') ?>" placeholder="Fecha Evaluación (dd/mm/aaaa)" name="fecha_ev">
                        <?= form_error('fecha_ev'); ?>
                    </div>
                  </div>                    
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <input type="text" class="form-control" value="<?= set_value('observaciones') ?>" placeholder="Observaciones" name="observaciones">
                          
                        </div>
                    </div>                      
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('pendientes') ?>" placeholder="Asignaturas Pendientes" name="pendientes">
                       
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <h3 style="color:White">Promoción:
                             <input type="radio" name="promocion" value="si">Si
                             <input type="radio" name="promocion"  value="no">No
                         
                         </h3> 
                        
<!--                        <input type="text" class="form-control" value="<?= set_value('promocion') ?>" placeholder="Promocion" name="promocion">-->
                        <?= form_error('promocion'); ?>
                    </div>
                  </div>   
                  <div class="col-md-6">
                    <div class="form-group">                        
                        <h3 style="color:White">Titulación:
                             <input type="radio" name="titulacion" value="<?= set_value('titulacion') ?>">Si
                             <input type="radio" name="titulacion"  value="<?= set_value('titulacion') ?>">No
                         
                         </h3> 
                        <?= form_error('titulacion'); ?>
                    </div>
                  </div>

                 <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('propuesta') ?>" placeholder="Propuesta" name="propuesta">
                        <?= form_error('propuesta'); ?>
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('inte_grup') ?>" placeholder="Integración Grupal" name="inte_grup">
                      
                    </div>
                  </div> 
                    
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= set_value('tutor') ?>" placeholder="Tutor" name="tutor">
                        
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