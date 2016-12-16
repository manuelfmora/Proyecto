  
   <!-- Start Contact section -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <span class="mu-subtitle">Seleccione Alumno/a</span>
                        <h2>Atención a la Diversidad</h2>
                        <i class="fa fa-spoon"></i>              
                        <span class="mu-title-bar"></span>
                    </div>
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-contact-left">
                                    <form class="mu-contact-form"  action= "<?= base_url() . 'index.php/AtDiversidad/Buscar' ?>"  method="POST" >
                                        <div class="form-group">
                                            <label for="apellidos">Buscar por Apellidos</label><br><br>
                                            <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" id="apellidos" onKeyUp="buscar();" autocomplete="off" />
                                        </div>                                      
                                        <button type="submit" class="mu-send-btn" value="entrar" name="entrar">Buscar</button>
                                    </form>
                                </div><!---->
                            </div><!---->
                              <!---------------------------------------------- MENÚ CURSOS --------------------------------------------------------------------------------------->
                            <!--------------------------------------------------------------------------------------------------------------------------------------------------->
 
                            
                            <script>
                                $(document).ready(function() {
                                    $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
                                });

                                function buscar() {
                                    print('Entra el el scrip buscar');
                                    var textoBusqueda = $("input#apellidos").val();

                                     if (textoBusqueda != "") {
                                        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
                                            
                                            $("#resultadoBusqueda").html(mensaje);
                                            
                                         }); 
                                     } else { 
                                         
                                        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
                                        
                                        };
                                };
                            </script>
                            


                            <!---------------------------------------------- MENÚ CURSOS --------------------------------------------------------------------------------------->
                            <!--------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div class="col-md-6">
                                
                                <div class="mu-contact-right">
                                    <form class="mu-contact-form"  action= "<?= base_url() . 'index.php/AtDiversidad/BuscarCurso' ?>"  method="POST" >
                                        <div class="form-group">
                                          <label for="apellidos">Buscar por Curso</label><br><br>
                                       
                                        <div class="col-md-2">

                                            <select name="cursos">
                                                <option value="">Curso</option>
                                                <option value="1">1º</option>
                                                <option value="2">2º</option>
                                                <option value="3">3º</option>
                                                <option value="4">4º</option>

                                            </select>

                                        </div>
                                        <div class="col-md-2">

                                            <select name="grupos">
                                                <option value="">Grupo</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>

                                            </select>

                                        </div> 
                                        <div class="col-md-2">
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