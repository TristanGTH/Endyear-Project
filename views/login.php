<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon premier e-commerce</title>
    <link rel="stylesheet" href="assets/css/login.css"
</head>
<body>

    <?php require 'assets/partials/header.php'; ?>

    <div class="containerLoginTitle">
        <h1 class="loginTitle">BIENVENUE SUR LA MANGWA</h1>
    </div>

    <div class="containerLoginTitle">
        <h1>CONNECTEZ VOUS A VOTRE COMPTE</h1>
    </div>


    <main class="containerLogin">
        <section class="formLogin">
            <div class="formPlacement">

                <form action="" method="post" class="login">

                    <label for="email">Email :</label><br><br>
                    <input type="text" placeholder="Email" name="email" id="email"><br><br>

                    <label for="password">Mot de passe :</label><br><br>
                    <input type="password" placeholder="Mot de passe" name="password" id="password"><br><br>

                    <?php if (isset($answer)) : ?>
                        <div class="displayMessage"><?= $answer ?></div><br>
                    <?php endif; ?>

                    <input type="submit" name="connect" value="Connexion" class="submit">



                </form>
            </div>
        </section>
    </main>

    <?php require 'assets/partials/footer.php' ?>



</body>
</html>
