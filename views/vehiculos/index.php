<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Vehiculos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de vehiculos</h2> 
        </div>

    <div class="tabla" id="form">
      <div>
          <table>
            <tr> <th>Id</th><th>Placa</th><th>Modelo</th><th>Detalle</th><th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-vehiculos">
              <?php
                foreach($this->vehiculos as $row){
                  $vehiculo = new VehiculosClass();
                  $vehiculo = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $vehiculo->getId(); ?>">
                <td><?php echo $vehiculo->getId(); ?></td>
                <td><?php echo $vehiculo->getPlaca(); ?></td>
                <td><?php echo $vehiculo->getModelo(); ?></td>
                

                <td><a class="crud" href="<?php echo constant('URL')?>vehiculos/detalleVehiculo/<?php echo $vehiculo->getId();?>">Detalle</a></td>
                <td>
                <td><a class="crud" href="<?php echo constant('URL')?>vehiculos/modificarVehiculo/<?php echo $vehiculo->getId();?>">Modificar</a></td>
                <td>
                  <button class="crud eliminar" data-id="<?php echo $vehiculo->getId(); ?>" <?php if ( $vehiculo->getId() == '1' ) {?> disabled="disabled" <?php }?>>Eliminar</button>
                </td>
              </tr>
              <?php } ?>
              
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>vehiculos/registrarUsuario">Agregar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
