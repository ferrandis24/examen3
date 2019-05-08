<?php
require "../src/Conexion.php";
require "../src/Proyecto.php";
$e=new Proyecto();
$e->conectar();
$resultado=$e->listarProyectos();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<body>

   <form action="registro.php" method="post">

        <label for="nombre">nombre</label>
        <br>
        <input type="text" name="nombre" id="nombre" value="">
        <div id="hidden1" style="display:none;">No puede dejarse en blanco</div>
        <br><br>
        <label for="apellidos">apellidos</label>
        <br>
        <input type="text" name="apellidos" id="apellidos" value="">
        <div id="hidden2" style="display:none;">No puede dejarse en blanco</div>
        <br><br>
        <label for="curso">curso</label>
        <br>
        <input type="text" name="curso" id="curso" value="">
        <div id="hidden3" style="display:none;">No puede dejarse en blanco</div>
        <div id="hidden4" style="display:none;">Utiliza numeros</div>
        <br><br>
        <br>
        <label for="horas">horas:</label><br>
 <input type="text" name="horas" value="" id="horas">
 <div id="hidden4" style='display:none;'>Debes rellenar este campo</div>
 <div id="hidden5" style='display:none;'>Tiene que ser un número</div>
 <br>


        <input type="submit" value="enviar" onclick="return comprobar()">
      </form>
        <script type="text/javascript"src="js/comprobar.js"></script>
      </div>
  </body>
</html>
