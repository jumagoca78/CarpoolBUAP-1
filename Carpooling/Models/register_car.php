<?php

    include_once 'user.php';
    include_once 'user_session.php';

    $userSession = new UserSession();
    $user = new User();
    $user->setUser($userSession->getCurrentUser());

    $modelo     = $_POST['modelo'];
    $marca      = $_POST['marca'];
    $color      = $_POST['color'];
    $antiguedad = $_POST['antiguedad'];
    $capacidad  = $_POST['capacidad'];
    $placa      = $_POST['placa'];

    /* PARTE DE USUARIO */
    $tipo       = 'A';
    $email      = $user->getEmail();

    $query = $user->connect()->prepare('UPDATE usuario SET tipo = :tipo WHERE  email = :email');
    $query->execute(['tipo' => $tipo, 'email' => $email]);
