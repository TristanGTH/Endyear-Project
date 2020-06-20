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

    if($result) {

        $categoryId = $db->lastInsertId(); //retourne l'id de la dernière ligne insérée

        $allowed_extensions = array('jpg', 'png', 'jpeg', 'gif');
        $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        if (in_array($my_file_extension, $allowed_extensions)) {

            $new_file_name = $categoryId . '.' . $my_file_extension;
            $destination = '../assets/images/categories/' . $new_file_name;
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            //update du nom de l'image de l'enregistrement d'id
            $query = $db->query("UPDATE categories SET image = '$new_file_name' WHERE id = $categoryId");

        }
    }

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

    if(!empty($_FILES['image']['name'])){

        $query = $db->query("SELECT image FROM categories WHERE id = $id");
        $result = $query->fetch();
        $img_extention = pathinfo($result['image'], PATHINFO_EXTENSION);



        unlink('../assets/images/categories/'.$id.'.' . $img_extention);

        $categoryId = $id;

        $allowed_extensions = array('jpg', 'png', 'jpeg', 'gif');
        $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        if (in_array($my_file_extension, $allowed_extensions)) {

            $new_file_name = $categoryId . '.' . $my_file_extension;
            $destination = '../assets/images/categories/' . $new_file_name;
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            //update du nom de l'image de l'enregistrement d'id
            $query = $db->query("UPDATE categories SET image = '$new_file_name' WHERE id = $categoryId");
        }

    }

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

    $query = $db->query("SELECT image FROM categories WHERE id = $id");
    $result = $query->fetch();

    $img_extention = pathinfo($result['image'], PATHINFO_EXTENSION);
    unlink('../assets/images/categories/'.$id.'.' . $img_extention);

    $query = $db->prepare('DELETE FROM categories WHERE id=?');
    $result = $query->execute([
        $id
    ]);

    $queryProducts = $db->prepare('DELETE FROM products WHERE category_id= ?');
    $resultProduct = $queryProducts->execute([
        $id
    ]);


    return $result;

}