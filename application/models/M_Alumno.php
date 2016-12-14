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
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    
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
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //
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
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>/ Funciones creadas para la busqueda de alumnos por curso  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    
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
    public function getApellidosUsuario($apellido,$limit,$start) {
        
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE apellidos like '%$apellido%' "
                . "LIMIT $start, $limit; ");
     
   
        return $query->result_array();
    }    

         /**
     * Consulta el numero total alumnos
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getNumApellidos($apellido) {
       
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE apellidos like '%$apellido%' ");
      
   
        return $query->num_rows();
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

        $this->db->insert('alumno', $data);
    }

    /**
     * Consulta los datos que se van a modificar para mostrarlos en el formualario
     * @param String $nombre_usu Nombre de usuario
     * @return Array
     */
    public function getDatosModificar($idAlumno) {
       
        $query = $this->db->query("SELECT * "
                . "FROM alumno "
                . "WHERE idAlumno = '$idAlumno'");
                   
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
     * Consulta la provincia del Alumno
     * @param String $cod Codigo Provincia
     * @return String Nombre provincia
     */
    public function getNomProv($cod) {

        $query = $this->db->query("SELECT nombre "
                . "FROM provincias "
                . "WHERE cod = '$cod'; ");

        return $query->row_array()['nombre'];
    }

    /**
     * Elimina los datos del Alumno
     * @param String $username Nombre de Alumno
     */
    public function setBajaAlumno($idAlumno) {
     
        $this->db->where('idAlumno',$idAlumno);
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
    public function updateAlumno($idAlumno,$data) {

        $where=$this->db->where('idAlumno', $idAlumno);
        $update=$this->db->update('alumno', $data);
        
    }
    
     /**
     * Crea un PDF de un pedido determinado con todos los datos del pedido y los productos comprados
     * @param Int $idPedido ID del pedido
     * @param Char $metodo I --> envía el fichero al navegador / D --> Fuerza la descarga
     */
    private function CreaPDF_Pedido($idPedido, $metodo = 'F') {
        $this->load->library('Pdf', 0, 'myPDF');

        $this->myPDF->AddPage();
        $this->myPDF->AliasNbPages(); //nº de páginas
        $this->myPDF->SetFont('Arial', '', 10);

        //DATOS que ponemos al principio de la factura
        $datos = $this->M_Pedidos->getDatosParaPDF($this->session->userdata('userid'));

        $this->myPDF->Cell(0, 7, utf8_decode($datos['nombre_persona'] . ' ' . $datos['apellidos_persona']), 0, 1);
        $this->myPDF->Cell(0, 7, utf8_decode("DNI: " . $datos['dni']), 0, 1);
        $this->myPDF->Cell(0, 7, utf8_decode($datos['direccion'] . ', ' . $datos['cp'] . ' (' . $datos['provincia'] . ')'), 0, 1);

        //TABLA LÍNEA DE PEDIDOS
        $lineas_pedidos = $this->M_Pedidos->getLineasPedidos($idPedido);
        foreach ($lineas_pedidos as $linea) {
            $data[] = $linea;
        }

        $this->myPDF->CreaTablaLineaPedidos($data);

        //TABLA PEDIDO
        $pedido = $this->M_Pedidos->getPedido($idPedido, $this->session->userdata('userid'));
        $this->myPDF->CreaTablaPedido($pedido);

        $this->myPDF->Output($metodo, 'assets/pdf/pedido.pdf', true);
    }

    /**
     * Envia un correo con el PDF del pedido
     * @param String $correo Dirección de mail donde se tiene que mandar el correo
     * @param Int $idPedido ID del pedido
     */
    public function EnviaCorreo($correo, $idPedido) {

        $this->CreaPDF_Pedido($idPedido);
        
        $this->email->from('aula4@iessansebastian.com', 'OlontiaShop');
        
        $this->email->to($correo);

        $this->email->subject('Le enviamos el albarán de su pedido con fecha '.date("j-m-Y"));

        $mensaje = "Aquí puede ver el albarán de su pedido para su conformidad.<br><br> Un saludo OlontiaShop";

        $this->email->message($mensaje);

        $this->email->attach('assets/pdf/pedido.pdf');

        if (!$this->email->send())
            echo "<pre>\n\nError ennviado mail\n</pre>";
    }

    /**
     * Muestra un pedido en el navegador
     * @param Int $idPedido ID del pedido
     */
    public function VerPDFPedido($idPedido) {
        $this->CreaPDF_Pedido($idPedido, 'I');
    }

    /**
     * Descarga un pedido en la carpeta 'Descargas'
     * @param Int $idPedido ID del pedido
     */
    public function DescargarPDFPedido($idPedido) {
        $this->CreaPDF_Pedido($idPedido, 'D');
    }
    
    
    
    
}
