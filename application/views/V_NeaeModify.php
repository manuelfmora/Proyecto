<!-- Start Insert students -->
<section id="mu-reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-reservation-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Necesidades Especiales</span>
                        <center>
                            <span class="mu-subtitle">de</span>
                        </center>

                        <h2>Apoyo Educativo</h2>
                        <i class="fa fa-spoon"></i>              
                        <span class="mu-title-bar"></span>
                    </div>              
                    <div class="mu-reservation-content">

                        <form class="mu-reservation-form" action="<?= base_url() . 'index.php/Neae/modificar/' . $datos['idAlumno'] ?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="checkbox" style="color: White; ">

                                            <h3> Necesidades:</h3><br>
                                            <?php $array = explode(',', $datos['censo']) ?>

                                            <h4>  

                                                <?php
                                                $dia = FALSE;$dis = FALSE; $com = FALSE;$ac = FALSE;

                                                foreach ($array as $valor) {
                                                    if ($valor == 'DIS') {
                                                        $dis = true;
                                                    }
                                                    if ($valor == 'DIA') {
                                                        $dia = true;
                                                    }
                                                    if ($valor == 'Compensatoria') {
                                                        $com = true;
                                                    }
                                                    if ($valor == 'AA.CC.') {
                                                        $ac = true;
                                                    }
                                                }
                                                ?>


                                                <input type="checkbox" value="DIS" name="nombre[]" <?php if ($dis == true) echo "checked" ?> >DIS<br>

                                                <input type="checkbox" value="DIA" name="nombre[]" <?php if ($dia == true) echo "checked" ?> >DIA<br>

                                                <input type="checkbox" value="Compensatoria" name="nombre[]" <?php if ($com == true) echo "checked" ?> >Compensatoria<br>

                                                <input type="checkbox" value="AA.CC." name="nombre[]" <?php if ($ac == true) echo "checked" ?> > AA.CC.<br>

                                            </h4>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?= $datos['ev_ps'] ?>" placeholder="Evaluación Psicopedagogica" name="ev_ps">
                                         <?= form_error('ev_ps'); ?>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <input type="text" class="form-control" value="<?= $datos['dic_es'] ?>" placeholder="Dictamen Escolarización" name="dic_es" >

                                    </div>
                                </div> 
                                <center>
                                    <div class="col-md-12">
                                        <div class="form-group">                         

                                            <input type="hidden" name="idAlumno" value="<?= $datos['idAlumno'] ?>">
                                            <button type="submit" name="aceptar" class="mu-readmore-btn">Aceptar</button>
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
