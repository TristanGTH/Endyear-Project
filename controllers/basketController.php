<?php


if (!isset($_SESSION['user'])){
    header('location: index.php?controller=login');
}

require 'models/Order.php';
require 'models/Product.php';
require 'models/User.php';
require 'models/Category.php';


$orders = getOrder($_SESSION['user']['id']);

require 'views/basket.php';

