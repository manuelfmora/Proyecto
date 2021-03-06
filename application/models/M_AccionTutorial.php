<?php

/**
 * Description of M_Alumno
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class M_AccionTutorial extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
       
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> UPDATE NEAE Y MEDIDASAD >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    /**
    * Actualiza los datos Medidasad de un Alumno
    * @param Int $id ID de Alumno
    * @param Array $data Datos de la actualización
    */
    public function updateProtocolos($idAlumno,$data) {
        $this->db->where('idAlumno', $idAlumno);
        $this->db->update('protocolos', $data);
    }
    
    /**
    * Actualiza los datos Medidasad de un Alumno
    * @param Int $id ID de Alumno
    * @param Array $data Datos de la actualización
    */
    public function updateEntrevistas($idAlumno,$data) {
        $this->db->where('idAlumno', $idAlumno);
        $this->db->update('entrevistas', $data);
    }  
    
    /**
    * Actualiza los datos Medidasad de un Alumno
    * @param Int $id ID de Alumno
    * @param Array $data Datos de la actualización
    */
    public function updateTrayAcad($idAlumno,$data) {
        $this->db->where('idAlumno', $idAlumno);
        $this->db->update('trayect_acad', $data);
    }
    
    /**
    * Actualiza los datos Medidasad de un Alumno
    * @param Int $id ID de Alumno
    * @param Array $data Datos de la actualización
    */
    public function updateTransito($idAlumno,$data) {
        $this->db->where('idAlumno', $idAlumno);
        $this->db->update('transito', $data);
    }

  
    
     //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> / UPDATE NEAE Y MEDIDASAD >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  
    
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
     * Añade un Alumno a la base de datos
     * @param Array $data Datos del Alumno
     */
    public function adEntrevistas($data) {

        $this->db->insert('entrevistas', $data);
       
    }
    
    /**
     * Añade un Alumno a la base de datos
     * @param Array $data Datos del Alumno
     */
    public function adTrayAcad($data) {

        $this->db->insert('trayect_acad', $data);
       
    }
    /**
     * Añade un Alumno a la base de datos
     * @param Array $data Datos del Alumno
     */
  
    public function adTransito($data) {

        $this->db->insert('transito', $data);
       
    }   


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
     * Añade una Medida a la base de datos
     * @param Array $data Datos del Alumno
     */
    public function adMedidas($data) {

        $this->db->insert('medidasad', $data);

    }
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> DATOS MODIFICAR MENÚ ACCIÓN TUTORIAL >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getDatosModificarProtocolos($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM protocolos "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }
    
    /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getDatosModificarEntrevistas($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM entrevistas "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }

    /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getDatosModificarTrayAcad($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM trayect_acad "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }  

    /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getDatosModificarTransito($idAlumno) {
   
        $query = $this->db->query("SELECT * "
                . "FROM transito "
                . "WHERE idAlumno = '$idAlumno'");
                   
        return $query->row_array();
    }      
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> /DATOS MODIFICAR MENÚ ACCIÓN TUTORIAL >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>    
    /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
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
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de Alumno
     * @return Array
     */
//    public function getDatosModificar($nombre_usu) {
//
//        $query = $this->db->query("SELECT idAlumno,apellidos,nombre,nie,fechaNacimiento,edad,fotoAlumnado,datos_medicos,"
//                ."datos_psicologicos,informe_medico,nombreT1,nombreT2,dirección,cp,poblacion,cod_provincia,telefono1,"
//                ."telefono2,tipo,situacion,implicacion_escolar "
//                . "FROM alumno "
//                . "WHERE nombre_usu = '$nombre_usu'");
//                   
//        return $query->row_array();
//    }
    
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
     

    
    
    //--------------------------- Borrado y comprobacion de si existe id -------------------------------------------
   
    //--------------------------- Protocolos---------------------------------
    /**
    * Borramos los datos de NEAE de un alumno
    * @param String $idAlumno idAlumno   
    */    
    public function deleteProtocolos($idAlumno) {


        $this->db->where('idAlumno', $idAlumno);
        $this->db->delete('protocolos');
    }
    
    /**
    * Consulta la id de medidasad que le corresponde a la id del aLUMNO
    * @param String $IDaLUMNO id de Alumno
    *  @return Int Nº de ID Medidasad
    */
    public function getidProtocolos($idAlumno) {
        
        
        $query = $this->db->query("SELECT idProtocolos "
                . "FROM protocolos "
                . "WHERE idAlumno = '$idAlumno' " );   
        return $query->num_rows();
    }
    //--------------------------- Entrevistas ---------------------------------    
    
    /**
    * Borramos los datos de Medidas Atención a la Diversidad de un alumno
    * @param String $idAlumno idAlumno   
    */    
    public function deleteEntrevistas($idAlumno) {


        $this->db->where('idAlumno', $idAlumno);
        $this->db->delete('entrevistas');
    }
    
    /**
    * Consulta la id de NEAE que le corresponde a la id del aLUMNO
    * @param String $IDaLUMNO id de Alumno
    *  @return Int Nº de ID neae
    */
    public function getidEntrevistas($idAlumno) {
        
        
        $query = $this->db->query("SELECT idEntrevistas "
                . "FROM entrevistas "
                . "WHERE idAlumno = '$idAlumno' " );   
        return $query->num_rows();
    }
    
        /**
    * Borramos los datos de Medidas Atención a la Diversidad de un alumno
    * @param String $idAlumno idAlumno   
    */    
    
//--------------------------- TrayAcad --------------------------------- 
    public function deleteTrayAcad($idAlumno) {


        $this->db->where('idTrayect_Acad', $idAlumno);
        $this->db->delete('entrevistas');
    }
    
    /**
    * Consulta la id de NEAE que le corresponde a la id del aLUMNO
    * @param String $IDaLUMNO id de Alumno
    *  @return Int Nº de ID neae
    */
    public function getidTrayAcad($idAlumno) {
        
        
        $query = $this->db->query("SELECT idTrayect_Acad "
                . "FROM trayect_acad "
                . "WHERE idAlumno = '$idAlumno' " );   
        return $query->num_rows();
    }    
        /**
    * Borramos los datos de Medidas Atención a la Diversidad de un alumno
    * @param String $idAlumno idAlumno   
    */

//--------------------------- Transito ---------------------------------     
    public function deleteTransito($idAlumno) {


        $this->db->where('idAlumno', $idAlumno);
        $this->db->delete('transito');
    }
    
    /**
    * Consulta la id de NEAE que le corresponde a la id del aLUMNO
    * @param String $IDaLUMNO id de Alumno
    *  @return Int Nº de ID neae
    */
    public function getidTransito($idAlumno) {
        
        
        $query = $this->db->query("SELECT idTransito "
                . "FROM transito "
                . "WHERE idAlumno = '$idAlumno' " );   
        return $query->num_rows();
    }

    
    
    
    
    
}

