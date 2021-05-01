<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Mi Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="../css/medals.css">
</head>
<body>

<section class="bg-light align-items-center">
    <div class="container">
        <div class="card-box text-center">
            <a class="fas fa-user-alt fa-3x" style="padding-right: 5rem" href="profile.php"></a>
            <a class="fas fa-medal fa-3x" href="medals.php"></a>
            <br>
            <a style="padding-right: 4.2rem">Mi Perfil</a>
            <u >Medallas</u>
        </div>
        <div class="text-left card-box">
            <div class="member-card pt-2 pb-2">
                <div class="thumb-lg member-thumb mx-auto"><img src="../img/userejemplo.jpeg"
                                                                class="rounded-circle img-thumbnail"
                                                                alt="profile-image"></div>
                <div class="">
                    <h3>María Limón García</h3>
                    <p class="text-muted">Calificación <span>: </span><span><a class="fas fa-star"></a><a
                                class="fas fa-star"></a><a class="fas fa-star"></a><a
                                class="fas fa-star"></a></span></p>
                </div>
                <br>
                <div class="d-flex">
                    <img src="../img/trofeo.png" class="img-medals"><br>
                    <span>
                        <h5>Conductor Del Mes</h5>
                        <p>Fuiste el conductor mejor calificado en la plataforma del mes de Octubre 2021.</p>
                    </span>
                </div>
                <div class="d-flex">
                    <img src="../img/medalla1.png" class="img-medals"><br>
                    <span>
                        <h5>Puntualidad Primero</h5>
                        <p>Fuiste el conductor mejor calificado en puntualidad en la plataforma por una semana.</p>
                    </span>
                </div>
                <div class="d-flex">
                    <img src="../img/medalla2.png" class="img-medals"><br>
                    <span>
                        <h5>Segunda Liebre</h5>
                        <p>Fuiste el segundo conductor mejor calificado en puntualidad en la plataforma por una semana.</p>
                    </span>
                </div>
                <br><br><br>
            </div>
        </div>
</section>

<!-- Navigation bar -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="fas fa-home fa-2x" href="inicio.php"></a>
    <a class="fas fa-user-alt fa-2x" href="profile.php"></a>
    <a class="fas fa-exchange-alt fa-2x" href="seleccionarusuario.php"></a>
</nav>

</body>
</html>