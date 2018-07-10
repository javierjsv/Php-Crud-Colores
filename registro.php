<!DOCTYPE html>
		<html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">	
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
 </head>
		<body>
			<div class="container">	
				<h2 class="display-4 text-center text-success">
					<i class="fas fa-users text-danger"></i>Registro de <b>usuarios</b></h2>
			<div class="d-flex justify-content-center">	
			<form class="form-group jumbotron" method="post" action="agrearUsuario.php">
				<div class="row w-100">
				<input type="text"  name="nombre_usario" class="form-control form-group" placeholder="usario" >
				<input type="password" name="contrasena" class="form-control form-group" placeholder="Constraseña" >
				<input type="password" name="contrasena2" class="form-control form-group" placeholder="Repita Constraseña" >				
				<button class="btn btn-outline-warning">enviar</button>
				</div>

			</form>
			</div>	
			</div>
		</body>
</html>		