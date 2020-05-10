<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="formulario";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		  <link rel="stylesheet" href="bootstrap.css">
			<link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <table class="table table-hover" >
    <tr class="table-primary">
      <th>Id</th>
      <th>Name</th>
      <th>Second Name</th>
      <th>Surname</th>
      <th>Second Surname</th>
      <th>Age</th>
      <th>Birthdate</th>
			<th>nationality</th>
      <th>Sex</th>
    </tr>
      <?php
        $consulta = "SELECT * FROM datos";
        $ejecutarConsulta = mysqli_query($enlace, $consulta);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);

        if(!$ejecutarConsulta){
          echo"Error en la consulta";
        }else{
          if($verFilas<1){
            echo"<tr><td>Sin registros</td></tr>";
          }else{
            for($i=0; $i<=$fila; $i++){
              echo'
                <tr>
                  <td>'.$fila[8].'</td>
                  <td>'.$fila[0].'</td>
                  <td>'.$fila[1].'</td>
                  <td>'.$fila[2].'</td>
                  <td>'.$fila[3].'</td>
                  <td>'.$fila[4].'</td>
                  <td>'.$fila[5].'</td>
                  <td>'.$fila[6].'</td>
                  <td>'.$fila[7].'</td>
                </tr>
              ';
              $fila = mysqli_fetch_array($ejecutarConsulta);

            }

          }
        }


      ?>
</table>
<a class="bb" href="index.php"><input class="btn btn-outline-primary" type="button" name="atras" value="Regresar"></a>
  </body>
</html>
<?php
	if(isset($_POST['btn'])){
		$nombre =$_POST["nombre"];
		$nombre1=$_POST["nombre"];
    $apellido1=$_POST["apellido1"];
    $apellido2=$_POST["apellido2"];
    $edad=$_POST["edad"];
    $fecha=$_POST["fecha"];
    $nacionalidad=$_POST["nacionalidad"];
		$sexo=$_POST["sexo"];
		$id= rand(1,99);

		$insertarDatos = "INSERT INTO datos VALUES('$nombre',
													'$nombre1',
                          '$apellido1',
                          '$apellido2',
                          '$edad',
                          '$fecha',
                          '$nacionalidad',
													'$sexo',
													'$id')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
