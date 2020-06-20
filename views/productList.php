<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon premier e-commerce !</title>
    <link rel="stylesheet" href="assets/css/productList.css" >
</head>
<body>

    <?php require 'assets/partials/header.php' ?>


        <div class="categoryInfo">
            <p><?= isset($category) ? $category['name'] : 'Tout les produits' ?></p>
            <p>Nombre de produits : <?= $count ?></p>
        </div>
    <main class="productContainer">

        <section class="displayProduct">

            <?php foreach ($products as $product) : ?>
                <?php if ($product['is_online'] == 1) : ?>
                    <div class="productInfo">
                        <a href="index.php?controller=products&action=info&product_id=<?= $product['id'] ?>"><img src="assets/images/products/<?= $product['main_image'] ?>" class="productImage"></a>
                        <p><a class="productName" href="index.php?controller=products&action=info&product_id=<?= $product['id'] ?>"><?= $product['name'] ?></a></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

        </section>

    </main>

    <?php require 'assets/partials/footer.php'; ?>

</body>
</html>
