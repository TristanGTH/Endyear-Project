<?php

require 'models/User.php';
require 'models/Category.php';
require 'models/Product.php';
require 'models/Order.php';



if (isset($_GET['action'])) {

    switch ($_GET['action']) {

        case 'list':
            $categories = getAllCategory();
            require 'views/categoryViews/categoryList.php';
            break;

        case 'new':
            require 'views/categoryViews/categoryForm.php';
            break;
        case 'add':

            if (empty($_POST['name'])){
                header('location: erreurTest.php');
            }
            else {
                $info = $_POST;
                $result = addCategory($info);
                header('location: index.php?controller=categories&action=list');
            }
            break;

        case 'edit':
            if (!empty($_POST)) {

                if (empty($_POST['name'])){
                    header('location: erreur1.php');
                    exit;
                } else {

                    $result = updateCategory($_GET['id'], $_POST);

                    header('location: index.php?controller=categories&action=list');
                    exit;
                }

            }
            else {

                $category = getCategory($_GET['id']);

                require 'views/categoryViews/categoryForm.php';
            }
            exit;

        case 'delete':

            $result = deleteCategory($_GET['id']);

            header('location: index.php?controller=categories&action=list');
            break;
    }


}


