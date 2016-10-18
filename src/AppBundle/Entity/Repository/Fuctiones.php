<?php


class Fuctiones {
    
    public function check_auth_user()
    {
      global $_SESSION;
      if (isset($_SESSION['user_adm']))
      {
        return true;
      }
      else
      {
        return false;
      }
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
    
    public function generateOptions($entity, $column="nombre")
    {
        $text = "";
        while($row = $entity->fetch_assoc())
        {
            $text.= '<option value="'.$row['id'].'">'.$row[$column].'</option>';
        }
        return $text;
    }
    
    public function suma($entity)
    {
        $suma = 0;
        if($entity){
        while ($row = $entity->fetch_assoc())
        {
            $suma += $row['monto']; 
        }
        }
        return $suma;
    }
    
    public function decimal($number)
    {
        return number_format($number, 2, '.', ',');
    }
    
    public function myTruncate($string, $limit, $break=".", $pad='...') {
 
    if(strlen($string) <= $limit)

    return $string;

    if(false !== ($breakpoint = strpos($string, $break, $limit))){

    if($breakpoint < strlen($string)-1) {

    $string = substr($string, 0, $breakpoint ) . $pad;

    }

    }

    return $string;
    }
    
    public function slug($string) {	
    $characters = array(
    "Á" => "A", "Ç" => "c", "É" => "e", "Í" => "i", "Ñ" => "n", "Ó" => "o", "Ú" => "u",
    "á" => "a", "ç" => "c", "é" => "e", "í" => "i", "ñ" => "n", "ó" => "o", "ú" => "u",
    "à" => "a", "è" => "e", "ì" => "i", "ò" => "o", "ù" => "u"
    );
    $string = strtr($string, $characters);
    $string = strtolower(trim($string));
    $string = preg_replace("/[^a-z0-9-]/", "-", $string);
    $string = preg_replace("/-+/", "-", $string);
    if(substr($string, strlen($string) - 1, strlen($string)) === "-") {
    $string = substr($string, 0, strlen($string) - 1);
    }
    return $string;
    }
    
    /**
     * upload_image()
     *
     * Sube una imagen al servidor  al directorio especificado teniendo el Atributo 'Name' del campo archivo.
     *
     * @param string $destination_dir Directorio de destino dónde queremos dejar el archivo
     * @param string $name_media_field Atributo 'Name' del campo archivo
     * @return boolean
     */
    public function upload_image($destination_dir,$name_media_field, $id){
        $tmp_name = $_FILES[$name_media_field]['tmp_name'];
        //si hemos enviado un directorio que existe realmente y hemos subido el archivo    
        if ( is_dir($destination_dir) && is_uploaded_file($tmp_name))
        {        
            $img_file  = $_FILES[$name_media_field]['name'] ;                      
            $img_type  = $_FILES[$name_media_field]['type'];  
            $archivo = $id.'.'.str_replace('image/', '', $img_type);
            echo 1;
            //¿es una imágen realmente?          
            if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") )){
                //¿Tenemos permisos para subir la imágen?
                echo 2;
                if(move_uploaded_file($tmp_name, $destination_dir.'/'.$archivo)){                
                    return true;
                }
            }
        }
        //si llegamos hasta aquí es que algo ha fallado
        return false;
    }
    
    public function delete_image($destination_dir,$name_media_field){
           
        if (file_exists($destination_dir.'/'.$name_media_field))
        {        
            if(unlink($destination_dir.'/'.$name_media_field)){                                               
                    return true;
             }
        }
        
        //si llegamos hasta aquí es que algo ha fallado
        return false;
    }
    
    public function date_large($fecha){
        $fecha = $this->date_format($fecha, "fe");
        list($day, $month, $year) = explode('-', $fecha);
        $meses = array('01'=>'Enero', '02'=>'Febrero', '03'=>'Marzo', '04'=>'Abril', '05'=>'Mayo', '06'=>'Junio', '07'=>'Julio', '08'=>'Agosto', '09'=>'Septiembre', '10'=>'Octrubre', '11'=>'Noviembre', '12'=>'Diciembre');
        
        return $day.' d'.utf8_decode("í").'as del mes de  '.$meses[$month].' del a'.utf8_decode("ñ").'o '.$year;
    }
        
}

?>