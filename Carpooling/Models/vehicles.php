<?php
  $data['data'] = false;
  
   require_once("conection.php");
   $link = Conection::connect();

   $sql = 'SELECT * FROM  vehiculo';
   $stmt = $link -> query($sql);
   $vehiculos =  $stmt -> fetchAll(PDO::FETCH_OBJ);

   foreach($vehiculos as $vehiculo) { 
    
      $owner = $vehiculo -> id_conductor;
      $placa = $vehiculo -> placa;
      $modelo = $vehiculo -> modelo;
      $marca = $vehiculo -> marca;
      $color = $vehiculo -> color;
      $capacidad = $vehiculo -> capacidad;
      $antiguedad = $vehiculo -> antiguedad;

      $data['data'][] = array($owner, $placa, $modelo, $marca, $color, $capacidad, $antiguedad);
   }
  
   echo json_encode($data);
   exit;
   