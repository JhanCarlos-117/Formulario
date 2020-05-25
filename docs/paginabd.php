<?php
	$servidor="localhost";
	$usuario="root";
	$clave="dfdffd";
	$baseDeDatos="contacto";

	$enlace = mysqli_connect($servidor $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Problema</title>
</head>

<body>

</body>
</html>	