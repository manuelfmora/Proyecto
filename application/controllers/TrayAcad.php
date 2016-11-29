<?php

/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class TrayAcad extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->library('form_validation');
        $this->load->model('M_AccionTutorial');
   
    }
           //Se Accede de las opciones de Acción Tutorial -- V_MenuAcctuto
    public function alumno($idAlumno){
        
 
        
       $alumnos= $this->M_AccionTutorial-> getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_MenuTrayAcad', array('alumnos' => $alumnos), TRUE);

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
            $cuerpo = $this->load->view('V_TrayAcadInsert', array(
                                                                    'idAlumno' => $idAlumno), TRUE);

            $this->load->view('V_Plantilla', Array(
                                                    'cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));
        } else {

            foreach ($this->input->post() as $key => $value) {

                if ($key == 'fecha_ev') {

                    $fecha = $this->formato_mysql($value);
                    $data[$key] = $fecha;
                
                } else if ($key != 'aceptar') {

                    $data[$key] = $value;
                }
            }
              
                //Inserta en la tabla alumnado
                $this->M_AccionTutorial->adTrayAcad($data);
                //Pantalla de Confirmación

                $cuerpo = $this->load->view('V_AccTutorialok', array('idAlumno' => $idAlumno), true);
                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                    'homeactive' => 'active'));
        }
    }
    //-------------------------- Funciones para eliminar-----------------------------

    /**
     * Preguntamos si realmente queremos eliminarlos.
     *  @param type $idAlumno
     */
    function eliminar($idAlumno){
        
            $cuerpo = $this->load->view('V_TrayAcadRemove', array('idAlumno' => $idAlumno), true);
            
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));

    }
     /**
     * Eliminamos los datos NEAE correspondientes al alumno.
     *  @param type $idAlumno
     */
    function eliminado($idAlumno){

        $this->M_AtDiversidad->deleteNeae($idAlumno);

        $cuerpo = $this->load->view('V_DeleteTrayAcadOK', array('idAlumno' => $idAlumno), true);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
 
    } 
    //-------------------------- / Funciones para eliminar-----------------------------
    
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
     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
     */
    function setMensajesErrores() {
        
        $this->form_validation->set_message('validar_fecha', 'formato de fecha no v&aacute;lido');
        $this->form_validation->set_message('required', 'Tienen que tener un valor');
        
    }

    /**
     * Establece las reglas que deben seguir cada campo del formulario
     */
    function setReglasValidacion() {
        
          $this->form_validation->set_rules('fecha_ev', 'fecha evaluacion', 'required|callback_validar_fecha');
          $this->form_validation->set_rules('promocion','Radio Promocion','required');
          $this->form_validation->set_rules('titulacion','Radio Titulacion','required');

    }
    

}

