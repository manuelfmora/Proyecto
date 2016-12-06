<?php

/**
 * Description of M_Alumno
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class M_AlumnoDatos extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    
    /**
     * Consulta los datos del Alumno para mostrarlos en el formualario
     * @param String $idAlumno ID delAlumno
     * @return Array
     */
    public function getAlumno($idAluno) {
       
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE idAlumno = '$idAluno'");
                   
        return $query->row_array();
    } 


    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>  ATENC DIVERSIDAD >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    /**
     * Consulta los datos del Alumno para mostrarlos en el formualario
     * @param String $idAlimno ID Alumno
     * @return Array
     */
    
    //>>>>>>>>>>>>>>   GET NEAE   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function getNeae($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM neae "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }
     /**
     *Consulta los datos del Alumno para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    
    //>>>>>>>>>>>>>>   GET MEDIDASAD   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function getMedidasad($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM medidasad "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>> / ATENC DIVERSIDAD >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>  ACCIÓN TUTORIAL >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    /**
     * Consulta los datos  para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getProtocolos($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM protocolos "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }
    
    /**
     * Consulta los datos  para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getEntrevistas($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM entrevistas "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }

    /**
     * Consulta los datos para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getTrayAcad($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM trayect_acad "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }  

    /**
     * Consulta los datos para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getTransito($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM transito "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }      
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>  / ACCIÓN TUTORIAL >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    
    
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>  CONSEJO ORIENTADOR >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  
        /**
     * Consulta los datos para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getConsejoOrien($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM consejo_orientador "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    } 
    
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>  / CONSEJO ORINETADOR >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    
    
        
}    