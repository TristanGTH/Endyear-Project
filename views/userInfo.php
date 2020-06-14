
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon premier e-commerce</title>
    <link rel="stylesheet" href="assets/css/userInfo.css">
</head>
<body>

    <?php require 'assets/partials/header.php' ?>

    <div class="containerUserTitle">
        <h1 class="userTitle">BONJOUR <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['lastname'] ?></h1>
        <p class="userSubTitle">Bienvenue sur votre espace personnel.</p>
    </div>

    <section class="containerUserTitle">

        <h1 class="userInfoTitle">MES INFORMATIONS</h1>

        <form action="" method="post" class="updateInfo">

            <label class="labelUpdate" for="lastname">Nom :</label><br>
            <input name="lastname" type="text" id="lastname" value="<?= $_SESSION['user']['lastname'] ?>"><br><br>

            <label class="labelUpdate" for="firstname">Prénom :</label><br>
            <input name="firstname" type="text" id="firstname" value="<?= $_SESSION['user']['firstname'] ?>"><br><br>

            <label class="labelUpdate" for="email">Email :</label><br>
            <input name="email" type="email" id="email" value="<?= $_SESSION['user']['email'] ?>"><br><br>

            <label class="labelUpdate" for="adress">Adresse :</label><br>
            <input name="adress" type="text" id="adress" value="<?= $_SESSION['user']['lastname'] ?>"><br><br>

            <input type="submit" value="Enregistrer" class="submit">

        </form>

    </section>


    <section class="containerUserTitle">

        <h1 class="userInfoTitle">MES COMMANDES</h1>

        <div class="containerUserOrder">
            <?php foreach ($orders as $order) : ?>
                <?php $infoProduct = getProduct($order['id']) ?>
                <div class="displayOrder">
                    <div class="orderPlacement">
                        <p><?= $infoProduct['name'] ?></p>
                    </div>
                    <div class="orderPlacement">
                        <p><?= $order['product_quantity'] ?> Exemplaires</p>
                        <p><?= $order['product_quantity'] * $order['product_price'] ?>$</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </section>


    <?php require 'assets/partials/footer.php' ?>







</body>
</html>