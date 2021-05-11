<?php  
    include_once '../Models/user.php';
    include_once '../Models/user_session.php';
    require_once "../Controllers/main-controller.php"; // The controller that opens the main view is included.

    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['email'])){
        //echo "hay sesion"
        $user->setUser($userSession->getCurrentUser());
    
    }else{
        header('Location: ../index.php');
        exit;
    }
?>

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

    <link href="../css/seleccionarusuario.css" rel="stylesheet">
</head>
<body>

<main class="container-lg text-align-center mt-5">
    <h1 class="mt-1 text-center">Bienvenido <?php echo $user->getNombre() ?></h1><br>
    <div class="row">
        <div class="mx-auto m-5 text-center">
            <div class="col">
                <a class="btn btn-primary btn-lg btn-block" href="inicio.php">Pasajero</a>
                <p class="fs-6 fw-lighter">¡Comparte tu viaje!</p>
                <img src="../img/pasajero.png" class="icon">
            </div><br>
            <div class="col">
                <a class="btn btn-primary btn-lg btn-block" href="inicio.php">Conductor</a>
                <p class="fs-6 fw-lighter">¡Busca un conductor!</p>
                <img src="../img/coche.png" class="icon">
            </div>
        </div>
    </div><br><br>
    <!-- CERRAR SESION-->
    <div class="text-center">
        <a class="btn btn-primary btn-danger btn-lg text-center" href="../Models/logout.php">Cerrar Sesión</a>
    </div>
</main>

<!-- Navigation bar -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="fas fa-home fa-2x" href="seleccionarusuario.php"></a>
    <a class="fas fa-route fa-2x" href="inicio.php"></a>
    <a class="fas fa-user-alt fa-2x" href="profile.php"></a>
    <a class="fas fa-comment fa-2x" href="chat.php"></a>
</nav>

</body>
</html>

