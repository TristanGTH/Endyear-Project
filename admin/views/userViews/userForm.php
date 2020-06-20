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



        <main class="col-9">
            <header class="pb-3">
                <h4><?= $_GET['action'] == 'edit' ? 'Modifier' : 'Ajouter' ?> un utilisateur</h4>
                <?php if (isset($answer)) : ?>
                    <h4><?= $answer ?></h4>
                <?php endif; ?>
            </header>

            <form action="index.php?controller=users&action=<?= isset($user) ? 'edit&id='.$_GET['id'] : 'add';  ?>" method="post">
                <div class="form-group">
                    <label for="firstname">Prénom :</label>
                    <input class="form-control"  type="text" placeholder="Prénom" name="firstname" id="firstname" value="<?= isset($user) ? $user['firstname'] : '' ?>" />
                </div>
                <div class="form-group">
                    <label for="lastname">Nom de famille : </label>
                    <input class="form-control"  type="text" placeholder="Nom de famille" name="lastname" id="lastname" value="<?= isset($user) ? $user['lastname'] : '' ?>" />
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input class="form-control"  type="email" placeholder="Email" name="email" id="email" value="<?= isset($user) ? $user['email'] : '' ?>" />
                </div>
                <div class="form-group">
                    <label for="adress">Adresse : </label>
                    <input class="form-control" type="text" placeholder="Adresse" name="adress" id="adress" value="<?= isset($user) ? $user['adress'] : '' ?>" />
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe : </label>
                    <input class="form-control" type="password" placeholder="Mot de passe" name="password" id="password" />
                </div>
                <div class="form-group">
                    <label for="is_admin"> Admin ?</label>
                    <select class="form-control" name="is_admin" id="is_admin">
                        <option value="0" >Non</option>
                        <option value="1" >Oui</option>
                    </select>
                </div>

                <div class="text-right">
                    <input class="btn btn-success" type="submit" name="save" value="<?= isset($user) ? 'Mettre a jour' : 'Enregistrer' ?>" />
                </div>


            </form>

        </main>
    </div>

</div>
</body>
</html>
