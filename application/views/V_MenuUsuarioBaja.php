<!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                       <span class="mu-subtitle">Opciones Usuarios</span>
                        <h2>Usuario</h2>
                        
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
                                                <th>Usario</th>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                 <th>Baja Usuario</th>
                                                <th>Eliminar</th>
                                                <th>Salir</th> 
                                            </tr>
                                        </thead>
                                        <tbody>  <!--Creación tabla de alumno-->
                                            <?php foreach ($datos as $key => $value): ?>
                                                <tr>
                                                    <?php if($value['nombre_usu']!= 'admin'): ?>
                                                    <td><?= $value['nombre_usu'] ?></td>  
                                                    <td><?= $value['nombre_persona'] ?></td>
                                                    <td><?= $value['apellidos_persona'] ?>  </td>
                                                    
                                                    
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/UserRemove/baja/" . $value['idUsuario'] ?>">Baja</a></td>
                                         
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() . "/UserRemove/eliminar/" . $value['idUsuario'] ?>">Eliminar</a></td>
                                                    
                                                    <td><a class="mu-readmore-btn" href="<?= site_url() ?>">Salir</a></td>
                                                    <?php endif;?>

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
