<?php

/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Trayectoria extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->model('M_Provincias');
        $this->load->model('M_Alumno');
        $this->load->library('form_validation');
        $this->load->model('M_Trayectoria');
        $this->load->library('pagination');
    }

    /**
     * Muestra el formulario de registro
     */
    public function index() {

        $cuerpo = $this->load->view('V_BuscarAlumnoTy', array(), true);

        $this->load->view('V_Plantilla', Array(
            'cuerpo' => $cuerpo,
            'homeactive' => 'active'
        ));
    }
    
    public function Buscar($desde = 0){

        $apellidos = $this->input->post('apellidos');     
        //PAGINACÓN
        $config = $this->getConfigPag();       

        $result=$this->pagination->initialize($config);
        $alumnos = $this->M_Alumno->getApellidosUsuario($apellidos,$config['per_page'], $desde);
        
        //Si no existe alumnos con esos apellidos
        //Mostramos un informe de lista vacia.
        if (empty($alumnos)) {
            $cuerpo = $this->load->view('V_AlumnoListaVacia', array(), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        } else {
            //Mostramo la ventana de modificación OK
            $cuerpo = $this->load->view('V_MenuAT_Diver', array('alumnos' => $alumnos), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        }
    }
    
    public function alumno($idAlumno){
       $alumnos= $this->M_Trayectoria-> getDatosAlumno($idAlumno);
//        print_r('El alumno es:');
//        print_r($alumnos);
        $cuerpo = $this->load->view('V_Neae', array('alumnos' => $alumnos), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
            'homeactive' => 'active'));
    }

    public function insertar($idAlumno){
        
            print_r('La id es:');
            print_r($idAlumno);
            $cuerpo = $this->load->view('V_TrayectoriaInsert', array('idAlumno' => $idAlumno), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
    }
     //Crea el array de los datos a insertar en la tabla usuario       
    public function insertaDatos() {
        print_r('Entra en la funcion añadir');
        foreach ($this->input->post() as $key => $value) {
            if ($key != 'aceptar') {
                $data[$key] = $value;
            }
        }
        //Inserta en la tabla alumnado
        $this->M_Trayectoria->adTrayectoria($data);

        //Pantalla de Confirmación
        $cuerpo = $this->load->view('V_Necesidadesok', array(), true);
        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
            'homeactive' => 'active'));
    }

//            $datos = $this->M_User->getDatosModificar($this->session->userdata('username'));
//            $data['idAlumno']=$idAlumno;
            
//            //Inserta en la tabla alumnado
//            $this->M_Alumno->addalumno($data); 
//            
//            //Pantalla de Confirmación
//            $cuerpo = $this->load->view('V_AlumnoInsertok', array(), true);
//            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
//                                                   'homeactive' => 'active'));
//    }


//    //////////////////////////////////////////////////////////////////////////////////////
//    /**
//     * Inicia la subida del archivo PDF
//     */
//    
//       public function subir(){
//           print_r('Entra en subir');
//       //Ruta donde se guardan los ficheros
//        $config['upload_path'] = './subidas/';
//        
//       //Tipos de ficheros permitidos
//        $config['allowed_types'] = 'gif|jpg|png';
//         
//       //Se pueden configurar aun mas parámetros.
//       //Cargamos la librería de subida y le pasamos la configuración 
//        $this->load->library('upload', $config);
// print_r( $this->load->library('upload', $config));
//        if(!$this->upload->do_upload()){
//            print_r('Entra en if');
//            /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
//                $error=array('error' => $this->upload->display_errors());
//                $this->load->view('subir_view', $error);
//        }else{
//            print_r('Entra en Else');
//            //Datos del fichero subido
//            $datos["img"]=$this->upload->data();
// 
//            // Podemos acceder a todas las propiedades del fichero subido 
//            // $datos["img"]["file_name"]);
// 
//            //Cargamos la vista y le pasamos los datos
//            $this->load->view('subir_view', $datos);
//        }
//    } 
 /////////////////////////////////////////////////////////////////////////////////////////////////////  

//    /**
//     * Comprueba que los datos introducidos en el formulario sean correctos
//     */
//    public function Alumno() {
//
//        $provincias = $this->M_Provincias->getProvincias();
//        $select = CreaSelect($provincias, 'cod_provincia');
//
//        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><b>¡Error! </b>', '</div>');
//
//        //Establecemos los mensajes de errores
//        $this->setMensajesErrores();
//
//        //Establecemos reglas de validación para el formulario
//        $this->setReglasValidacion();
//
//        if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
//        
//            $cuerpo = $this->load->view('V_AlumnoInsert', array(
//                'select' => $select), true);
//
//            $this->load->view('V_Plantilla', Array(
//                'cuerpo' => $cuerpo,
//                'homeactive' => 'active'));
//        } else {//Validación de datos correcta
//           
//            //Crea el array de los datos a insertar en la tabla usuario
//            foreach ($this->input->post() as $key => $value) {
//                if ($key == 'fechaNacimiento') {
//                    $fecha = $this->formato_mysql($value);
//                    $data[$key] =$fecha;
//                } else if( $key != 'GuardarUsuario'){
//                    $data[$key] = $value;
//                }
//            }
//            $datos = $this->M_User->getDatosModificar($this->session->userdata('username'));
//            $data['Usuario_idUsuario']=$datos['idUsuario'];
//            //Inserta en la tabla alumnado
//            $this->M_Alumno->addalumno($data); 
//            
//            //Pantalla de Confirmación
//            $cuerpo = $this->load->view('V_AlumnoInsertok', array(), true);
//            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
//                                                   'homeactive' => 'active'));
//
//
//        }
//    }
//    /**
//     * Comprueba si un nombre de usuario está ya usado
//     * @param String $nombre_usu Nombre del usuario a comprobar
//     * @return boolean
//    */
//    function nombreUsuRepetido_check($nombre_usu) {
//
//        $countNomUsuario = $this->M_Alumno->getCount_NombreUsuario($nombre_usu);
//
//        if ($countNomUsuario == 0) {//No existen nombres guardados
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    /**
//     * Comprueba si un NIE de alumno está ya usado
//     * @param String $nie Nie del alumno a comprobar
//     * @return boolean
//     */
//    function numeroNieRepetido_chek($nie) {
//        $cunetaNie = $this->M_Alumno->getCount_Nie($nie);
//        if ($cunetaNie == 0) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    function formato_americano($date) {
//
//        if (!empty($date)) {
//            $var = explode('/', str_replace('-', '/', $date));
//            return "$var[2]/$var[1]/$var[0]";
//        }
//    }
//
//    function formato_mysql($date) {
//
//        if (!empty($date)) {
//            $var = explode('/', str_replace('-', '/', $date));
//            return "$var[2]-$var[1]-$var[0]";
//        }
//    }
//
//    function validar_fecha($str) {
//        $date = $this->formato_americano($str);
//
//        return (!preg_match('/^(19|20)[0-9]{2}\/(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])$/', $date)) ? FALSE : TRUE;
//    }
//
//    function validar_telefono($tel) {
//        $patron = " /^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/ ";
//        if (preg_match($patron, $tel)) {
//            return TRUE;
//        } else {
//
//            return FALSE;
//        }
//    }
//    
//    function vaildar_curso($curso){
//
//        if($curso>0&&$curso<5){
//          
//            return TRUE;
//            
//        } else {
//           
//            return FALSE;
//        }
//    }
//      function vaildar_grupo($grupo){
//        if($grupo=='A'||$grupo=='B'||$grupo=='C'||$grupo=='D'){
//            return TRUE;
//            
//        } else {
//            return FALSE;
//        }
//    }
//
//    /**
//     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
//     */
//    function setMensajesErrores() {
//        $this->form_validation->set_message('required', 'El campo %s está vacío');
//        $this->form_validation->set_message('valid_email', 'Formato de correo electrónico incorrecto');
//        $this->form_validation->set_message('integer', 'El campo %s debe ser un número de 5 dígitos');
//        $this->form_validation->set_message('exact_length', 'El campo %s debe tener %s caracteres');
//        $this->form_validation->set_message('integer', 'El campo %s debe ser númerico');
//        $this->form_validation->set_message('numeroNieRepetido_chek', 'El campo %s ya existe');
//        $this->form_validation->set_message('validar_fecha', 'formato de fecha no v&aacute;lido');
//        $this->form_validation->set_message('validar_telefono', 'El campo %s debe ser númerico');
//        $this->form_validation->set_message('vaildar_curso', 'El campo %s debe ser númerico y comprendido entre 1 y 4');
//        $this->form_validation->set_message('vaildar_grupo', 'El campo %s debe ser texto en mayuscula y comprendido entre la A y la D');
//    }
//
//    /**
//     * Establece las reglas que deben seguir cada campo del formulario
//     */
//    function setReglasValidacion() {
//        $this->form_validation->set_rules('apellidos', 'apellidos', 'required');
//        $this->form_validation->set_rules('nombre', 'nombre', 'required');
//        $this->form_validation->set_rules('nie', 'NIE', 'required|exact_length[5]|callback_numeroNieRepetido_chek');
//        $this->form_validation->set_rules('fechaNacimiento', 'fecha nacimiento', 'required|callback_validar_fecha');
//        $this->form_validation->set_rules('nombreT1', 'nombre titular 1', 'required');
//        $this->form_validation->set_rules('nombreT2', 'nombre titular 2', 'required');
//        $this->form_validation->set_rules('direccion', 'dirección', 'required');
//        $this->form_validation->set_rules('cp', 'CP', 'required|integer|exact_length[5]');
//        $this->form_validation->set_rules('poblacion', 'Población', 'required');
//        $this->form_validation->set_rules('cod_provincia', 'provincia', 'required');
//        $this->form_validation->set_rules('telefono1', 'Teléfono 1', 'required|exact_length[9]|callback_validar_telefono');
//        $this->form_validation->set_rules('telefono2', 'Teléfono 2', 'exact_length[9]|callback_validar_telefono');
//        $this->form_validation->set_rules('cod_provincia', 'provincia', 'required');
//        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
//        $this->form_validation->set_rules('situacion', 'Situación', 'required');
//        $this->form_validation->set_rules('implicacion_escolar', 'Implicación Escolar', 'required');
//        $this->form_validation->set_rules('curso', 'Curso', 'required|integer|max_length[1]|callback_vaildar_curso');
//        $this->form_validation->set_rules('grupo', 'Grupo', 'required|max_length[1]|callback_vaildar_grupo');
//
//    }
    
    
            /**
     * Establece y devuelve la configuración de la paginación
     * @return Array Configuración
     */
    public function getConfigPag(){
        //Configuración de Paginación
        $config['base_url'] = site_url('/AlumnoModify/Buscar');
        $config['total_rows'] = $this->M_Alumno->getNumAlumnos();
        $config['per_page'] = $this->config->item('per_page_seleccionadas');
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="pag_activa"><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['prev_tag_open'] = '<li title="Anterior">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li title="Siguiente">';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = '«';
        $config['prev_link'] = '‹';
        $config['last_link'] = '»';
        $config['next_link'] = '›';
        $config['first_tag_open'] = '<li title="Inicio">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li title="Final">';
        $config['last_tag_close'] = '</li>';

    
        return $config;
    }

}


