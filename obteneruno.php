<?php
include('cors.php');
include('conexion.php');
$array=array();
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];

$modelo = new Conexion();
 $db = $modelo->getConexion();

 $sql = "SELECT id, nombre, apellido, sueldo FROM empleados WHERE id='$id'";
 $query = $db->prepare($sql);
 $query->execute();
   
  while($fila = $query->fetch()) {
    $array[] = array(
      "id" => $fila['id'],
      "nombre" => $fila['nombre'],
      "apellido" => $fila['apellido'],
      "sueldo" => $fila['sueldo'] ); }//fin del ciclo while 

  $json = json_encode($array);

  echo $json;


  ?>

