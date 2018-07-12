<?php 

// echo  password_hash('string',PASSWORD_DEFAULT).'\n';

    // conectar con la base de datos
    include_once './conexion.php';

	$usuario_nuevo = $_POST['nombre_usario'];
	$contrasena = $_POST['contrasena'];
	$contrasena2 = $_POST['contrasena2'];


// Validar si el usuario ya se encuentra registrado
	$sql_verificarUsuario = 'select *  from usuarios where nombre = ?';
	$sentencia = $pdo->prepare($sql_verificarUsuario);
	$sentencia->execute(array($usuario_nuevo));
	$resultadoVerificaUsuario = $sentencia->fetch();
    
    // var_dump($resultadoVerificaUsuario);
	if ($resultadoVerificaUsuario) {
		echo '<h2 class="text-danger">El usuarios ya se encuentra registra</h2>';
		// matar procesos
		die();
	}



// hash
$contrasena = password_hash($contrasena,PASSWORD_DEFAULT);

echo '<pre>';
 var_dump($usuario_nuevo );
 var_dump($contrasena);
 var_dump($contrasena2);
echo '</pre>';


if (password_verify($contrasena2,$contrasena )) {
    echo '¡La contraseña es válida!';
    // conectar con la base de datos
   // include_once './conexion.php';
    // se pasan (?,?) por que es una sentencia preparada
    $sql_agregar = 'insert into usuarios (nombre,constrasena) values (?,?)';
	$sentencia_agregar = $pdo->prepare($sql_agregar);
	

	if ($sentencia_agregar->execute(Array($usuario_nuevo ,$contrasena))) {
		echo 'Agregado<br>';
			header('location:index.php');

	}else{
		echo 'Error al agregar<br>';
		var_dump($usuario_nuevo);
        var_dump($contrasena);
	}


	//cerrar conection
	$sentencia_agregar = null;
	$pdo = null;

	// redirigir

	
   
} else {
    echo 'La contraseña no es válida.<br>';

}

 ?>