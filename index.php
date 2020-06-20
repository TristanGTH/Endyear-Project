<?php

require 'helpers.php';
session_start();




if (isset($_GET['controller'])){


    switch ($_GET['controller']){

        case 'products':
            require 'assets/headAssets/headAssets.html';
            require 'controllers/productController.php';
            break;

        case 'login' :
            require 'controllers/loginController.php';
            require 'assets/headAssets/headAssets.html';
            break;


        case 'userInfo' :
            require 'controllers/userInfoController.php';
            require 'assets/headAssets/headAssets.html';
            break;

        case 'register' :
            require 'controllers/registerController.php';
            require 'assets/headAssets/headAssets.html';
            break;

        case 'basket' :
            require 'controllers/basketController.php';
            require 'assets/headAssets/headAssets.html';
            break;

        case 'legalNotice':
            require 'controllers/legalNoticeController.php';
            require 'assets/headAssets/headAssets.html';
            break;

        case 'contact':
            require 'controllers/contactController.php';
            require 'assets/headAssets/headAssets.html';
            break;

        case 'ajax':
            require 'controllers/ajaxController.php';
            break;


        default:
            require 'controllers/indexController.php';
            require 'assets/headAssets/headAssets.html';
            break;


    }

}

else{
    require 'controllers/indexController.php';
    require 'assets/headAssets/headAssets.html';
}
