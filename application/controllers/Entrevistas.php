<?php

/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrevistas extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->library('form_validation');
        $this->load->model('M_Protocolos');
   
    }
           //Se Accede de las opciones de Acción Tutorial -- V_MenuAcctuto
    public function alumno($idAlumno){
        
 
        
       $alumnos= $this->M_Protocolos-> getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_MenuProtocolos', array('alumnos' => $alumnos), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
            'homeactive' => 'active'));
    }

    public function insertar($idAlumno){
        
    
       //VISTA DE LA OPCIÓN INSERTAR
        $this->form_validation->set_error_delimiters('<div style="color: White"><b>¡Error! </b>', '</div>');

        //Establecemos los mensajes de errores
        $this->setMensajesErrores();

        //Establecemos reglas de validación para el formulario
        $this->setReglasValidacion();

        if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
            $cuerpo = $this->load->view('V_ProtocolosInsert', array(
                                                                    'idAlumno' => $idAlumno), TRUE);

            $this->load->view('V_Plantilla', Array(
                                                    'cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));
        } else {

            foreach ($this->input->post() as $key => $value) {

                if ($key == 'fecha_ini') {

                    $fecha = $this->formato_mysql($value);
                    $data[$key] = $fecha;
                } elseif ($key == 'fecha_fin') {

                    $fecha = $this->formato_mysql($value);
                    $data[$key] = $fecha;
                } else if ($key != 'aceptar') {

                    $data[$key] = $value;
                }
            }
              
                //Inserta en la tabla alumnado
                $this->M_Protocolos->adProtocolos($data);
                //Pantalla de Confirmación
                
//                $alumnos= $this->M_Protocolos-> getDatosAlumno($idAlumno);
//                print_r($alumnos);
                $cuerpo = $this->load->view('V_AccTutorialok', array('idAlumno' => $idAlumno), true);
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
        $date = $this->formato_americano($str);

        return (!preg_match('/^(19|20)[0-9]{2}\/(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])$/', $date)) ? FALSE : TRUE;
    }
    
    /**
     * Comprueba si una fechade inicio es menor o igula que la fecha final
     * $datos['fecha_ini'] datos fecha inicio
     * $datos['fecha_fin'] datos fecha fin
     */
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

//   /**
//    * Cambia el formato de una fecha
//    * @param Date $fecha Fecha a cambiar
//    * @return Date Fecha cambiada
//    */
//    function cambiaFormatoFecha($fecha){
//       $date = date_create($fecha);
//
//       return date_format($date, 'd/m/Y');
//    }
//    /**
//    * Cambia el formato de una fecha
//    * @param Date $fecha Fecha a cambiar
//    * @return Date Fecha cambiada
//    */
//    function formatoFechaAmericano($fecha){
//    //    print_r($fecha);
//       $date = date_create($fecha);
//
//       return date_format($date, 'Y/m/d');
//    }

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

