<?php
/**
 * CONTROLADOR en que cada usuario puede modificar su cuenta en la aplicación.
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnoBuscar extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        
        $this->load->helper('Formulario');
        $this->load->model('M_Provincias');
        $this->load->model('M_Alumno');    
        $this->load->library('form_validation');
         $this->load->library('pagination');
    }

    /**
     * Muestra el formulario para modificar un usuario
     */
    public function index() {

        if (!SesionIniciadaCheck()) {
            redirect("404", 'Location', 301);
            return; //Sale de la función
        }

        $cuerpo = $this->load->view('V_BuscarAlumno', array(), true);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,                                              
                                                'homeactive' => 'active'));
    }
    
    public function Buscar($desde = 0){

        $apellidos = $this->input->post('apellidos');     
        //PAGINACÓN
        $config = $this->getConfigPag($apellidos);       

        $result=$this->pagination->initialize($config);
        $alumnos = $this->M_Alumno->getApellidosUsuario($apellidos,$config['per_page'], $desde);
        
        if (empty($alumnos)) {
            $cuerpo = $this->load->view('V_AlumnoListaVacia', array(), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        } else {
          //------------------------>MOSTRAMOS LA VENTANA DEL MENU DE OPCIONES CON LOS ALUMNOS<-------------------------
            $cuerpo = $this->load->view('V_MenuAlumno', array('alumnos' => $alumnos), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        }
    }
  
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //Función que busca un alumno y lo pagina tras pulsar la tecla salir del ultimo menú de opciones
    public function BuscarUno($idAlumno) {

        $apellidos=$this-> M_Alumno->getUnApellido($idAlumno);
        
        $apellido=$apellidos[0]['apellidos'];
         
     
         
        //PAGINACÓN
        $config = $this->getConfigPag($apellido);
      

        $result=$this->pagination->initialize($config);
        $alumnos = $this->M_Alumno->getApellidosUsuario($apellido,$config['per_page'],0 );
        
        //Si no existe alumnos con esos apellidos
        //Mostramos un informe de lista vacia.
        
        
        if (empty($alumnos)) {
            $cuerpo = $this->load->view('V_AlNoAccTut', array(), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        } else {
    //------------------------>MOSTRAMOS LA VENTANA DEL MENU DE OPCIONES CON LOS ALUMNOS<-------------------------
            $cuerpo = $this->load->view('V_MenuAlumno', array('alumnos' => $alumnos), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        }
    }
    
    //------------------------------------------------------------------------------------------------
    //------------------------------- BUSCAMOS LOS ALUMNOS POR EL CURSO SELECIONADO -----------------
    //------------------------------- /index.php/AtDiversidad/BuscarCurso -------------------------------
    //-----------------------------------------------------------------------------------------------
    public function BuscarCurso() {
        $curso = $this->input->post('cursos');
        $grupo = $this->input->post('grupos');

        $alumnos=  $this->M_Alumno-> getAlumCurso($curso, $grupo);
        //----------------------------->>> IMPORTANTE <<<<------------------------------------
        //----------------------------->>> IMPORTANTE <<<<------------------------------------
        //----------------------------->>> IMPORTANTE <<<<------------------------------------
        if(empty($alumnos)){
            //SI no existen alumnos
            $cuerpo = $this->load->view('V_AlNoAlumno', array(), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));            
            
        }  else {
            $cuerpo = $this->load->view('V_MenuAlumnoCurso', array('alumnos' => $alumnos,
                                                                        'curso' => $curso,
                                                                        'grupo' => $grupo), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        }

        
    }
    public function VolverCurso($idAlumno) {
        
        $cursos=  $this->M_Alumno-> getCurso($idAlumno);
        $grupos=  $this->M_Alumno-> getGupo($idAlumno);
        $curso=$cursos[0]['curso'];
        $grupo=$grupos[0]['grupo'];

        $alumnos=  $this->M_Alumno-> getAlumCurso($curso, $grupo);
        
           $cuerpo = $this->load->view('V_MenuAcctutoCuros', array('alumnos' => $alumnos,
                                                                    'curso' => $curso,
                                                                    'grupo' => $grupo), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        
    }
    
//------------------------------------------ FIN BUSQUEDA CURSO --------------------------------------------------    
//------------------------------------------ FIN BUSQUEDA CURSO --------------------------------------------------          
    function MenuAccUno($idalumno){
        //Devolvemos los datos del alumno cuya id mandamos
        $alumno=  $this->M_AccionTutorial->getDatosAlumno($idalumno);
       //Para que se pueda mostrar en el foreach de V_menuAcctuto lo insertamos en otro array $alumno
        $alumnos[0]=$alumno;
        //le pasamos los datos a la vista 
        $cuerpo = $this->load->view('V_MenuAcctuto', array('alumnos' => $alumnos), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
            'homeactive' => 'active'));
    }



     /**
     * Establece y devuelve la configuración de la paginación
     * @return Array Configuración
     */
    public function getConfigPag($apellidos){
        //Configuración de Paginación
        $config['base_url'] = site_url('/AlumnoBuscar/Buscar');
        $config['total_rows'] = $this->M_Alumno->getNumApellidos($apellidos) ;//Total de número apellidos para paginar
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
//    /**
//     * Modifica un usuario si se han introducido correctamente los datos
//     */
//    public function Modificar($nie) {        
//
//        
//
//        if (SesionIniciadaCheck()) {
//            
//
//            //Optenemos los datos del alumno.
//            $datos = $this->M_Alumno->getDatosModificar($nie);
//            
//            $provincias = $this->M_Provincias->getProvincias();
//
//            $select = CreaSelectMod($provincias, 'cod_provincia', $datos['cod_provincia']);
//
//            
//          $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><b>¡Error! </b>', '</div>');
//            //Establecemos los mensajes de errores
//            $this->setMensajesErrores();
//            //Establecemos reglas de validación para el formulario
//            $this->setReglasValidacion();
//
//            if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
//                $fecha=$this->formato_americano($datos['fechaNacimiento']);
//                $cuerpo = $this->load->view('V_AlumnoModify', array(
//                                               'select'=>$select,
//                                               'fecha'=>$fecha,
//                                               'datos' => $datos), true);
//                                           
//                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,                                                      
//                                                        'homeactive' => 'active'));
//
//
//            
//            } else {
//           
//               
//                 $config['apellidos'] =  $this->input->post('apellidos');
//                 $config['nombre'] =  $this->input->post('nombre');
//                 $config['nie'] =  $this->input->post('nie');
//                 $config['fechaNacimiento'] = $this->formato_mysql($this->input->post('fechaNacimiento')) ;
//                 $config['datos_medicos'] =  $this->input->post('datos_medicos');
//                 $config['datos_psicologicos'] =  $this->input->post('datos_psicologicos');
//                 $config['informe_medico'] =  $this->input->post('informe_medico');
//                 $config['nombreT1'] =  $this->input->post('nombreT1');
//                 $config['nombreT2'] =  $this->input->post('nombreT2');
//                 $config['direccion'] =  $this->input->post('direccion');
//                 $config['cp'] =  $this->input->post('cp');
//                 $config['poblacion'] =  $this->input->post('poblacion');
//                 $config['cod_provincia'] =  $this->input->post('cod_provincia');
//                 $config['telefono1'] =  $this->input->post('telefono1');
//                 $config['telefono2'] =  $this->input->post('telefono2');
//                 $config['tipo'] =  $this->input->post('tipo');
//                 $config['situacion'] =  $this->input->post('situacion');
//                 $config['implicacion_escolar'] =  $this->input->post('implicacion_escolar');
//                 $config['Usuario_idUsuario'] = $this->session->userdata('logged_in');
//                 $id=$this->M_Alumno->getId($this->input->post('nie'));
//                 $this->M_Alumno->updateAlumno($id,$config);
//                 
//                 //Pantalla de Confirmación
//                 $cuerpo = $this->load->view('V_AlumnoModifyok', array(), true);
//                 $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
//                                                        'homeactive' => 'active'));
//            }
//        }
//    }
//    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>FUNCIONES ELIMINAR >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//
//    
//        /*
//     * Muestra una vista que pregunta si desea eliminar el usuario
//     */
//    public function eliminar($id) {
//
//        if (!SesionIniciadaCheck()) {
//            redirect("Error404", 'Location', 301);
//            return; //Sale de la función
//        }
//
//        $cuerpo = $this->load->view('V_AlumnoRemove', Array('id' => $id), true); 
//        $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
//                                                'homeactive' => 'active'));
//    }
//
//    /**
//     * Da de baja al usuario logueado de la base de datos
//     */
//    public function eliminado($id) {
//
//        $this->M_Alumno->setBajaAlumno($id);
//        $cuerpo = $this->load->view('V_AlumnoRemoveOK', Array(), true); 
//        $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
//                                                'homeactive' => 'active'));
//    }
//
//    
//
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
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
//        function vaildar_curso($curso){
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
//    }
//    
//        /**
//     * Establece y devuelve la configuración de la paginación
//     * @return Array Configuración
//     */
//    public function getConfigPag(){
//        //Configuración de Paginación
//        $config['base_url'] = site_url('/AlumnoModify/Buscar');
//        $config['total_rows'] = $this->M_Alumno->getNumAlumnos();
//        $config['per_page'] = $this->config->item('per_page_seleccionadas');
//        $config['uri_segment'] = 3;
//        $config['full_tag_open'] = '<ul class="pagination">';
//        $config['full_tag_close'] = '</ul>';
//        $config['num_tag_open'] = '<li>';
//        $config['num_tag_close'] = '</li>';
//        $config['cur_tag_open'] = '<li class="pag_activa"><span>';
//        $config['cur_tag_close'] = '</span></li>';
//        $config['prev_tag_open'] = '<li title="Anterior">';
//        $config['prev_tag_close'] = '</li>';
//        $config['next_tag_open'] = '<li title="Siguiente">';
//        $config['next_tag_close'] = '</li>';
//        $config['first_link'] = '«';
//        $config['prev_link'] = '‹';
//        $config['last_link'] = '»';
//        $config['next_link'] = '›';
//        $config['first_tag_open'] = '<li title="Inicio">';
//        $config['first_tag_close'] = '</li>';
//        $config['last_tag_open'] = '<li title="Final">';
//        $config['last_tag_close'] = '</li>';
//
//    
//        return $config;
//    }



}
