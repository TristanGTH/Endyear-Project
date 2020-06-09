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
            <header class="pb-3">
                <!-- Si $category existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
                <h4>Ajouter une catégorie</h4>
            </header>


            <!-- Si $category existe, chaque champ du formulaire sera pré-remplit avec les informations de la catégorie -->

            <form action="index.php?controller=categories&action=<?= isset($category) ? 'edit&id='.$_GET['id'] : 'add';  ?>" method="post">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input class="form-control"  type="text" placeholder="Nom" name="name" id="name" value="<?= isset($category) ? $category['name'] : '' ?>" />
                </div>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <input class="form-control"  type="text" placeholder="Description" name="description" id="description" value="<?= isset($category) ? $category['description'] : '' ?>" />
                </div>

                <div class="text-right">
                    <!-- Si $category existe, on affiche un lien de mise à jour -->
                    <input class="btn btn-success" type="submit" name="save" value="<?= isset($category) ? 'Mettre a jour' : 'Enregistrer' ?>" />
                </div>

            </form>
        </section>
    </div>

</div>
</body>
</html>
