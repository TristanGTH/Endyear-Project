<header>
    <div class="headerContainer">

        <div class="logoContainer">
            <a href="index.php"><img src="assets/images/logo-white.png" class="logo"></a>
            <a href="index.php">LA MANGWA</a>
        </div>

        <nav class="headerNav">
            <a href="index.php">Accueil</a>
            <ul id="menu-deroulant">
                <li> <a>Catégories</a>
                    <ul>
                        <?php $categories = getAllCategory() ?>
                        <?php foreach ($categories as $categoryNav) : ?>
                            <li><a href="index.php?controller=products&action=list&category_id=<?= $categoryNav['id'] ?>"><?= $categoryNav['name'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
            <a href="index.php?controller=products&action=list">Produits</a>
            <a href="index.php?controller=contact">Contact</a>
        </nav>
        
        <div class="iconContainer">
            <?php if (isset($_SESSION['user'])) : ?>
                <a href="index.php?controller=userInfo"><img src="assets/images/user-white.png" class="picto"></a>
            <?php endif; ?>
            <a href="index.php?controller=basket"><img src="assets/images/book-icone.png" class="picto"></a>
        </div>
        
    </div>


</header>

<?php if (!isset($_SESSION['user'])) : ?>

    <div class="belowHeader">
        <div class="headerUserContainer">
            <a href="index.php?controller=login">Connexion</a>
            <a href="index.php?controller=register">Inscription</a>
        </div>
    </div>
<?php endif; ?>