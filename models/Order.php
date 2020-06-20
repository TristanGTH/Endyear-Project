<?php



function getAllOrder($id){

    $db = dbConnect();

    $query = $db->prepare('SELECT id, product_id, product_price, SUM(product_quantity) AS total_quantity FROM orders WHERE user_id = ? GROUP BY product_id');
    $result = $query->execute([
        $id
    ]);

    $resultQuery = $query->fetchAll();

    return $resultQuery;

}

function addOrder($cart,$user){

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO orders (user_id , product_id , product_quantity , product_price) VALUES (?,?,?,?)');
    $result = $query->execute([
        $user['id'],
        $cart['productId'],
        $cart['quantity'],
        $cart['price'],

    ]);

    return $result;

}
