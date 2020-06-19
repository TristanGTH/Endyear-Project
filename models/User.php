<?php

function connectUser($email,$password){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
    $result = $query->execute([
        $email,
        md5($password),
    ]);

    $resultQuery = $query->fetch();

    return $resultQuery;

}

function addUser($info){

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO users (firstname , lastname , email , adress , password , is_admin) VALUES (?,?,?,?,?,0)');
    $result = $query->execute([
        $info['firstname'],
        $info['lastname'],
        $info['email'],
        $info['adress'],
        md5($info['password']),
    ]);

    return $result;

}

function checkMail($info){

    $db = dbConnect();


    $query = $db ->prepare('SELECT * FROM users WHERE email = ?');
    $query->execute([
        $info['email']
    ]);


    return $query->fetch();
}


function updateUser($id, $info){

    $db = dbConnect();

    $query = $db ->prepare('UPDATE users SET firstname = ?, lastname = ?, email = ?, adress = ? WHERE id = ?');
    $result = $query->execute([
        $info['firstname'],
        $info['lastname'],
        $info['email'],
        $info['adress'],
        $id
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