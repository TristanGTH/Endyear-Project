<?php

if (!isset($_SESSION['user'])){
    header('location: pasCo.php');
}

require 'models/Order.php';
require 'models/Product.php';

$orders = getOrder($_SESSION['user']['id']);






require 'views/userInfo.php';
