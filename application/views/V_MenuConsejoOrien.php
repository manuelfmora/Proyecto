
<!-- MENÚ DE ACCION TUTORIAL-->

<!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Opciones</span>
                        <h2>Consejo Orientador</h2>
                        <i class="fa fa-spoon"></i>              
                        <span class="mu-title-bar"></span>
                    </div>
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="cart-view-table">
                                <div class="table table-bordered">

                                    <table class="table">
                                        <thead>
                                            <tr> 
                                                <th>NIE</th>
                                                <th>Apellido</th>
                                                <th>Nombre</th> 
                                                <th>CONSEJO ORIENTADOR</th>                                          
                                                <th>SALIR</th>

                                            </tr>
                                        </thead>
                                        <tbody>  <!--Creación tabla de alumno-->
                                            <?php foreach ($alumnos as $alumno): ?>
                                                <tr>
                                                    <td><?= $alumno['nie'] ?></td>  
                                                    <td><?= $alumno['apellidos'] ?></td>
                                                    <td><?= $alumno['nombre'] ?>  </td>  <!--Craga todas las opciones del menu de alumnos-->
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/ConsejoOrienUno/alumno/" . $alumno['idAlumno'] ?>">Acceder</a></td>
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . '/ConsejoOrien'?>"</a>Salir</td>
                                                      
                                                                                        
                                             </tr>
                                            <?php endforeach; ?>
                                           <!-- /Creación tabla de alumno -->
                                        </tbody>
                                    </table>
                                </div><!--/Fin table responsive-->
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

<!-- PAGINACIÓN -->
<div class="product-pagination text-center">
    <nav>                              
        <!-- PAGINATION CODEIGNITER -->
        <?= $this->pagination->create_links(); ?>

    </nav>                        
</div>