<?php


if (!isset($_SESSION['user'])){
    header('location: index.php?controller=login');
}

require 'models/Order.php';
require 'models/Product.php';
require 'models/User.php';
require 'models/Category.php';


if (isset($_POST['confirmOrder'])){
    foreach ($_SESSION['cart'] as $insertCart){
        $product = getProduct($insertCart['productId']);
        $resultSub = $product['quantity'] - $insertCart['quantity'];
        if ($resultSub >= 0){
            $result = addOrder($insertCart, $_SESSION['user']);

            if ($result){
                $update = updateQuantity($resultSub,$insertCart['productId']);
                $_SESSION['cart'] = [];
                header('location: index.php?controller=userInfo');
            }

        }
    }
}



require 'views/basket.php';

