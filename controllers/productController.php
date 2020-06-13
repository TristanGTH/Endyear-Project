<?php

require 'models/Product.php';
require 'models/Category.php';


if (isset($_GET['action'])) {

    switch ($_GET['action']) {

        case 'list':

            if (isset($_GET['category_id'])){
                $category = getCategory($_GET['category_id']);
                $products = getProductByCategory($_GET['category_id']);

            }
            else{
                $products = getAllProduct();
            }
            $count = sizeof($products);


            require 'views/productList.php';



        case 'info':

            require 'views/productInfo.php';

    }


}




