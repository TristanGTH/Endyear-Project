<?php

require 'models/Category.php';
require 'models/Product.php';
require 'assets/headAssets/headAssets.html';

$categories = getAllCategory();
$products = getAllProduct();







require 'views/index.php';
