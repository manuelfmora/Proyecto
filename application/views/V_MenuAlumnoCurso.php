<!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                       <span class="mu-subtitle">Opciones</span>
                        <h2>Alumno/a</h2>
                        <h2>Curso: <?php echo($curso).'º'.($grupo)?></h2>
                        <i class="fa fa-spoon"> </i>              
                        <span class="mu-title-bar"></span>>
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
                                                <th>Mostrar</th> 
                                                <th>Modificar</th>
                                                <th>Eliminar</th>
                                                <th>Salir</th> 
                                            </tr>
                                        </thead>
                                        <tbody>  <!--Creación tabla de alumno-->
                                            <?php foreach ($alumnos as $alumno): ?>
                                                <tr>
                                                    <td><?= $alumno['nie'] ?></td>  
                                                    <td><?= $alumno['apellidos'] ?></td>
                                                    <td><?= $alumno['nombre'] ?>  </td>
                                                    
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoOpciones/Modificar/" . $alumno['idAlumno'] ?>">Mostrar</a></td>

                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoOpciones/Modificar/" . $alumno['idAlumno'] ?>">Modificar</a></td>
                                         
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoOpciones/eliminar/" . $alumno['idAlumno'] ?>">Eliminar</a></td>
                                                    
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/AlumnoBuscar" ?>">Salir</a></td>

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
<!-- End Contact section -->
