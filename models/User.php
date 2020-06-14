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
