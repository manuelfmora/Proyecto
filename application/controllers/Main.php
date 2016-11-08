<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CONTROLADOR que muestra la vista al iniciar la aplicación.
 * Muestra todas los Productos seleccionados en distintas páginas.
 */
class Main extends CI_Controller {
    
   function __construct()
   {
      parent:: __construct();
   }
    
     
    public function index(){
        
        $cuerpo = $this->load->view('V_home',Array(),true);
//        $login = $this->load->view('V_Login',Array(),true);
        $this->load->view('V_Plantilla',Array(
                                   'cuerpo' => $cuerpo, 
//                                   'login' => $login
                                   ));
                                        
    }
    
   
}

