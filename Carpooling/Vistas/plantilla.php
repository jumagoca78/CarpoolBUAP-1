<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>CarPoolBUAP</title>
 
    <!----------------------------------
    CSS PLUGINS 
    -----------------------------------> 
   
    <!-- css pluggin -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!----------------------------------
    CSS PLUGINS 
    ----------------------------------->	

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!-- Sript Font Awesome(latest compiled) -->
    <script src="https://kit.fontawesome.com/a6fb1f4ccf.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <!----------------------------------
    LOGO 
    ----------------------------------->
    <div class="container-fluid">
      <h2 class="text-center py-3"><i class="fas fa-car"></i></h2>
    </div>
    
    <!----------------------------------
    Buttons/Nav options 
    ----------------------------------->
    <div class="container-fluid bg-light">
      <div class="container">

        <ul class="nav nav-justified py-2 nav-pills">
   
        <?php if(isset($_GET["vista"])): ?>      

          <?php if($_GET["vista"] == "registrar-usuario"): ?>   
            <li class="nav-item">
	      <a class="nav-link active" href="index.php?vista=registrar-usuario">Registrarse</a>
	    </li>
          <?php else: ?> 
            <li class="nav-item">
	      <a class="nav-link" href="index.php?vista=registrar-usuario">Registrarse</a>
	    </li>  
          <?php endif ?> 

          <?php if($_GET["vista"] == "salir"): ?>  
            <li class="nav-item">
	      <a class="nav-link active" href="index.php?vista=salir">Salir</a>
	    </li>
          <?php else: ?>
	    <li class="nav-item">
	      <a class="nav-link" href="index.php?vista=salir">Salir</a>
	    </li>
	  <?php endif ?> 
          
        <?php else: ?>
	  <li class="nav-item">
            <a class="nav-link active" href="index.php?vista=registrar-usuario">Registrarse</a>
          </li>
          <li class="nav-item">
	      <a class="nav-link" href="index.php?vista=salir">Salir</a>
	  </li>
	
        <?php endif ?>

	</ul>
      </div>
    </div>
    
    <!----------------------------------
    Content/Request View
    ----------------------------------->    
    <div class="container-fluid">
      <div class="container py-5 text-center">
      <?php

          $ctr_plantilla = new ControladorPlantilla();
          $ctr_plantilla -> ctrGetVista();              

      ?>
      </div>
    </div>

  </body>
</html>
