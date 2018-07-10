<?php 

// echo  password_hash('string',PASSWORD_DEFAULT).'\n';


	$usuario_nuevo = $_POST['nombre_usario'];
	$contrasena = $_POST['contrasena'];
	$contrasena2 = $_POST['contrasena2'];

// hash
$contrasena = password_hash($contrasena,PASSWORD_DEFAULT);

echo '<pre>';
 var_dump($usuario_nuevo );
 var_dump($contrasena);
 var_dump($contrasena2);
echo '</pre>';


if (password_verify($contrasena2,$contrasena )) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}

 ?>