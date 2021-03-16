<?php
require_once ("TablaCompras.php");
$conexion_db = new conexion();
$con  = $conexion_db->conexion();

$id = $_GET['idCompra'];


?>
<!DOCTYPE html>
<head>
    <title>BorraCompra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<div class="alert alert-danger">El producto se ha eliminado <a href="indexDB.php">Volver a carro</a></div>
</html>
<?php
$compra = new TablaCompras();
$result = $compra->borrar($id);

echo $result;
?>