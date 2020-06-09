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
                <h4>Liste des produits</h4>
                <a class="btn btn-primary" href="index.php?controller=products&action=new">Ajouter un produit</a>
            </header>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($products as $product) : ?>
                    <?php $category = getCategory($product['category_id']) ?>
                    <tr>
                        <th><?= $product['id'] ?></th>
                        <td><?= $product['name'] ?></td>
                        <td><?= $category['name'] ?></td>

                        <td>
                            <a href="index.php?controller=products&action=edit&id=<?= $product['id'] ?>" class="btn btn-warning">Modifier</a>
                            <a onclick="return confirm('Are you sure?')" href="index.php?controller=products&action=delete&id=<?= $product['id'] ?>" class="btn btn-danger">Supprimer</a>
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