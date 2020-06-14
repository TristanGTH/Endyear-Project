<?php



function getOrder($id){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM orders WHERE user_id = ?');
    $result = $query->execute([
        $id
    ]);

    $resultQuery = $query->fetchAll();

    return $resultQuery;

}
