<?php
    
    include_once 'user.php';
    include_once 'user_session.php';

    $userSession = new UserSession();

    if(isset($_POST['email']) && isset($_POST['password'])){
        
        $userForm = $_POST['email'];
        $passForm = $_POST['password'];

        $user = new User();
        if($user->userExists($userForm, $passForm)){
            //echo "Existe el usuario";
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);

            echo $userSession->getCurrentUser();
        }else{
            //echo "No existe el usuario";
            $errorLogin = "Nombre de usuario y/o password incorrecto";
            echo false;
            //include_once 'vistas/login.php';
        }
    }
?>