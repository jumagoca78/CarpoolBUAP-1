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

<header class="container-lg mt-2 mb-3">
  <div class="container">
      <a class="navbar-brand" href="../index.php">Carpool BUAP</a>
      <a id="btn-abrir-popup" class="btn btn-primary btn-abrir-popup float-right">Iniciar Sesión</a>
  </div>
</header>
<!-- Navigation bar -->

<main class="bg-light text-center">
  <form class="p-3" id="reg_frm">
  <h3>Regístrarse</h3>
  <!-- TOMAR FOTO --> <!-- SELECCIONAR FOTO  NECESITA ARREGLOS-->
    <div class="container-sm form-group">
      <input type="file" class="form-control-file" name="archivo" id="uploadphoto" accept="image/*">
      <video id="video" autoplay="autoplay"  class="video_container none"></video>
      <button type="submit" class="btn btn-primary btn-lg" id="btn-save" onclick="captura()">Captura</button> 
    </div>
    <canvas class="offcanvas" id="canvas"></canvas> 

  <!-- RADIO BUTTONS PARA ELEGIR EL MÉTODO DE FOTO-->
    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
      <label class="btn btn-secondary active">
      <input class="form-check-input" type="radio" name="radio_select" id="radiosphoto" autocomplete="off" checked> Seleccionar Foto
      </label>
      <label class="btn btn-secondary">
      <input class="form-check-input" type="radio" name="radio_select" id="radiophoto" autocomplete="off"> Tomar Foto
      </label>
    </div>
  
    <!-- FORMULARIO -->
    <div class="mb-3 mt-2">
      <input type="text" class="form-control text" placeholder="Nombre(s)">
    </div>
    <div class="mb-3">
      <input type="text" class="form-control text" placeholder="Apellidos">
    </div>
    <div class="mb-3">
      <input type="number" class="form-control" placeholder="Edad" min="18" max="110">
    </div>
    <div class="mb-3">
      <select id="sexo" class="form-control">
        <option value="mujer">Mujer</option>
        <option value="hombre">Hombre</option>
      </select>
    </div>
    <div class="mb-3">
      <input type="number" class="form-control " placeholder="Matricula" min="000000002" max="300000000" id="matricula" />
    </div>
    <div class="mb-3">
     <input type="email" class="form-control" placeholder="Correo (correo@alumno.buap.mx)" value="<?php if( isset($_POST['correo_ins']) ) echo $_POST['correo_ins']; ?>" />
    </div>
    <div class="mb-3">
      <label>Tipo de usuario: </label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="conductorCheck">
        <label class="check-btn" for="flexCheckConductor">Conductor</label>
        <input class="form-check-input" type="checkbox" value="" id="pasajero">
        <label class="check-btn" for="flexCheckPasajero">Pasajero</label>
      </div>
    </div>


  <!-- -->
      <div class="contenedor-inputs form-group conductor" id="conductorDiv">
          <h4>Datos automóvil</h4>
          <div class="mb-3">
            <input type="text" class="form-control2" placeholder="Modelo">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control2" placeholder="Marca">
          </div>
          <div class="mb-3">
          <input type="text" class="form-control2" placeholder="Color">          
          </div>
          <div class="mb-3">
            <input type="number" class="form-control2" placeholder="Capacidad">        
          </div>
          <div class="mb-3">
            <input type="text" class="form-control2" placeholder="Antigüedad">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control2" placeholder="Número de placas">
          </div>

          <h5>Carga la documentación de tu vehículo</h5>
          <div class="mb-3">
            <label for="licenciaConducir">Licencia Conducir</label>
            <input type="file" id="licenciaConducir" form-control-file name="LicenciaConducir"
                  accept="image/png, .jpeg, .jpg, image/gif"> 
          </div>
         <div class="mb-3">
          <label for="seguroCobertura">Seguro cobertura</label>
          <input type="file" id="seguroCobertura" form-control-file name="SeguroCobertura"
                accept="image/png, .jpeg, .jpg, image/gif">
         </div>
         <div class="mb-3">
          <label for="tarjetaCirculacion">Tarjeta Circulacion</label>
          <input type="file" id="tarjetaCirculacion" form-control-file name="tarjetaCirculacion"
                accept="image/png, .jpeg, .jpg, image/gif"><br><br>
         </div>
      </div>
      <div class="contenedor-inputs form-group">
          <input type="submit" class="btn btn-primary" value="Registrarme"><br>
      </div>
    </form>
</main>
<!-- FORMULARIO REGISTO -->

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

