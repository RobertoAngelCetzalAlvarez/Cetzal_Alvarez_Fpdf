<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;


class CronogramaController extends Controller
{
    //Iniciamos la clase
    public function pdf(){
       // iniciamos la clase
    $pdf=new Fpdf('P','mm','Letter');

    //Agregamos una pagina
    $pdf->AddPage('Landscape');
      //selleccionar una fuente
    $pdf->SetFont('Courier','B',18);
    //cuerpo del reporte
    //cell imprime una celda
    $pdf->Image(public_path().'/imagenes/logos/logo.jpg', 10, 10, 30);
    $alt1=5;
    $esp=2;
    $pdf->Cell(250,$alt1,utf8_decode('CRONOGRAMA DE ACTIVIDADES'),0,1,'R');
    $pdf->SetFont('Courier','B',14);
    $pdf->Cell(250,$alt1,utf8_decode('REPORTE DE ESTADÍA PROFESIONAL '),0,1,'R');
    $pdf->Ln($esp);
      $pdf->SetFont('Courier','',7);
    $pdf->Cell(30,$alt1,utf8_decode('CARRERA'),0,0,'C');
    $pdf->Cell(100,$alt1,'','B',0,'C');
    $pdf->Cell(50,$alt1,utf8_decode('PERIODO CUATRIMESTRAL'),0,0,'c');
    $pdf->Cell(45,$alt1,'','B',1,'c');
    //salto de linea
     $pdf->Cell(30,$alt1,utf8_decode('ALUMNO'),0,0,'C');
    $pdf->Cell(100,$alt1,'','B',0,'C');
    $pdf->Cell(20,$alt1,utf8_decode('MATRICULA'),0,0,'c');
    $pdf->Cell(25,$alt1,'','B',0,'c');
    $pdf->Cell(20,$alt1,utf8_decode('FIRMA'),0,0);
    $pdf->Cell(25,$alt1,'','B',1,'c');
    $alt2=8;
    $pdf->Ln($esp);
    //cuadro de actividades
    //ENCABEZADO
    $pdf->SetFont('Courier','B',10);
    $pdf->Cell(90,$alt2,utf8_decode('ACTIVIDAD'),1,0,'C');
    $ancho=9;
    $pdf->SetFont('Courier','B',7);

     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 1'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 2'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 3'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 4'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 5'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 6'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 7'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 8'),1,0,'C');
     $pdf->Cell($ancho,$alt2,utf8_decode('SEM 9'),1,0,'C');
     $pdf->Cell(10,$alt2,utf8_decode('SEM 10'),1,0,'C');
     $pdf->Cell(10,$alt2,utf8_decode('SEM 11'),1,0,'C');
     $pdf->Cell(10,$alt2,utf8_decode('SEM 12'),1,0,'C');
     $pdf->Cell(10,$alt2,utf8_decode('SEM 13'),1,0,'C');
     $pdf->Cell(10,$alt2,utf8_decode('SEM 14'),1,0,'C');
     $pdf->Cell(40,$alt2,utf8_decode('FECHA DE ENTREGA DE AVANCES'),1,1,'C');
     //FIN ENCABEZADO
     $alt3=4;
     $ancho=9;

      $pdf->SetFont('Courier','',7);
    $pdf->Cell(90,$alt3,utf8_decode('INDUCCIÓN EN LA EMPRESA'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


         // $pdf->SetFont('Courier','',7);
    $pdf->Cell(90,$alt3,utf8_decode('VISITA A LA EMPRESA'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


     //$pdf->SetFont('Courier','',7);
    $pdf->Cell(90,$alt3,utf8_decode('DEFINICIÓN DEL ANTEPROYECTO'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


    // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('ENTREGA DE ANTEPROYECTO PARA AUTORIZACIÓN'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('RESUMEN'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


 // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('PORTADA'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('INTRODUCCIÓN'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('CAPITULO I CONTEXTO ACADÉMICO'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('1.1 PROBLEMÁTICA'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('1.2 y 1.3 PREGUNTAS DE INVESTIGACIÓN / JUSTIFICACIÓN'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('1.3. OBJETIVOS / GENERAL Y ESPECÍFICOS'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('1.4 ALCANCE'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('1.5 MARCO TEÓRICO'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('CAPITULO II CONTEXTO LABORAL'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');



      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('CAPITULO III DISEÑO DE LA INVESTIGACIÓN'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');


      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('3.1 ALCANCE DE LA INVESTIGACIÓN'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('3.2 METODOLOGÍA'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('ENTREGA DE REPORTE PARA PRIMERA REVISIÓN POR PAR ACÁDEMICO'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('CAPITULO IV DESARROLLO DEL PROYECTO'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('PRODUCTO GENERADO'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('4.1 ANÁLISIS DE LOS RESULTADOS'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('4.2 ESTUDIO DE FACTIBILIDAD'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('CAPITULO V CONCLUSIONES Y RECOMENDACIONES'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('REFERENCIAS BIBLIOGRÁFICAS'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('ANEXOS'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

      // $pdf->SetFont('Courier','',10);
    $pdf->Cell(90,$alt3,utf8_decode('ENTREGA DEL REPORTE DE ESTADÍA A LA DIRECCIÓN ACADÉMICA'),1,0,'L');
   
    //$pdf->SetFont('Courier','',5);

     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell($ancho,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'C');
     $pdf->Cell(40,$alt3,utf8_decode(''),1,1,'C');

     $pdf->Ln($esp);
      
     $pdf->Cell(100,$alt3,utf8_decode('NOTA: COLOREAR Y COLOCAR FECHA DE ENTREGA DE CADA ACTIVIDAD'),1,0,'L');
     $pdf->Cell(30,$alt3,utf8_decode(''),0,0,'L');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'L');
     $pdf->Cell(20,$alt3,utf8_decode('PROGRAMADO'),0,0,'L');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'L');
     $pdf->Cell(20,$alt3,utf8_decode('REALIZADO'),0,0,'L');
     $pdf->Cell(10,$alt3,utf8_decode(''),1,0,'L');
     $pdf->Cell(20,$alt3,utf8_decode('ANEXO 2'),0,0,'L');








    //cierre del reporte
    $pdf->Output('I','Listado de alumnos.pdf');
    exit;
    }
}
