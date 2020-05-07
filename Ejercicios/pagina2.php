<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Datos</title>
  </head>
  <body>
    <?php
    echo $_POST['nombre'];
    echo $_POST['apellidos'];
    echo $_POST['edad'];
    echo $_POST['fecha'];
    echo $_POST['nacionalidad'];

     ?>
     <?php
     $sexo = $_POST['mfo'];
     if ($sexo == "Masculino") {
       echo "Masculino";
     }
     else {
       if ($sexo == "Femenino") {
         echo "Femenino";
       }
       else {
         echo "Otro";
       }
     }
      ?>
  </body>
</html>
