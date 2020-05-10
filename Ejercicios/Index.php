<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="flexslider.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>REGISTRO</title>
  </head>
  <body>
    <h1>REGISTRARSE</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        <FORM action="pagina2.php" class="form-label form-js-label" id="formulario" name="formulario" method="POST">
          <label class="Pr1" for="nombre">Primer Nombre:</label> <label class="Pr2" for="nombre2">Segundo Nombre:</label><br>
          <input type="text" name="nombre" placeholder="Primer Nombre" onkeypress="return sololetras(event)" onpaste="return false"/ minlength="3" maxlength="10"  required/>
          <input type="text" name="nombre2" placeholder="Segundo Nombre" onkeypress="return sololetras(event)" onpaste="return false"/ minlength="3" maxlength="10"><br>

          <label for="apellido1">Primer Apellido:</label> <label class="Ape2" for="apellido2">Segundo Apellido:</label> <br>
          <input type="text" name="apellido1" placeholder="Primer Apellido"  onkeypress="return sololetras(event)" onpaste="return false"/ minlength="4" maxlength="12"  required/>   <input type="text" name="apellido2" placeholder="Segundo Apellido"  onkeypress="return sololetras(event)" onpaste="return false"/ minlength="4"  maxlength="12" required/><br>

          <label class="email1" for="email">Correo Electronico:</label><br>
          <input type="email" name="email" placeholder="Email" size="46" maxlength="35" required/><br>

          <label for="edad">Edad:</label> <label class="Fec" for="fecha">Fecha de Nacimiento:</label> <br>
          <input class="edad1" type="number" name="edad" placeholder="Edad" onkeypress="comprueba(this)" min="12" max="100" maxlength="3" pattern="^[0-9]+" required/>

          <input class="fecha1" type="date" name="fecha" required/><br>

          <label class="Nac" for="nacionalidad">Nacionalidad:</label><br>
          <input class="nacionalidad1" type="text" name="nacionalidad" placeholder="Nacionalidad" onkeypress="return sololetras(event)" onpaste="return false"/ maxlength="20"  required/><br>

          <div class="sexo">
            <label class="sexo1" for="sexo">Sexo:</label>

  					<label class="label-radio hombre" for="hombre"><input type="radio" name="sexo" id="hombre" value="hombre" checked>Hombre</label>

  					<label class="label-radio mujer" for="mujer"><input type="radio" name="sexo" id="mujer" value="mujer">Mujer</label>

            <label class="label-radio otro" for="otro"><input type="radio" name="sexo" id="otro" value="otro">Otro</label>
  				</div>

          <input type="checkbox" name="terminos" value="terminos" required/>
          <a href="Terminos y Condiciones.html"><label for="terminos">Terminos y Condiciones</label><br></a>

          <input id="b1" class="btn btn-outline-primary" type="reset" name="borrar" value="Borrar Informacion">
          <input class="btn btn-outline-primary" type="submit" name="btn" value="Enviar">

        </FORM>
      </div>
    </div>

      <div class="flexslider">
        <ul class="slides">
        <li>
        <img src="Images/HaloRGame2.jpg" height="350" width="200">
        </li>

        <li>
        <img src="Images/HaloRGame3.jpg" height="350" width="200">
        </li>

        <li>
        <img src="Images/HaloRGame4.jpg" height="350" width="200">
        </li>
        </ul>
      </div>
      <script src="Js/jquery-3.1.0.min.js"></script>
      <script src="Js/jquery.flexslider.js"></script>
      <script src="Js/main.js"></script>
      <script src="Js/Validar.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
