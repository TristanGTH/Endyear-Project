
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
        <form action="" class="formDisconnect" method="post">
            <input type="submit" name="disconnect" value="Déconnexion" class="disconnect">
        </form>
        <?php if ($_SESSION['user']['is_admin'] == 1) : ?>
            <button onclick="location.href='admin/index.php'" class="admin">Administration</button>
        <?php endif; ?>
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
            <input name="adress" type="text" id="adress" value="<?= $_SESSION['user']['adress'] ?>"><br><br>

            <input type="submit" value="Enregistrer" class="submit" name="update">

        </form>

    </section>


    <section class="containerUserTitle">

        <h1 class="userInfoTitle">MES COMMANDES</h1>

        <div class="containerUserOrder">
            <?php if (count($orders) > 0) : ?>
                <?php foreach ($orders as $order) : ?>
                    <?php $infoProduct = getProduct($order['product_id']) ?>
                    <div class="displayOrder">
                        <div class="orderPlacement">
                            <p><?= $infoProduct['name'] ?></p>
                        </div>
                        <div class="orderPlacement">
                            <p><?= $order['total_quantity'] ?> Exemplaires</p>
                            <p><?= $order['total_quantity'] * $order['product_price'] ?>€</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
            <div class="formDisconnect">
                <p>Vous n'avez aucune commande en cours</p>
            </div>
            <?php endif; ?>
        </div>

    </section>


    <?php require 'assets/partials/footer.php' ?>







</body>
</html>