<?php

/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Medidasad extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->model('M_Provincias');        
        $this->load->library('form_validation');
        $this->load->model('M_AtDiversidad');

    }

    
    public function alumno($idAlumno){
        //Comprobamos si este alumno tiene ya una insercion en la tabla
        //Para mostrar los botones de modificar y eliminar
       $num_id= $this->M_AtDiversidad->getidMedidasad($idAlumno);
       
       $alumnos= $this->M_AtDiversidad-> getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_Medidasad', array('alumnos' => $alumnos,
                                                         '$num_idneae' => $num_id), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
    }

    
    public function insertar($idAlumno){
        
        $this->form_validation->set_error_delimiters('<div style="color: White"><b>¡Error! </b>', '</div>');

        //Establecemos los mensajes de errores
        $this->setMensajesErrores();

        //Establecemos reglas de validación para el formulario
        $this->setReglasValidacion();

        if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
        
            $cuerpo = $this->load->view('V_MedidasInsert', array(
                                                                  'idAlumno' => $idAlumno), TRUE);

            $this->load->view('V_Plantilla', Array( 
                                                    'cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));
            
        } else {
            
//            print_r($this->input->post());
                 foreach ($this->input->post() as $key => $value) {
                     
                        if($key == 'nombre'){
                             $nombre='';
                            for ($i=0;$i<count($value);$i++){
                                if($i<count($value)-1){
                                   $nombre.=$value[$i].',';   
                                }  else {
                                    $nombre.=$value[$i]; 
                                }
                                                              
                            }
                          
                            $data['nombre']=$nombre;
  
                        }elseif ($key == 'fecha_ini') {

                            $fecha = $this->formato_mysql($value);
                            $data[$key] =$fecha;

                        }elseif ($key == 'fecha_fin') {

                            $fecha = $this->formato_mysql($value);
                            $data[$key] =$fecha;

                        }else if( $key != 'aceptar'){
                            
                            $data[$key] = $value;
                        }                     
                   
                 }
           
                    //Inserta en la tabla alumnado
               $this->M_AtDiversidad->adMedidas($data);
               //Pantalla de Confirmación
               $cuerpo = $this->load->view('V_DatosInsertadosOK', array('idAlumno' => $idAlumno), true);
               $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                   'homeactive' => 'active'));
               
           }          
            
    }
    
     /**
     * Modifica un usuario si se han introducido correctamente los datos
     */
    public function Modificar($idAlumno) {        

        

        if (SesionIniciadaCheck()) {
            

            //Optenemos los datos del alumno.
            $datos = $this->M_Medidasad->getDatosModificar($idAlumno);

         
          $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><b>¡Error! </b>', '</div>');
            //Establecemos los mensajes de errores
            $this->setMensajesErrores();
            //Establecemos reglas de validación para el formulario
            $this->setReglasValidacion();

            if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
                $fecha_ini=$this->formato_americano($datos['fecha_ini']);
                $fecha_fin=$this->formato_americano($datos['fecha_fin']);
                $cuerpo = $this->load->view('V_MedidasModify', array(                                            
                                               'fecha_ini'=>$fecha_ini,
                                               'fecha_fin'=>$fecha_fin,
                                               'datos' => $datos), true);
                                           
                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,                                                      
                                                        'homeactive' => 'active'));


            
            } else {
           
               
                 $config['apellidos'] =  $this->input->post('apellidos');
                 $config['nombre'] =  $this->input->post('nombre');
                 $config['nie'] =  $this->input->post('nie');
                 $config['fechaNacimiento'] = $this->formato_mysql($this->input->post('fechaNacimiento')) ;
                 $config['datos_medicos'] =  $this->input->post('datos_medicos');
                 $config['datos_psicologicos'] =  $this->input->post('datos_psicologicos');
                 $config['informe_medico'] =  $this->input->post('informe_medico');
                 $config['nombreT1'] =  $this->input->post('nombreT1');
                 $config['nombreT2'] =  $this->input->post('nombreT2');
                 $config['direccion'] =  $this->input->post('direccion');
                 $config['cp'] =  $this->input->post('cp');
                 $config['poblacion'] =  $this->input->post('poblacion');
                 $config['cod_provincia'] =  $this->input->post('cod_provincia');
                 $config['telefono1'] =  $this->input->post('telefono1');
                 $config['telefono2'] =  $this->input->post('telefono2');
                 $config['tipo'] =  $this->input->post('tipo');
                 $config['situacion'] =  $this->input->post('situacion');
                 $config['implicacion_escolar'] =  $this->input->post('implicacion_escolar');
                 $config['Usuario_idUsuario'] = $this->session->userdata('logged_in');
                 $id=$this->M_Alumno->getId($this->input->post('nie'));
                 $this->M_Alumno->updateAlumno($id,$config);
                 
                 //Pantalla de Confirmación
                 $cuerpo = $this->load->view('V_AlumnoModifyok', array(), true);
                 $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                        'homeactive' => 'active'));
            }
        }
    }
    
    /**
     * Preguntamos si realmente queremos eliminarlos.
     *  @param type $idAlumno
     */
    function eliminar($idAlumno){
        
            $cuerpo = $this->load->view('V_MedidasasRemove', array('idAlumno' => $idAlumno), true);
            
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));

    }
     /**
     * Eliminamos los datos MedidasAd correspondientes al alumno.
     *  @param type $idAlumno
     */
    function eliminado($idAlumno){

        $this->M_AtDiversidad->deleteNeae($idAlumno);

        $cuerpo = $this->load->view('V_DeleteNeaeOK', array('idAlumno' => $idAlumno), true);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
 
    }
    

    function formato_americano($date) {

        if (!empty($date)) {
            $var = explode('/', str_replace('-', '/', $date));
            return "$var[2]/$var[1]/$var[0]";
        }
    }

    function formato_mysql($date) {

        if (!empty($date)) {
            $var = explode('/', str_replace('-', '/', $date));
            return "$var[2]-$var[1]-$var[0]";
        }
    }

    function validar_fecha($str) {
     
        $date = $this->formato_americano($str);

        return (!preg_match('/^(19|20)[0-9]{2}\/(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])$/', $date)) ? FALSE : TRUE;
    }
    
    function fecha_mayor(){
        
        $datos= $this->input->post();

        $fechini=$datos['fecha_ini'];

        $fechfin=$datos['fecha_fin'];

        if($fechini<=$fechfin){

            return TRUE;

        }else{

            return FALSE;
        }
    }

    /**
     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
     */
    function setMensajesErrores() {

        $this->form_validation->set_message('validar_fecha', 'formato de fecha no v&aacute;lido');
        $this->form_validation->set_message('fecha_mayor', 'La fecha final no puede ser Menor que la de inicio');

    }

    /**
     * Establece las reglas que deben seguir cada campo del formulario
     */
    function setReglasValidacion() {
        
          $this->form_validation->set_rules('fecha_ini', 'fecha inicio', 'required|callback_validar_fecha');
          $this->form_validation->set_rules('fecha_fin', 'fecha final', 'required|callback_validar_fecha|callback_fecha_mayor');
    }
    


}

