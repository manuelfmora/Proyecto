<?php

/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Transito extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->library('form_validation');
        $this->load->model('M_AccionTutorial');
   
    }
           //Se Accede de las opciones de Acción Tutorial -- V_MenuAcctuto
    public function alumno($idAlumno){
        
       //Comprobamos si este alumno tiene ya una insercion en la tabla
       //Para mostrar los botones de modificar y eliminar
       $num_idneae= $this->M_AccionTutorial->getidProtocolos($idAlumno); 
        
        $alumnos= $this->M_AccionTutorial-> getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_MenuTransito', array('alumnos' => $alumnos,
                                                            'num_idneae' => $num_idneae), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
            'homeactive' => 'active'));
    }
    
    //`<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
    //----------------------------------- INSERTAMOS EL ALUMNO DE LA BUSQUEDA DEL CURSO ----------------------------
    //--------------------------------------------------------------------------------------------------------------
    public function alumnoCurso($idAlumno) {

        //Comprobamos si este alumno tiene ya una insercion en la tabla
        //Para mostrar los botones de modificar y eliminar

        $num_idneae = $this->M_AccionTutorial->getidProtocolos($idAlumno);

        $alumnos = $this->M_AccionTutorial->getDatosAlumno($idAlumno);
      //----------------------------- CAMBIAR -------------------
        $cuerpo = $this->load->view('V_MenuTransitoC', array('alumnos' => $alumnos,
                                                               'num_idneae' => $num_idneae), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                 'homeactive' => 'active'));
    }
    //-----------------------------------/ INSERTAMOS EL ALUMNO DE LA BUSQUEDA DEL CURSO ----------------------------
    //---------------------------------------------------------------------------------------------------------------       

    public function insertar($idAlumno){
        
    
       //VISTA DE LA OPCIÓN INSERTAR
        $this->form_validation->set_error_delimiters('<div style="color: White"><b>¡Error! </b>', '</div>');

        //Establecemos los mensajes de errores
        $this->setMensajesErrores();

        //Establecemos reglas de validación para el formulario
        $this->setReglasValidacion();

        if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
            $cuerpo = $this->load->view('V_TransitoInsert', array(
                                                                    'idAlumno' => $idAlumno), TRUE);

            $this->load->view('V_Plantilla', Array(
                                                    'cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));
        } else {

            foreach ($this->input->post() as $key => $value) {

            
                if ($key != 'aceptar') {

                    $data[$key] = $value;
                }
            }
              
                //Inserta en la tabla alumnado
                $this->M_AccionTutorial->adTransito($data);
                //Pantalla de Confirmación
                

                $cuerpo = $this->load->view('V_AccTutorialok', array('idAlumno' => $idAlumno), true);
                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                    'homeactive' => 'active'));
        }
    }
    
    
    
    
    /**>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  MODIFICAR ALUMNO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
     * Modifica un usuario si se han introducido correctamente los datos
     * >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
     */
    public function Modificar($idAlumno) {        

        

        if (SesionIniciadaCheck()) {
                 
            //Optenemos los datos del Medidasad
            $datos = $this->M_AccionTutorial->getDatosModificarTransito($idAlumno);        

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><b>¡Error! </b>', '</div>');
            //Establecemos los mensajes de errores
            $this->setMensajesErrores();
            //Establecemos reglas de validación para el formulario
            $this->setReglasValidacion();
            
            
            if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
            

                $cuerpo = $this->load->view('V_TransitoModify', array(
                                              'datos' => $datos), true);

                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,                                                      
                                                        'homeactive' => 'active'));


            
            } else {
                
                foreach ($this->input->post() as $key => $value) {
                    
           
                if ($key != 'aceptar') {

                        $datos[$key] = $value;
                    }
                }

                $this->M_AccionTutorial->updateTransito($idAlumno,$datos);
                 //Pantalla de Confirmación
                $cuerpo = $this->load->view('V_AccTutorialok', array('idAlumno' => $idAlumno), true);
                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                    'homeactive' => 'active'));
            }
        }
    }
    //**>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> / MODIFICAR ALUMNO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
    //-------------------------- Funciones para eliminar-----------------------------

    /**
     * Preguntamos si realmente queremos eliminarlos.
     *  @param type $idAlumno
     */
    function eliminar($idAlumno){
        
            $cuerpo = $this->load->view('V_TransitoRemove', array('idAlumno' => $idAlumno), true);
            
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));

    }
     /**
     * Eliminamos los datos NEAE correspondientes al alumno.
     *  @param type $idAlumno
     */
    function eliminado($idAlumno){

        $this->M_AtDiversidad->deleteNeae($idAlumno);

        $cuerpo = $this->load->view('V_DeleteTransitoOK', array('idAlumno' => $idAlumno), true);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
 
    } 
    //-------------------------- / Funciones para eliminar-----------------------------
    /**
     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
     */
    function setMensajesErrores() {
        
        $this->form_validation->set_message('ceip', 'Deves introducir un valor');
//        $this->form_validation->set_message('fecha_mayor', 'La fecha final no puede ser Menor que la de inicio');        

    }

    /**
     * Establece las reglas que deben seguir cada campo del formulario
     */
    function setReglasValidacion() {
        
          $this->form_validation->set_rules('ceip', 'Ceip', 'required');          

    }
    

}

