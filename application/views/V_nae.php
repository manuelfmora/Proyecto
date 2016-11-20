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
                            <div class="cart-view-table">
                                <div class="table table-bordered">

                                    <table class="table">
                                        <thead>
                                            <tr> 
                                                <th>NIE</th>
                                                <th>Apellido</th>
                                                <th>Nombre</th> 
<!--                                                <th>NEAE</th>
                                             <th>Medidas Atenc. Divers.</th>-->
                                                <th>Insertar</th>
                                                <th>Modificar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>  <!--Creación tabla de alumno-->
                                            <?php print_r();foreach ($alumnos as $alumno): ?>
                                            
                                                <tr>
                                                    <td><?= $alumno['nie'] ?></td>  
                                                    <td><?= $alumno['apellidos'] ?></td>
                                                    <td><?= $alumno['nombre'] ?>  </td>
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/Trayectoria/insertar/" . $alumno['idAlumno'] ?>">Insertar</a></td>
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoModify/Modificar/" . $alumno['idAlumno'] ?>">Modificar</a></td>
    <!--                                                     <td><a href="<?= site_url() . "/AlumnoModify/Modificar/" . $alumno['nie'] ?>">Modificar</a></td>-->
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoRemove/eliminar/" . $alumno['idAlumno'] ?>">Eliminar</a></td>

                                                </tr>
                                            <?php endforeach; ?>
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