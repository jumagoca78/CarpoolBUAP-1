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
    <link rel="stylesheet" href="../css/profile-edit.css">
</head>
<body>

<section class="bg-light align-items-center">
    <div class="container">

        <div class="text-left card-box">
            <div class="member-card pt-2 pb-2">
                <div class="thumb-lg member-thumb mx-auto"><img src="../img/userejemplo.jpeg"
                                                                class="rounded-circle img-thumbnail"
                                                                alt="profile-image"></div>
                <div class="">
                    <h3 id="nombre"><?php echo $user->getNombre() ?></h3>
                    <p class="text-muted">Calificación <span>: </span><span><a class="fas fa-star"></a><a
                                    class="fas fa-star"></a><a class="fas fa-star"></a><a
                                    class="fas fa-star"></a></span></p>
                </div>
                <div class="mt-4">
                    <h5>Acerca de mi: </h5>
                    <textarea id="perfil" class="form-control overflow-hidden border-white bio"
                              rows="9" dir="ltr" maxlength="250"
                              placeholder="Escribe datos interesantes o relevantes."><?php echo $user->getPerfil()?>
                    </textarea>
                </div>
                <div class="mt-4">
                    <h5>Formación: </h5>
                    <p id="formacion"><?php echo $user->getFormacion() ?></p>
                </div>
                <div class="mt-4">
                    <h5>Unidad Academica: </h5>
                    <p id="unidadAcademica"><?php echo $user->getUnidadAcademica()?></p>
                </div>
                <div class="mt-4">
                    <h5>Correo: </h5>
                    <p id="correo"><?php echo $user->getEmail()?></p>
                </div>
                <div class="mt-4">
                    <h5>Dirección: </h5>
                    <input id="direccion" type="text" class="form-control text" placeholder="Dirección" id="address" name="address" value="<?php echo $user->getDireccion()?>">
                </div>
                <div class="mt-4">
                    <h5>Teléfono: </h5>
                    <input id="telefono" type="number" class="form-control" placeholder="Número de teléfono" id="phone" name="phone" value="<?php echo $user->getTelefono()?>" />
                </div>
                <div class="text-center">
                    <a id="btn-cancel" class="btn btn-secondary mt-3 btn-rounded" href="profile.php">
                        Cancelar
                    </a>
                    <a id="btn-save" class="btn btn-primary mt-3 btn-rounded" href="">
                        Guardar
                    </a>
                    <br><br>
                </div>
            </div>
        </div>
</section>

<!-- Navigation bar -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="fas fa-home fa-2x" href="seleccionarusuario.php"></a>
    <a class="fas fa-route fa-2x" href="inicio.php"></a>
    <a class="fas fa-user-alt fa-2x" href="profile.php"></a>
    <a class="fas fa-comment fa-2x" href="chat.php"></a>
</nav>
<script src="../js/editar-perfil.js"></script>


</body>
</html>