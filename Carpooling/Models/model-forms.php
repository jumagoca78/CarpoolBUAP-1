<?php
  
  require_once ("conection.php");
  
  class ModelForms {

    public static function mdlGetRegistro() {
   
      $link = Conection::connect();
      $stmt = $link -> prepare("SELECT * FROM usuario");
      $stmt -> execute();
      $usuarios = $stmt -> fetchAll();

      if(isset($_POST["buap_email"]))
      {
        foreach($usuarios as $usuario)
        {
          if($usuario["email"] == $_POST["buap_email"])
          {
               if($usuario["password"] == $_POST["email_pwd"])
               { 
                   
                 $_SESSION["valido"] = "ok";             
                   echo '<script>
	           if(window.history.replaceState)
                   window.history.replaceState(null, null, window.location.href);  

	           window.location = "inicio.php";     
	         </script>';
               }
               else
                 echo '<script>
	           if(window.history.replaceState)
                   window.history.replaceState(null, null, window.location.href);  

	         </script> <div class="px-2 py-2 alert alert-warning">La contraseña está incorrecta</div>';

          }
          else
                echo '<script>
	           if(window.history.replaceState)
                   window.history.replaceState(null, null, window.location.href);  

	         </script> <div class="px-2 py-2 alert alert-warning">El Correo no existe</div>';
     
        }
      }  
      
    }  

  }
 