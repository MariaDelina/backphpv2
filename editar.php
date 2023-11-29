<?php

include('cors.php');
include('conexion.php');

$data = json_decode(file_get_contents("php://input"), true);
 $id = $data['id']; 
 $nombre = $data['nombre'];
 $apellido = $data['apellido'];
 $sueldo = $data['sueldo'];
 $modelo = new Conexion();
 $db = $modelo->getConexion();

$sql = "UPDATE empleados SET nombre='$nombre', apellido='$apellido'
         ,sueldo='$sueldo' WHERE id=$id";


      $query = $db->prepare($sql);
      $query->execute();
      echo "actualizado";

  ?>

