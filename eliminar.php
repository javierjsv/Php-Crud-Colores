<?php 

include_once 'conexion.php';

$id = $_GET['id'];

$sql_eliminar = 'DELETE FROM colores WHERE id=?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->excute(array($id));

// cerrar conexión
 $sentencia_editar = null;
 $pdo = null;
header('location:index.php');
 ?>