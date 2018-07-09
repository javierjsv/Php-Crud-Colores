<?php 

$link = 'mysql:host=localhost;dbname=colores';
$user = 'root';
$pass = 1234;


try{
	$pdo = new PDO($link,$user,$pass);
	// echo 'conect';

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

/*
Crear base de datos 

create database color ;

create table colores (
	id int primary key,
	color varchar (250),
	descripcion varchar(250) 
);

*/
 ?>