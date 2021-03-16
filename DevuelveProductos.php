<?php 
require ("conexion.php"); //llamamos al archivo conexion. Modulación del código

class DevuelveProductos extends conexion
{ 

   public function get_productos(){

         $conexion_db = new conexion();
         $sentencia='SELECT idCompra, Producto, Quantitat, Preu FROM Botiga.Compra';
        // consulta SQL
        $resultado=$this->conexion_db->query($sentencia); 

         $productos=$resultado->fetch_all(MYSQLI_ASSOC);
         $resultado->close();

      return $productos;
   } 

}

?>