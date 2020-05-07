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
          <label class="lbl" for="">Juego:</label><br>
          <input type="text" name="nombre1" placeholder="Primer Nombre" onkeypress="return sololetras(event)" onpaste="return false"/  required/>
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
