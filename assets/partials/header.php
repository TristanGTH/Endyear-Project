<header>

    <div class="headerContainer">

        <div class="logoContainer">
            <img src="assets/images/logo-white.png" class="logo">
            <p>LA MANGWA</p>
        </div>

        <nav class="headerNav">
            <a href="index.php">Accueil</a>
            <a href="index.php?controller=products&action=list&category_id=1">Catégories</a>
            <a href="index.php?controller=products&action=list">Produits</a>
            <a href="">Contact</a>
        </nav>
        
        <div class="iconContainer">
            <?php if (isset($_SESSION['user'])) : ?>
                <a href="index.php?controller=userInfo"><img src="assets/images/user-white.png"></a>
            <?php endif; ?>
            <a href="index.php?controller=basket"><img src="assets/images/book-icone.png"></a>
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