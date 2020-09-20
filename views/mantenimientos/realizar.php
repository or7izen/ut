<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Mantenimientos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de mantenimientos</h2> 
        </div>

    <div class="tabla" id="form">
      <div>
          <table>
            <tr><th>Id</th> <th>Taller</th><th>Vehiculo</th><th>Fecha</th><th>Tipo</th><th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-tipos">
              <?php
                foreach($this->tipos as $row){
                  $tipo = new UsuariosClass();
                  $tipo = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $tipo->getId(); ?>">
                <td><?php echo $tipo->getNombre(); ?></td>
                <td><?php echo $tipo->getApellido(); ?></td>
                <td><?php echo $tipo->getUsuario(); ?></td>
                <td><?php echo $tipo->getCedula(); ?></td>
    
                <td><a class="crud" href="<?php echo constant('URL')?>tipos/modificarUsuario/<?php echo $tipo->getId();?>">Modificar</a></td>
                <td>
                  <button class="crud eliminar" data-id="<?php echo $tipo->getId(); ?>" <?php if ( $tipo->getId() == '1' ) {?> disabled="disabled" <?php }?>>Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>usuarios/registrarUsuario">Agregar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
