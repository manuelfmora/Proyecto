
<?php
/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AccionTutorial extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->model('M_Alumno');
        $this->load->library('form_validation');
        $this->load->model('M_AccionTutorial');
        $this->load->library('pagination');
    }

    /**
     * Muestra el formulario de registro
     */
    public function index() {

        $cuerpo = $this->load->view('V_BuscarAlumnoAcctuto', array(), true);

        $this->load->view('V_Plantilla', Array(
            'cuerpo' => $cuerpo,
            'homeactive' => 'active'
        ));
    }
    
    //Busca los alumnos y muestra los resultados paginados
    public function Buscar($desde = 0){
        
        
       $apellidos = $this->input->post('apellidos');

        //PAGINACÓN
        $config = $this->getConfigPag($apellidos);
      

        $result=$this->pagination->initialize($config);
        $alumnos = $this->M_AccionTutorial->getApellidosUsuario($apellidos,$config['per_page'], $desde);
        
        //Si no existe alumnos con esos apellidos
        //Mostramos un informe de lista vacia.
        
        
        if (empty($alumnos)) {
            $cuerpo = $this->load->view('V_AlNoAccTut', array(), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        } else {
    //------------------------>MOSTRAMOS LA VENTANA DEL MENU DE OPCIONES CON LOS ALUMNOS<-------------------------
            $cuerpo = $this->load->view('V_MenuAcctuto', array('alumnos' => $alumnos), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        }
    }
    
    //Función que busca un alumno y lo pagina tras pulsar la tecla salir del ultimo menú de opciones
    public function BuscarUno($idAlumno) {

        $apellidos=$this-> M_AccionTutorial->getUnApellido($idAlumno);
        
        $apellido=$apellidos[0]['apellidos'];
         
        
         
        //PAGINACÓN
        $config = $this->getConfigPag($apellido);
      

        $result=$this->pagination->initialize($config);
        $alumnos = $this->M_AccionTutorial->getApellidosUsuario($apellido,$config['per_page'],0 );
        
        //Si no existe alumnos con esos apellidos
        //Mostramos un informe de lista vacia.
        
        
        if (empty($alumnos)) {
            $cuerpo = $this->load->view('V_AlNoAccTut', array(), TRUE);

            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        } else {
    //------------------------>MOSTRAMOS LA VENTANA DEL MENU DE OPCIONES CON LOS ALUMNOS<-------------------------
            $cuerpo = $this->load->view('V_MenuAcctuto', array('alumnos' => $alumnos), TRUE);

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

        $alumnos=  $this->M_AccionTutorial-> getAlumCurso($curso, $grupo);
        //----------------------------->>> IMPORTANTE <<<<------------------------------------
        //----------------------------->>> IMPORTANTE <<<<------------------------------------
        //----------------------------->>> IMPORTANTE <<<<------------------------------------
        $cuerpo = $this->load->view('V_MenuAcctutoCursos', array('alumnos' => $alumnos,
                                                                    'curso' => $curso,
                                                                    'grupo' => $grupo), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                'homeactive' => 'active'));
        
    }
    public function VolverCurso($idAlumno) {
        
        $cursos=  $this->M_AccionTutorial-> getCurso($idAlumno);
        $grupos=  $this->M_AccionTutorial-> getGupo($idAlumno);
        $curso=$cursos[0]['curso'];
        $grupo=$grupos[0]['grupo'];

        $alumnos=  $this->M_AccionTutorial-> getAlumCurso($curso, $grupo);
        
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
        $config['base_url'] = site_url('/AccionTutorial/Buscar');
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

}


