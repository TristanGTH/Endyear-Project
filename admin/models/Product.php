<?php



function getAllProduct(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $result = $query->fetchAll();

    return $result;

}

function addProduct($info){

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO products (name , summary , price , quantity , main_image, category_id, is_online) VALUES (?,?,?,?,?,?,?)');
    $result = $query->execute([
        $info['name'],
        $info['summary'],
        $info['price'],
        $info['quantity'],
        $info['image'],
        $info['category'],
        $info['is_online']
    ]);

    if($result) {

        $artistId = $db->lastInsertId(); //retourne l'id de la dernière ligne insérée

        $allowed_extensions = array('jpg', 'png', 'jpeg', 'gif');
        $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        if (in_array($my_file_extension, $allowed_extensions)) {

            $new_file_name = $artistId . '.' . $my_file_extension;
            $destination = '../assets/images/products/' . $new_file_name;
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            //update du nom de l'image de l'enregistrement d'id
            $query = $db->query("UPDATE products SET main_image = '$new_file_name' WHERE id = $artistId");

        }
    }

    return $result;

}

function getProduct($id){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM products WHERE id = ?');
    $result = $query->execute([
        $id
    ]);

    $resultQuery = $query->fetch();

    return $resultQuery;

}

function updateProduct($id, $info){

    $db = dbConnect();

    if(!empty($_FILES['image']['name'])){

        $query = $db->query("SELECT main_image FROM products WHERE id = $id");
        $result = $query->fetch();
        $img_extention = pathinfo($result['main_image'], PATHINFO_EXTENSION);



        unlink('../assets/images/products/'.$id.'.' . $img_extention);

        $artistId = $id;

        $allowed_extensions = array('jpg', 'png', 'jpeg', 'gif');
        $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        if (in_array($my_file_extension, $allowed_extensions)) {

            $new_file_name = $artistId . '.' . $my_file_extension;
            $destination = '../assets/images/products/' . $new_file_name;
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            //update du nom de l'image de l'enregistrement d'id
            $query = $db->query("UPDATE products SET main_image = '$new_file_name' WHERE id = $artistId");
        }

    }

    $query = $db ->prepare('UPDATE products SET name = ?, summary = ?, price = ?, quantity = ?, category_id = ?, is_online = ? WHERE id = ?');
    $result = $query->execute([
        $info['name'],
        $info['summary'],
        $info['price'],
        $info['quantity'],
        $info['category'],
        $info['is_online'],
        $id
    ]);
    return $result;

}

function deleteProduct($id){

    $db = dbConnect();

    $query = $db->query("SELECT main_image FROM products WHERE id = $id");
    $result = $query->fetch();

    $img_extention = pathinfo($result['main_image'], PATHINFO_EXTENSION);
    unlink('../assets/images/products/'.$id.'.' . $img_extention);

    $query = $db->prepare('DELETE FROM products WHERE id=?');
    $result = $query->execute([
        $id
    ]);

    return $result;

}