<?php

if (isset($_POST['disconnect'])){
    unset($_SESSION['user']);
}


if (!isset($_SESSION['user'])){
    header('location: index.php?controller=login');
}

require 'models/Order.php';
require 'models/Product.php';
require 'models/User.php';
require 'models/Category.php';

$orders = getOrder($_SESSION['user']['id']);



if (isset($_POST['update'])){

    $result = updateUser($_SESSION['user']['id'],$_POST);

    if ($result){
        $_SESSION['user'] = getUser($_SESSION['user']['id']);
    }

}


require 'views/userInfo.php';
