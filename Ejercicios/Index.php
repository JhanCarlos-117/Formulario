<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="tilo.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="flexslider.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>REGISTRO</title>
  </head>
  <body>
    <h1>REGISTRARSE</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        <FORM ACTION="pagina2.php" METHOD="post">
          <label class="lbl" for="">Nombres:</label><br>
          <input type="text" name="nombre" placeholder="Primer Nombre" onkeypress="return sololetras(event)" onpaste="return false"/  required/>  <input type="text" name="nombre" placeholder="Segundo Nombre" onkeypress="return sololetras(event)" onpaste="return false"/><br>
          <label class="lbl" for="">Apellidos:</label><br>
          <input type="text" name="apellidos" placeholder="Primer Apellido"  onkeypress="return sololetras(event)" onpaste="return false"/  required/>   <input type="text" name="apellidos" placeholder="Segundo Apellido"  onkeypress="return sololetras(event)" onpaste="return false"/  required/><br>
          <label class="lbl" for="">Edad:</label><br>
          <input type="number" name="edad" placeholder="Edad" required/><br>
          <label class="lbl" for="">Fecha de Nacimiento:</label><br>
          <input type="date" name="fecha" required/><br>
          <label class="lbl" for="">Nacionalidad:</label><br>
          <input type="text" name="nacionalidad" placeholder="Nacionalidad" onkeypress="return sololetras(event)" onpaste="return false"/  required/><br>
          <label class="lbl" for="">Sexo:</label><label class="m" for=""><input class="sex1" type="radio" name="mfo" value="Masculino" checked>M</label>
          <label class="m" for=""><input class="sex2" type="radio" name="mfo" value="Femenino">F</label>
          <label class="m" for=""><input class="sex3" type="radio" name="mfo" value="Otro">Otro</label> <br>
          <input class="btn-info" type="reset" name="borrar" value="Borrar Informacion">
          <input class="btn-info" type="submit" name="btn" value="Siguiente">
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
      <script src="Js/validar.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>