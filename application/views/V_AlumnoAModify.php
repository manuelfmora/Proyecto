<?php
/*
 * VISTA que muestra la lista de Alumnos
 * 
 */
?>


 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             
               <div class="table-responsive">
                   
                  <table class="table">
                    <thead>
                      <tr>                    
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>NIE</th>
                        <th>Ver Resumen</th>
                        <th>PDF</th>
                        <th>PDF</th>
                        <th>Anular Pedido</th>
                      </tr>
                    </thead>
                    <tbody>  <!--Creación tabla de productos-->
               
                        <?php print_r($alumnos); foreach ($alumnos as $alumno): ?>
                      <tr>
                       
                       <td><?= $alumno['apellidos'] ?></td>
                        <td><?= $alumno['nombre'] ?>  </td>
                         <td><?= $alumno['nie'] ?></td>
   

                      </tr>
                       <?php endforeach; ?>
                        <!--/Creación tabla de productos-->
                
                      </tbody>
                  </table>
                </div>
           </div>
         </div>
       </div>
     </div>
       <!--Error-->
               <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php if (!EMPTY($msg_error))
                    echo $msg_error;
                ?>
            </div>
        </div>
        
        <!-- PAGINACIÓN -->
        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>                              
                        <!-- PAGINATION CODEIGNITER -->
                        <?= $this->pagination->create_links(); ?>

                    </nav>                        
                </div>
            </div>
        </div>
   </div>
 </section>
 <!-- / Cart view section -->