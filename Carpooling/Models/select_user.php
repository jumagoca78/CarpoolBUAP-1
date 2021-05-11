<?php
    
    include_once 'user.php';
    include_once 'user_session.php';

    $userSession = new UserSession();
    $user = new User();    
    $user->setUser($userSession->getCurrentUser());

    echo $user->getTipoUsuario();
