<?php



if (isset($_SESSION['user'])){
    header('location: index.php?controller=userInfo');
}

require 'models/Order.php';
require 'models/Product.php';
require 'models/User.php';
require 'models/Category.php';



if (isset($_POST['register'])){
    if (empty($_POST['firstname']) OR empty($_POST['lastname']) OR empty($_POST['email']) OR empty($_POST['adress']) OR empty($_POST['password'])){
        $answer = 'Tous les champs sont obligatoire!';
    }
    else{
        if (!checkMail($_POST)){
            $result = addUser($_POST);
            $user = connectUser($_POST['email'],$_POST['password']);
            $_SESSION['user'] = $user;

            header('location: index.php?controller=userInfo');
        }
        else{
            $answer = 'Email déja utilisé!';
        }
    }
}





require 'views/register.php';
