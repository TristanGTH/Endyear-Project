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

    $query = $db->prepare('INSERT INTO users (firstname , lastname , email , password , is_admin) VALUES (?,?,?,?,0)');
    $result = $query->execute([
        $info['firstname'],
        $info['lastname'],
        $info['email'],
        md5($info['password']),
    ]);

    return $result;

}

function checkMail($info){
        $db = dbConnect();

        $query = $db ->prepare('SELECT * FROM users WHERE email = ?');
        $result = $query->execute([
            $info['email']
        ]);

        return $result;
    }
