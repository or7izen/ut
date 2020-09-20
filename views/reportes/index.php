<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> UT| Reportes</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
        <h2> Reportes </h2>
      </div>

      <div class="tabla" id="form">
      <div>
          <table>
            <th><a class="crud" href="<?php echo constant('URL')?>#"><img src="<?php echo constant('URL')?>public/img/chofer.png" whith><br>Choferes</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>#"><img src="<?php echo constant('URL')?>public/img/mantenimiento.png"><br>Mantenimiento</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>#"><img src="<?php echo constant('URL')?>public/img/reparacion.png"><br>Reparaciones</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>#"><img src="<?php echo constant('URL')?>public/img/taller.png"><br>Talleres</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>#"><img src="<?php echo constant('URL')?>public/img/ruta.png"><br>Rutas</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>#"><img src="<?php echo constant('URL')?>public/img/vehiculo.png"><br>Vehciulos</a></th>
            </tbody>
          </table>
      </div>
        <div class="bottom">

            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  



  </main>
</div>

</body>
</html>
