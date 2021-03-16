<?php

require ("TablaCompras.php");

	//instancia para que se ejecute el constructor
  $productos=new TablaCompras; 
	//print_r ($productos->get_productos());
	$array_productos=$productos->get_productos();
?>


<!DOCTYPE html>
<head>
    <title>BD Tabla Compra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="table-responsive">
<table class="table table-border table-striped">
  <thead>
    <tr>
      <th scope="col">IdCompra</th>
      <th scope="col">Producto</th>
      <th scope="col">Quantitat</th>
      <th scope="col">Preu</th>
      <th scope="col">T.Producto</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  
<?php
	foreach ($array_productos as $elemento){
	 echo "<tr><td>".$elemento['idCompra'] . "</td>";
	 echo "<td>".$elemento['Producto'] . "</td>";
	 echo "<td>".$elemento['Quantitat'] . "</td>";
   echo "<td>".$elemento['Preu']. "</td>";
   $totalparcial=$elemento['Preu']*$elemento['Quantitat'];
   echo "<td><b>".$totalparcial. "</b></td>";
   $totalgeneral=$totalgeneral+$totalparcial;

  // Botones Borrar: Preparo per parts per que es complicat.
   $p1='<a class="btn btn-danger btn-mg disable" href="BorraCompra.php?idCompra=';
   $p2=$elemento['idCompra'];
   $p3='">Borrar</a>';
   echo "<td>".$p1.$p2.$p3;

  // Botones Modificar: Preparo per parts per que es complicat.
   $p1='<a class="btn btn-warning btn-mg disable" href="FormularioEdita.php?idCompra=';
   $p2=$elemento['idCompra'];
   $p3='">Modificar</a>';
   echo "<td>".$p1.$p2.$p3."</td></tr>";
   
   }
   echo "<tfoot><tr><td></td><td></td><td></td><td>Total Productes:</td>";
   echo "<td><b>".$totalgeneral."</b></td>";
   echo "<td></td></tr></tfoot></table>";


?>
  <td>
  <a class="btn btn-success btn-lg disable" href="FormularioNuevoProducto.php?id=<?php echo $compra['id'] ?>">Nuevo Producto<i class="fas fa-pen-alt"></i></a>
  <!--<a class="btn btn-warning btn-lg disable" href="FormularioEdita.php?id=<?php echo $compra['id'] ?>">Modificar Producto<i class="fas fa-pen-alt"></i></a>
 -->
  <!-- <a class="btn btn-danger btn-lg disable" href="FormularioBorra.php?id=<?php echo $compra['id'] ?>">Eliminar Producto<i class="fas fa-pen-alt"></i></a>
  -->
  </td>

</div>
</body>
</html>
