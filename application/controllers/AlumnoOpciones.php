<?php
/**
 * CONTROLADOR en que cada usuario puede modificar su cuenta en la aplicación.
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnoOpciones extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        
        $this->load->helper('Formulario');
        $this->load->model('M_Provincias');
        $this->load->model('M_Alumno');    
        $this->load->model('M_AlumnoDatos'); 
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }
    
    public function Mostrar ($idAlumno) {
        
        $datos= $this->DatoAlumno($idAlumno);
        
        $cuerpo = $this->load->view('V_AlumnoMostrar', array(
                                     'datos' => $datos), true);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,                                                      
                                                'homeactive' => 'active')); 
        
        
    }
    
    
    public function DatoAlumno($idAlumno){

        //>>>>>>>>>>>>>>>>>>  ALUMNO/A >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>        
        $datos['alu'] = $this->M_AlumnoDatos->getAlumno($idAlumno);

        foreach ($datos['alu'] as $key => $value) {

            if ($key == 'fechaNacimiento') {

                $fecha = $this->formato_mysql($value);
                $datos['alu'][$key] = $fecha;
            } elseif ($key == 'cod_provincia') {
                
                $nombrepro=  $this->M_Alumno->getNomProv($value);
                $datos['alu'][$key] = $nombrepro;
            } elseif ($key != 'Usuario_idUsuario') {
                $datos['alu'][$key] = $value;
            }
        }        

        //>>>>>>>>>>>>>>>>>>  ATENC DIVERSIDAD >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        $datos['nea'] = $this->M_AlumnoDatos->getNeae($idAlumno);
        $datos['mad'] = $this->M_AlumnoDatos->getMedidasad($idAlumno);
        foreach ($datos['mad'] as $key => $value) {

            if ($key == 'fecha_ini') {

                $fecha = $this->formato_mysql($value);
                $datos['mad'][$key] = $fecha;
            } elseif ($key == 'fecha_fin') {
                
               $fecha = $this->formato_mysql($value);
                $datos['mad'][$key] = $fecha;             
                
            } elseif ($key != 'idAlumno') {
                $datos['mad'][$key] = $value;
            }
        } 
        
        //>>>>>>>>>>>>>>>>>>  ACCIÓN TUTORIAL >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        $datos['pro'] = $this->M_AlumnoDatos->getProtocolos($idAlumno);
            foreach ($datos['pro'] as $key => $value) {

            if ($key == 'fecha_ini') {

                $fecha = $this->formato_mysql($value);
                $datos['pro'][$key] = $fecha;
            } elseif ($key == 'fecha_fin') {
                
               $fecha = $this->formato_mysql($value);
                $datos['pro'][$key] = $fecha;             
                
            } elseif ($key != 'idAlumno') {
                $datos['pro'][$key] = $value;
            }
        }
        $datos['ent'] = $this->M_AlumnoDatos->getEntrevistas($idAlumno);
        
        foreach ($datos['ent'] as $key => $value) {

            if ($key == 'fecha_ev') {

                $fecha = $this->formato_mysql($value);
                $datos['ent'][$key] = $fecha;
                
            }  elseif ($key != 'idAlumno') {
                $datos['ent'][$key] = $value;
            }
        }        
        
        $datos['tac'] = $this->M_AlumnoDatos->getTrayAcad($idAlumno);
        
        foreach ($datos['tac'] as $key => $value) {

            if ($key == 'fecha') {

                $fecha = $this->formato_mysql($value);
                $datos['tac'][$key] = $fecha;
                
            }  elseif ($key != 'idAlumno') {
                $datos['tac'][$key] = $value;
            }
        }        
        $datos['tra'] = $this->M_AlumnoDatos->getTransito($idAlumno);
        
        //>>>>>>>>>>>>>>>>>>  CONSEJO ORIENTADOR >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        $datos['cor'] = $this->M_AlumnoDatos->getConsejoOrien($idAlumno); 

        foreach ($datos['cor'] as $key => $value) {

            if ($key == 'fecha') {

                $fecha = $this->formato_mysql($value);
                $datos['cor'][$key] = $fecha;
                
            }  elseif ($key != 'idAlumno') {
                $datos['cor'][$key] = $value;
            }
        }        
        
        
        return $datos;
        
        
    }
    
    /**
     * >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  CREACIÓN DEL PDF  >>>>>>>>>>>>>>>>>>>>>>>>>
     */
    
    
     /**
     * Crea un PDF de un pedido determinado con todos los datos del pedido y los productos comprados
     * @param Int $idPedido ID del pedido
     * @param Char $metodo I --> envía el fichero al navegador / D --> Fuerza la descarga
     */
     public function CreaPDF($idAlumno, $metodo = 'F') {
        $this->load->library('Pdf', 0, 'myPDF');

        $this->myPDF->AddPage();
        $this->myPDF->AliasNbPages(); //nº de páginas
        $this->myPDF->SetFont('Arial', '', 10);

        //DATOS que ponemos al principio de la factura
      
//        $datos = $this->M_Pedidos->getDatosParaPDF($this->session->userdata('userid'));
        $datos=$this->DatoAlumno($idAlumno);
        print_r($datos);

        $this->myPDF->Cell(0, 7, utf8_decode($datos['alu']['nombre'] . ' ' . $datos['alu']['apellidos']), 0, 1);
        $this->myPDF->Cell(0, 7, utf8_decode("NIE: " . $datos['alu']['nie']), 0, 1);
        $this->myPDF->Cell(0, 7, utf8_decode($datos['alu']['direccion'] . ', ' . $datos['alu']['cp'] . ' (' . $datos['alu']['cod_provincia'] . ')'), 0, 1);

//        //TABLA LÍNEA DE PEDIDOS
//        $lineas_pedidos = $this->M_Pedidos->getLineasPedidos($idPedido);
//        foreach ($lineas_pedidos as $linea) {
//            $data[] = $linea;
//        }
//
        $this->myPDF->CreaTablaLineaPedidos($datos['nea']);
//
//        //TABLA PEDIDO
//        $pedido = $this->M_Pedidos->getPedido($idPedido, $this->session->userdata('userid'));
//        $this->myPDF->CreaTablaPedido($datos['nea']);

        $this->myPDF->Output($metodo, 'assets/pdf/pedido.pdf', true);
    }

    /**
     * Envia un correo con el PDF del pedido
     * @param String $correo Dirección de mail donde se tiene que mandar el correo
     * @param Int $idPedido ID del pedido
     */
    public function EnviaCorreo($correo, $idPedido) {

        $this->CreaPDF_Pedido($idPedido);
        
        $this->email->from('aula4@iessansebastian.com', 'OlontiaShop');
        
        $this->email->to($correo);

        $this->email->subject('Le enviamos el albarán de su pedido con fecha '.date("j-m-Y"));

        $mensaje = "Aquí puede ver el albarán de su pedido para su conformidad.<br><br> Un saludo OlontiaShop";

        $this->email->message($mensaje);

        $this->email->attach('assets/pdf/pedido.pdf');

        if (!$this->email->send())
            echo "<pre>\n\nError ennviado mail\n</pre>";
    }

    /**
     * Muestra un pedido en el navegador
     * @param Int $idPedido ID del pedido
     */
    public function VerPDFPedido($idPedido) {
        $this->CreaPDF_Pedido($idPedido, 'I');
    }

    /**
     * Descarga un pedido en la carpeta 'Descargas'
     * @param Int $idPedido ID del pedido
     */
    public function DescargarPDFPedido($idPedido) {
        $this->CreaPDF_Pedido($idPedido, 'D');
    }
    
    
    
    
    /**
     * >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> // CREACIÓN DEL PDF  >>>>>>>>>>>>>>>>>>>>>>>>>
     */


    /**
     * Modifica un usuario si se han introducido correctamente los datos
     */
    public function Modificar($idAlumno) {        

     

        if (SesionIniciadaCheck()) {
            

            //Optenemos los datos del alumno.
            $datos = $this->M_Alumno->getDatosModificar($idAlumno);
          
            $provincias = $this->M_Provincias->getProvincias();

            $select = CreaSelectMod($provincias, 'cod_provincia', $datos['cod_provincia']);

            
          $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><b>¡Error! </b>', '</div>');
            //Establecemos los mensajes de errores
            $this->setMensajesErrores();
            //Establecemos reglas de validación para el formulario
            $this->setReglasValidacion();

            if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
                
                
                $fecha=$this->formato_americano($datos['fechaNacimiento']);
                $cuerpo = $this->load->view('V_AlumnoModify', array(
                                               'select'=>$select,
                                               'fecha'=>$fecha,
                                               'datos' => $datos), true);
                                           
                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,                                                      
                                                        'homeactive' => 'active'));


            
            } else {
           

                foreach ($this->input->post() as $key => $value) {


                    if ($key == 'fechaNacimiento') {

                        $fecha = $this->formato_mysql($value);
                        $datos[$key] = $fecha;
                    } else if ($key != 'aceptar') {

                        $datos[$key] = $value;
                    }
                }

             
                $this->M_Alumno->updateAlumno($idAlumno,$datos);
          
                 
                 //Pantalla de Confirmación
                 $cuerpo = $this->load->view('V_AlumnoModifyok', array(), true);
                 $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                        'homeactive' => 'active'));
            }
        }
    }
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>FUNCIONES ELIMINAR >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    
    /*
     * Muestra una vista que pregunta si desea eliminar el usuario
     */
    public function eliminar($idAlumno) {

        if (!SesionIniciadaCheck()) {
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }
        $apellidos=  $this->M_Alumno->getUnApellido($idAlumno);
        $apellido=$apellidos[0]['apellidos'];
        $cuerpo = $this->load->view('V_AlumnoRemove', Array(
                                                             'idAlumno' => $idAlumno,
                                                             'apellido'=>$apellido), true); 
        $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
    }

    /**
     * Da de baja al usuario logueado de la base de datos
     */
    public function eliminado($id) {

        $this->M_Alumno->setBajaAlumno($id);
        $cuerpo = $this->load->view('V_AlumnoRemoveOK', Array(), true); 
        $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
    }

    

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
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

    function validar_telefono($tel) {
        $patron = " /^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/ ";
        if (preg_match($patron, $tel)) {
            return TRUE;
        } else {

            return FALSE;
        }
    }
        function vaildar_curso($curso){

        if($curso>0&&$curso<5){
          
            return TRUE;
            
        } else {
           
            return FALSE;
        }
    }
      function vaildar_grupo($grupo){
        if($grupo=='A'||$grupo=='B'||$grupo=='C'||$grupo=='D'){
            return TRUE;
            
        } else {
            return FALSE;
        }
    }

    /**
     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
     */
    function setMensajesErrores() {
        $this->form_validation->set_message('required', 'El campo %s está vacío');
        $this->form_validation->set_message('valid_email', 'Formato de correo electrónico incorrecto');
        $this->form_validation->set_message('integer', 'El campo %s debe ser un número de 5 dígitos');
        $this->form_validation->set_message('exact_length', 'El campo %s debe tener %s caracteres');
        $this->form_validation->set_message('integer', 'El campo %s debe ser númerico');
        $this->form_validation->set_message('numeroNieRepetido_chek', 'El campo %s ya existe');
        $this->form_validation->set_message('validar_fecha', 'formato de fecha no v&aacute;lido');
        $this->form_validation->set_message('validar_telefono', 'El campo %s debe ser númerico');
        $this->form_validation->set_message('vaildar_curso', 'El campo %s debe ser númerico y comprendido entre 1 y 4');
        $this->form_validation->set_message('vaildar_grupo', 'El campo %s debe ser texto en mayuscula y comprendido entre la A y la D');        
    }

    /**
     * Establece las reglas que deben seguir cada campo del formulario
     */
    function setReglasValidacion() {
        $this->form_validation->set_rules('apellidos', 'apellidos', 'required');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('fechaNacimiento', 'fecha nacimiento', 'required|callback_validar_fecha');
        $this->form_validation->set_rules('nombreT1', 'nombre titular 1', 'required');
        $this->form_validation->set_rules('nombreT2', 'nombre titular 2', 'required');
        $this->form_validation->set_rules('direccion', 'dirección', 'required');
        $this->form_validation->set_rules('cp', 'CP', 'required|integer|exact_length[5]');
        $this->form_validation->set_rules('poblacion', 'Población', 'required');
        $this->form_validation->set_rules('cod_provincia', 'provincia', 'required');
        $this->form_validation->set_rules('telefono1', 'Teléfono 1', 'required|exact_length[9]|callback_validar_telefono');
        $this->form_validation->set_rules('telefono2', 'Teléfono 2', 'exact_length[9]|callback_validar_telefono');
        $this->form_validation->set_rules('cod_provincia', 'provincia', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
        $this->form_validation->set_rules('situacion', 'Situación', 'required');
        $this->form_validation->set_rules('implicacion_escolar', 'Implicación Escolar', 'required');
        $this->form_validation->set_rules('curso', 'Curso', 'required|integer|max_length[1]|callback_vaildar_curso');
        $this->form_validation->set_rules('grupo', 'Grupo', 'required|max_length[1]|callback_vaildar_grupo');        
    }
    
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
