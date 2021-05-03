<?php
  $data['data'] = false;
  
   require_once("conection.php");
   $link = Conection::connect();

   $sql = 'SELECT * FROM conductor ';
   $stmt = $link -> query($sql);
   $conductores =  $stmt -> fetchAll(PDO::FETCH_OBJ);

   foreach($conductores as $conductor) { 
    
      $id = $conductor -> id_conductor;
      $email = $conductor -> email;
      $registro = $conductor -> registro;
      $licencia = $conductor -> licencia;
      $seguro = $conductor -> seguro;
      $tc = $conductor -> tarjeta_circulacion;

      if($conductor -> direccion_partida == null) {
        $di = "Aun sin coordenadas";
        $df = "Aun sin coordenadas";
      }

      $boton1 = '<a type="button" class="btn btn-sm btn-info" onclick="verfoto_licencia(\''.$licencia.'\')" id="btnFoto_'.$id.' ">Foto</a>';
      $boton2 = '<a type="button" class="btn btn-sm btn-info" onclick="verfoto_seguro(\''.$seguro.'\')" id="btnFoto_'.$id.' ">Foto</a>';
      $boton3= '<a type="button" class="btn btn-sm btn-info" onclick="verfoto_tc(\''.$tc.'\')" id="btnFoto_'.$id.' ">Foto</a>';


      $data['data'][] = array($id, $email, $registro, $di, $df, $boton1, $boton2, $boton3);
   }
  
   echo json_encode($data);
   exit;
   