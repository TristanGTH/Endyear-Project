<?php


function getAllOrder(){
    $db = dbConnect();

    $query = $db->query('SELECT * FROM orders');
    $result = $query->fetchAll();

    return $result;
}

function getOrderByUser($id){
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM orders WHERE user_id = ?');
    $query->execute([
        $id
    ]);
    $result = $query->fetchAll();

    return $result;
}


function infoUser($id){

    $db = dbConnect();

    $query = $db->query("
        SELECT u.*
        FROM users u
        JOIN orders o
        ON u.id = o.user_id
        WHERE o.user_id = $id");

    $result = $query ->fetch();

    return $result;

}