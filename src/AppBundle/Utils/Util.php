<?php
namespace AppBundle\Utils;

use Revista\AppBundle\Entity\RecuperarPass;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;


class Util {
    
    private $container;
    
    public function __construct(Container $container){
        $this->container = $container;
    }
    
    public function generarLinkTemporal($users, $username, $em)
    {
        $cadena = $users->getId().$username.rand(1, 999999).date('Y-m-d');
        $token = sha1($cadena);        
        
        
        $RecuperarPass = new RecuperarPass();
        $RecuperarPass->setUsers($users);
        $RecuperarPass->setUsername($username);
        $RecuperarPass->setToken($token);
        $RecuperarPass->setCreated(new \DateTime());
        
        $em->persist($RecuperarPass);
        $em->flush();
        
        $enlace = $_SERVER['SERVER_NAME'].'/recordmypass/restablecer/?idusers='.sha1($users->getId()).'&token='.$token;
        return $enlace;
    }
    
         
    
    public function enviarEmail($correocli,$mnsj)
    {
        

        $emailConstraint = new EmailConstraint();
        $emailConstraint->message = 'El correo es invalido'.$correocli;

        $errors = $this->get('validator')->validateValue(
        $correocli,
        $emailConstraint 
        ); 
      
  
        
        
      if ($errors<>"")
      {
          
        $this->get('session')->getFlashBag()->add('msg-error', 'Su correo presenta problemas.!');
         
          
      }
       
          else
       {
       
        
         $message = \Swift_Message::newInstance()
        ->setSubject('SISTEMA BASE')
        ->setFrom('sistemabase001@gmail.com')
        ->setTo($correocli)
        ->setBody($mnsj, 'text/html');
        $this->get('mailer')->send($message);

        
           $this->get('session')->getFlashBag()->add('msg-success', 'Mensaje enviado....!');
     
        
         }
       
     
       
    
       }    


        
        
     
    

    public function restaFechas($dFecIni, $dFecFin)
    {
  
        
        $dFecIni = str_replace("-","",$dFecIni);
        $dFecIni = str_replace("/","",$dFecIni);
        $dFecFin = str_replace("-","",$dFecFin);
        $dFecFin = str_replace("/","",$dFecFin);
        
        @ereg( "([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})", $dFecIni, $aFecIni);
        @ereg( "([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})", $dFecFin, $aFecFin);

        $date1 = mktime(0,0,0,$aFecIni[2], $aFecIni[1], $aFecIni[3]);
        $date2 = mktime(0,0,0,$aFecFin[2], $aFecFin[1], $aFecFin[3]);

        return round(($date2 - $date1) / (60 * 60 * 24));
    }
    
    public function HorasTranscurridas($fecha)
            {
        $fechau = date('Y-n-j H:i:s', strtotime($fecha));
        $fechad = date('d-m-Y H:i:s');
        $fecha1 = mktime(date('H', strtotime($fechau)),date('i', strtotime($fechau)),date('s', strtotime($fechau)),date('n', strtotime($fechau)),date('j', strtotime($fechau)),date('Y', strtotime($fechau)));
        $fecha2 = mktime(date('H'),date('i'),date('s'),date('n'),date('j'),date('Y'));
        $diferencia = $fecha2-$fecha1;
        $diff['horas'] = (int)($diferencia/(60*60));
        $diff['dias'] = (int)($diferencia/(60*60*24));
        $diff['min'] = (int)($diferencia/(60));
        return $diff;
    }



    public function sumaDia($fecha,$dia)
    {	
        $fecha = str_replace('-','/',$fecha);
        $fechas=array();
        list($day,$mon,$year) = explode('/',$fecha);
            for($i = 0; $i<$dia;$i++){
            $fechas[$i] = date('d/m/Y',mktime(0,0,0,$mon,$day+$i,$year));		
            }
            return $fechas;
    }
    
    public function restaDia($fecha,$dia)
    {	
        $fecha = str_replace('-','/',$fecha);
        $fechas;
        list($day,$mon,$year) = explode('/',$fecha);
           
            $fechas = date('d/m/Y',mktime(0,0,0,$mon,$day-$dia,$year));		
            
            return $fechas;
    }
    


 public function date_format($fecha, $dir, $fh="")
    {
        $fecha = str_replace('/', '-', $fecha);
    
        if($dir=="fe"){
        $fecha = date('d-m-Y '.$fh, strtotime($fecha));    
        }else{
        $fecha = date('Y-m-d '.$fh, strtotime($fecha));    
        }
        
        return $fecha;
    }
   


 public function calcular_fin_semana($fechainicial,$fechafinal)
    {
                  
             $dias	= (strtotime($fechainicial)-strtotime($fechafinal))/86400;
             $rangodias = floor(abs($dias));	
            
      
      $xfinsemana=0;

        for ($i=0;$i<=$rangodias;$i++)
            {
            $nuevafecha = strtotime ( '+'.$i.' day' , strtotime ( $fechainicial) ) ;
            $fecha_reserva = date ( 'Y-m-d' , $nuevafecha );
            $xdias_semana=date('N', strtotime($fecha_reserva));

            if (($xdias_semana==6) or ($xdias_semana==7)) 
            {
                
               $xfinsemana++; 
                
            }
                
            }
            
            return $xfinsemana;
    }
    
    
}


