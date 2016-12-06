<!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <span class="mu-subtitle">Datos</span>
              <h2>ALUMNO/A</h2>
              <h2><?=$datos['alu']['apellidos']?>&nbsp;&nbsp;<?=$datos['alu']['nombre']?></h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#alu" data-toggle="tab">Alum.</a></li>
                <li><a href="#nea" data-toggle="tab">NEAE</a></li>
                <li><a href="#mad" data-toggle="tab">M.A.D.</a></li>
                <li><a href="#pro" data-toggle="tab">Prot.</a></li>
                <li><a href="#ent" data-toggle="tab">Entre.</a></li>
                <li><a href="#tac" data-toggle="tab">T.A.</a></li>
                <li><a href="#tra" data-toggle="tab">Trans.</a></li>
                <li><a href="#cor" data-toggle="tab">C.O.</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="alu">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                 
                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Apellidos&nbsp;&nbsp;&nbsp;&nbsp; Nombre</span>
                                  <p><?=$datos['alu']['apellidos']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$datos['alu']['nombre']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                              
                                  <span class="mu-menu-price">NIE</span>
                                  <p><?=$datos['alu']['nie']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
      
                                </div>
                                <div class="media-body">
                             
                                  <span class="mu-menu-price">Tutor/a 1</span>
                                  <p><?=$datos['alu']['nombreT1']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
      
                                </div>
                                <div class="media-body">
                             
                                  <span class="mu-menu-price">Teléfono 1</span>
                                  <p><?=$datos['alu']['telefono1']?></p>
                                </div>
                              </div>
                            </li> 
                             <li>
                              <div class="media">
                                <div class="media-left">
      
                                </div>
                                <div class="media-body">
                                    
                                  <span class="mu-menu-price">Dirección</span>
                                  <p><?=$datos['alu']['direccion']?>  <?=$datos['alu']['cp']?></p>                             

                                </div>
                              </div>
                            </li> 
                             <li>
                              <div class="media">
                                <div class="media-left">
      
                                </div>
                                <div class="media-body">

                                  <span class="mu-menu-price">Datos Médicos</span>
                                  <p><?=$datos['alu']['datos_medicos']?></p>                                    

                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
      
                                </div>
                                <div class="media-body">
                             
                                  <span class="mu-menu-price">Datos Psicológicos</span>
                                  <p><?=$datos['alu']['datos_psicologicos']?></p>                                    

                                </div>
                              </div>
                            </li> 
                             <li>
                              <div class="media">
                                <div class="media-left">
      
                                </div>
                                <div class="media-body">
                             
                                  <span class="mu-menu-price">Tipo Familia</span>
                                  <p><?=$datos['alu']['tipo']?></p>                                    

                                </div>
                              </div>
                            </li>                             
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right"><!--------- R ------>
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                               
                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Curso y Grupo</span>
                                  <p><?=$datos['alu']['curso']?>  <?=$datos['alu']['grupo']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                     
                                </div>
                                <div class="media-body">
                              
                                  <span class="mu-menu-price">Fecha Nacimiento</span>
                                  <p><?=$datos['alu']['fechaNacimiento']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                         
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Tutor/a 2</span>
                                  <p><?=$datos['alu']['nombreT2']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                         
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Teléfono 2</span>
                                  <p><?=$datos['alu']['telefono2']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                         
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Provincia</span>
                                  <p><?=$datos['alu']['cod_provincia']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                         
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Informes Médicos</span>
                                  <p><?=$datos['alu']['informe_medico']?></p>                                    

                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                         
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Situación</span>
                                  <p><?=$datos['alu']['situacion']?> </p> 
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                         
                                </div>
                                <div class="media-body">

                                   
                                  <span class="mu-menu-price">Implicación Familiar</span>
                                  <p><?=$datos['alu']['implicacion_escolar']?></p> 
                                </div>
                              </div>
                            </li>                              

                         
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="nea"><!------ NEAE ------------------------------>
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left"><!-- content left--->
                          <ul class="mu-menu-item-nav"><!----->
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                             
                                  <span class="mu-menu-price">Censo</span>
                                  <p><?=$datos['nea']['censo']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Dictamen Escolarización</span>
                                  <p><?=$datos['nea']['dic_es']?></p>
                                </div>
                              </div>
                            </li>

                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right"><!-- content right--->
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                                  
                                  <span class="mu-menu-price">Evaluación Psicopedagógica</span>
                                  <p><?=$datos['nea']['ev_ps']?></p>
                                </div>
                              </div>
                            </li>
                            
                            
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="mad"><!------ MAD ------------------------------>
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left"><!-- content L--->
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Nombre</span>
                                  <p><?=$datos['mad']['nombre']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">

                                  <span class="mu-menu-price">Fecha Fin</span>
                                  <p><?=$datos['mad']['fecha_fin']?></p>
                                </div>
                              </div>
                            </li>
                             
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right"><!-- content R --->
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                            
                                  <span class="mu-menu-price">Fecha Inicio</span>
                                  <p><?=$datos['mad']['fecha_ini']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">

                                  <span class="mu-menu-price">Observaciones</span>
                                  <p><?=$datos['mad']['observaciones']?></p>
                                </div>
                              </div>
                            </li>
                           
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="pro"><!------ PROTOCOLOS ------------------------------>
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                              
                                  <span class="mu-menu-price">Nombre</span>
                                  <p><?=$datos['pro']['nombre']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                               
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Fecha Final</span>
                                  <p><?=$datos['pro']['fecha_fin']?></p>
                                </div>
                              </div>
                            </li>

                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                              
                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Fecha Inicio</span>
                                  <p><?=$datos['pro']['fecha_ini']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Observaciones</span>
                                  <p><?=$datos['pro']['observaciones']?></p>
                                </div>
                              </div>
                            </li>
                     
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="ent"><!------ ENTREVISTAS ------------------------------>
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
        
                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Fecha de le Entrvista</span>
                                  <p><?=$datos['ent']['fecha']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
       
                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Asistentes</span>
                                  <p><?=$datos['ent']['asistentes']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
 
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Acuerdos</span>
                                  <p><?=$datos['ent']['acuerdos']?></p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Motivo</span>
                                  <p><?=$datos['ent']['motivo']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Temas</span>
                                  <p><?=$datos['ent']['temas']?></p>
                                </div>
                              </div>
                            </li>

                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                 <div class="tab-pane fade " id="tac"><!------ TRAYECTORIA ACADEMICA  ------------------------------>
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
        
                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Año Academico</span>
                                  <p><?=$datos['tac']['ano_academico']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
       
                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Fecha Evaluación</span>
                                  <p><?=$datos['tac']['fecha_ev']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
 
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Pendientes</span>
                                  <p><?=$datos['tac']['pendientes']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
 
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Titulación</span>
                                  <p><?=$datos['tac']['titulacion']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
 
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Integración Grupal</span>
                                  <p><?=$datos['tac']['inte_grup']?></p>
                                </div>
                              </div>
                            </li>                            
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Evaluaciones</span>
                                  <p><?=$datos['tac']['evaluaciones']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Observaciones</span>
                                  <p><?=$datos['tac']['observaciones']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                             
                                  <span class="mu-menu-price">Promoción</span>
                                  <p><?=$datos['tac']['promocion']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
 
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Propuestas</span>
                                  <p><?=$datos['tac']['propuesta']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
 
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Tutor/a</span>
                                  <p><?=$datos['tac']['tutor']?></p>
                                </div>
                              </div>
                            </li>                            
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                 <div class="tab-pane fade " id="tra"><!------ TRANSITO ------------------------------>
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
        
                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">CEIP</span>
                                  <p><?=$datos['tra']['ceip']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
       
                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">NCC</span>
                                  <p><?=$datos['tra']['ncc']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
 
                                </div>
                                <div class="media-body">
                                
                                  <span class="mu-menu-price">Observaciones</span>
                                  <p><?=$datos['tra']['observaciones']?></p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Repeticiones</span>
                                  <p><?=$datos['tra']['repeticiones']?></p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Areas Suspensas</span>
                                  <p><?=$datos['tra']['area_suspensa']?></p>
                                </div>
                              </div>
                            </li>
         
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>  
                 <div class="tab-pane fade " id="cor"><!------ CONSEJO ORIENTADOR------------------------------>
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
        
                                </div>
                                <div class="media-body">
                                 
                                  <span class="mu-menu-price">Opciones</span>
                                  <p><?=$datos['cor']['opciones']?></p>
                                </div>
                              </div>
                            </li>
                
        
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">

                                </div>
                                <div class="media-body">
                               
                                  <span class="mu-menu-price">Fecha</span>
                                  <p><?=$datos['cor']['fecha']?></p>
                                </div>
                              </div>
                            </li>

                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>                  
              </div><!--/ FIN DIV QUE NO SE PUEDE MODIFICAR-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->
