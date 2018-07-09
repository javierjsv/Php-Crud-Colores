<?php 

// editar
if ($_GET) {
$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];

// echo $id;
// echo $color;
// echo $descripcion;

include_once 'conexion.php';

$sql_editar = 'UPDATE colores set color=?,descripcion=? where id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($color,$descripcion,$id));


// Cerrrar conexion 
$sentencia_editar = null;
$pdo = null;
// volver al inicio despues de ejecutarse
header('location:index.php');
	
}
else {
	echo 'no se actualizo ';
}

 ?>