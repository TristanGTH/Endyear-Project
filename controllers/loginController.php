<?php

if (isset($_SESSION['user'])){
    header('location: index.php?controller=userInfo');
}

require 'models/Order.php';
require 'models/Product.php';
require 'models/User.php';
require 'models/Category.php';


if (isset($_POST['connect'])){

    if (!empty($_POST['email']) AND !empty($_POST['password'])){

        $user = connectUser($_POST['email'],$_POST['password']);

        if ($user){
            $_SESSION['user'] = $user;
            $_SESSION['cart'] = [];
            header("location: index.php?controller=userInfo");
        }

        else{
            $answer = 'Email ou Mot de passe incorrect!';
        }

    }

    else{
        $answer = 'Email et Mot de passe OBLIGATOIRE!';
    }
}






require 'views/login.php';
