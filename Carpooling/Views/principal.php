<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8"/>
    <title>Carpool BUAP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CDN CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- OWN CSS -->
    <link href="css/principal.css" rel="stylesheet">
    
</head>
<body>

<!-- Navigation bar -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Carpool BUAP</a>
        <a id="btn-abrir-popup" class="btn btn-primary btn-abrir-popup">Iniciar Sesión</a>
    </div>
</nav>

<!-- Image overlay -->
<header class="masthead text-black text-center">
    <div class="overlay"></div>
</header>
<br>

<!-- Information text -->
<section class="bg-light text-center">
    <div class="container">
        <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
            <h3>¿Qué es el Carpooling?</h3>
            <p class="lead mb-0">El carpooling es el uso compartido de un automóvil privado para trasladarse
                en un mismo viaje, con un conductor y uno o más pasajeros en horarios y rutas comunes establecidas
                por ambos sujetos con distintas modalidades para acordar el viaje.
            </p>
        </div>
    </div>
    <br>
</section>

<!-- Information Grid -->
<section class="bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <h3>Ayuda a la comunidad</h3>
                    <p class="lead mb-0">Reducir tiempo y costo de traslado de una comunidad universitaria cerrada.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <h3>Disminuir la contaminación</h3>
                    <p class="lead mb-0">Reducir gases de efecto invernadero generados por el uso del automóvil.​
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto mb-lg-0 mb-lg-3">
                    <h3>Convivencia</h3>
                    <p class="lead mb-0">Promover la convivencia entre los diferentes miembros de la comunidad.​</p>
                </div>
            </div>
        </div>
    </div>
    <br>
</section>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="Views/registro.php" onsubmit="return verify();" method="post">
                <div class="form-row">
                    <div class="col-12 col-md-9 mb-2 mb-md-0">
                        <input type="email" class="form-control form-control-lg"
                               placeholder="Introduce tu correo institucional..." id="reg_correoIns" name="correo_ins" / >
                    </div>
                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">¡Regístrate!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
</section>

<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>Iniciar Sesión</h3>
        <h4>Recuerda que debes usar tus credenciales universitarias.</h4>
        <form action="Views/inicio.php">
            <div class="contenedor-inputs">
                <input type="email" placeholder="Correo Institucional" />
                <input type="password" placeholder="Contraseña" />
            </div>
            <input type="submit" class="btn-submit" value="Iniciar Sesión">
        </form>
    </div>
</div>

<!-- CDN SCRIPTS --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- OWN SCRIPTS -->
<script src="js/popup.js"></script>
<script src="js/validate-email.js"></script>
<script src="js/sweetalert.js"></script>
    
</body>
</html>
