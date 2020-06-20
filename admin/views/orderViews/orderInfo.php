<!DOCTYPE html>
<html>
<head>

    <title>Administration - Mon premier e-commerce !</title>

</head>
<body class="index-body">
<div class="container-fluid">

    <?php require 'assets/partials/header.php' ?>

    <div class="row my-3 index-content">

        <?php require 'assets/partials/nav.php' ?>

        <section class="col-9">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Commande de <?= $user['firstname'] ?> <?= $user['lastname'] ?></h4>
                <h4> Adresse : <?= $user['adress'] ?> </h4>
            </header>



            <table class="table table-striped">
                <thead>


                <tr>
                    <th>#</th>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                <?php $resultMulti = 0 ?>
                <?php foreach ($orders as $order) : ?>
                    <?php $product= getProduct($order['product_id']) ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $order['product_quantity'] ?></td>
                        <td><?= $order['product_price'] ?></td>
                        <td><?= $order['product_price'] * $order['product_quantity'] ?>
                            <?php $resultMulti = $resultMulti + $order['product_quantity'] * $order['product_price'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td></td>
                    <th>Total des Commandes</th>
                    <td></td>
                    <td></td>
                    <td><?= $resultMulti ?></td>

                </tr>

                </tbody>
            </table>
        </section>
    </div>
</div>
</body>
