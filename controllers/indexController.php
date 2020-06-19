<?php

require 'models/Order.php';
require 'models/Product.php';
require 'models/User.php';
require 'models/Category.php';

$categories = getAllCategory();
$products = getAllProduct();

if (isset($_POST['disconnect'])){
    unset($_SESSION['user']);
}







require 'views/index.php';
