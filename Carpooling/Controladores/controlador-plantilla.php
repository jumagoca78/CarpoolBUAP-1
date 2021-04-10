<?php

  class ControladorPlantilla
  {
    /*-----------------------------
    Calls the template file
    -----------------------------*/
    public function ctrGetPlantilla()
    {
      include "Vistas/principal.php";
    }

    /*-----------------------------
    Retrieve view requested	
    -----------------------------*/
    public function ctrGetVista()
    {
      if(isset($_GET["vista"]))
        $vista = ModeloPlantilla::mdlGetVista($_GET["vista"]); 
      else
        $vista = "Vistas/Modulos/registrar-usuario.php";

      include $vista; 
    }

  }	
