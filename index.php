<?php

require 'helpers.php';
require 'assets/headAssets/headAssets.html';
session_start();
$_SESSION['cart'] = [];



if (isset($_GET['controller'])){


    switch ($_GET['controller']){


        case 'users':
            require 'controllers/userController.php';
            break;

        case 'products':
            require 'controllers/productController.php';
            break;

        case 'login' :
            require 'controllers/loginController.php';
            break;


        case 'userInfo' :
            require 'controllers/userInfoController.php';
            break;

        case 'register' :
            require 'controllers/registerController.php';
            break;

        case 'basket' :
            require 'controllers/basketController.php';
            break;


        default:
            require 'controllers/indexController.php';
            break;


    }

}

else{
    require 'controllers/indexController.php';
}
