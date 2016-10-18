<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Ps\PdfBundle\Annotation\Pdf;

use AppBundle\Utils\phpjru\PJRU;
use AppBundle\Utils\phpjru\JdbcConnection;
use AppBundle\Utils\ReporteLayout;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

use PHPExcel_Style_Border;
use PHPExcel_Style_Fill;





class ReportesController extends Controller
{
    
    
    

    /**
     * @Route("/app/admin/reportes/planillareservacion", name="app_admin_reportes_planillareservacion") 
     */
        public function reportePlanillaReservacionAction()
    {
        $form = $this->formReservacionesCedula('app_admin_reportes_gen_planillareserva');        
        
        return $this->render('AppBundle:Reportes:reporteplanillareservacion.html.twig', array(
            'form'=>$form->createView()
        ));
    }

      
  
      
    
    /**
     * @Route("/app/admin/reportes/generar_planilla_reservas", name="app_admin_reportes_gen_planillareserva",defaults={"_format":"pdf"},requirements={"_method":"POST"})
     * @Pdf() 
     */
 
       
    public function generarPlanillaReservaAction(Request $request)
    {
        $form=$this->formReservacionesCedula('app_admin_reportes_gen_planillareserva');
        $format = $this->get('request')->get('_format');        
        
        
        
         $form->handleRequest($request);
        if($form->isValid())
        {
            $cedula = $form['cedula']->getData();
            
            $clienteaux = $cedula;
            
                 $pos = strrpos($clienteaux, "-");
               if ($pos === false) { // nota: tres signos de igual
                   $cedulacli=$clienteaux;
                }
               else
               {  
               list($cedulacli, $nombrecli) = explode('-',$clienteaux);
               }
          
            
            
            
            
            
            $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
            $cliente = $em->getRepository('AppBundle:Clientes')->findOneBy(array('cedula'=>$cedulacli));
            if(!$cliente){
                $this->get('session')->getFlashBag()->add('msg-error', 'Cédula no encontrada.!');
                return $this->redirect($this->generateUrl('app_admin_reportes_planillareservacion'));
            }
            
        
            $query= $em->createQuery(
                 "SELECT r, d, c,h,p FROM AppBundle:Reservaciones r JOIN  r.reservaid  d JOIN r.cliente_id c JOIN r.condicion_id h LEFT JOIN r.reservadepid p"
                . " WHERE "
                . " r.cliente_id = :xclienteid  "
                . " ORDER BY r.id ASC ")
                 ->setParameter('xclienteid', $cliente->getId());
              $reservaciones=$query->getResult();
              
              
            if(!$reservaciones){
       
                 $this->get('session')->getFlashBag()->add('msg-error', 'Cliente no posee reservaciones.!');
                return $this->redirect($this->generateUrl('app_admin_reportes_planillareservacion'));
            }
       
               
            //dump($reservaciones);
            //die();
            
            return $this->render(sprintf('AppBundle:Reportes:generarplanillareservacion.pdf.twig',$format), array(
                'datos'=>$reservaciones,'clientes'=>$cliente
            ));
        }
        
        return $this->render('app_admin_reportes_planillareservacion', array(
            'form'=>$form->createView()
        ));
         
    }
   
    
    

    
 /**
 * @Route("/app/admin/reportes/generar_planilla_reservasid/{id}", name="app_admin_reportes_gen_planillareservaid", defaults={"_format":"pdf"} )
 * @Pdf() 
 */
   public function generarPlanillaReservaidAction($id)
    {
          
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
         
            $format = $this->get('request')->get('_format');        
 
            
            
              $query= $em->createQuery(
                 "SELECT r, d, c,h,p FROM AppBundle:Reservaciones r JOIN  r.reservaid  d JOIN r.cliente_id c JOIN r.condicion_id h  LEFT JOIN r.reservadepid p "
                . " WHERE "
                . " r.id = :xid  "
                . " ORDER BY r.id ASC ")
                 ->setParameter('xid', $id);
              $reservaciones=$query->getResult();
           
     
              //dump($reservaciones);
              //die();
     
              
              
            if(!$reservaciones){
       
                 $this->get('session')->getFlashBag()->add('msg-error', 'Cliente no posee reservaciones.!');
                return $this->redirect($this->generateUrl('app_admin_reportes_planillareservacion'));
            }
       
                          
            return $this->render(sprintf('AppBundle:Reportes:generarplanillareservacionid.%s.twig',$format), array(
                'datos'=>$reservaciones));
        }
        
 



/**
 * @Route("/app/publica/reportes/generar_planilla_reservasid/{id}", name="app_publica_reportes_gen_planillareservaid", defaults={"_format":"pdf"} )
 * @Pdf() 
 */
   public function generarPlanillaPublicaReservaidAction($id)
    {
          
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
         
            $format = $this->get('request')->get('_format');        
 
            
            
              $query= $em->createQuery(
                 "SELECT r, d, c,h,p FROM AppBundle:Reservaciones r JOIN  r.reservaid  d JOIN r.cliente_id c JOIN r.condicion_id h  LEFT JOIN r.reservadepid p "
                . " WHERE "
                . " r.id = :xid  "
                . " ORDER BY r.id ASC ")
                 ->setParameter('xid', $id);
              $reservaciones=$query->getResult();
           
        
              
            if(!$reservaciones){
       
                 $this->get('session')->getFlashBag()->add('msg-error', 'Cliente no posee reservaciones.!');
                return $this->redirect($this->generateUrl('app_pubreservaciones_search'));
            }
       
                          
            return $this->render(sprintf('AppBundle:Reportes:generarplanillareservacionid.%s.twig',$format), array(
                'datos'=>$reservaciones));
        }
         
         
    
    private function formReservacionesCedula($url)
    {
        $form = $this->createFormBuilder()
                ->setAction($this->generateUrl($url))
                ->setMethod('POST')
                ->add('cedula', 'text', array('attr'=>array('class'=>'form-control')))
                ->add('submit', 'submit', array('label'=>'Consultar','attr'=>array('class'=>'btn btn-primary btn-flat')))
                ->getForm()
            ;
        return $form;
    }
   

    
    
         public function form_reporte_tiporeservacionAction()
    {
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        
       $xanoactual=(int)date('Y');
       $k=(int)date('Y');
       
       $xano['choices'][$k]=$xanoactual ;
       
       
        
       for ($i=2000;$i<=2030;$i++)
        {
        $xano['choices'][$i]=$i;
        }
      
         $url="app_admin_reporte_tiporeservacion";
                     
          $form = $this->createFormBuilder()
                ->setAction($this->generateUrl($url))
                ->setMethod('POST')
                ->add('ano', 'choice', $xano)
                ->add('mes', 'choice', array('choices' => array('1' => 'Enero','2' => 'Febrero', '3'=>'Marzo', '4'=>'Abril','5'=>'Mayo','6'=>'Junio','7'=>'Julio','8'=>'Agosto','9'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre')))
                ->add('condicion_id', 'entity', array(
                'class'=>'AppBundle:ReservacionCondicion',
                'empty_value'=>'Seleccione..',
                'em'=>$em,
                'required'=>true,
                'attr'=>array('class'=>'form-control'),
                                'label'=>'Condición'))
                  ->add('estado_id', 'entity', array(
                'class'=>'AppBundle:ReservacionEstado',
                'empty_value'=>'Seleccione..',
                'em'=>$em,
                'required'=>true,
                'attr'=>array('class'=>'form-control'),
                'label'=>'Estado'))
                ->add('submit', 'submit', array('label'=>'Consultar','attr'=>array('class'=>'btn btn-primary btn-flat')))
                  ->getForm();
                
                
      return $form;
    }

    

    /**
     * @Route("/app/admin/reportes/indexreportetiporeservacion", name="app_admin_index_reporte_tiporeservacion")
     */
    
     public function index_reporte_tiporeservacionAction()
    {
       
           $form=$this->form_reporte_tiporeservacionAction();
            
            return $this->render("AppBundle:Reportes:reporte_tiporeservacion.html.twig", 
                array('form'  => $form->createView()));

    }    

    
       
    
    
     /**
     * @Route("/app/admin/reportes/reportetiporeservacion", name="app_admin_reporte_tiporeservacion")
     */
    public function reporteTipoReservacion(Request $request){
        
        
        
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $form=$this->form_reporte_tiporeservacionAction();
        $form->handleRequest($request);
        
        

        if($form->isValid())
        {
        
           
         //devuelve la descripcion de la condicion no el id  
        $condicion=  $form['condicion_id']->getData();
        
        
        $mes=  $form['mes']->getData();
        $ano=  $form['ano']->getData();
      
        
        }
        
        
        $rsm = new ResultSetMapping();
        // build rsm here

       $rsm->addScalarResult('fecha_inicial','fecha_inicial' );
       $rsm->addScalarResult('fecha_final','fecha_final' );
       $rsm->addScalarResult('cant_apartamentos','cant_apartamentos' );
       $rsm->addScalarResult('cedula','cedula' );
       $rsm->addScalarResult('primernombre','primernombre' );
       $rsm->addScalarResult('segundonombre','segundonombre' );
        $rsm->addScalarResult('primerapellido','primerapellido' );
        $rsm->addScalarResult('segundoapellido','segundoapellido' );
        $rsm->addScalarResult('monto','monto' );
        
        
        $query = $em->createNativeQuery(
                "select 
                DATE_FORMAT(fecha_inicial,'%d-%m-%Y') as fecha_inicial,
                DATE_FORMAT(fecha_final,'%d-%m-%Y') as fecha_final,
                re.cant_apartamentos,
                cl.cedula,
                cl.primernombre,
                cl.segundonombre,
                cl.primerapellido,
                cl.segundoapellido,
                re.monto
            FROM
                reservaciones as re,
                clientes as cl,
                reservacion_condicion as cond
            WHERE
                re.cliente_id=cl.id AND
                year(re.fecharegistro)='$ano' AND
                month(re.fecharegistro)='$mes' and
                re.condicion_id=cond.id and
                cond.descripcion='$condicion'",$rsm);


        
        
        
        $reporte = $query->getResult(); 

        
            if(!$reporte){
       
                 $this->get('session')->getFlashBag()->add('msg-error', 'No hay movimientos en la base de datos!');
                return $this->redirect($this->generateUrl('app_admin_index_reporte_tiporeservacion'));
            }
       
        
        
        $pdf = new ReporteLayout();
        $pdf->setContainer($this->container);
        $pdf->AddPage();
       // $pdf->SetFont('Arial','B',16);
        //$pdf->Cell(40,10,'Hello World!');
        
       //// $pdf = new PDF('P','mm','Letter');
        $pdf->AliasNbPages();
        $pdf->SetFont('Times','B',14);
        
        $pdf->Ln(3);	

        $pdf->Cell(190,10,utf8_decode('Reservaciones '.$condicion),0,0,'C');
        $pdf->Ln(10);
        $pdf->SetFont('Times','',12);
        //Texto Datos Personales y Academicos

	$pdf->Ln(3);	

        $detalle = array("Cédula","Nombre","Apellido","Cant Apart","fecha Inic","Fecha Final", "Monto");
        $pdf->ImprovedTable($detalle);

        $w=array(20,35,35,15,30,30,25);
        $sum = 0;
        
       foreach ($reporte as $row)
            {	
                $pdf->Cell($w[0],6,htmlspecialchars($row['cedula']),'');
		$pdf->SetFont('','',10);
                $pdf->Cell($w[1],6,  ($row['primernombre'].' '.$row['segundonombre']),'');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[2],6,($row['primerapellido'].' '.$row['segundoapellido']),'');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[3],6,htmlspecialchars($row['cant_apartamentos']),'','','C');
		$pdf->SetFont('','',10);
                
           	$pdf->Cell($w[4],6,htmlspecialchars($row['fecha_inicial']),'','','C');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[5],6,htmlspecialchars($row['fecha_final']),'','','C');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[6],6,htmlspecialchars(number_format($row['monto'],2)),'','','R');
	    $pdf->Ln();	
		$sum = $sum + $row['monto'];
    }
    //Línea de cierre	
        $pdf->Cell(190,6,htmlspecialchars("Monto Total: ".number_format($sum,2)),'T','','R');

        
        return $this->dispositionReporte($pdf->Output());
    }
    
    



     public function form_reporte_reservacionPagadaAction()
    {
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        
       $xanoactual=(int)date('Y');
       $k=(int)date('Y');
       
       $xano['choices'][$k]=$xanoactual ;
        
        
       for ($i=2000;$i<=2030;$i++)
        {
        $xano['choices'][$i]=$i;
        }
      
         $url="app_admin_reporte_pagadareservacion";
                     
          $form = $this->createFormBuilder()
                ->setAction($this->generateUrl($url))
                ->setMethod('POST')
                ->add('ano', 'choice', $xano)
                ->add('mes', 'choice', array('choices' => array('1' => 'Enero','2' => 'Febrero', '3'=>'Marzo', '4'=>'Abril','5'=>'Mayo','6'=>'Junio','7'=>'Julio','8'=>'Agosto','9'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre')))
                ->add('condicion_id', 'entity', array(
                'class'=>'AppBundle:ReservacionCondicion',
                'empty_value'=>'Seleccione..',
                'em'=>$em,
                'required'=>true,
                'attr'=>array('class'=>'form-control'),
                 'query_builder'=>function(EntityRepository $er){
                    $q = $er->createQueryBuilder('e')
                             ->where("e.codigo='PAG'");
                    return $q;
                },'label'=>'Condición'))   
              ->add('submit', 'submit', array('label'=>'Consultar','attr'=>array('class'=>'btn btn-primary btn-flat')))
                  ->getForm();
                
                
      return $form;
    }


    
     /**
     * @Route("/app/admin/reportes/indexreportepagadareservacion", name="app_admin_index_reporte_pagadareservacion")
     */
    
     public function index_reporte_reservacionPagadaAction()
    {
       
           $form=$this->form_reporte_reservacionPagadaAction();
            
            return $this->render("AppBundle:Reportes:reporte_reservacionPagada.html.twig", 
                array('form'  => $form->createView()));

    }    

    
    
    
    
    /**
     * @Route("/app/admin/reportes/reportepagadareservacion", name="app_admin_reporte_pagadareservacion")
     */
    public function reportePagadaReservacion(Request $request){
        
        
        
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $form=$this->form_reporte_tiporeservacionAction();
        $form->handleRequest($request);
        
        

        if($form->isValid())
        {
        
           
         //devuelve la descripcion de la condicion no el id  
        $condicion=  $form['condicion_id']->getData();
        
        
        $mes=  $form['mes']->getData();
        $ano=  $form['ano']->getData();
      
        
        }
        
        
        $rsm = new ResultSetMapping();
        // build rsm here
        $rsm->addScalarResult('id','id' );
        $rsm->addScalarResult('fecha_inicial','fecha_inicial' );
        $rsm->addScalarResult('fecha_final','fecha_final' );
        $rsm->addScalarResult('cant_apartamentos','cant_apartamentos' );
        $rsm->addScalarResult('cedula','cedula' );
        $rsm->addScalarResult('primernombre','primernombre' );
        $rsm->addScalarResult('segundonombre','segundonombre' );
        $rsm->addScalarResult('primerapellido','primerapellido' );
        $rsm->addScalarResult('segundoapellido','segundoapellido' );
        $rsm->addScalarResult('monto','monto' );
        
        
        $query = $em->createNativeQuery(
                "select 
                re.id,
                DATE_FORMAT(fecha_inicial,'%d-%m-%Y') as fecha_inicial,
                DATE_FORMAT(fecha_final,'%d-%m-%Y') as fecha_final,
                re.cant_apartamentos,
                cl.cedula,
                cl.primernombre,
                cl.segundonombre,
                cl.primerapellido,
                cl.segundoapellido,
                re.monto
            FROM
                reservaciones as re,
                clientes as cl,
                reservacion_condicion as cond,
                reservacion_estado as est
            WHERE
                re.cliente_id=cl.id AND
                year(re.fecharegistro)='$ano' AND
                month(re.fecharegistro)='$mes' and
                re.condicion_id=cond.id and
                re.estado_id=est.id and
                cond.descripcion='$condicion'",$rsm);


        
        
        
        $reporte = $query->getResult(); 

       
            if(!$reporte){
       
                 $this->get('session')->getFlashBag()->add('msg-error', 'No hay movimientos en la base de datos!');
                return $this->redirect($this->generateUrl('app_admin_index_reporte_pagadareservacion'));
            }
       
        
        
        $pdf = new ReporteLayout();
        $pdf->setContainer($this->container);
        $pdf->AddPage();
       // $pdf->SetFont('Arial','B',16);
        //$pdf->Cell(40,10,'Hello World!');
        
       //// $pdf = new PDF('P','mm','Letter');
        $pdf->AliasNbPages();
        $pdf->SetFont('Times','B',14);
        
        $pdf->Ln(3);	

        $pdf->Cell(190,10,utf8_decode('Reservaciones '.$condicion),0,0,'C');
       
        $pdf->Ln(10);
        $pdf->SetFont('Times','',12);
        //Texto Datos Personales y Academicos

	$pdf->Ln(3);	

        $detalle = array("Cédula","Nombre","Apellido","Cant Apart","fecha Inic","Fecha Final", "Monto");
        $pdf->ImprovedTable($detalle);

        $w=array(20,35,35,15,30,30,25);
        $sum = 0;
        
       foreach ($reporte as $row)
            {	
                $pdf->Cell($w[0],6,htmlspecialchars($row['cedula']),'');
		$pdf->SetFont('','',10);
                $pdf->Cell($w[1],6,  ($row['primernombre'].' '.$row['segundonombre']),'');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[2],6,($row['primerapellido'].' '.$row['segundoapellido']),'');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[3],6,htmlspecialchars($row['cant_apartamentos']),'','','C');
		$pdf->SetFont('','',10);
                
           	$pdf->Cell($w[4],6,htmlspecialchars($row['fecha_inicial']),'','','C');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[5],6,htmlspecialchars($row['fecha_final']),'','','C');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[6],6,htmlspecialchars(number_format($row['monto'],2)),'','','R');
                
                
                
                $depositos = $this->consultarDepositoByID2($row['id']);
     
                
              if ($depositos)
              { 
                $pdf->Ln();
                $pdf->SetFillColor(235,235,235);
                $pdf->SetTextColor(0);
                $pdf->SetFont('','B','8');
                //Anchuras de las columnas
                $w=array(20,35,35,15,30,30,25);
                //Cabeceras
                
                $pdf->Cell(25,7,utf8_decode('Forma de Pago'),1,0,'C',1);
                $pdf->Cell(35,7,utf8_decode('Num Movimiento'),1,0,'C',1);
                $pdf->Cell(25,7,utf8_decode('Fecha'),1,0,'C',1);
                $pdf->Cell(25,7,utf8_decode('Monto'),1,0,'C',1);
                $pdf->Ln();
                //Datos

                $pdf->SetFillColor(224,235,255);
                $pdf->SetTextColor(0);
                $pdf->SetFont('','',10);
        
                
                foreach ($depositos as $row2)    
                    
                    $pdf->Cell(25, 6, $row2['formapago'], 0, 0, 'C');
                    $pdf->Cell(35, 6, $row2['nromovimiento'], 0, 0, 'C');
                    $pdf->Cell(25, 6, date('d-m-Y', strtotime($row2['fechapago'])),0,0,'C');
                    $pdf->Cell(25, 6, number_format($row2['monto'],2),0,0,'C');
                    $pdf->Ln();
                }
            
                $pdf->Ln();	
            } 
                
	    $pdf->Ln();	
		$sum = $sum + $row['monto'];
    
    //Línea de cierre	
        $pdf->Cell(190,6,htmlspecialchars("Monto Total: ".number_format($sum,2)),'T','','R');

        
        return $this->dispositionReporte($pdf->Output());
    }
    
    
    
    public function consultarDepositoByID2($id){
        
      
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        
        $rs = new ResultSetMapping();

       $rs->addScalarResult('fechapago','fechapago' );
       $rs->addScalarResult('nromovimiento','nromovimiento' );
       $rs->addScalarResult('formapago','formapago' );
       $rs->addScalarResult('monto','monto' );
       $rs->addScalarResult('id','id' );
        
        
        $query = $em->createNativeQuery(
                "select * 
            FROM
                 depositos
            WHERE
               depositos.reservaciondepid='$id'",$rs);

        
        $reporte2 = $query->getResult(); 

        
        $s = "SET NAMES utf8";
        
            
        
        return $reporte2;
    }
    




     public function form_reporte_reservacionPorPagarAction()
    {
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        
        
       $xanoactual=(int)date('Y');
       $k=(int)date('Y');
       
       $xano['choices'][$k]=$xanoactual ;
       
       
       for ($i=2000;$i<=2030;$i++)
        {
        $xano['choices'][$i]=$i;
        }
      
         $url="app_admin_reporte_porpagarreservacion";
                     
          $form = $this->createFormBuilder()
                ->setAction($this->generateUrl($url))
                ->setMethod('POST')
                ->add('ano', 'choice', $xano)
                ->add('condicion_id', 'entity', array(
                'class'=>'AppBundle:ReservacionCondicion',
                'empty_value'=>'Seleccione..',
                'em'=>$em,
                'required'=>true,
                'attr'=>array('class'=>'form-control'),
                'label'=>'Condición'))   
              ->add('submit', 'submit', array('label'=>'Consultar','attr'=>array('class'=>'btn btn-primary btn-flat')))
                  ->getForm();
                
                
      return $form;
    }



 /**
     * @Route("/app/admin/reportes/indexreporteporpagarreservacion", name="app_admin_index_reporte_porpagarreservacion")
     */
    
     public function index_reporte_reservacionPorPagarAction()
    {
       
           $form=$this->form_reporte_reservacionPorPagarAction();
            
            return $this->render("AppBundle:Reportes:reporte_porpagarreservacion.html.twig", 
                array('form'  => $form->createView()));

    }    

    



/**
     * @Route("/app/admin/reportes/reporteporpagarreservacion", name="app_admin_reporte_porpagarreservacion")
     */
    public function reporteporpagarReservacion(Request $request){
        
        
        
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $form=$this->form_reporte_tiporeservacionAction();
        $form->handleRequest($request);
        
        

        if($form->isValid())
        {
        
           
         //devuelve la descripcion de la condicion no el id  
        $condicion=  $form['condicion_id']->getData();
        
        $ano=  $form['ano']->getData();
      
        
        }
        
        
        $rsm = new ResultSetMapping();
        // build rsm here

       $rsm->addScalarResult('fecha_inicial','fecha_inicial' );
       $rsm->addScalarResult('fecha_final','fecha_final' );
       $rsm->addScalarResult('cant_apartamentos','cant_apartamentos' );
       $rsm->addScalarResult('cedula','cedula' );
       $rsm->addScalarResult('primernombre','primernombre' );
       $rsm->addScalarResult('segundonombre','segundonombre' );
        $rsm->addScalarResult('primerapellido','primerapellido' );
        $rsm->addScalarResult('segundoapellido','segundoapellido' );
        $rsm->addScalarResult('monto','monto' );
        
        
        $query = $em->createNativeQuery(
                "select 
                DATE_FORMAT(fecha_inicial,'%d-%m-%Y') as fecha_inicial,
                DATE_FORMAT(fecha_final,'%d-%m-%Y') as fecha_final,
                re.cant_apartamentos,
                cl.cedula,
                cl.primernombre,
                cl.segundonombre,
                cl.primerapellido,
                cl.segundoapellido,
                re.monto
            FROM
                reservaciones as re,
                clientes as cl,
                reservacion_condicion as cond
            WHERE
                re.cliente_id=cl.id AND
                year(re.fecharegistro)='$ano' AND
                re.condicion_id=cond.id and
                cond.descripcion='$condicion'",$rsm);


        
        
        
        $reporte = $query->getResult(); 

        
            if(!$reporte){
       
                 $this->get('session')->getFlashBag()->add('msg-error', 'No hay movimientos en la base de datos!');
                return $this->redirect($this->generateUrl('app_admin_index_reporte_porpagarreservacion'));
            }
       
        
        
        $pdf = new ReporteLayout();
        $pdf->setContainer($this->container);
        $pdf->AddPage();
       // $pdf->SetFont('Arial','B',16);
        //$pdf->Cell(40,10,'Hello World!');
        
       //// $pdf = new PDF('P','mm','Letter');
        $pdf->AliasNbPages();
        $pdf->SetFont('Times','B',14);
        
        $pdf->Ln(3);	

        $pdf->Cell(190,10,utf8_decode('Reservaciones '.$condicion),0,0,'C');
        $pdf->Ln(10);
        $pdf->SetFont('Times','',12);
        //Texto Datos Personales y Academicos

	$pdf->Ln(3);	

        $detalle = array("Cédula","Nombre","Apellido","Cant Apart","fecha Inic","Fecha Final", "Monto");
        $pdf->ImprovedTable($detalle);

        $w=array(20,35,35,15,30,30,25);
        $sum = 0;
        
       foreach ($reporte as $row)
            {	
                $pdf->Cell($w[0],6,htmlspecialchars($row['cedula']),'');
		$pdf->SetFont('','',10);
                $pdf->Cell($w[1],6,  ($row['primernombre'].' '.$row['segundonombre']),'');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[2],6,($row['primerapellido'].' '.$row['segundoapellido']),'');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[3],6,htmlspecialchars($row['cant_apartamentos']),'','','C');
		$pdf->SetFont('','',10);
                
           	$pdf->Cell($w[4],6,htmlspecialchars($row['fecha_inicial']),'','','C');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[5],6,htmlspecialchars($row['fecha_final']),'','','C');
		$pdf->SetFont('','',10);
		$pdf->Cell($w[6],6,htmlspecialchars(number_format($row['monto'],2)),'','','R');
	    $pdf->Ln();	
		$sum = $sum + $row['monto'];
    }
    //Línea de cierre	
        $pdf->Cell(190,6,htmlspecialchars("Monto Total: ".number_format($sum,2)),'T','','R');

        
        return $this->dispositionReporte($pdf->Output());
    }
    
    
    
    
    public function dispositionReporte($filename)
    {
        return new Response($filename, 200, array(
            'Content-Type' => 'application/pdf'));       
    }

    
    public function form_reporte_reservacionExcelAction()
    {
     $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        
       $xanoactual=(int)date('Y');
       $k=(int)date('Y');
       
       $xano['choices'][$k]=$xanoactual ;
        
        
       for ($i=2000;$i<=2030;$i++)
        {
        $xano['choices'][$i]=$i;
        }
      
         $url="app_admin_reporte_reservasexcel";
                     
          $form = $this->createFormBuilder()
                ->setAction($this->generateUrl($url))
                ->setMethod('POST')
                ->add('ano', 'choice', $xano)
                ->add('mes', 'choice', array('choices' => array('1' => 'Enero','2' => 'Febrero', '3'=>'Marzo', '4'=>'Abril','5'=>'Mayo','6'=>'Junio','7'=>'Julio','8'=>'Agosto','9'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre')))
                ->add('condicion_id', 'entity', array(
                'class'=>'AppBundle:ReservacionCondicion',
                'empty_value'=>'Seleccione..',
                'em'=>$em,
                'required'=>true,
                'attr'=>array('class'=>'form-control'),
                 'query_builder'=>function(EntityRepository $er){
                    $q = $er->createQueryBuilder('e')
                             ->where("e.codigo in ('PAG','PORP')");
                    return $q;
                },'label'=>'Condición'))   
              ->add('submit', 'submit', array('label'=>'Consultar','attr'=>array('class'=>'btn btn-primary btn-flat')))
                  ->getForm();
       
      return $form;
    }



    
    /**
     * @Route("/app/admin/reportes/indexreporteExcel", name="app_admin_index_reporte_reservacionExcel")
     */
    
     public function index_reporte_reservacionExcelAction()
    {
       
           $form=$this->form_reporte_reservacionExcelAction();
            
            return $this->render("AppBundle:Reportes:reporte_reservacionExcel.html.twig", 
                array('form'  => $form->createView()));

    }    



 
    /**
     * @Route("/app/admin/reportes/reportereservasexcel", name="app_admin_reporte_reservasexcel")
     */

    
    
    public function generarReporteReservasEXCELAction(Request $request)
    {        
        
        
        
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $form=$this->form_reporte_tiporeservacionAction();
        $form->handleRequest($request);
        
        

        if($form->isValid())
        {
        
           
         //devuelve la descripcion de la condicion no el id  
        $condicion=  $form['condicion_id']->getData();
        
        
        $xmes=  $form['mes']->getData();
        $xano=  $form['ano']->getData();
      
        
        }
        
        
        $rsm = new ResultSetMapping();
        // build rsm here

       $rsm->addScalarResult('fecha_inicial','fecha_inicial' );
       $rsm->addScalarResult('fecha_final','fecha_final' );
       $rsm->addScalarResult('cant_apartamentos','cant_apartamentos' );
       $rsm->addScalarResult('cedula','cedula' );
       $rsm->addScalarResult('primernombre','primernombre' );
       $rsm->addScalarResult('segundonombre','segundonombre' );
        $rsm->addScalarResult('primerapellido','primerapellido' );
        $rsm->addScalarResult('segundoapellido','segundoapellido' );
        $rsm->addScalarResult('monto','monto' );
        $rsm->addScalarResult('fecha_reservacion','fecha_reservacion' );
        
        
        $query = $em->createNativeQuery(
               " select 
                DATE_FORMAT(fecha_inicial,'%d-%m-%Y') as fecha_inicial,
                DATE_FORMAT(fecha_final,'%d-%m-%Y') as fecha_final,
                re.cant_apartamentos,
                cl.cedula,
                cl.primernombre,
                cl.segundonombre,
                cl.primerapellido,
                cl.segundoapellido,
                re.monto,
                de.fecha_reservacion
            FROM
                reservaciones as re,
                clientes as cl,
                reservacion_condicion as cond,
                reservacion_detalle as de
            WHERE
                re.cliente_id=cl.id AND
                re.id=de.reservacion_id and
                year(de.fecha_reservacion)='$xano' and
                month(de.fecha_reservacion)='$xmes' and
                re.condicion_id=cond.id and
                cond.descripcion='$condicion'
              order by 
                de.fecha_reservacion",$rsm);
                
          
        $reporte = $query->getResult(); 

        
            if(!$reporte){
       
                 $this->get('session')->getFlashBag()->add('msg-error', 'No hay movimientos en la base de datos!');
                return $this->redirect($this->generateUrl('app_admin_index_reporte_reservacionExcel'));
            }
       
        
        
        $arrayletter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ');

        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();       
       
        $phpExcelObject->setActiveSheetIndex(0) 
           ->setCellValue('D2', 'Fecha:')
            ->setCellValue('E2', date('d-m-Y')) ;     
          
        $i = 3;
     
        $phpExcelObject->getActiveSheet()->getStyle('B'.$i)->getFont()->setBold(true);
      
          $phpExcelObject->setActiveSheetIndex(0) 
           ->setCellValue('B'.$i, 'REPORTE DE RESERVAS CORRESPONDIENTE AL AÑO:'.$xano.' Y DEL MES: '.$xmes. ' Con la condición:'. $condicion);
        
        
          $i = 5;
      
          $phpExcelObject->setActiveSheetIndex(0) 
           ->setCellValue('A'.$i, 'Apto.');
         
          
           $phpExcelObject->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray(
        array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '#FE9A2E')
            )));
          
          
          
          
       
       $i=5;
       $n=0;
       $k=1;
       $xfechareservacionant="";
       
        foreach ($reporte as $value){     

         $xfechareservacion=$value['fecha_reservacion'];
            
                
           if ($xfechareservacionant<>$xfechareservacion)
         {   
           
              $k=1;
              $i=5;
              $n++;
         } 
          
       
         
          if ($i==5)
         {
           $xfechareservacionant= $value['fecha_reservacion'];
           $xfechareservacion= $value['fecha_reservacion'];
                   
           //$phpExcelObject->setActiveSheetIndex(0)->setCellValue('A'.$i, $k);
           $phpExcelObject->setActiveSheetIndex(0)->setCellValue($arrayletter[$n].$i,  date("d-m-Y", strtotime($xfechareservacion)));
           
          
         }
                   

         
         
            
                   
         if ($xfechareservacionant==$xfechareservacion)
         {
             
           $i++;  
           $phpExcelObject->setActiveSheetIndex(0)->setCellValue('A'.$i, $k);
           $phpExcelObject->setActiveSheetIndex(0)->setCellValue($arrayletter[$n].$i, $value['cedula'].'-'.$value['primernombre'].' '.$value['primerapellido'])  ;
           
         } 
       
            $k++;
           
    }
                
       
    $styleArray = array(
    'borders' => array(
        'allborders' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
    );

    
    $phpExcelObject->getActiveSheet()->getStyle('A5:'.$arrayletter[$n].'20')->applyFromArray($styleArray);

        foreach (range('A', $phpExcelObject->getActiveSheet()->getHighestDataColumn()) as $col) {
        $phpExcelObject->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
            } 
        unset($styleArray);
    
                
                
        $phpExcelObject->getActiveSheet()->setTitle('REPORTE DE RESERVACIONES');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=listadoreservaciones.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        return $response;  
        
    }
   



    
    
}

