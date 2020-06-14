<?php

require 'models/User.php';

if (!empty($_POST['email']) AND !empty($_POST['password'])){

    $user = connectUser($_POST['email'],$_POST['password']);

    if ($user){
        session_start();
        $_SESSION['user'] = $user;
    }

    else{
        $errorMessage = 'Email ou Mot de passe incorrect';
    }

}

else{
    $errorMessage = 'Email et Mot de passe OBLIGATOIRE';
}




require 'views/login.php';
