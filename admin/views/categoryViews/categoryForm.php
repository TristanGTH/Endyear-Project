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
                <h4><?= $_GET['action'] == 'edit' ? 'Modifier' : 'Ajouter' ?> une catégorie</h4>
            </header>



            <form action="index.php?controller=categories&action=<?= isset($category) ? 'edit&id='.$_GET['id'] : 'add';  ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input class="form-control"  type="text" placeholder="Nom" name="name" id="name" value="<?= isset($category) ? $category['name'] : '' ?>" />
                </div>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <input class="form-control"  type="text" placeholder="Description" name="description" id="description" value="<?= isset($category) ? $category['description'] : '' ?>" />
                </div>
                <div class="form-group">
                    <label for="image">Image :</label>
                    <input class="form-control" type="file" name="image" id="image" />
                </div>

                <div class="text-right">
                    <input class="btn btn-success" type="submit" name="save" value="<?= isset($category) ? 'Mettre a jour' : 'Enregistrer' ?>" />
                </div>

            </form>
        </section>
    </div>

</div>
</body>
</html>
