<?php

if (isset($_SESSION['user'])){
    header('location: index.php?controller=userInfo');
}

require 'models/User.php';

if (!empty($_POST['email']) AND !empty($_POST['password'])){

    $user = connectUser($_POST['email'],$_POST['password']);

    if ($user){
        $_SESSION['user'] = $user;
        header("location: index.php?controller=userInfo");
    }

    else{
        $errorMessage = 'Email ou Mot de passe incorrect';
    }

}

else{
    $errorMessage = 'Email et Mot de passe OBLIGATOIRE';
}




require 'views/login.php';
