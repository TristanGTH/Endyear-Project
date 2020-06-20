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
                <h4>Ajouter un produit</h4>
                <?php if (isset($answer)) : ?>
                    <h4><?= $answer ?></h4>
                <?php endif; ?>
            </header>

            <div class="tab-content">
                <div class="tab-pane container-fluid active" id="infos" role="tabpanel">


                    <!-- Si $article existe, chaque champ du formulaire sera pré-remplit avec les informations de l'article -->
                    <form action="index.php?controller=products&action=<?= isset($product) ? "edit&id=".$_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Nom :</label>
                            <input class="form-control"  type="text" placeholder="Nom" name="name" id="name" value="<?= isset($product) ? $product['name'] : '' ?>" />
                        </div>
                        <div class="form-group">
                            <label for="summary">Résumé :</label>
                            <input class="form-control"  type="text" placeholder="Résumé" name="summary" id="summary" value="<?= isset($product) ? $product['summary'] : '' ?>" />
                        </div>
                        <div class="form-group">
                            <label for="price">Prix :</label>
                            <input class="form-control" type="number" name="price" id="price" placeholder="Prix" value="<?= isset($product) ? $product['price'] : '' ?>">
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantité :</label>
                            <input class="form-control" type="number" name="quantity" id="quantity" placeholder="Quantité" value="<?= isset($product) ? $product['quantity'] : '' ?>">
                        </div>

                        <div class="form-group">
                            <label for="image">Image :</label>
                            <input class="form-control" type="file" name="image" id="image" />
                        </div>

                        <div class="form-group">
                            <label for="category"> Catégorie </label>
                            <select class="form-control" name="category" id="category">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['id'] ?>" > <?= $category['name'] ?> </option>
                                <?php endforeach; ?>


                            </select>
                        </div>

                        <div class="form-group">
                            <label for="is_online"> En ligne ?</label>
                            <select class="form-control" name="is_online" id="is_online">
                                <option value="0" >Non</option>
                                <option value="1" >Oui</option>
                            </select>
                        </div>

                        <div class="text-right">
                            <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                        </div>


                    </form>
                </div>
            </div>
        </section>
    </div>

</div>
</body>
</html>