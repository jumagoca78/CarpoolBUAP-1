<?php

	require_once('conection.php');

    $link = Conection::connect();
	
	$validator = array('success' => false, 'messages' => array());

	if(!empty($_FILES["archivo"]["name"])) {
          
		$fileName = basename($_FILES["archivo"]["name"]);
		$targetFilePath = '../Fotos/'.$fileName;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

		$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'ppeg');
		if (in_array($fileType, $allowTypes)) {
			if(copy($_FILES["archivo"]["tmp_name"], $targetFilePath)){
			  
               //  data received
               $nombre = $_POST["nombre"];
			   $apellidop = $_POST["apellidop"];
			   $apellidom = $_POST["apellidom"];
			   $edad = $_POST["edad"];
			   $sexo = $_POST["sexo"];
			   $matricula = $_POST["matricula"];
			   $email = $_POST["email"];
               				 
			   $cont = 0; $tipo = "P";
			   if(isset($_POST["check_pasajero"]) && $_POST["check_pasajero"] == "on") $cont ++;
		  
               if(isset($_POST["check_conductor"]) && $_POST["check_conductor"]== "on"){ $tipo = "C"; $cont ++;}
		  
               if($cont == 2) $tipo = "A";				   
			   	   
			   // SQL statement
               $sql = 'INSERT INTO usuario (nombre, apellido_paterno, apellido_materno, edad, sexo, matricula, email, tipo, foto, tam_foto) VALUES (:nombre, :apellidop, :apellidom, :edad, :sexo, :matricula, :email, :tipo, :foto, :tam_foto)'; 			   
               // biding
               $stmt = $link -> prepare($sql);
               $stmt -> bindValue(':nombre', $nombre, PDO::PARAM_STR);
			   $stmt -> bindValue(':apellidop', $apellidop, PDO::PARAM_STR);
			   $stmt -> bindValue(':apellidom', $apellidom, PDO::PARAM_STR);	
			   $stmt -> bindValue(':edad', $edad, PDO::PARAM_INT);
			   $stmt -> bindValue(':sexo', $sexo, PDO::PARAM_STR);
			   $stmt -> bindValue(':matricula', $matricula, PDO::PARAM_INT);
			   $stmt -> bindValue(':email', $email, PDO::PARAM_STR);
			   $stmt -> bindValue(':tipo', $tipo, PDO::PARAM_STR);
               $stmt -> bindValue(':foto', $fileName, PDO::PARAM_STR); 			   
			   $stmt -> bindValue(':tam_foto', $_FILES["archivo"]["size"], PDO::PARAM_INT);
	
				if ($stmt -> execute()) {
					$validator['success'] = true;
					$validator['messages'] = "REGISTRO ÉXITOSO";
				} else {
					$validator['messages'] = "ERROR AL REGISTRARSE";
				}

			} else {
				$validator['messages'] = 'NO SE COPIO LA IMAGEN';
			}
		} else {
			$validator['messages'] = 'SOLO SE PERMITE FORMATOS JPG, PNG Y JPEG.';
		}
	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($validator);
	exit();