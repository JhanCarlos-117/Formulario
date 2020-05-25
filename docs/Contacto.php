<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="contacto";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Contacto</title>
<link rel="stylesheet" href="Css/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div>
<header>
	<h2>JhanCarlos-117</h2>	
<ul ><a href="index.html">Inicio</a>
	|
	<a href="Acerca_Mi.html">Acerca de Mi</a>
	|	
	<a href="Portafolio.html">Portafolio</a>
	|
	<a href="Servicios.html">Servicios</a>
	|
	<a href="Contacto.php">Contacto</a></ul>
</header>
<div class="Img">
<h4 class="H1">Bienvenido</h4>
<h3 class="H1">Jhan Carlos Bastidas Martinez</h3>
<h4 class="H1">Analista y Desarrollador de Sistemas de Informacion</h4>
<table width="160" border="1">
  <tbody>
    <tr>
      <th scope="col"><img src="Images/pp.jpg" width="164" height="160" alt=""/></th>
    </tr>
  </tbody>
</table>
</div>
<div class="Formulario">
<h2>Contactenos</h2>
<FORM action="#" method="post">
<table width="700">
  <tbody>
    <tr>
      <th width="189">Nombre</th>
      <td width="495"><input name="nombre" type="text" size="60" maxlength="50" required/></td>
    </tr>
    <tr>
      <th>Interesado en Cual Servicio ?</th>
      <td><select name="servicio" required="required"><option>Desarrollador Web</option>
<option>Desarrollador de Software</option>
<option>Diseñador de Web</option>
</select></td>
    </tr>
    <tr>
      <th>Email</th>
      <td></label><input name="email" type="email" size="60" maxlength="70" required/></td>
    </tr>
    <tr>
      <th>Mensaje</th>
      <td><input  class="Msg" name="mensaje" type="text" size="60" maxlength="500" required/></td>
    </tr>
  </tbody>
</table>
<input class="btn-primary" type="submit" name="btn" value="Enviar">
</FORM>
</div>
<footer><p>23/05/2020</p></footer>
</div>  
</body>
</html>
<?php
	if(isset($_POST['btn'])){
		$nombre =$_POST["nombre"];
		$servicio=$_POST["servicio"];
	    $email=$_POST['email'];
		$mensaje=$_POST["mensaje"];
		$id= rand(1,99);

		$insertarDatos = "INSERT INTO formulario VALUES('$nombre',
														'$servicio',
														'$email',
														'$mensaje',
												      	'$id')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>	