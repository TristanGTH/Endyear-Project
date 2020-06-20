<?php

require 'models/User.php';
require 'models/Category.php';
require 'models/Product.php';
require 'models/Order.php';


if (isset($_GET['action'])) {

    switch ($_GET['action']) {

        case 'list':
            $orders = getAllOrder();
            require 'views/orderViews/orderList.php';
            break;

        case 'info':
            $orders = getOrderByUser($_GET['user_id']);
            $user = infoUser($_GET['user_id']);
            require 'views/orderViews/orderInfo.php';
            break;

        default:
            header('location: index.php');
    }

}
else{

    header('location: index.php');

}
