<?php


function getAllProduct(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $result = $query->fetchAll();

    return $result;

}


function getProductByCategory($id){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM products WHERE category_id = ?');
    $result = $query->execute([
        $id
    ]);

    $resultQuery = $query->fetchAll();

    return $resultQuery;

}
