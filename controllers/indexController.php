<?php

require 'models/Category.php';
require 'models/Product.php';

$categories = getAllCategory();
$products = getAllProduct();







require 'views/index.php';
