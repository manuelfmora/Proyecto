<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CONTROLADOR al que accede un usuario si quiere eliminar su cuenta.
 * Sólo se podrá acceder a este controlador si se ha iniciado sesión.
 */
class UserRemove extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_User');
    }

    /*
     * Muestra una vista que pregunta si desea eliminar el usuario
     */
    public function index() {

        if (!SesionIniciadaCheck()) {
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }
        

        $datos = $this->M_User->getUsuarios();
     
      
        $cuerpo = $this->load->view('V_MenuUsuarioBaja', array('datos'=>$datos), true);
        
        $this->load->view('V_Plantilla', Array(   'cuerpo' => $cuerpo,
                                                  'homeactive' => 'active'));

    }

    /**
     * Da de baja al usuario logueado de la base de datos
     */
    public function eliminar($idUsuario) {
        
        if (!SesionIniciadaCheck()) {
            
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }

        $cuerpo = $this->load->view('V_UserRemove', array('idUsuario'=>$idUsuario), true);
        
        $this->load->view('V_Plantilla', Array(   'cuerpo' => $cuerpo,
                                                  'homeactive' => 'active'));
    }
    
    
        public function eliminado($idUsuario) {
        
        if (!SesionIniciadaCheck()) {
            
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }
        
        $this->M_User->setUsuarioRemove($idUsuario); //Damos de baja al usuario
        redirect(site_url() . "/Login/logout", 'Location', 301); //Cerramos su sesión        

  
    }
        /**
     * Da de baja al usuario logueado de la base de datos
     */
    public function baja($idUsuario) {
        
        if (!SesionIniciadaCheck()) {
            
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }

       $cuerpo = $this->load->view('V_UserBaja', array('idUsuario'=>$idUsuario), true);
        
        $this->load->view('V_Plantilla', Array(   'cuerpo' => $cuerpo,
                                                  'homeactive' => 'active'));
    }
    
        public function dadoBaja($idUsuario) {
        
        if (!SesionIniciadaCheck()) {
            
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }

        $this->M_User->setBajaUsuario($idUsuario); //Damos de baja al usuario
        redirect(site_url() . "/Login/logout", 'Location', 301); //Cerramos su sesión
    }

}
