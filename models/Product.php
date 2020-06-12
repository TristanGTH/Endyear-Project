<?php


function getAllProduct(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $result = $query->fetchAll();

    return $result;

}
