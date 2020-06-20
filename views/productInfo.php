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
            <h2><span id="price"><?= $product['price'] ?></span>€</h2>
            <button id="buyButton">Ajouter au Panier</button>
        </article>

        <article class="productInfo">
            <h1 class="productTitle"><?= $product['name'] ?></h1>
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
            <a href="index.php?controller=products&action=info&product_id=<?= $products[$rand]['id'] ?>"><img src="assets/images/products/<?= $products[$rand]['main_image'] ?>" class="otherProductImage"></a>
        <?php endfor; ?>

    </section>

    <?= var_dump($_SESSION['cart']) ?>

    <input type="hidden" id="productId" value="<?= $_GET['product_id'] ?>" >


    <?php require 'assets/partials/footer.php' ?>

    <script type="text/javascript" src="assets/js/ajaxToBasket.js"></script>


</body>
</html>
