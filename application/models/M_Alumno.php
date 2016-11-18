<?php

/**
 * Description of M_Alumno
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Alumno extends CI_Model{
    
    public function __construct() {
        $this->load->database();
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
    public function getApellidosUsuario($apellidos_alum) {
      
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE apellidos like '%$apellidos_alum%' ");
     
   
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
     * Añade un Alumno a la base de datos
     * @param Array $data Datos del Alumno
     */
    public function addalumno($data) {
        
        
        print_r($data);
        $this->db->insert('alumno', $data);
    }
        /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getDatosModificar($nie) {
       
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE nie = '$nie'");
                   
        return $query->row_array();
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
//        $this->db->where('nombre_usu', $username);
//        $this->db->delete('alumno', $data);
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
    
    /**
     * Actualiza los datos de un Alumno
     * @param Int $id ID de Alumno
     * @param Array $data Datos de la actualización
     */
    public function updateAlumno($id,$data) {
        $this->db->where('idAlumno', $id);
        $this->db->update('alumno', $data);
    }
}
