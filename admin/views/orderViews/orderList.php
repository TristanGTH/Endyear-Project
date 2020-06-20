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
                <h4>Liste des Commandes</h4>
            </header>



            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($orders as $order) : ?>
                    <?php $test = infoUser($order['user_id']); ?>
                    <tr>
                        <th><?= $order['id'] ?></th>
                        <td><?= $test['lastname'] ?></td>
                        <td><?= $test['firstname'] ?></td>
                        <td><?= $order['product_price'] * $order['product_quantity'] ?>€</td>
                        <td>
                            <a href="index.php?controller=orders&action=info&user_id=<?= $order['user_id'] ?>" class="btn btn-warning">Détails</a>
                        </td>
                    </tr>
                <?php endforeach; ?>



                </tbody>
            </table>

        </section>
    </div>

</div>
</body>
</html>