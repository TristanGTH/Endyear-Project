<?php


function getAllCategory(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $result = $query->fetchAll();

    return $result;
}