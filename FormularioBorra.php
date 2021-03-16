<!DOCTYPE html>
<head>
    <title>BD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<html>
    <body>
            <!-- formulario -->
            <form method="GET" action="BorraCompra.php">
            <div class="form-group row">
                 <label for="id">id del producto</label>
                 <input type="number" class="form-control-file" name="idCompra" id="idCompra"  placeholder="id del producto">
            </div>
                <button type="submit" value="Borrar" class="btn btn-primary" href="indexDB.php">Quita</button>
            </form>
    </body>
</html>