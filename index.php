<?php

require 'helpers.php';
require 'assets/headAssets/headAssets.html';



if (isset($_GET['controller'])){


    switch ($_GET['controller']){


        case 'users':
            require 'controllers/userController.php';
            break;

        case 'products':
            require 'controllers/productController.php';
            break;

        case 'orders' :
            require 'controllers/orderController.php';
            break;


        default:
            require 'controllers/indexController.php';


    }

}

else{
    require 'controllers/indexController.php';
}
