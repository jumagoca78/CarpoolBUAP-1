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
            <h3>Datos automóvil</h3>
            <div class="mb-3">
                <input type="text" class="form-control2" placeholder="Modelo">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control2" placeholder="Marca">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control2 text" placeholder="Color">
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

            <h4>Carga la documentación de tu vehículo</h4>
            <div class="mb-3">
                <label for="licenciaConducir">Licencia Conducir</label>
                <input type="file" id="licenciaConducir" form-control name="LicenciaConducir"
                       accept="image/png, .jpeg, .jpg, image/gif">
            </div>
            <div class="mb-3">
                <label for="seguroCobertura">Seguro cobertura</label>
                <input type="file" id="seguroCobertura" form-control name="SeguroCobertura"
                       accept="image/png, .jpeg, .jpg, image/gif">
            </div>
            <div class="mb-3">
                <label for="tarjetaCirculacion">Tarjeta Circulacion</label>
                <input type="file" id="tarjetaCirculacion" form-control name="tarjetaCirculacion"
                       accept="image/png, .jpeg, .jpg, image/gif"><br><br>
            </div>
            <button class="btn btn-primary" type="submit" id="btn_reg">Registrar Auto</button><br><br>
        </div>
    </form>
</main>

<!-- Navigation bar -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="fas fa-home fa-2x" href="inicio.php"></a>
    <a class="fas fa-user-alt fa-2x" href="profile.php"></a>
    <a class="fas fa-exchange-alt fa-2x" href="seleccionarusuario.php"></a>
</nav>

<script src="../js/registro.js"></script>

</body>
</html>

