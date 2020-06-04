<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Catalogo de Unidades de Medida</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div style = "position: static;padding: 30px">
		<form method="POST" action="recibirUnidades" >
			<div class="form-group"		>
				<label for="exampleInputEmail1">Clave:</label>
				<input type="form-text" class="form-control" name="code" id="clave" style="width: 10em;" placeholder="Clave">
			</div>

			<div class="form-group"		>
				<label for="exampleInputPassword1">Descripcion: </label>
				<input type="form-text" class="form-control" name="desc" id="descripcion" style="width: 40em;" placeholder="Descripción de la unidad de medida">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<button type="reset" class="btn btn-danger" onclick="location.href='index'">Cancelar</button>
		</form>
	</div>
</body>
</html>