<?php

  class ModeloPlantilla
  {
    /*--------------------
    Providing view 	 
    --------------------*/
    public static function mdlGetVista($vista)
    {
      if
      (	
        $vista == "registrar-usuario" ||
        $vista == "salir"
      )
        $vista = "Vistas/Modulos/".$vista.".php"; 
      else
        $vista = "Vistas/Modulos/error404.php";
      
      return $vista;	
    }

  }