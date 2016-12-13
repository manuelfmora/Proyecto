<!-- Start Contact section -->


<!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">N.E.A.E.</span>
                        <h2>Acciones a Realizar</h2>
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
                                                <th>Insertar</th>
                                                <th>Modificar</th>
                                                 <?php if ($this->session->userdata('username')=='admin'): //Sesión iniciada ?>  
                                                <th>Eliminar</th>
                                                 <?php endif;?>
                                            </tr>
                                        </thead>
                                        <tbody>  <!--Creación tabla de alumno-->

                                                <tr>
                                                    <td><?= $alumnos['nie'] ?></td>  
                                                    <td><?= $alumnos['apellidos'] ?></td>
                                                    <td><?= $alumnos['nombre'] ?>  </td>
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/Trayectoria/insertar/" . $alumnos['idAlumno'] ?>">Insertar</a></td>
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoModify/Modificar/" . $alumnos['idAlumno'] ?>">Modificar</a></td>
                                                    <?php if ($this->session->userdata('username')=='admin'): ?>
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoRemove/eliminar/" . $alumnos['idAlumno'] ?>">Eliminar</a></td>
                                                    <?php endif;?>

                                                </tr>
                                            <?php // endforeach; ?>
                                            <!--/Creación tabla de alumno-->
                                        </tbody>
                                    </table>
                                </div><!--/Fin table responsive -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>