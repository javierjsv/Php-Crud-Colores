<?php 

// incluir bd 
include_once 'conexion.php';

// query para leer la bd
$sql_leer = 'select * from colores';

// Crear variable $gsent 
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

//Guarda el resultado en un Array 
$resultado = $gsent->fetchAll();
// var_dump($resultado);


// Agregar
if ($_POST) {
	$color = $_POST['color'];
	$descripcion = $_POST['descripcion'];
	//sentencia Sql
	$sql_agregar = 'insert into colores (color,descripcion ) values (?,?)';
	$sentencia_agregar = $pdo->prepare($sql_agregar);
	$sentencia_agregar->execute(Array($color,$descripcion));

	// redirigir
	header('location:index.php');
	
	
}

if ($_GET) {
	$id = $_GET['id'];
	$sql_unico = 'select * from colores where id=?';
	// Crear variable $gsent_unico
	$gsent_unico = $pdo->prepare($sql_unico);
	$gsent_unico->execute(array($id ));

	//Guarda el resultado en un Array 
	$resultado_unico = $gsent_unico->fetch();
	// var_dump($resultado_unico);
}


 ?>
 <!DOCTYPE html>
 <html>
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
 	<h2 class="text-danger display-4 text-center text-uppercase">color</h2>

 	<div class="container mt-5">
 		<div class="row">
 			<div class="col-md-6">
 				<!-- recorrer tabla con foreach  poner al final : -->
 				<?php foreach ($resultado as $values): ?>
 					<div class="alert alert-<?php echo $values['color'] ?> text-uppercase" role="alert">
 						<?php echo $values['color'] ?>
 						-
 						<?php echo $values['descripcion'] ?>
 						<a href="index.php?id=<?php echo $values['id'] ?>" class="text-danger float-right"><i class="fas fa-edit"></i></a>
 						<a href="eliminar.php?id=<?php echo $values['id'] ?>" class="float-right pr-2"><i class="fas fa-trash-alt"></i></a>
 						
 					</div>
 					<!-- cerrr el foreach -->
 					<?php endforeach ?>
 			</div>

 			<div class="col-md-6">
 				<?php if(!$_GET): ?>
 				<form method="post" >
 					<h3 class="text-center">Agragar elementos</h3>
 					<input placeholder="color" type="text" class="form-control form-group" name="color">
 					<input placeholder="descripción" type="text" class="form-control form-group" name="descripcion">
 					<button class="btn btn-outline-success mt-3">Agregar</button>
 				</form>
 				<?php endif ?>
 				<?php if($_GET): ?>
 				<form method="get" action="editar.php" >
 					<h3 class="text-center">Editar elementos</h3>
 					<input value="<?php echo $resultado_unico['color'] ?>" placeholder="color" type="text" class="form-control form-group" name="color">
 					<input value="<?php echo $resultado_unico['descripcion'] ?>" placeholder="descripción" type="text" class="form-control form-group" name="descripcion">
 					<input value="<?php echo $resultado_unico['id'] ?>" placeholder="id" type="text" class="d-none" name="id">

 					<button class="btn btn-outline-success mt-3">Agregar</button>
 				</form>
 				<?php endif ?> 				
 			</div>
 		</div>
 	</div>
 </body>
 </html>

<?php // Cerrrar conexión  
 $sentencia_editar = null;
 $pdo = null;
?>