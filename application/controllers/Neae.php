<?php

/**
 * Description of login
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Neae extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('Formulario');
        $this->load->library('form_validation');
        $this->load->model('M_AtDiversidad');
   
    }
           //Se Accede de las opciones de Acción Tutorial -- V_MenuAcctuto
    public function alumno($idAlumno){
        
        //Comprobamos si este alumno tiene ya una insercion en la tabla
        //Para mostrar los botones de modificar y eliminar
 
       $num_idneae= $this->M_AtDiversidad->getidNeae($idAlumno);

       $alumnos= $this->M_AtDiversidad-> getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_MenuNeae', array('alumnos' => $alumnos,
                                                        'num_idneae'=>$num_idneae), TRUE);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
    }
    //----------------------------------- INSERTAMOS EL ALUMNO DE LA BUSQUEDA DEL CURSO ----------------------------
    //--------------------------------------------------------------------------------------------------------------
    public function alumnoCurso($idAlumno) {

        //Comprobamos si este alumno tiene ya una insercion en la tabla
        //Para mostrar los botones de modificar y eliminar

        $num_idneae = $this->M_AtDiversidad->getidNeae($idAlumno);

        $alumnos = $this->M_AtDiversidad->getDatosAlumno($idAlumno);

        $cuerpo = $this->load->view('V_MenuNeaeC', array('alumnos' => $alumnos,
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
            $cuerpo = $this->load->view('V_NeaeInsert', array(
                                         'idAlumno' => $idAlumno), TRUE);

            $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));
        } else {

            foreach ($this->input->post() as $key => $value) {
                if ($key == 'nombre') {
                    $nombre = '';
                    for ($i = 0; $i < count($value); $i++) {
                        if ($i < count($value) - 1) {
                            $nombre .= $value[$i] . ',';
                        } else {
                            $nombre .= $value[$i];
                        }
                    }

                    $data['censo'] = $nombre;
                } elseif ($key != 'aceptar') {

                    $data[$key] = $value;
                }
            }

            //Inserta en la tabla alumnado
            $this->M_AtDiversidad->adNeae($data);
            //Pantalla de Confirmación
            $cuerpo = $this->load->view('V_NeaeInsertOK', array('idAlumno' => $idAlumno), true);
            
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));
        }
    }
    

    /**
     * Modifica un usuario si se han introducido correctamente los datos
     */
    public function Modificar($idAlumno) {        

        if (SesionIniciadaCheck()) {

            //Optenemos los datos del alumno.
            $datos = $this->M_AtDiversidad->getDatosModificar($idAlumno);        
            
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><b>¡Error! </b>', '</div>');
            //Establecemos los mensajes de errores
            $this->setMensajesErrores();
            //Establecemos reglas de validación para el formulario
            $this->setReglasValidacion();

            if ($this->form_validation->run() == FALSE) {//Validación de datos incorrecta
             
                $cuerpo = $this->load->view('V_NeaeModify', array(
                                              'datos' => $datos), true);
                                           
                $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,                                                      
                                                        'homeactive' => 'active'));

            } else {
           
                foreach ($this->input->post() as $key => $value) {
                    if ($key == 'nombre') {
                        $nombre = '';
                        for ($i = 0; $i < count($value); $i++) {
                            if ($i < count($value) - 1) {
                                $nombre .= $value[$i] . ',';
                            } else {
                                $nombre .= $value[$i];
                            }
                        }

                        $data['censo'] = $nombre;
                    } elseif ($key != 'aceptar') {

                        $data[$key] = $value;
                    }
                }
                
                 $this->M_AtDiversidad->updateNeae($idAlumno,$data);
                 
                 //Pantalla de Confirmación
                 $cuerpo = $this->load->view('V_NeaeInsertOK', array(), true);
                 $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                        'homeactive' => 'active'));
            }
        }
    }    
    
    
    
    /**
     * Preguntamos si realmente queremos eliminarlos.
     *  @param type $idAlumno
     */
    function eliminar($idAlumno){
        
            $cuerpo = $this->load->view('V_NeaeRemove', array('idAlumno' => $idAlumno), true);
            
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                    'homeactive' => 'active'));

    }
     /**
     * Eliminamos los datos NEAE correspondientes al alumno.
     *  @param type $idAlumno
     */
    function eliminado($idAlumno){

        $this->M_AtDiversidad->deleteNeae($idAlumno);

        $cuerpo = $this->load->view('V_DeleteAccionTutorialOK', array('idAlumno' => $idAlumno), true);

        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
 
    }


    /**
     * Establece los mensajes de error que se mostrarán si no se valida correctamente el formulario
     */
    function setMensajesErrores() {
        
        $this->form_validation->set_message('required', 'Tienes que insertar un datos');
                

    }

    /**
     * Establece las reglas que deben seguir cada campo del formulario
     */
    function setReglasValidacion() {
        
          $this->form_validation->set_rules('ev_ps', 'Evaluación Psicopedagogica', 'required');
        

    }
    

}

