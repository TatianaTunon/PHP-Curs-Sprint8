<?php
require ("TablaCompras.php");
$conexion_db = new conexion();
$con  = $conexion_db->conexion();

$Productos = $_POST['Productos'];
$Quantitat = $_POST['Quantitat'];
$Preu = $_POST['Preu']; 

//echo "Variables rebudes: ".$Productos."-".$Quantitat."<br>";

?>

<!DOCTYPE html>
<head>
    <title>BD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<div class="alert alert-success">¡Bien hecho! El producto se añadió correctamente <a href="indexDB.php">Volver a carro</a></div>
</html>
<?php
$compra = new TablaCompras();
$result = $compra->create($Productos,$Quantitat,$Preu);
echo $result;
?>