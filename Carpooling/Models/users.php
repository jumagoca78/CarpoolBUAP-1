<?php
  $data['data'] = false;
  
   require_once("conection.php");
   $link = Conection::connect();

   $sql = 'SELECT nombre, apellido_paterno, apellido_materno, edad, sexo, matricula, email, tipo, telefono, direccion, foto, registro FROM usuario ';
   $stmt = $link -> query($sql);
   $usuarios =  $stmt -> fetchAll(PDO::FETCH_OBJ);

   foreach($usuarios as $usuario) { 
    
      $nombre = $usuario -> nombre;
      $apellidop = $usuario -> apellido_paterno;
      $apellidom = $usuario -> apellido_materno;
      $edad = $usuario -> edad;
      $sexo = $usuario -> sexo;
      $matricula = $usuario -> matricula;
      $email = $usuario -> email;

      if($usuario -> tipo == "P") $tipo = "Pasajero";
      else if($usuario -> tipo == "C") $tipo = "Conductor";
      else $tipo = "Ambos";

      $telefono = $usuario -> telefono;
      $direccion = $usuario -> direccion;
      $formacion = $usuario -> formacion;
      $unidadAc = $usuario -> unidad_academica;
      $registro = $usuario -> registro;
      $foto = $usuario -> foto;
      $boton = '<a type="button" class="btn btn-sm btn-info" onclick="verfoto(\''.$foto.'\')" id="btnFoto_'.$matricula.' ">Foto</a>';

      $data['data'][] = array($nombre, $apellidop, $apellidom, $edad, $sexo, $matricula, $email, $tipo, $telefono, $direccion, $formacion, $unidadAc, $registro, $boton);
   }
  
   echo json_encode($data);
   exit;
   
