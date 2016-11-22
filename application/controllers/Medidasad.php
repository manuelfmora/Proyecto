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
        $this->load->model('M_Medidasad');

    }

    
    public function alumno($idAlumno){
       $alumnos= $this->M_Medidasad-> getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_MedidasAD', array('alumnos' => $alumnos), TRUE);

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
            
              
                 foreach ($this->input->post() as $key => $value) {
                     
                        if ($key == 'fecha_ini') {

                            $fecha = $this->formato_mysql($value);
                            $data[$key] =$fecha;

                        }elseif ($key == 'fecha_fin') {

                            $fecha = $this->formato_mysql($value);
                            $data[$key] =$fecha;

                        }else if( $key != 'aceptar'){
                            
                            $data[$key] = $value;
                        }                     
//                    
                 }
                 //Inserta en la tabla alumnado
                 $this->M_Medidasad->adMedidas($data);
                 //Pantalla de Confirmación
                 $cuerpo = $this->load->view('V_Medidasadok', array(), true);
                 $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                     'homeactive' => 'active')); 
            
        }          
            
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
        print_r('Entra en validar fecha');
        $date = $this->formato_americano($str);

        return (!preg_match('/^(19|20)[0-9]{2}\/(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])$/', $date)) ? FALSE : TRUE;
    }

    /**
     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
     */
    function setMensajesErrores() {

        $this->form_validation->set_message('validar_fecha', 'formato de fecha no v&aacute;lido');

    }

    /**
     * Establece las reglas que deben seguir cada campo del formulario
     */
    function setReglasValidacion() {
        
          $this->form_validation->set_rules('fecha_ini', 'fecha inicio', 'required|callback_validar_fecha');
          $this->form_validation->set_rules('fecha_fin', 'fecha final', 'required|callback_validar_fecha');
    }
    


}

