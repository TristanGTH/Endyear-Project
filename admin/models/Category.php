<?php

function getAllCategory(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $result = $query->fetchAll();

    return $result;
}


function addCategory($info){

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO categories (name, description) VALUES (?,?)');
    $result = $query->execute([
        $info['name'],
        $info['description'],
    ]);

    return $result;

}

function updateCategory($id, $info){

    $db = dbConnect();

    $query = $db ->prepare('UPDATE categories SET name = ?, description = ? WHERE id = ?');
    $result = $query->execute([
        $info['name'],
        $info['description'],
        $id
    ]);
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

function deleteCategory($id){

    $db = dbConnect();

    $query = $db->prepare('DELETE FROM categories WHERE id=?');
    $result = $query->execute([
        $id
    ]);

    return $result;

}