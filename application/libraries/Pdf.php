<?php

if (!defined('BASEPATH')) exit('No se permite el acceso directo al script');

/**
 * Clase que extiende de FPDF, librería que permite crear documentos PDF
 */

  // Incluimos el archivo fpdf
require_once APPPATH."/third_party/fpdf/fpdf.php";

class Pdf extends FPDF {

    protected $col = 0; // Columna actual
    protected $y0;      // Ordenada de comienzo de la columna

    /**
     * Cabecera de página
     */

    function Header() {
        // Logo
//        $this->Image('assets/img/imgAPP/icon/icon.png', 10, 8, 40, 20);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 20);
        // Título
        $this->SetY(18);
        $this->SetX(85);
        $this->Cell(100, 0, utf8_decode('Datos del Alumno'), 0, 2);//ENCABEZADO
        // Salto de línea
        $this->Ln(20);
    }

    /**
     * Pie de página
     */
    function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    /**
     * Crea la tabla con los datos detallados de cada producto comprado
     * @param Array $data Datos de los productos
     */
    function CreaTablaLineaPedidos($data) {
        $CI = get_instance();
        $this->Ln(10);
        //CABECERA tabla
        // Colores, ancho de línea y fuente en negrita        
        $this->SetFillColor(255,102,102); //Rojo
        $this->SetTextColor(255);
        $this->SetDrawColor(255, 255, 255);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');

        //Datos
        $header = array('Alumno');
        $w = array(83, 25, 22, 35, 25);
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, utf8_decode($header[$i]), 1, 0, 'C', true);
        $this->Ln();

        //CUERPO
        // Restauración de colores y fuentes
        $this->SetFillColor(223, 223, 223); //gris
        $this->SetTextColor(0);
        $this->SetFont('', '', 10);

        // Datos
        $fill = true; //Para que empiece en gris la fila

      
        foreach ($data as $key => $value) {

            
            if($key=='alu'){
                foreach ($value as$dato =>$valor){

                    
                    if($dato!=='idAlumno'&&$dato!=='Usuario_idUsuario'){
                        if($dato=='apellidos'){
                            $this->Cell($w[0], 6, utf8_decode( 'Apellidos: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='nombre'){
                            $this->Cell($w[0], 6, utf8_decode( 'Nombre: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='nie'){
                            $this->Cell($w[0], 6, utf8_decode( 'NIE:'.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='fechaNacimiento'){
                            $this->Cell($w[0], 6, utf8_decode( 'Fecha Nacimineto: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='datos_medicos'){
                            $this->Cell($w[0], 6, utf8_decode( 'Datos Medicos: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='datos_psicologicos'){
                            $this->Cell($w[0], 6, utf8_decode( 'Datos Psicologicos: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='informe_medico'){
                            $this->Cell($w[0], 6, utf8_decode( 'Informe Médico: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='nombreT1'){
                            $this->Cell($w[0], 6, utf8_decode( 'Nombre T1: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='nombreT2'){
                            $this->Cell($w[0], 6, utf8_decode( 'Nmobre T2: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='direccion'){
                            $this->Cell($w[0], 6, utf8_decode( 'Dirección: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='cp'){
                            $this->Cell($w[0], 6, utf8_decode( 'Codigo Postal: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='poblacion'){
                            $this->Cell($w[0], 6, utf8_decode( 'Población: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='cod_provincia'){
                            $this->Cell($w[0], 6, utf8_decode( 'Provincia: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='telefono1'){
                            $this->Cell($w[0], 6, utf8_decode( 'Teléfono 1: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='telefono2'){
                            $this->Cell($w[0], 6, utf8_decode( 'Teléfono 2: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='tipo'){
                            $this->Cell($w[0], 6, utf8_decode( 'Tipo: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='situacion'){
                            $this->Cell($w[0], 6, utf8_decode( 'Sutuación: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='implicacion_escolar'){
                            $this->Cell($w[0], 6, utf8_decode( 'Implicación Escolar: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='curso'){
                            $this->Cell($w[0], 6, utf8_decode( 'Curso: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='grupo'){
                            $this->Cell($w[0], 6, utf8_decode( 'Grupo: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if($dato=='fecha_Inser'){
                            $this->Cell($w[0], 6, utf8_decode( 'Fecha Incersción: '.$valor), 'LR', 0, 'L', $fill);
                            
                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }                         
                        

                    }                
                    

                }
                
            }
            
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  NEAE   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

            if ($key == 'nea') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('NEAE '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {
//                    print_r('<br>');
//                    print_r('Datos');
//                    print_r($dato.'<br>');
                    if ($dato !== 'idNeae' && $dato !== 'idAlumno') {

                        if ($dato == 'censo') {
                            $this->Cell($w[0], 6, utf8_decode('Necesidades: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'ev_ps') {
                            $this->Cell($w[0], 6, utf8_decode('Evaluación Psicopedagógica: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'dic_es') {
                            $this->Cell($w[0], 6, utf8_decode('Dictamen Escolarización:' . $valor), 'LR', 0, 'L', $fill);

                            $this->AddPage();
                    
                        }
                    }
                }
                
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  Medidas A Diver   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

            if ($key == 'mad') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('Medidas Atención a la Diversidad '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {

                    if ($dato !== 'idMedidasad' && $dato !== 'idAlumno') {

                        if ($dato == 'nombre') {
                            $this->Cell($w[0], 6, utf8_decode('Modalidades: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'fecha_ini') {
                            $this->Cell($w[0], 6, utf8_decode('Fecha Inicio: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'fecha_fin') {
                            $this->Cell($w[0], 6, utf8_decode('Fecha Fin:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'observaciones') {
                            $this->Cell($w[0], 6, utf8_decode('Observaciones:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }                        
                    }
                }
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  
            
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  Protocolos   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            
       

            if ($key == 'pro') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('Protocolos '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {

                    if ($dato !== 'idProtocolos' && $dato !== 'idAlumno') {
                        

                        if ($dato == 'nombre') {
                            $this->Cell($w[0], 6, utf8_decode('Opciones: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'fecha_ini') {
                            $this->Cell($w[0], 6, utf8_decode('Fecha Inicio: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'fecha_fin') {
                            $this->Cell($w[0], 6, utf8_decode('Fecha Fin:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'observaciones') {
                            $this->Cell($w[0], 6, utf8_decode('Observaciones:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }                        
                    }
                }
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>             

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  ENTREVISTAS   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            
       

            if ($key == 'ent') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('Entrevistas '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {

                    if ($dato !== 'idEntrevistas' && $dato !== 'idAlumno') {

  
                        if ($dato == 'fecha') {
                            $this->Cell($w[0], 6, utf8_decode('Fecha: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'motivo') {
                            $this->Cell($w[0], 6, utf8_decode('Motivos: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'asistentes') {
                            $this->Cell($w[0], 6, utf8_decode('Asistentes:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'temas') {
                            $this->Cell($w[0], 6, utf8_decode('Temas:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'acuerdos') {
                            $this->Cell($w[0], 6, utf8_decode('Acuerdos:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }                        
                    }
                }
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>              
            
            
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> TRAYECTORIA ACADEMICA    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            
       

            if ($key == 'tac') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('Trayectoria Académica '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {

                    if ($dato !== 'idTrayect_Acad' && $dato !== 'idAlumno') {

  
                        if ($dato == 'ano_academico') {
                            $this->Cell($w[0], 6, utf8_decode('Año Académico: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'evaluaciones') {
                            $this->Cell($w[0], 6, utf8_decode('Evaluaciones: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'fecha_ev') {
                            $this->Cell($w[0], 6, utf8_decode('Fecha Evaluación:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'observaciones') {
                            $this->Cell($w[0], 6, utf8_decode('Observaciones:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'pendientes') {
                            $this->Cell($w[0], 6, utf8_decode('Asignaturas Pendientes:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'promocion') {
                            $this->Cell($w[0], 6, utf8_decode('Promoción: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        } 
                        if ($dato == 'titulacion') {
                            $this->Cell($w[0], 6, utf8_decode('Titulación: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'propuesta') {
                            $this->Cell($w[0], 6, utf8_decode('Propuesta:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'inte_grup') {
                            $this->Cell($w[0], 6, utf8_decode('Integración Grupal:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'tutor') {
                            $this->Cell($w[0], 6, utf8_decode('Tutor:' . $valor), 'LR', 0, 'L', $fill);
                            $this->AddPage();
                        }                        
                    }
                }
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>              



//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> TRANSITO    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            
  

            if ($key == 'tra') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('Tránsito '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {

                    if ($dato !== 'idTransito' && $dato !== 'idAlumno') {


                        if ($dato == 'ceip') {
                            $this->Cell($w[0], 6, utf8_decode('C.E.I.P: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'repeticiones') {
                            $this->Cell($w[0], 6, utf8_decode('Repeticiones: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'ncc') {
                            $this->Cell($w[0], 6, utf8_decode('N.C.C:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'area_suspensa') {
                            $this->Cell($w[0], 6, utf8_decode('Areas Suspensas:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'observaciones') {
                            $this->Cell($w[0], 6, utf8_decode('Observaciones:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                       
                    }
                }
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>              


//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> TRANSITO    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            
  

            if ($key == 'tra') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('Tránsito '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {

                    if ($dato !== 'idTransito' && $dato !== 'idAlumno') {


                        if ($dato == 'ceip') {
                            $this->Cell($w[0], 6, utf8_decode('C.E.I.P: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'repeticiones') {
                            $this->Cell($w[0], 6, utf8_decode('Repeticiones: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'ncc') {
                            $this->Cell($w[0], 6, utf8_decode('N.C.C:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'area_suspensa') {
                            $this->Cell($w[0], 6, utf8_decode('Areas Suspensas:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'observaciones') {
                            $this->Cell($w[0], 6, utf8_decode('Observaciones:' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                       
                    }
                }
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>             
            

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> CONSEJO ORIENTACIÓN    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            


            if ($key == 'cor') {

                $CI = get_instance();
                $this->Ln(3);
                //CABECERA tabla
                // Colores, ancho de línea y fuente en negrita        
                $this->SetFillColor(255, 102, 102); //Rojo
                $this->SetTextColor(255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B');

                $this->Cell($w[0], 6, utf8_decode('Consejo Orientación '), 'LR', 0, 'L', $fill);
                $this->Ln();

                //CUERPO
                // Restauración de colores y fuentes
                $this->SetFillColor(223, 223, 223); //gris
                $this->SetTextColor(0);
                $this->SetFont('', '', 10);




                foreach ($value as $dato => $valor) {

                    if ($dato !== 'idConsejo_Orientador' && $dato !== 'idAlumno') {


                        if ($dato == 'opciones') {
                            $this->Cell($w[0], 6, utf8_decode('Opciones: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        if ($dato == 'fecha') {
                            $this->Cell($w[0], 6, utf8_decode('Fecha: ' . $valor), 'LR', 0, 'L', $fill);

                            $this->Ln();
                            if ($this->GetY() > 264) {
                                $this->AddPage();
                            }
                        }
                        
                       
                    }
                }
            }

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>              


            $this->Ln();
            if ($this->GetY() > 264) {
                $this->AddPage();
            }

        }
        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');

        $this->Ln(10); //Salto de linea

        if ($this->GetY() > 264) {
            $this->AddPage();
        }
    }

    /**
     * Crea la tabla de los datos generales del pedido
     * @param Array $data Datos del pedido
     */
    function CreaTablaPedido($data) {
        $CI = get_instance();
        //CABECERA tabla
        // Colores, ancho de línea y fuente en negrita        
        $this->SetFillColor(255,102,102); //rojo
        $this->SetTextColor(255);
        $this->SetDrawColor(255, 255, 255);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');

        //Datos
        $header = array('SUBTOTAL', 'TOTAL IVA', 'ESTADO', 'FECHA PEDIDO');
        $w = array(50, 50, 40, 50);

        $this->Cell($w[0], 7, utf8_decode($header[0]), 1, 0, 'C', true);
        $this->Cell($w[1], 7, utf8_decode($header[1]), 1, 0, 'C', true);
        $this->Cell($w[2], 7, utf8_decode($header[2]), 1, 0, 'C', true);
        $this->Cell($w[3], 7, utf8_decode($header[3]), 1, 0, 'C', true);
        $this->Ln();

        //CUERPO
        // Restauración de colores y fuentes
        $this->SetFillColor(223, 223, 223); //gris
        $this->SetTextColor(0);
        $this->SetFont('', '', 10);

        // Datos
        $CI = & get_instance();
        $CI->load->helper('Formulario');

        $fill = true; //Para que salga en gris la fila              

        $this->Cell($w[0], 6, utf8_decode(round($data['importe'] * $CI->session->userdata('rate'), 2)) . " " . $CI->session->userdata('currency'), 'LR', 0, 'L', $fill);
        $this->Cell($w[1], 6, utf8_decode($data['importeiva'] . " EUR"), 'LR', 0, 'L', $fill);
        $this->Cell($w[2], 6, utf8_decode($data['estado']), 'LR', 0, 'L', $fill);
        $this->Cell($w[3], 6, utf8_decode(cambiaFormatoFecha($data['fecha_pedido'])), 'LR', 0, 'L', $fill);

        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');
        $this->Ln(10); //Salto de linea   
    }

    function SetCol($col) {
        // Establecer la posición de una columna dada
        $this->col = $col;
        $x = 10 + $col * 65;
        $this->SetLeftMargin($x);
        $this->SetX($x);
    }

}
