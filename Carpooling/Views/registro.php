<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Carpool BUAP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href="../css/registro.css" rel="stylesheet">
</head>
<body>

<!-- Navigation bar -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Carpool BUAP</a>
        <a id="btn-abrir-popup" class="btn btn-primary btn-abrir-popup">Iniciar Sesión</a>
    </div>
</nav>

<!-- FORMULARIO REGISTO -->
<section class="bg-light text-center">
    <div class="container">
        <h3>Regístrate!</h3>
        <h4>Datos personales:</h4>
        <form action="">
             
          <!-- User data -->  
            
          <!-- Photo up! -->
          <div class="col-lg-6">
	        <fieldset class="form-group">
	          <div class="row">		
		      <div class="form-check col-6 col-md-4">
		        <input type="radio" name="radio_select" class="form-check-input" id="radiosphoto" checked="checked" />	
		        <label class="form-check-label" for="radiosphoto">Seleccionar Foto</label>
		      </div>
		      <div class="form-check col-6 col-md-4">
		        <input type="radio" name="radio_select" class="form-check-input" id="radiophoto" />	
		        <label class="form-check-label" for="radiophoto">Tomar Foto</label>
		      </div>
		    </div>
          </fieldset>

          <div class="">
            <input type="file" class="form-control-file" name="archivo" id="uploadphoto" accept="image/*">
              <video id="video" autoplay="autoplay"  class="video_container none"></video>     
             </div>		
	      </div>
          <button type="submit" class="btn btn-primary btn-sm none" id="btn-save" />Captura!</div>      	         	      
        </div>
	
        <canvas id="canvas"></canvas>  
             
          <div class="contenedor-inputs form-group">
            <input type="text" class="form-control2" placeholder="Nombre(s)"><br>
            <input type="text" class="form-control2" placeholder="Apellidos"><br>
            <input type="number" class="form-control2" placeholder="Edad" min="18" max="110"><br>

            <select id="sexo" class="form-control2">
              <option value="mujer">Mujer</option>
              <option value="hombre">Hombre</option>
              
              </select><br>
                <input type="number" class="form-control2" placeholder="Matricula" min="000000002" max="300000000"><br>
                <input type="email" class="form-control2" placeholder="Correo (correo@alumno.buap.mx)" value="<?php if( isset($_POST['correo_ins']) ) echo $_POST['correo_ins']; ?>" /><br>
                <label>Elige tu tipo de usuario: </label><br>

                <!-- The user is identified as -->

                <div class="form-check form-check-inline">
                    <input class="form-check-input check-btn" type="checkbox" id="conductorCheck"> 
                    <label class="form-check-label" for="flexCheckConductor">Conductor</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input check-btn" type="checkbox" value="" id="pasajero">
                    <label class="form-check-label" for="flexCheckPasajero">Pasajero</label>
                </div>
            </div>

            <!-- This data is only displayed when the user selects driver as their option -->

            <div class="contenedor-inputs form-group conductor" id="conductorDiv">
                <h4>Datos automóvil</h4>
                <input type="text" class="form-control2" placeholder="Modelo"><br>
                <input type="text" class="form-control2" placeholder="Marca"><br>
                <input type="text" class="form-control2" placeholder="Color"><br>
                <input type="number" class="form-control2" placeholder="Capacidad"><br>
                <input type="text" class="form-control2" placeholder="Antigüedad"><br>
                <input type="text" class="form-control2" placeholder="Número de placas"><br><br>

                <h5>Carga la documentación de tu vehículo</h5>
                <label for="licenciaConducir">Licencia Conducir</label>
                <input type="file" id="licenciaConducir" form-control-file name="LicenciaConducir"
                       accept="image/png, .jpeg, .jpg, image/gif"><br><br>
                <label for="seguroCobertura">Seguro cobertura</label>
                <input type="file" id="seguroCobertura" form-control-file name="SeguroCobertura"
                       accept="image/png, .jpeg, .jpg, image/gif"><br><br>
                <label for="tarjetaCirculacion">Tarjeta Circulacion</label>
                <input type="file" id="tarjetaCirculacion" form-control-file name="tarjetaCirculacion"
                       accept="image/png, .jpeg, .jpg, image/gif"><br><br>
            </div>
            <div class="contenedor-inputs form-group">
                <input type="submit" class="btn btn-primary" value="Registrarme"><br>
            </div>
        </form>
    </div>
</section>


<!-- login pop-up -->

<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>Iniciar Sesión</h3>
        <h4>Recuerda que debes usar tus credenciales universitarias.</h4>
        <form action="">
            <div class="contenedor-inputs">
                <input type="email" placeholder="Correo Institucional">
                <input type="password" placeholder="Contraseña">
            </div>
            <input type="submit" class="btn-submit" value="Iniciar Sesión">
        </form>
    </div>
</div>

<script src="../js/popup.js"></script>
<script src="../js/registro.js"></script>
<script src="../js/sweetalert.js"></script>


</body>
</html>

