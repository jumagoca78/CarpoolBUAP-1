<?php

  class Conection {

    public static function connect() { 

      try {
		$hostname = "localhost";
		$dbname = "carpoolingBUAP";
		$username = "root";
		$pw = "";
	
		return new PDO('mysql:host='.$hostname.';dbname='.$dbname.'', $username, $pw);
 		
	} catch (PDOException $ex) {
		echo "Error al conectar a la base de datos: " . $ex->getMessage() . "\n";
		exit;
	}
    }
   
  }    