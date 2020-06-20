<?php

require 'models/User.php';
require 'models/Category.php';
require 'models/Product.php';
require 'models/Order.php';



if (isset($_GET['action'])) {

    switch ($_GET['action']) {

        case 'list':
            $products = getAllProduct() ;
            require 'views/productViews/productList.php';
            break;

        case 'new':
            $categories = getAllCategory();
            require 'views/productViews/productForm.php';
            break;
        case 'add':

            if (empty($_POST['name']) OR empty($_POST['summary']) OR empty($_POST['price']) OR empty($_POST['quantity'])){
                header('location: erreurTest.php');
            }
            else {
                $info = $_POST;
                $result = addProduct($info);
                header('location: index.php?controller=products&action=list');
            }
            break;

        case 'edit':
            if (!empty($_POST)) {

                if (empty($_POST['name']) OR empty($_POST['summary']) OR empty($_POST['price']) OR empty($_POST['quantity'])){
                    header('location: erreur1.php');
                    exit;
                } else {

                    $result = updateProduct($_GET['id'], $_POST);


                    header('location: index.php?controller=products&action=list');
                    exit;
                }

            }
            else {
                $categories = getAllCategory();
                $product = getProduct($_GET['id']);

                require 'views/productViews/productForm.php';
            }
            exit;

        case 'delete':

            $result = deleteProduct($_GET['id']);

            header('location: index.php?controller=products&action=list');
            break;

        default:
            header('location: index.php');
    }


}
else{
    header('location: index.php');
}
