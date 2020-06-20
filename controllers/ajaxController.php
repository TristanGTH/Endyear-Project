<?php


if ($_SERVER['REQUEST_METHOD'] !== 'GET') {

    $db = dbConnect();
    $encodedData = file_get_contents("php://input");
    $data = json_decode($encodedData, true);
    $data['quantity'] = 1;
    $checkCart = false;

    foreach ($_SESSION['cart'] as $cart){
        if ($data['productId'] == $cart['productId']){
            $checkCart = true;
            $_SESSION['cart'][$cart['productId']]['quantity']++;
        }
    }

    if (!$checkCart){
        $_SESSION['cart'][$data['productId']] = $data;
    }



}