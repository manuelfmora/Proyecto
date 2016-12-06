<?php

/**
 * Description of M_Alumno
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class M_AtDiversidad extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    
    
    //--------------- Funciones creadas para la busqueda de alumnos por curso --------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------
    /**
     * Consulta todos los alumnos que estan en un curso
     * @param type $curso Curso al que pertenece    
     * @param type $grupo Grupo al que pertenece
     * @return type Nº Alumnos
     */
    public function getAlumCurso($curso, $grupo) {
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE curso = '$curso'"
                . "AND grupo = '$grupo' ");

        return $query->result_array();
    }
    /**
     * Consulta el curso de un alumno
     * @param type $idAlumno
     * @return type array
     */
    public function getCurso($idAlumno) {
        $query = $this->db->query("SELECT curso "
                . "FROM alumno "
                . "WHERE idAlumno = '$idAlumno'");

        return $query->result_array();
    }
    /**
     * Consulta el grupo de un alumno
     * @param type $idAlumno
     * @return type
     */
    public function getGupo($idAlumno) {
        $query = $this->db->query("SELECT grupo "
                . "FROM alumno "
                . "WHERE idAlumno = '$idAlumno'");

        return $query->result_array();
    }
    //--------------- / Funciones creadas para la busqueda de alumnos por curso --------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------
    /**
     * Consulta el número de Alumnos que tienen el mismo apellido que el pasado por parámetro
     * @param String $nombre_usu Nombre de Alumno
     * @return Int Nº de Alumnos
     */
    public function getCount_NombreUsuario($apellidos_alum) {
     
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE apellidos = '$apellidos_alum' ");
      
        return $query->num_rows();
    }
    
    /**
     * Consulta el número de Alumnos que tienen el mismo apellido que el pasado por parámetro
     * @param String $nombre_usu Nombre de Alumno
     * @return Int Nº de Alumnos
     */
    public function getUnApellido($idAlumno) {

        $query = $this->db->query("SELECT apellidos "
                . "FROM alumno "
                . "WHERE idAlumno = '$idAlumno' ");
     
   
        return $query->result_array();
    }
     /**
     * Consulta el número de Alumnos que tienen el mismo apellido que el pasado por parámetro
     * @param String $nombre_usu Nombre de Alumno
     * @return Int Nº de Alumnos
     */
    public function getApellidosUsuario($apellido,$limit,$start) {
//      $start=0;
//      $limit=1;
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE apellidos like '%$apellido%' "
                . "LIMIT $start, $limit; ");
     
   
        return $query->result_array();
    }
        /**
     * Consulta el número de nie que tienen el mismo número que el pasado por parámetro
     * @param String $nie NIE
     * @return Int Nº de NIE
     */
    public function getCount_Nie($nie) {
     
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE nie = '$nie' ");
      
        return $query->num_rows();
    }

    /**
     * Añade un Alumno a NEAE
     * @param Array $data Datos del NEAE
     */
    public function adNeae($data) {

        $this->db->insert('neae', $data);
      
    }
    public function adMedidas($data) {

        $this->db->insert('medidasad', $data);
        print_r('Impresion Correcta');
    }

    /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $idAlimno ID Alumno
     * @return Array
     */
    
    //++++++++++++++CAMBIAR+++++++++++++++++++++++++++++++++++++
    public function getDatosModificar($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM neae "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }
        /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    
    //++++++++++++++CAMBIAR+++++++++++++++++++++++++++++++++++++
    public function getDatosModifiMedidasad($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM medidasad "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }
        /**
     * Consulta los datos de un alumno por su id
     * @param String $id id usuario
     * @return Array
     */
    public function getDatosAlumno($id) {
       
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE idAlumno = '$id'");
                   
        return $query->row_array();
    }
     /**
     * Consulta el numero total alumnos
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getNumAlumnos() {
       
        $query = $this->db->query("SELECT * "
                . "FROM alumno ");
                   
        return $query->num_rows();
    }


    /**
     * Consulta la contraseña del Alumno
     * @param String $username Nombre de Alumno
     * @return String Contraseña codificada
     */
    public function getClave($username) {

        $query = $this->db->query("SELECT clave "
                . "FROM alumno "
                . "WHERE nombre_usu = '$username'; ");

        return $query->row_array()['clave'];
    }

    /**
     * Cambia el estado de un Alumno a 'B', baja
     * @param String $username Nombre de Alumno
     */
    public function setBajaAlumno($id) {
     
        $this->db->where('idAlumno',$id);
        $this->db->delete('alumno');
    }

    /**
     * Consulta el número de Alumno que tienen el nombre de Alumno pasado por parámetro y no es el ID pasado por parámetro
     * @param String $nombre_usu Nombre de Alumno
     * @param Int $idUsuario ID de Alumno
     * @return Int Nº de Alumnos
     */
    public function getCount_NombreUsuarioModificar($nombre_usu, $idUsuario) {

        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE nombre_usu = '$nombre_usu' "
                . "AND idUsuario != $idUsuario; ");

        return $query->num_rows();
    }
    
        /**
     * Consulta 
     * @param String $username Nombre de Alumno
     * @param String $clave Clave Alumno
     * @return Int Nº de Alumnos
     */
    public function getEstado($username) {
        
        $query = $this->db->query("SELECT estado "
                . "FROM alumno "
                . "WHERE nombre_usu = '$username' "
                . "AND estado = 'A' ;"
                );   
        return $query->num_rows();
    }
    
 


    /**
     * Consulta el id de Alumno a través de su NIE de Alumno
     * @param String $NIE Nombre de Alumno
     * @return Int ID de Alumno
     */
    public function getId($nie) {

        $query = $this->db->query("SELECT idAlumno "
                . "FROM alumno "
                . "WHERE nie = '$nie' ");

        return $query->row_array()['idAlumno'];
    }

    
    /**
     * Actualiza los datos de un Alumno
     * @param Int $id ID de Alumno
     * @param Array $data Datos de la actualización
     */
//    public function updateAlumno($id,$data) {
//        $this->db->where('idAlumno', $id);
//        $this->db->update('alumno', $data);
//    }
    
    /**
     * Actualiza los datos Neae de un Alumno
     * @param Int $id ID de Alumno
     * @param Array $data Datos de la actualización
     */
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> UPDATE NEAE Y MEDIDASAD >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function updateNeae($idAlumno,$data) {
        $this->db->where('idAlumno', $idAlumno);
        $this->db->update('neae', $data);
    }
    
    /**
    * Actualiza los datos Medidasad de un Alumno
    * @param Int $id ID de Alumno
    * @param Array $data Datos de la actualización
    */
    public function updateMedidasad($idAlumno,$data) {
        $this->db->where('idAlumno', $idAlumno);
        $this->db->update('medidasad', $data);
    }
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> / UPDATE NEAE Y MEDIDASAD >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    
     //--------------------------- Borrado y comprobacion de si existe id -------------------------------------------
   
    //--------------------------- NEAE---------------------------------    
    /**
    * Consulta la id de NEAE que le corresponde a la id del aLUMNO
    * @param String $IDaLUMNO id de Alumno
    *  @return Int Nº de ID neae
    */
    public function getidNeae($idAlumno) {
        
        
        $query = $this->db->query("SELECT idNeae "
                . "FROM neae "
                . "WHERE idAlumno = '$idAlumno' " );   
        return $query->num_rows();
    }
   

    /**
    * Borramos los datos de NEAE de un alumno
    * @param String $idAlumno idAlumno   
    */    
    public function deleteNeae($idAlumno) {


        $this->db->where('idAlumno', $idAlumno);
        $this->db->delete('neae');
    }
    //--------------------------- MEDIDASAD--------------------------------- 
    
    /**
    * Consulta la id de medidasad que le corresponde a la id del aLUMNO
    * @param String $IDaLUMNO id de Alumno
    *  @return Int Nº de ID Medidasad
    */
    public function getidMedidasad($idAlumno) {
        
        
        $query = $this->db->query("SELECT idMedidasad "
                . "FROM medidasad "
                . "WHERE idAlumno = '$idAlumno' " );   
        return $query->num_rows();
    }
    
    /**
    * Borramos los datos de Medidas Atención a la Diversidad de un alumno
    * @param String $idAlumno idAlumno   
    */    
    public function deleteMedidasad($idAlumno) {


        $this->db->where('idAlumno', $idAlumno);
        $this->db->delete('medidasad');
    }    
    

}
