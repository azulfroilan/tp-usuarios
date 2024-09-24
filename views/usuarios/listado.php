<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("../../includes/db.php");
include_once("../../controllers/validar.php");

$resultado = $conx->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="formulario.php">Agregar usuario</a>
  <table>
     <thead>
        <tr>
          <th>Id</th>
          <th>Email</th>
        </tr>
       </thead>
          <?php while ($fila=$resultado->fetch_object()) { ?>
       <tr>
          <td><?php echo $fila->id ?></td>
          <td><?php echo $fila->email ?></td>
          <td><a href="formulario.php?id=<?php echo $fila->id?>&">Editar</a></td>
          <td><a href="../../controllers/usuarios.php?operacion=DELETE&id=<?php echo $fila->id?>">Eliminar</a></td>
          <td></td>
        </tr>
        <?php } ?>
     </table>
<a href="../../controllers/cerrarsesion.php">Cerrar Sesion
</a>
</body>
</html>
