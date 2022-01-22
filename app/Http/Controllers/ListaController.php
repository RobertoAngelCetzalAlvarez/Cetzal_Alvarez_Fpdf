<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//hacemos referencia a la clase fpdfx
use Codedge\Fpdf\Fpdf\Fpdf;

class ListaController extends Controller
{
     // iniciamos la clase
    public function pdf(){

        //OBTENEMOS EL LISTADO DE MASCOTAS

        //$mascotas=Mascota::all();
        //return $mascotas;


    $pdf=new Fpdf('P','mm','Letter');

    //Agregamos una pagina
    $pdf->AddPage('Landscape');

    //selleccionar una fuente
    $pdf->SetFont('Courier','B',10);
    $alt=10;
    //cuerpo del reporte
    //cell imprime una celda
    $alto=3;
    $pdf->Image(public_path().'/imagenes/logos/logo.jpg', 10, 10, 30);
    $pdf->Ln(5);
    $pdf->cell(255,$alto,utf8_decode('UNIVERSIDAD TECNOLÓGICA DEL CENTRO'),0,0,'C');
    $salto=3;
    $pdf->Ln($salto);
    $pdf->SetFont('','B',8);
    $pdf->cell(255,$alto,utf8_decode('DEPARTAMENTO DE SERVICIOS ESOLARES '),0,0,'C');
    $pdf->Ln($salto);
    $pdf->Cell(255,$alto,utf8_decode('LISTA DE ASISTENCIA'),0,0,'C');
    $pdf->Ln($salto);
    $pdf->Cell(255,$alto,utf8_decode('TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),0,1,'C');
    //salto de linea
    //celda margen
    $pdf->Cell(10,$alto,'',0,0,);
    //linea
    $pdf->Cell(15,$alto,utf8_decode('DOCENTE:'),0,0,'C');
    $pdf->Cell(70,$alto,utf8_decode('MTRO. JOSÉ GILBERTO BALAM BALAM'),'B',0,'C');
    $pdf->Cell(50,$alto,'',0,0,'C');
    $pdf->Cell(12,$alto,utf8_decode('UNIDAD:'),0,0,'C');
    $pdf->Cell(30,$alto,utf8_decode('1'),'B',0);
    $pdf->Cell(30,$alto,utf8_decode('CUATRIMESTRE:'),0,0,'C');
    $pdf->Cell(21,$alto,utf8_decode('4'),'B',1,'C');

    //salto de linea
    //celda margen
    $pdf->Cell(10,$alto,'',0,0,);
    //linea
    $pdf->Cell(15,$alto,utf8_decode('MATERIA:'),0,0,'C');
    $pdf->Cell(70,$alto,utf8_decode('APLICACIONES WEB ORIENTADA A SERVICIOS'),'B',0,'C');
    $pdf->Cell(50,$alto,'',0,0,'C');
    $pdf->Cell(12,$alto,utf8_decode('GRUPO:'),0,0,'C');
    $pdf->Cell(30,$alto,utf8_decode('TTD-4A'),'B',0);
    $pdf->Cell(30,$alto,utf8_decode('PERIODO:'),0,0,'C');
    $pdf->Cell(21,$alto,utf8_decode('SEPT-DIC 2020'),'B',1,'C');
    $pdf->Ln($salto);

//titulo de la tabla de asistencia
    $largo=100;
    $largo2=128;
    //celda margen
    $pdf->Cell(10,$alto,'',0,0,);
    //titulos de la tabla
    $pdf->cell($largo,$alto,utf8_decode('DATOS DEL ALUMNO'),1,0,'C');
    $pdf->cell($largo2,$alto,utf8_decode(''),1,1,'C');
    //datos de la tabla
    //margen
    $pdf->Cell(10,$alto,'',0,0);
    $pdf->Cell(10,$alto,utf8_decode('No'),1,0);
    $pdf->cell(30,$alto,utf8_decode('MATRICULA'),1,0,'C');
    $pdf->Cell(60,$alto,utf8_decode('NOMBRE DEL ALUMNO'),1,0,'L');
    $largo3=5.12;
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,1,);

    for ($i=1; $i <41 ; $i++) { 
    $pdf->Cell(10,$alto,'',0,0,);
    $pdf->Cell(10,$alto,$i,1,0);
    $pdf->cell(30,$alto,utf8_decode("MATRICULA$i"),1,0,'C');
    $pdf->Cell(60,$alto,utf8_decode("NOMBRE DEL ALUMNO$i"),1,0,'L');
    $largo3=5.12;
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,0,);
    $pdf->Cell($largo3,$alto,'',1,1,);
     
    }
 /* foreach ($mascotas as $m) {
        // code...
    
    }*/






    $pdf->Ln(5);

    /*$pdf->SetFont('Courier','B',12);
    //celda de margen
    $pdf->Cell(24,5,'',0,0);
    $pdf->SetFillColor(255, 195, 0);
    $pdf->Cell(10,$alt,'No',1,0,'C');
    $pdf->Cell(50,$alt,'Nombre',1,0,'C');
    $pdf->Cell(20,$alt,'Edad',1,0,'C');
    $pdf->Cell(20,$alt,'Peso',1,0,'C');
    $pdf->Cell(20,$alt,'Genero',1,0,'C');
    $pdf->Cell(20,$alt,'Especie',1,1,'C');*/


    //TABLA DE DATOS
     /*celda de margen
    for ($i=1; $i <10 ; $i++) { 
        
        // code...
    $pdf->Cell(35,5,'',0,0);

    $pdf->Cell(10,5,"$i",1,0,'C');
    $pdf->Cell(50,5,"Mascota$i",1,0,'L');
    $pdf->Cell(20,5,'8',1,0,'C');
    $pdf->Cell(20,5,'23',1,0,'C');
    $pdf->Cell(25,5,'H',1,1,'C');
    }*/










   /* foreach ($mascotas as $m) {
        // code...
    $pdf->Cell(24,5,'',0,0);

    $pdf->Cell(10,$alt,$m->id_mascota,1,0,'C');
    $pdf->Cell(50,$alt,utf8_decode($m->nombre),1,0,'L');
    $pdf->Cell(20,$alt,$m->edad,1,0,'C');
    $pdf->Cell(20,$alt,$m->peso,1,0,'C');
    $pdf->Cell(20,$alt,$m->genero,1,0,'C');
    $pdf->Cell(20,$alt,utf8_decode($m->especie->especie),1,1,'L');
    }*/

    

    //cierre del reporte
    $pdf->Output('I','Listado de Mascotas.pdf');
    exit;

    }
}
