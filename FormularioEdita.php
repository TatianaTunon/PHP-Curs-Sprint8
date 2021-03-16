<!DOCTYPE html>
<head>
    <title>BD Formulario Modifica Compra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
	<!--CSS bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<!-- formulario -->
<form action="EditarCompra.php" method="POST">
<fieldset>
    <legend>Edita Productos BD</legend>
  <div class="form-group row">
    <label for="idCompra">ID</label>
    <input type="number" class="form-control-file" name="idCompra" id="idCompra"  placeholder="idCompra">
  </div>
  <div class="form-group row">
    <label for="Productos">Productos</label>
    <input type="text" class="form-control-file" name="Productos" id="Productos"  placeholder="Productos">
  </div>

  </br>
  <div class="form-group row">
    <label for="Quantitat">Quantitat</label>
    <input type="number" class="form-control-file" name="Quantitat" id="Quantitat" placeholder="Quantitat">
  </div>
  </br>
  <button type="submit" value="Modificar" class="btn btn-warning" href="indexDB.php" >Modifica</button>
  </fieldset>
</form>
</br>
<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
crossorigin="anonymous"></script>
-->
</body>
</html>

