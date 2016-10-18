<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Utils;

/**
 * Description of ReporteLayout
 *
 * @author jose
 */
class ReporteLayout extends \FPDF {
    
    private $container;
    
    public function setContainer($container)
    {
        $this->container = $container;
    }
    
    
    public function Header() {
        
        $path = $this->container->getParameter('directorio.imagenes');
        //$file = $path.'upel.png';
        //$this->Image($file, -5, 5, 50,30, 'PNG');
        
        
        
        
        
        
        
        $txt = "CAJA DE AHORRO Y PRESTAMO DE LOS TRABAJADORES ADMINISTRATIVOS \n"
                . "UNIVERSIDAD PEDAGOGICA EXPERIMENTAL LIBERTADOR \n"
                . "CAPTAUPEL-IPB \n";
                
        $this->SetFont('helvetica','',9);
        $this->SetY(12);
        $this->SetX(30);
        $this->MultiCell(140, 4, utf8_decode($txt), 0);
        $this->SetY(12);
        $this->SetX(170);        
        $fecha = new \DateTime();
        $this->MultiCell(32, 4, "Fecha: ".$fecha->format('d-m-Y'), 0);
        $this->ln(7);
        //parent::Header();
    }
    
    
    
    public function ImprovedTable($detalle)
{
	
	$this->SetFillColor(235,235,235);
    $this->SetTextColor(0);
    $this->SetFont('','B','8');
    //Anchuras de las columnas
    $w=array(20,35,35,15,30,30,25);
    //Cabeceras
    for($i=0;$i<count($detalle);$i++)
        $this->Cell($w[$i],7,utf8_decode($detalle[$i]),1,0,'C',1);
    $this->Ln();
    //Datos
	
	$this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('','',10);


	}

    
    public function Footer() {
        $this->SetY(-10);
        $this->SetFont('helvetica','',9);
        $this->Cell(190, 5, utf8_decode('Página: ').$this->page.' de '.$this->PageNo(), 
               'T',0,'R');
    }
    
    
    
}
