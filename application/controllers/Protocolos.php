<?php

/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Protocolos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->library('form_validation');
        $this->load->model('M_Protocolos');
   
    }
    
    public function alumno($idAlumno){
       $alumnos= $this->M_Protocolos-> getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_Protocolos', array('alumnos' => $alumnos), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
            'homeactive' => 'active'));
    }

    public function insertar(){
        
        $this->form_validation->set_error_delimiters('<div style="color: White"><b>¡Error! </b>', '</div>');

        //Establecemos los mensajes de errores
        $this->setMensajesErrores();

//        //Establecemos reglas de validación para el formulario
//        $this->setReglasValidacion();

        if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
        
            $cuerpo = $this->load->view('V_ProtocolosInsert', array(
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
                 print_r($data);
                 //Inserta en la tabla alumnado
                 $this->M_Medidasad->adMedidas($data);
                 //Pantalla de Confirmación
                 $cuerpo = $this->load->view('V_Medidasadok', array(), true);
                 $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                     'homeactive' => 'active')); 
            
        } 
    }
     //Crea el array de los datos a insertar en la tabla usuario       
    public function insertaDatos() {
        print_r('Entra en la funcion añadir');
        print_r($this->input->post());
        foreach ($this->input->post() as $key => $value) {
            if ($key != 'aceptar') {
                $data[$key] = $value;
            }
        }
        //Inserta en la tabla alumnado
        $this->M_Protocolos->adProtocolo($data);

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

