<?php
/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class AlumnoInsert extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('Formulario');
        $this->load->model('M_Provincias');
        $this->load->model('M_Student');    
        $this->load->library('form_validation');        
    }

    /**
     * Muestra el formulario de registro
     */
    public function index() {
        
        $provincias = $this->M_Provincias->getProvincias();
        
        $select = CreaSelect($provincias, 'cod_provincia');
        
        $cuerpo = $this->load->view('V_AlumnoInsert', array('select' => $select), true);

        $this->load->view('V_Plantilla', Array(
            'cuerpo' => $cuerpo,
            'homeactive' => 'active'
        ));
    }

    /**
     * Comprueba que los datos introducidos en el formulario sean correctos
     */
    public function Student() {
        
        $provincias = $this->M_Provincias->getProvincias();
        $select = CreaSelect($provincias, 'cod_provincia');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><b>¡Error! </b>', '</div>');

        //Establecemos los mensajes de errores
        $this->setMensajesErrores();
        
        //Establecemos reglas de validación para el formulario
        $this->setReglasValidacion();

        if ($this->form_validation->run() == FALSE || !claves_check($this->input->post('clave'), $this->input->post('rep_clave'))) {//Validación de datos incorrecta
            $errorclave = '';

            if (!claves_check($this->input->post('clave'), $this->input->post('rep_clave'))) {//Si las claves no son iguales, se muestra error
                $errorclave = '<div class="alert alert-danger"><b>¡Error! </b> Las contraseñas no son iguales</div>';
            }
            
            $cuerpo = $this->load->view('V_AlumnoInsert', array(
                                        'select' => $select,
                                        'errorclave' => $errorclave), true);
            $this->load->view('V_Plantilla', Array(
                               'cuerpo' => $cuerpo,                                
                               'homeactive' => 'active'));
        } else {//Validación de datos correcta
            
            //Crea el array de los datos a insertar en la tabla usuario
            foreach ($this->input->post() as $key => $value) {
                if($key == 'clave')
                {
                    $data[$key] = password_hash($value, PASSWORD_DEFAULT);
                }
                else if ($key != 'rep_clave' && $key != 'GuardarUsuario')
                    $data[$key] = $value;
                
            }
            
            //Inserta en la tabla usuario
            $this->M_Student->addUsuario($data);
            
            redirect('Login/Login/'.$data['nombre_usu'], 'location', 301);
        }
    }

    /**
     * Comprueba si un DNI es correcto
     * @param String $dni DNI a comprobar
     * @return boolean
     */
    function dni_check($dni) {

        $numerosDNI = substr($dni, 0, 8);
        $letraDNI = substr($dni, 8, 1);
        $letraDNI = strtoupper($letraDNI);

        if (is_numeric($numerosDNI) && ($letraDNI == dni_LetraNIF($dni))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Comprueba si un nombre de usuario está ya usado
     * @param String $nombre_usu Nombre del usuario a comprobar
     * @return boolean
     */
    function nombreUsuRepetido_check($nombre_usu) {

        $countNomUsuario = $this->M_Student->getCount_NombreUsuario($nombre_usu);

        if ($countNomUsuario == 0) {//No existen nombres guardados
            return TRUE;
        } else {
            return FALSE;
        }
    }
      /**
     * Comprueba si un NIE de alumno está ya usado
     * @param String $nie Nie del alumno a comprobar
     * @return boolean
     */
    function numeroNieRepetido_chek($nie){
        $cunetaNie=$this->M_Student->getCount_Nie($nie);
        if($cunetaNie==0){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
    function validar_fecha($str) {
        $patron = "/^(\d){4}\-(\d){2}\-(\d){2}$/i";
        if (preg_match($patron, $str)) {
            return TRUE;
        } else {
            
            return FALSE;
        }
    }function validar_telefono($tel){
        $patron=" /^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/ ";
          if (preg_match($patron, $tel)) {
            return TRUE;
        } else {
            
            return FALSE;
        }
    }

    /**
     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
     */
    function setMensajesErrores(){
        $this->form_validation->set_message('required', 'El campo %s está vacío');
        $this->form_validation->set_message('valid_email', 'Formato de correo electrónico incorrecto');
        $this->form_validation->set_message('integer', 'El campo %s debe ser un número de 5 dígitos');
        $this->form_validation->set_message('exact_length', 'El campo %s debe tener %s caracteres');
        $this->form_validation->set_message('integer', 'El campo %s debe ser númerico');
        $this->form_validation->set_message('dni_check', 'Formato de DNI incorrecto');
        $this->form_validation->set_message('numeroNieRepetido_chek', 'El campo %s ya existe');       
        $this->form_validation->set_message('validar_fecha', 'formato de fecha no v&aacute;lido');
        $this->form_validation->set_message('validar_telefono', 'El campo %s debe ser númerico');
    }
   
    /**
     * Establece las reglas que deben seguir cada campo del formulario
     */
    function setReglasValidacion(){
        $this->form_validation->set_rules('apellidos', 'apellidos', 'required');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('dni', 'DNI', 'required|exact_length[9]|callback_dni_check');
        $this->form_validation->set_rules('nie', 'NIE', 'required|exact_length[5]|callback_numeroNieRepetido_chek');
        $this->form_validation->set_rules('fechaNac', 'fecha nacimiento', 'required|callback_validar_fecha');
        $this->form_validation->set_rules('nombreT1', 'nombre titular 1', 'required');
        $this->form_validation->set_rules('dniT1', 'DNI T1', 'required|exact_length[9]|callback_dni_check');
        $this->form_validation->set_rules('nombreT2', 'nombre titular 2', 'required');
        $this->form_validation->set_rules('dniT2', 'DNI T2', 'required|exact_length[9]|callback_dni_check');
        $this->form_validation->set_rules('direccion', 'dirección', 'required');
        $this->form_validation->set_rules('cp', 'CP', 'required|integer|exact_length[5]');
        $this->form_validation->set_rules('poblacion', 'Población', 'required');
        $this->form_validation->set_rules('cod_provincia', 'provincia', 'required');
        $this->form_validation->set_rules('telefono1', 'Teléfono 1', 'required|exact_length[9]|callback_validar_telefono');
        $this->form_validation->set_rules('telefono2', 'Teléfono 2', 'required|exact_length[9]|callback_validar_telefono');
        $this->form_validation->set_rules('cod_provincia', 'provincia', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
        $this->form_validation->set_rules('situacion', 'Situación', 'required');
        $this->form_validation->set_rules('implicacion_escolar', 'Implicación Escolar', 'required');
        //Preguntar si el correo es necesario.
        $this->form_validation->set_rules('correo', 'correo electrónico', 'required|valid_email');
  
    }
}
