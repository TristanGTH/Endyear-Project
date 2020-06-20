<?php

function getAllUser(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM users');
    $result = $query->fetchAll();

    return $result;

}


function addUser($info){

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO users (firstname , lastname , email , adress , password , is_admin) VALUES (?,?,?,?,?,?)');
    $result = $query->execute([
        $info['firstname'],
        $info['lastname'],
        $info['email'],
        $info['adress'],
        md5($info['password']),
        $info['is_admin']
    ]);

    return $result;

}

function getUser($id){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $result = $query->execute([
        $id
    ]);

    $resultQuery = $query->fetch();

    return $resultQuery;

}

function updateUser($id, $info){

    $db = dbConnect();

    $query = $db ->prepare('UPDATE users SET firstname = ?, lastname = ?, email = ?, adress = ?, password = ?, is_admin = ? WHERE id = ?');
    $result = $query->execute([
        $info['firstname'],
        $info['lastname'],
        $info['email'],
        $info['adress'],
        md5($info['password']),
        $info['is_admin'],
        $id
    ]);
    return $result;

}

function deleteUser($id){

    $db = dbConnect();

    $query = $db->prepare('DELETE FROM users WHERE id=?');
    $result = $query->execute([
        $id
    ]);

    return $result;

}
