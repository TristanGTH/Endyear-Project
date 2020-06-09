<?php


function getAllOrder(){
    $db = dbConnect();

    $query = $db->query('SELECT * FROM orders');
    $result = $query->fetchAll();

    return $result;
}


function test($id){

    $db = dbConnect();

    $query = $db->query("
        SELECT u.firstname, u.lastname
        FROM users u
        JOIN orders o
        ON u.id = o.user_id
        WHERE o.user_id = $id");

    $result = $query ->fetch();

    return $result;

}