<?php
include('cors.php');
include('conexion.php');
$data = json_decode(file_get_contents("php://input"), true);

 $nombre = $data['nombre'];
 $apellido = $data['apellido'];
 $sueldo = $data['sueldo'];
 $modelo = new Conexion();
 $db = $modelo->getConexion();
 
 $sql = "INSERT INTO empleados(nombre, apellido, sueldo) 
         VALUES(:nombre, :apellido,:sueldo)";

      $query = $db->prepare($sql);
      $query->bindParam(':nombre', $nombre);
      $query->bindParam(':apellido', $apellido);
      $query->bindParam(':sueldo', $sueldo);

   $query->execute();

echo "registrado";

 
 
?>