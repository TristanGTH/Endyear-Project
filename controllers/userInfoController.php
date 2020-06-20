<?php

if (isset($_POST['disconnect'])){
    unset($_SESSION['user']);
    unset($_SESSION['cart']);
}


if (!isset($_SESSION['user'])){
    header('location: index.php?controller=login');
}

require 'models/Order.php';
require 'models/Product.php';
require 'models/User.php';
require 'models/Category.php';

$orders = getAllOrder($_SESSION['user']['id']);



if (isset($_POST['update'])){

    if (!empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['email']) AND !empty($_POST['adress'])){
        $result = updateUser($_SESSION['user']['id'],$_POST);

        if ($result){
            $_SESSION['user'] = getUser($_SESSION['user']['id']);
            $answer = 'Informations mise à jour avec succès!';
        }
    }
    else{
        $answer = 'Tous les champs sont obligatoire!';
    }
}


require 'views/userInfo.php';
