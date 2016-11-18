<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CONTROLADOR al que accede un usuario si quiere eliminar su cuenta.
 * Sólo se podrá acceder a este controlador si se ha iniciado sesión.
 */
class AlumnoRemove extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Alumno');
    }

    /*
     * Muestra una vista que pregunta si desea eliminar el usuario
     */
    public function eliminar($id) {

        if (!SesionIniciadaCheck()) {
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }

        $cuerpo = $this->load->view('V_AlumnoRemove', Array('id' => $id), true); 
        $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
    }

    /**
     * Da de baja al usuario logueado de la base de datos
     */
    public function eliminado($id) {
//        $cuerpo = $this->load->view('V_AlumnoRemove', '', true); 
//        $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
//                                                'homeactive' => 'active'));
        
//        if (!SesionIniciadaCheck()) {
//            
//            redirect("Error404", 'Location', 301);
//            return; //Sale de la función
//        }
        print_r('Entra en eliminar y el valor es:');
        print_r($id);
        $this->M_Alumno->setBajaAlumno($id);
        $cuerpo = $this->load->view('V_AlumnoRemoveOK', Array(), true); 
        $this->load->view('V_Plantilla', Array( 'cuerpo' => $cuerpo,
                                                'homeactive' => 'active'));
    }

}
