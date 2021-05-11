<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Carpool BUAP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href="../css/registroauto.css" rel="stylesheet">
</head>
<body>

<main class="bg-light text-center mx-auto">
    <form class="p-3" id="reg_frm">
        <div class="form-group">
        <h4>Datos automóvil</h4>
            <div class="mb-3">
                <input type="text" class="form-control2" placeholder="Modelo" id="modelo" name="modelo" />
            </div>
            <div class="mb-3">
                <input type="text" class="form-control2" placeholder="Marca" id="marca" name="marca" />
            </div>
            <div class="mb-3">
                <input type="text" class="form-control2 text" placeholder="Color" id="color" name="color" />
            </div>
            <div class="mb-3">
                <input type="number" class="form-control2" placeholder="Capacidad" id="capacidad" name="capacidad" />
            </div>
            <div class="mb-3">
                <input type="text" class="form-control2" placeholder="Antigüedad" id="antiguedad" name="antiguedad" />
            </div>
            <div class="mb-3">
                <input type="text" class="form-control2" placeholder="Número de placas" id="placa" name="placa" />
            </div>
            <h5>Carga la documentación de tu vehículo</h5>
            <div class="mb-3">
                <label for="licenciaConducir">Licencia Conducir</label>
                <input type="file" id="licenciaConducir" form-control-file name="licencia"
                       accept="image/png, .jpeg, .jpg, image/gif" />
            </div>
            <div class="mb-3">
                <label for="seguroCobertura">Seguro cobertura</label>
                <input type="file" id="seguroCobertura"  name="seguro" form-control-file
                       accept="image/png, .jpeg, .jpg, image/gif" />
            </div>
            <div class="mb-3">
                <label for="tarjetaCirculacion">Tarjeta Circulacion</label>
                <input type="file" id="tarjetaCirculacion" form-control-file name="tarjetaCirc"
                       accept="image/png, .jpeg, .jpg, image/gif" /><br><br>
            </div>
            <button id="btn_registrarAuto" class="btn btn-primary" type="button" id="btn_reg">Registrar Auto</button><br><br>
        </div>
    </form>
</main>

<!-- Navigation bar -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="fas fa-home fa-2x" href="seleccionarusuario.php"></a>
    <a class="fas fa-route fa-2x" href="inicio.php"></a>
    <a class="fas fa-user-alt fa-2x" href="profile.php"></a>
    <a class="fas fa-comment fa-2x" href="chat.php"></a>
</nav>

<script src="../js/registro_vehiculo.js"></script>
<script src="../js/sweetalert.js"></script>
<script src="../js/editar-perfil.js"></script>
</body>
</html>

