
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon premier e-commerce</title>
    <link rel="stylesheet" href="assets/css/basket.css">
</head>
<body>

    <?php require 'assets/partials/header.php' ?>

    <section class="containerOrderTitle">

        <h1 class="basketInfoTitle">RECAPITULATIF</h1>

        <div class="containerUserOrder">
            <?php if (count($_SESSION['cart']) > 0) : ?>
                <?php foreach ($_SESSION['cart'] as $cart) : ?>
                    <div class="displayOrder">
                        <div class="orderPlacement">
                            <p></p>
                        </div>
                        <div class="orderPlacement">
                            <p>Exemplaires</p>
                            <p>$</p>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else : ?>

            <div class="noOrder">
                <p>Vous n'avez rien dans votre panier</p>
            </div>

            <?php endif; ?>

        </div>

    </section>


    <section class="containerOrderTitle">

        <h1 class="basketInfoTitle">INFORMATIONS DE LIVRAISON</h1>

        <div class="containerUserOrder">
            <div class="containerInfoBasket">
                <div class="infoBasket">
                    <p>Nom :</p>
                    <p><?= $_SESSION['user']['lastname'] ?></p>
                </div>
                <div class="infoBasket">
                    <p>Prénom :</p>
                    <p><?= $_SESSION['user']['firstname'] ?></p>
                </div>
                <div class="infoBasket">
                    <p>Adresse :</p>
                    <p><?= $_SESSION['user']['adress'] ?></p>
                </div>
            </div>
        </div>

    </section>

    <section class="containerOrderTitle">

        <h1 class="basketInfoTitle">PAIEMENT</h1>

        <div class="containerUserOrder">
            <div class="containerPayout">
                <img src="assets/images/carte.png">
            </div>
        </div>

    </section>



</body>
</html>
