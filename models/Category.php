<?php


function getAllCategory(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $result = $query->fetchAll();

    return $result;
}

function getCategory($id){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM categories WHERE id = ?');
    $result = $query->execute([
        $id
    ]);

    $resultQuery = $query->fetch();

    return $resultQuery;

}