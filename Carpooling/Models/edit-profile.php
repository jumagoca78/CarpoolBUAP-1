<?php

    include_once 'user.php';
    include_once 'user_session.php';

    if(isset($_POST['perfil']) && isset($_POST['direccion']) && isset($_POST['telefono'])){
        $userSession = new UserSession();
        $user = new User();
        $user->setUser($userSession->getCurrentUser());
     
        $perfil     = $_POST['perfil'];
        $direccion  = $_POST['direccion'];
        $telefono   = $_POST['telefono'];
        $email      = $user->getEmail();

        $query = $user->connect()->prepare('UPDATE usuario SET telefono = :telefono, direccion = :direccion, perfil = :perfil WHERE  email = :email');
        $query->execute(['telefono' => $telefono, 'direccion' => $direccion, 'perfil' => $perfil, 'email' => $email]);

        echo "Edicion correcta";
    }