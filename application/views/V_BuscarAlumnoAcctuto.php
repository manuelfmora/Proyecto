 <!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Seleccione Alumno/a</span>
                        <h2>Acción Tutorial</h2>
                        <i class="fa fa-spoon"></i>              
                        <span class="mu-title-bar"></span>
                    </div>
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-contact-left">
                                    <form class="mu-contact-form"  action= "<?= base_url() . 'index.php/AccionTutorial/Buscar' ?>"  method="POST" >
                                        <div class="form-group">
                                            <label for="apellidos">Buscar por Apellidos</label><br><br>
                                            <input type="text" class="form-control" id="searchApell" placeholder="Apellidos" name="apellidos" autocomplete="off" />
                                        </div>                                      
                                        <button type="submit" class="mu-send-btn" value="entrar" name="entrar">Buscar</button>
                                    </form>
                                </div><!---->
                            </div><!---->

                            <!---------------------------------------------- MENÚ CURSOS --------------------------------------------------------------------------------------->
                            <!--------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div class="col-md-6">
                                
                                <div class="mu-contact-right">
                                    <form class="mu-contact-form"  action= "<?= base_url() . 'index.php/AccionTutorial/BuscarCurso' ?>"  method="POST" >
                                        <div class="form-group">
                                          <label for="apellidos">Buscar por Curso</label><br><br>
                                       
                                        <div class="col-md-4">

                                            <select name="cursos">
                                                <option value="">Curso</option>
                                                <option value="1">1º</option>
                                                <option value="2">2º</option>
                                                <option value="3">3º</option>
                                                <option value="4">4º</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4">

                                            <select name="grupos">
                                                <option value="">Grupo</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>

                                            </select>

                                        </div> 
                                        <div class="col-md-4">
                                            <button type="submit" class="mu-send-btn" value="entrar" name="entrar">Buscar</button>
                                        </div>
                                     </div>
                                    </form>
                                </div><!---->
                            </div><!---->
                            <!---------------------------------------------- / MENÚ CURSOS --------------------------------------------------------------------------------------->
                            <!--------------------------------------------------------------------------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>