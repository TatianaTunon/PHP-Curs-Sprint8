<?php
require_once ("TablaCompras.php");
$conexion_db = new conexion();
$con  = $conexion_db->conexion();

$id = $_POST['idCompra'];
$Productos = $_POST['Productos'];
$Quantitat = $_POST['Quantitat'];
//echo "EditarCompra:".$id." Prod:".$Productos." Quantitat:".$Quantitat."<br>";
?>
<!DOCTYPE html>
<head>
    <title>Editar Compra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<div class="alert alert-warning">Se ha modificado la tabla: <a href="indexDB.php">Volver a carro</a></div>
</html>

<?php
$compra = new TablaCompras();
$result = $compra->modificar($Productos, $Quantitat, $id);

//echo $result;
?>


