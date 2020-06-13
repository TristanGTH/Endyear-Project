<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon premier e-commerce</title>
    <link rel="stylesheet" href="assets/css/productInfo.css">
</head>
<body>

    <?php require 'assets/partials/header.php' ?>

    <section class="productContainer">

        <article class="productBuy">
            <img src="assets/images/products/<?= $product['main_image'] ?>" class="productImage">
            <h2><?= $product['price'] ?>$</h2>
            <button class="buyButton">Ajouter au Panier</button>
        </article>

        <article class="productInfo">
            <h1 class="productTitle"><?= $product['name'] ?></h1>
            <button class="buyButton">Ajouter au Panier</button>
            <h1>RESUME DU MANGA</h1>
            <p><?= $product['summary'] ?></p>
        </article>

    </section>

    <div class="otherCategory">
        <span class="textOtherCategory">Plus de manga dans cette catégorie</span>
    </div>

    <section class="containerOtherProduct">

        <?php for ($i = 0 ; $i <= 3; $i++) : ?>
            <?php $rand = rand(0,sizeof($products)-1); ?>

            <img src="assets/images/products/<?= $products[$rand]['main_image'] ?>" class="otherProductImage">
        <?php endfor; ?>

    </section>


    <?php require 'assets/partials/footer.php' ?>



</body>
</html>
