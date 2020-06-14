<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon premier e-commerce</title>
    <link rel="stylesheet" href="assets/css/register.css"
</head>
<body>

    <?php require 'assets/partials/header.php'; ?>

    <div class="containerLoginTitle">
        <h1 class="loginTitle">BIENVENUE SUR LA MANGWA</h1>
    </div>

    <div class="containerLoginTitle">
        <h1>CREE VOTRE COMPTE</h1>
    </div>


    <main class="containerLogin">
        <section class="formLogin">
            <div class="formPlacement">

                <form action="" method="post" class="login">

                    <label for="lastname">Nom de famille :</label><br><br>
                    <input type="text" placeholder="Nom de famille" name="lastname" id="lastname"><br><br>

                    <label for="firstname">Prénom :</label><br><br>
                    <input type="text" placeholder="Prénom" name="firstname" id="firstname"><br><br>

                    <label for="email">Email :</label><br><br>
                    <input type="text" placeholder="Email" name="email" id="email"><br><br>

                    <label for="adress">Adresse :</label><br><br>
                    <input type="text" placeholder="Adresse" name="adress" id="adress"><br><br>

                    <label for="password">Mot de passe :</label><br><br>
                    <input type="password" placeholder="Mot de passe" name="password" id="password"><br><br>

                    <input type="submit" name="register" value="Inscription" class="submit">



                </form>
            </div>
        </section>
    </main>

    <?php require 'assets/partials/footer.php' ?>



</body>
</html>
