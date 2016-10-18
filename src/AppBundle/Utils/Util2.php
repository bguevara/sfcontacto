<?php

namespace AppBundle\Utils;

/**
 * Description of Util2
 *
 * @author jose
 */
class Util2 {
    
    public function generarPassword($longitud = 10, $opc_especiales = FALSE,  $opc_letras = TRUE, $opc_numeros = TRUE, $opc_letrasMayus = TRUE )
    {
        $password = "";

        $letras ="abcdefghijklmnopqrstuvwxyz";
        $numeros = "1234567890";
        $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $especiales ="|@#~$%()=^*+[]{}-_";
        $listado = "";

        if ($opc_letras == TRUE) {
            $listado .= $letras; }
        if ($opc_numeros == TRUE) {
            $listado .= $numeros; }
        if($opc_letrasMayus == TRUE) {
            $listado .= $letrasMayus; }
        if($opc_especiales == TRUE) {
            $listado .= $especiales; }

        str_shuffle($listado);
        for( $i=1; $i<=$longitud; $i++) {
        $password[$i] = $listado[rand(0,strlen($listado))];
        str_shuffle($listado);
        }
        
        $p = "";
        foreach ($password as $dato_password) {
            $p .= $dato_password;
        }
        
        return $p;

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
    
    public function HorasTranscurridas($fecha){
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
    
}