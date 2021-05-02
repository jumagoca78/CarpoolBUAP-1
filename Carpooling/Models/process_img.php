<?php

    require_once('conection.php');

    $link = Conection::connect();
	
    $user_validator = array('user_success' => false, 'messages' => array());
    $driver_validator = array('driver_success' => false, 'messages' => array());
    $registro_conductor = false;
	
    $cont = 0; $tipo = "P";
    if(isset($_POST["check_pasajero"]) && $_POST["check_pasajero"] == "on") $cont ++;
		  
    if(isset($_POST["check_conductor"]) && $_POST["check_conductor"]== "on"){ $tipo = "C"; $cont ++;}
		  
    if($cont == 2) $tipo = "A";

	if(!empty($_FILES["archivo"]["name"])) 
	{
		  
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
			    $telefono = $_POST["phone"];
			    $direccion = $_POST["address"];
			    $password = $_POST["pwd"];	
			   
			    // SQL statement
                $sql1 = 'INSERT INTO usuario (nombre, apellido_paterno, apellido_materno, edad, sexo, matricula, email, tipo, telefono, direccion, foto, tam_foto, password) VALUES (:nombre, :apellidop, :apellidom, :edad, :sexo, :matricula, :email, :tipo, :telefono, :direccion, :foto, :tam_foto, :password)'; 			   
                // binding
                $stmt1 = $link -> prepare($sql1);
                $stmt1 -> bindValue(':nombre', $nombre, PDO::PARAM_STR);
			    $stmt1 -> bindValue(':apellidop', $apellidop, PDO::PARAM_STR);
			    $stmt1 -> bindValue(':apellidom', $apellidom, PDO::PARAM_STR);	
			    $stmt1 -> bindValue(':edad', $edad, PDO::PARAM_INT);
			    $stmt1 -> bindValue(':sexo', $sexo, PDO::PARAM_STR);
			    $stmt1 -> bindValue(':matricula', $matricula, PDO::PARAM_INT);
			    $stmt1 -> bindValue(':email', $email, PDO::PARAM_STR);
			    $stmt1 -> bindValue(':tipo', $tipo, PDO::PARAM_STR);
			    $stmt1 -> bindValue(':telefono', $telefono, PDO::PARAM_INT);
			    $stmt1 -> bindValue(':direccion', $direccion, PDO::PARAM_STR);
                $stmt1 -> bindValue(':foto', $fileName, PDO::PARAM_STR); 			   
			    $stmt1 -> bindValue(':tam_foto', $_FILES["archivo"]["size"], PDO::PARAM_INT);
			    $stmt1 -> bindValue(':password', $password, PDO::PARAM_STR);
	
				if($tipo == "P")
				{
					if ($stmt1 -> execute()) {
	     		 	  $user_validator['user_success'] = true;
		    		  $user_validator['messages'] = "!BIENVENIDO PASAJERO!";
			        } else {
			          $user_validator['messages'] = "ERROR AL REGISTRARSE";
			        }
				}			
			    else 
			    {
					// conductor
	              if(!empty($_FILES["licencia"]["name"]) &&
				     !empty($_FILES["seguro"]["name"]) &&
					 !empty($_FILES["tarjetaCirc"]["name"])) 
				  {
				    $fileName = basename($_FILES["licencia"]["name"]);
				    $targetFilePath = '../Licencias/'.$fileName;
				    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
					 
					$fileNameSeg = basename($_FILES["seguro"]["name"]);
					$targetFilePathSeg = '../Seguros/'.$fileNameSeg;
					$fileType2 = pathinfo($targetFilePathSeg, PATHINFO_EXTENSION);

					$fileNameTC = basename($_FILES["tarjetaCirc"]["name"]);
					$targetFilePathTC = '../TarjetasCirculacion/'.$fileNameTC;
					$fileType3 = pathinfo($targetFilePathTC, PATHINFO_EXTENSION);	

				    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'ppeg');
				    if (in_array($fileType, $allowTypes) &&
					    in_array($fileType2, $allowTypes) &&
						in_array($fileType3, $allowTypes)) 
				    {
			          if(copy($_FILES["licencia"]["tmp_name"], $targetFilePath) &&
					     copy($_FILES["seguro"]["tmp_name"], $targetFilePathSeg) &&
						 copy($_FILES["tarjetaCirc"]["tmp_name"], $targetFilePathTC))
					  {   
					     $sql2 = 'INSERT INTO conductor (email, licencia, seguro, tarjeta_circulacion) VALUES (:email, :licencia, :seguro, :tarjetaCirc)'; 
						 $stmt2 = $link -> prepare($sql2);
						 $stmt2 -> bindValue(":email", $email, PDO::PARAM_STR);	
						 $stmt2 -> bindValue(":licencia", $fileName, PDO::PARAM_STR);
						 $stmt2 -> bindValue(":seguro", $fileNameSeg, PDO::PARAM_STR);
						 $stmt2 -> bindValue(":tarjetaCirc", $fileNameTC, PDO::PARAM_STR);
						
						 if($stmt1 -> execute() && $stmt2 -> execute()) {
							 
							$sql = 'SELECT MAX(id_conductor) AS id FROM conductor';
						    $stmt = $link -> prepare($sql);
						    //$stmt3 -> bindValue(":email", $email, PDO::PARAM_STR);
						    $stmt -> execute();
							$id = $stmt -> fetch();
						 
						    $placa = $_POST["placa"];
							$modelo = $_POST["modelo"];
							$marca = $_POST["marca"];							
							$color = $_POST["color"];
							$capacidad = $_POST["capacidad"];
							$antiguedad = $_POST["antiguedad"];
						 
						    $sql = 'INSERT INTO vehiculo (placa, modelo, marca, color, capacidad, antiguedad, id_conductor) VALUES (:placa, :modelo, :marca, :color, :capacidad, :antiguedad, :id_conductor)';
						    $stmt = $link -> prepare($sql);
						    $stmt -> bindValue(":id_conductor", $id[0], PDO::PARAM_INT);
							$stmt -> bindValue(":placa", $placa, PDO::PARAM_STR);
							$stmt -> bindValue(":modelo", $modelo, PDO::PARAM_STR);
							$stmt -> bindValue(":marca", $marca, PDO::PARAM_STR);
							$stmt -> bindValue(":color", $color , PDO::PARAM_STR);
							$stmt -> bindValue(":capacidad", $capacidad, PDO::PARAM_STR);
							$stmt -> bindValue(":antiguedad", $antiguedad, PDO::PARAM_STR);
							
							if($stmt -> execute())
							{
							  $registro_conductor = true;
	     		        	  $driver_validator['driver_success'] = true;
							  $driver_validator['messages'] = "!BIENVENIDO CONDUCTOR!";
							}
							else 
						       $driver_validator['messages'] = "ERROR AL REGISTRARSE";
							
						} else {
						   $driver_validator['messages'] = "ERROR AL REGISTRARSE";        				
					    }						
					 }	
					 else
					   $driver_validator['messages'] = 'ALGÚN ARCHIVO NO SE GUADÓ CORRECTAMENTE';
			       }
				   else
				     $driver_validator['messages'] = 'SOLO SE PERMITE FORMATOS jpg, png, .gif, .ppeg Y jpeg.'; 
			     }
			  	 else
				 {
				   $driver_validator['messages'] = 'FALTA ARCHIVOS POR ADJUNTAR';
				 }
			  } // Conductor
			  
			} else {
				$user_validator['messages'] = 'NO SE COPIO LA IMAGEN';
			}
		} else {
			$user_validator['messages'] = 'SOLO SE PERMITE FORMATOS jpg, png, .gif, .ppeg Y jpeg.';
		}
	}
	else
	  $user_validator['messages'] = 'FALTA ADJUNTAR TU FOTO DE USUARIO';

    if($tipo == "P")
	{
	header('Content-type: application/json; charset=utf-8');
	echo json_encode($user_validator);
	exit();
	}
    else
	{
	  header('Content-type: application/json; charset=utf-8');
	  echo json_encode($driver_validator);
	  exit();
	}
