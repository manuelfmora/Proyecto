<!-- Start Contact section -->
  
 
 <!-- Start Contact section -->
 <section id="mu-contact">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="mu-contact-area">
                     <div class="mu-title">
                         <span class="mu-subtitle">Seleccione</span>
                         <h2>Un Alumno/a</h2>
                         <i class="fa fa-spoon"></i>              
                         <span class="mu-title-bar"></span>
                     </div>
                     <div class="mu-contact-content">
                         <div class="row">

                             <div class="table-responsive">

                                 <table class="table">
                                     <thead>
                                         <tr>                    
                                             <th>Apellido</th>
                                             <th>Nombre</th>
                                             <th>NIE</th>
                                             <th>Modificar</th>                                       
                                         </tr>
                                     </thead>
                                     <tbody>  <!--Creación tabla de alumno-->
                                         <?php print_r($alumnos); foreach ($alumnos as $alumno): ?>
                                                 <tr>

                                                     <td><?= $alumno['apellidos'] ?></td>
                                                     <td><?= $alumno['nombre'] ?>  </td>
                                                     <td><?= $alumno['nie'] ?></td>                                                     
<!--                                                     <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoModify/Modificar/" . $alumno['nie'] ?>">Modificar</a></td>-->
                                                     <td><a href="<?= site_url() . "/AlumnoModify/Modificar/" . $alumno['nie'] ?>">Modificar</a></td>


                                                 </tr>
                                             <?php endforeach;?>
                                         <!--/Creación tabla de alumno-->
                                     </tbody>
                                 </table>
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