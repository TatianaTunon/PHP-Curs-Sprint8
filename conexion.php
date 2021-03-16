<?php 
require ("config.php"); //llamamos al archivo con los datos de configuración. Ventaja=ahorro tiempo

class conexion { 
  protected $conexion_db;

  public function conexion(){
  
    $this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE, DB_PORT);
    if($this->conexion_db->connect_errno){
      echo "ERROR" .$this->conexion_db->connect_errno;
    return;
    }
  $this->conexion_db->set_charset (DB_CHARSET);
  return  $this->conexion_db;
  }
}
?>