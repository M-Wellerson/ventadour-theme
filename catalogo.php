<?php
/*
        Template Name: Catalogo
    */
?>
<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>


<div class="wrapper ventes">

    <div class="menu-cat">
        <a href="?cat=" class="menu-cat-link menu-cat-link-active">O'cool</a>
        <span class="menu-cat-separador"></span>
        <a href="?cat=" class="menu-cat-link">Ventadour</a>
        <span class="menu-cat-separador"></span>
        <a href="?cat=" class="menu-cat-link">OZAK</a>
        <span class="menu-cat-separador"></span>
        <a href="?cat=" class="menu-cat-link">o’vive</a>
        <span class="menu-cat-separador"></span>
        <a href="?cat=" class="menu-cat-link">O’COLL</a>
        <span class="menu-cat-separador"></span>
        <a href="?cat=" class="menu-cat-link">A.FER</a>
    </div>

    <?php
    $args = array(
        'orderby'  => 'name',
    );
    $products = wc_get_products($args);
    ?>
    <?php foreach ($products as $prod) : ?>
        <div class="shop-product">
            <canvas class="shop-product-canvas"></canvas>
            <h2 class="shop-product-title"><?= $prod->get_title() ?></h2>
            <span class="shop-product-subtitle">CBD</span>
            <div class="shop-product-row">
                <div class="shop-product-col">
                    <p class="shop-product-descriacao">
                        <?= $prod->get_short_description() ?>
                    </p>
                    <a onclick="showCart()" href="javascript:void(0)" class="shop-product-link">en savoir plus</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>