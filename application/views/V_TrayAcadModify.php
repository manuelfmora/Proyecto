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
              <form class="mu-reservation-form" action="<?= base_url() . 'index.php/TrayAcad/modificar/'.$datos['idAlumno']?>" method="post">
                <div class="row">
               <div class="col-md-6">
                  <div class="form-group"> 
                        <select name="ano_academico">
                            <option value="">Año Academico</option>
                            <option value="2016/2017" <?php if ($datos['ano_academico'] == "2016/2017") echo "selected" ?> >2016/2017</option>
                            <option value="2017/2018" <?php if ($datos['ano_academico'] == "2016/2017") echo "selected" ?> >2017/2018</option>
                            <option value="2018/2019" <?php if ($datos['ano_academico'] == "2018/2019") echo "selected" ?> >2018/2019</option>
                            <option value="2019/2020" <?php if ($datos['ano_academico'] == "2019/2020") echo "selected" ?> >2019/2020</option>
                            <option value="2020/2021" <?php if ($datos['ano_academico'] == "2020/2021") echo "selected" ?> >2020/2021</option>
                            <option value="2021/2022" <?php if ($datos['ano_academico'] == "2021/2022") echo "selected" ?> >2021/2022</option>
                            <option value="2022/2023" <?php if ($datos['ano_academico'] == "2022/2023") echo "selected" ?> >2022/2023</option>
                            <option value="2023/2024" <?php if ($datos['ano_academico'] == "2023/2024") echo "selected" ?> >2023/2024</option>
                            <option value="2024/2025" <?php if ($datos['ano_academico'] == "2024/2025") echo "selected" ?> >2024/2025</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                    <div class="form-group"> 
                          <select name="evaluaciones">
                              <option value="">Evaluaciones</option>
                              <option value="Primera Evaluación" <?php if ($datos['evaluaciones'] == "Primera Evaluación") echo "selected" ?> >1ª Evaluación</option>
                              <option value="Segunda Evaluación" <?php if ($datos['evaluaciones'] == "Segunda Evaluación") echo "selected" ?> >2ª Evaluación</option>
                              <option value="Evaluación Final" <?php if ($datos['evaluaciones'] == "Evaluación Final") echo "selected" ?> >Evaluación Final</option>
                              <option value="Evaluación Extraordinaria" <?php if ($datos['evaluaciones'] == "Evaluación Extraordinaria") echo "selected" ?> >Evaluación Extraordinaria</option>
                          </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['fecha_ev'] ?>" placeholder="Fecha Evaluación (dd/mm/aaaa)" name="fecha_ev">
                        <?= form_error('fecha_ev'); ?>
                    </div>
                  </div>                    
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <input type="text" class="form-control" value="<?= $datos['observaciones'] ?>" placeholder="Observaciones" name="observaciones">
                          
                        </div>
                    </div>                      
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['pendientes'] ?>" placeholder="Asignaturas Pendientes" name="pendientes">
                       
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <h3 style="color:White">Promoción:
                             <input type="radio" name="promocion" value="si"<?php if ($datos['promocion'] == "si") echo "checked" ?>  >Si
                             <input type="radio" name="promocion"  value="no"<?php if ($datos['promocion'] == "no") echo "checked" ?> >No
                         
                         </h3> 
                        
<!--                        <input type="text" class="form-control" value="<?= set_value('promocion') ?>" placeholder="Promocion" name="promocion">-->
                        <?= form_error('promocion'); ?>
                    </div>
                  </div>   
                  <div class="col-md-6">
                    <div class="form-group">                        
                        <h3 style="color:White">Titulación:
                             <input type="radio" name="titulacion" value="si" <?php if ($datos['titulacion'] == "si") echo "checked" ?>  >Si
                             <input type="radio" name="titulacion"  value="no"<?php if ($datos['titulacion'] == "no") echo "checked" ?>  >No
                         
                         </h3> 
                        <?= form_error('titulacion'); ?>
                    </div>
                  </div>

                 <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['propuesta'] ?>" placeholder="Propuesta" name="propuesta">
                        <?= form_error('propuesta'); ?>
                    </div>
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['inte_grup'] ?>" placeholder="Integración Grupal" name="inte_grup">
                      
                    </div>
                  </div> 
                    
                  <div class="col-md-12">
                    <div class="form-group">                        
                        <input type="text" class="form-control" value="<?= $datos['tutor'] ?>" placeholder="Tutor" name="tutor">
                        
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