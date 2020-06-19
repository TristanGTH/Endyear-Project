<?php

require 'models/Category.php';
require 'models/Product.php';

$categories = getAllCategory();
$products = getAllProduct();

if (isset($_POST['disconnect'])){
    unset($_SESSION['user']);
}







require 'views/index.php';
