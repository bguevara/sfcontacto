<?php


class DBAdmin {
    
    protected $user = "userctrlnotas";
    protected $db = "db_notasold";
    protected $passwd = "4efctrl2013";
//    protected $user = "root";
//    protected $db = "notasold";
//    protected $passwd = "12345";
    
    public function conectar()
    {
       $handle = new mysqli("127.0.0.1", $this->user, $this->passwd, $this->db) ;
       if(!$handle){
           return false;
       }
       return $handle;
    }
    
    
    
}

?>
