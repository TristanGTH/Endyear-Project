<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon premier e-commerce !</title>
    <link rel="stylesheet" href="assets/css/index.css">

</head>
<body>

    <?php require 'assets/partials/header.php' ?>


    <section class="titleContainer">
        <h1 class="title">MANGWA | UNE NOUVELLE AVENTURE A CHAQUE TOME</h1>
    </section>

    <section class="imgIndex">
        <img src="assets/images/reborn2.png">
    </section>

    <section class="indexSummary">
        <h1 class="title">LA MANGWA</h1>
        <p class="summary">Le mot « manga » est pleinement intégré dans la langue française, comme l'atteste son intégration dans les dictionnaires usuels.
            Ceux-ci le donnent comme masculin (les mots japonais, eux, n'ont pas de genre grammatical), et c'est le genre qui prédomine largement.
            Toutefois, la première utilisation du mot en français revient à Edmond de Goncourt en 1895, dans une étude artistique dédiée à Hokusai7,
            où il accorde « manga » au féminin pour désigner ce qu'il appela La Mangwa (sic) de l'artiste.</p>
    </section>

    <section class="categoryIndex">
        <h1 class="title">NOS CATÉGORIES</h1>
        <div class="displayCategory">
            <!-- FAIRE BOUCLE PHP ICI -->
            <?php foreach ($categories as $category) : ?>
                <div class="eachCategory">
                    <button class="categoryButton"><?= $category['name'] ?></button>
                    <?php foreach ($products as $product) : ?>
                        <?php if ($product['category_id'] == $category['id']) : ?>
                            <p class="productName"><a><?= $product['name'] ?></a></p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            </div>

        </div>
    </section>

    <?php require 'assets/partials/footer.php' ?>




</body>
</html>
