<?php
$nbUser = sizeof(getAllUser());
$nbCategory = sizeof(getAllCategory());
$nbProducts = sizeof(getAllProduct());
$nbOrders = sizeof(getAllOrder());

?>﻿
<nav class="col-3 py-2 categories-nav">
    <a class="d-block btn btn-warning mb-4 mt-2" href="../index.php">Site</a>
    <ul>
        <li><a href="index.php?controller=users&action=list">Gestion des utilisateurs (<?= $nbUser ?>)</a></li>
        <li><a href="index.php?controller=categories&action=list">Gestion des catégories (<?= $nbCategory ?>)</a></li>
        <li><a href="index.php?controller=products&action=list">Gestion des produits (<?= $nbProducts ?>)</a></li>
        <li><a href="index.php?controller=orders&action=list">Gestion des Commandes (<?= $nbOrders ?>)</a></li>
    </ul>
</nav>