f<!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">ENTREVISTAS</span>
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
                                                <?php if ($num_idneae == 0)://Sólo mostrar si NO tiene datos insertados ?>
                                                <th>Insertar</th>
                                                <?php endif; ?>
                                                <?php if ($num_idneae != 0): //Sólo mostrar si tiene datos insertados ?>
                                                <th>Modificar</th>
                                                <th>Eliminar</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>  <!--Creación tabla de alumno-->

                                            <tr>
                                                <td><?= $alumnos['nie'] ?></td>  
                                                <td><?= $alumnos['apellidos'] ?></td>
                                                <td><?= $alumnos['nombre'] ?>  </td>
                                                <?php if ($num_idneae == 0)://Sólo mostrar si NO tiene datos insertados ?>
                                                <td><a class="mu-readmore-btn" href="<?= site_url() . "/Entrevistas/insertar/".$alumnos['idAlumno'] ?>">Insertar</a></td>
                                                <?php endif; ?>
                                                <?php if ($num_idneae != 0): //Sólo mostrar si tiene datos insertados ?>
                                                <td><a class="mu-readmore-btn" href="<?= site_url() . "/Entrevistas/Modificar/".$alumnos['idAlumno'] ?>">Modificar</a></td>                                              
                                                <td><a class="mu-readmore-btn" href="<?= site_url() . "/Entrevistas/eliminar/".$alumnos['idAlumno'] ?>">Eliminar</a></td>
                                                <?php endif; ?>

                                            </tr>

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