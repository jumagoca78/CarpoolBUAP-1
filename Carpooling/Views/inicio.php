<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CarPool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="../css/stylee.css">
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?key=AIzaSyA8guSzlqe3zETz6EOLj1SysmfoOqOKLO4&languague=es"></script>
</head>

<body>

<main class="bg-light text-center">
    <h2>Bienvenido a Carpool BUAP</h2>
    <h3>¿Listo para compartir tu primer viaje?</h3>
</main>
<br>
<section class="bg-light text-center">
    <div class="container">
        <div class="mx-auto">
            <div id="map">
            </div>
        </div>
    </div>
    <br>
</section>


<!-- Navigation bar -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="fas fa-home fa-2x" href="inicio.php"></a>
    <a class="fas fa-user-alt fa-2x" href="profile.php"></a>
    <a class="fas fa-exchange-alt fa-2x" href="seleccionarusuario.php"></a>
</nav>

<script>
    window.onload = function () {
        var puebla = new google.maps.LatLng(19.001733, -98.201101);
        var mapOptions = {
            center: puebla,
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
    }
</script>

</body>
</html>