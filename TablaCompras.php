<?php 
require ("conexion.php"); //llamamos al archivo conexion. Modulación del código

class TablaCompras 
{ 
   public function get_productos() {

         $conexion_db=new conexion();
         $con=$conexion_db->conexion();

         //prepara sentencia SQL
         $sentencia='SELECT * FROM Botiga.Compra';
         
         // consulta SQL
         $resultado=$con->query($sentencia); 

         //devuelve resultado
         $productos=$resultado->fetch_all(MYSQLI_ASSOC);
         $resultado->close();
     
      return $productos;
   } 
 
   function create ($Productos,$Quantitat,$Preu) {
      //echo "TablaCompras->Create:".$Productos."-".$Quantitat."<br>";
      $conexion_db = new conexion();
      // Crear la conexión
      $con  = $conexion_db->conexion();

      $sql = "INSERT INTO Botiga.Compra (Producto, Quantitat, Preu) VALUES ('$Productos',$Quantitat,$Preu)";
      //echo "TablaCompras. Sentencia creada:".$sql."<br>";
      
      $insert = $con->query($sql);      
      if (!$insert) {
         echo "Error insert description: " .$insert->error."<br>";
      }
      else
      {
        //echo("Ha anat bé: " .$insert->error."<br>");
      }

      // Cerrar conexión
      $con->close($sql);
  
      return $insert;  
    }

    function modificar($Productos, $Quantitat, $id) {
      $conexion_db = new conexion();
      // Crear la conexión
      $con  = $conexion_db->conexion();

      //echo "TablaCompras.php: Prod:".$Productos." Q:".$Quantitat." id:".$id."<br>";

      $sql = "UPDATE Botiga.Compra SET Producto='$Productos', Quantitat = '$Quantitat' WHERE idCompra='$id'";
      //echo "TAblaCompras.php:".$sql."<br>";
      $sql_resposta = $con->query($sql); 
      //var_dump ($sql_resposta);
      if (!$sql_resposta) {
         echo "Error update:" .$sql_resposta->error."<br>";
      }
      else
      {
       //echo("Ha anat bé: " .$sql_resposta->error."<br>");
      }
      // Cerrar conexión
      $con->close($sql);
      
      return $sql_resposta; 
    }

    function borrar($id) {
      $conexion_db = new conexion();
      // Crear la conexión
      $con  = $conexion_db->conexion();
      
      $sql = "DELETE FROM Botiga.Compra WHERE idCompra = '$id'";  
      //echo "TablaCompras.php: sql:".$sql."<br>";  
      $insert = $con->query($sql);   
      if (!$insert) {
         echo "Error delete description: " .$insert->error."<br>";
      }
      else
      {
       // echo("Ha anat bé: " .$insert->error."<br>");
      }

      // Cerrar conexión
      $con->close($sql);
      
      return $insert;
    }
}
?>