<?php

namespace AppBundle\Twig\Extensions;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'created_ago_esp' => new \Twig_Filter_Method($this, 'createdAgoEsp'),
            'showfile'=>new \Twig_Filter_Method($this, 'showFile'),
            'birthday'=>new \Twig_Filter_Method($this, 'birthDay'),
        );
    }

    public function createdAgoEsp(\DateTime $dateTime)
    {
        $day =  $dateTime->format('d');
        $month =  $dateTime->format('F');
        $yearh =  $dateTime->format('Y');
        $dayonweek =  $dateTime->format('l');

        $daysonweeks = array('Monday'=>'Lunes','Tuesday'=>'Martes','Wednesday'=>'Miercoles','Thursday'=>'Jueves','Friday'=>'Viernes','Saturday'=>'Sabado','Sunday'=>'Domingo');


        $monthsofyears =array('January'=>'Enero','February'=>'Febrero','March'=>'Marzo','April'=>'Abril','May'=>'Mayo','June'=>'Junio','July'=>'Julio','August'=>'Agosto','September'=>'Septiembre','October'=>'Octubre','November'=>'Noviembre','December'=>'Diciembre');
        
        $duration = $daysonweeks[$dayonweek].', '.$day.' '.$monthsofyears[$month].', '.$yearh;

        return $duration;
    }
    
    public function birthDay(\DateTime $dateTime)
    {
    
       $today = new \DateTime();       
       $interval = $dateTime->diff($today);
       $y = $interval->format('%y');
       //if($today->format('%m') <= $dateTime->format('%m')){
            $newFecha = $dateTime->modify('+'.($y+1).' year');
       //}else{
           //$newFecha = $dateTime->modify('+'.($y).' year');
       //}
       
       $fecha_fin = $newFecha->format('Y-m-d');
       $s = strtotime($fecha_fin)-strtotime($today->format('Y-m-d'));  
       $d = intval($s / 86400);
       return $d;       
    }
    
    public function showFile($file)
    {
        list ($name, $ext) = explode('.', $file);
        $arrayimg = array('PNG', 'JPG', 'GIF', 'JPEG');
        if(in_array(strtoupper($ext), $arrayimg)){
            $respuesta = 'img';
        }else{
            $respuesta = 'file';
        }
        
        return $respuesta;
    }

    public function getName()
    {
        return 'app_extension';
    }
}