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
        $this->load->library('email');
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
        //Enviamos un correo notificando la baja.
        $this->EnviaCorreo($idUsuario,'B');
        
        $this->M_User->setBajaUsuario($idUsuario); //Damos de baja al usuario
//        redirect(site_url() . "/Login/logout", 'Location', 301); //Cerramos su sesión
       $cuerpo = $this->load->view('V_UserBajaok', array('idUsuario'=>$idUsuario), true);
        
        $this->load->view('V_Plantilla', Array(   'cuerpo' => $cuerpo,
                                                  'homeactive' => 'active'));        
    }
    public function alta($idUsuario) {
        
        if (!SesionIniciadaCheck()) {
            
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }

       $cuerpo = $this->load->view('V_UserAlta', array('idUsuario'=>$idUsuario), true);
        
        $this->load->view('V_Plantilla', Array(   'cuerpo' => $cuerpo,
                                                  'homeactive' => 'active'));
    }
    
    public function dadoAlta($idUsuario) {
        
        if (!SesionIniciadaCheck()) {
            
            redirect("Error404", 'Location', 301);
            return; //Sale de la función
        }
        //Enviamos un correo notificando el alta.
        $this->EnviaCorreo($idUsuario,'A');
        
        $this->M_User->setAltaUsuario($idUsuario); //Damos de baja al usuario
//        redirect(site_url() . "/Login/logout", 'Location', 301); //Cerramos su sesión
        $cuerpo = $this->load->view('V_UserAltaok', array('idUsuario'=>$idUsuario), true);
        
        $this->load->view('V_Plantilla', Array(   'cuerpo' => $cuerpo,
                                                  'homeactive' => 'active')); 
    }
    
    
        /**
     * Envia un correo para que restablezca la contraseña con los datos especificados
     * @param Array $datos Datos del usuario
     */
    private function EnviaCorreo($idUsuario,$opcion) {
        print_r($opcion);
        $email=$this->M_User->getEmail($idUsuario);
        
        $this->email->from('mfmoradaw@gamil.com', 'Dep. Orientación');
        $this->email->to($email);

        $this->email->subject('Restablece la contraseña en Dep. Orientación');

        if($opcion=='A'){
           
                $mensaje = "Usted ha sido dado de alta en la Web del Dep. Orientación \n";
                $mensaje .=  " del IES Sebastian Fernandez.  \Un Saludo  ";
        }else{
                  $mensaje = "Usted ha sido dado de baja de la Web del Dep. Orientación \n";
                  $mensaje .=  " del IES Sebastian Fernandez. \Un Saludo     ";
        }
    
      
        
       $sms= $this->email->message($mensaje);
      

        if (!$this->email->send()) {
            
            $cuerpo = $this->load->view('V_Mailerror', '', true);
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 'homeactive' => 'active', 'titulo' => 'Mail incorrecto'));
            
            
        } else {
            
            $cuerpo = $this->load->view('V_Mailok', '', true);
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 'homeactive' => 'active', 'titulo' => 'Mail correcto'));
        }

    }

}
