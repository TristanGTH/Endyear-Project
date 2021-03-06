<?php

require 'models/User.php';
require 'models/Category.php';
require 'models/Product.php';
require 'models/Order.php';


if (isset($_GET['action'])){

    switch ($_GET['action']){

        case 'list':
            $users = getAllUser();
            require 'views/userViews/userList.php';
            break;

        case 'new':
            require 'views/userViews/userForm.php';
            break;

        case 'add':

            if (empty($_POST['firstname']) OR empty($_POST['lastname']) OR empty($_POST['email']) OR empty($_POST['password'])){
                $answer = 'Les champs Nom, Prénom, Email et mot de passe sont obligatoire!';
                require 'views/UserViews/UserForm.php';
                break;
            }
            else{
                $info = $_POST;
                $users = getAllUser();
                $checkMail = false;

                foreach ($users as $user){
                    if ($user['email'] == $info['email']){
                        $checkMail = true;
                        break;
                    }
                }

                if ($checkMail == false){
                    $result = addUser($info);
                    header('location: index.php?controller=users&action=list');

                }
                else{
                    echo $checkMail;
                }
            }

        case 'edit':
            if (!empty($_POST)){

                if (empty($_POST['firstname']) OR empty($_POST['lastname']) OR empty($_POST['email']) OR empty($_POST['password'])){
                    $answer = 'Les champs Nom, Prénom, Email et mot de passe sont obligatoire!';
                    require 'views/userViews/userForm.php';                    exit;
                }
                else{

                    $result = updateUser($_GET['id'], $_POST);

                    header('location: index.php?controller=users&action=list');
                    exit;
                }

            }
            else{

                $user = getUser($_GET['id']);

                require 'views/userViews/userForm.php';
            }
            exit;

        case 'delete':

            $result = deleteUser($_GET['id']);

            header('location: index.php?controller=users&action=list');

            break;

        default:
            header('location: index.php');

    }
}
else{
    header('location: index.php');
}


