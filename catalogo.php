<?php
/*
        Template Name: Catalogo
    */
?>
<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>


<div class="wrapper ventes">

    <div class="menu-cat">
        <a href="#o-cool" class="menu-cat-link menu-cat-link-active">O'cool</a>
        <span class="menu-cat-separador"></span>
        <a href="#ventadour" class="menu-cat-link">Ventadour</a>
        <span class="menu-cat-separador"></span>
        <a href="#ozak" class="menu-cat-link">OZAK</a>
        <span class="menu-cat-separador"></span>
        <a href="#o-vive" class="menu-cat-link">o’vive</a>
        <span class="menu-cat-separador"></span>
        <a href="#o-coll" class="menu-cat-link">O’COLL</a>
        <span class="menu-cat-separador"></span>
        <a href="#a-fer" class="menu-cat-link">A.FER</a>
    </div>

    <?php
    $args = array(
        'orderby'  => 'name',
    );
    $products = wc_get_products($args);
    ?>
    <?php foreach ($products as $prod) : ?>
    <?php endforeach; ?>

    <div class="shop-product" id="o-cool">
        <!-- <canvas class="shop-product-canvas"></canvas> -->
        <canvas width="800" height="690" class="can-shop-1 shop-product-canvas"></canvas>
        <h2 class="shop-product-title">O’COOL</h2>
        <span class="shop-product-subtitle">CBD</span>
        <div class="shop-product-row">
            <div class="shop-product-col">
                <p class="shop-product-descriacao">
                    <b> Nouvelle boisson enrichie en CBD. Relaxante, pas stupéfiante …</b>
                    Garanti zéro sucre et zéro calorie, parfait donc pour une pause aussi
                    désaltérante que délassante.
                </p>
                <a href="<?= get_permalink( 169 ) ?>" class="shop-product-link">en savoir plus</a>
            </div>
        </div>
    </div>

    <div class="shop-product" id="ventadour">
        <div class="space s-space" style="--s:70px; --ss:50px"></div>
        <!-- <canvas class="shop-product-canvas"></canvas> -->
        <canvas width="800" height="690" class="can-shop-2 shop-product-canvas"></canvas>
        <h2 class="shop-product-title shop-product-title-right">
            EAUX <br>
            <span class="shop-title-light">MINERALES</span>
        </h2>
        <span class="shop-product-subtitle shop-product-subtitle-100">
            NATURELLES
        </span>
        <div class="shop-product-row">
            <div class="shop-product-col">
                <p class="shop-product-descriacao shop-product-descriacao-right">
                    Elles parcourent entre 20 et
                    50 ans les entrailles des volcans ardéchois.
                    <b> 100% naturelles, garanties zéro nitrate, </b>
                    c’est peu de dire que ces deux eaux minérales
                    ont de sérieux atouts à faire valoir.
                </p>
                <a href="<?= get_permalink( 169 ) ?>" class="shop-product-link">en savoir plus</a>
            </div>
        </div>
    </div>

    <div class="shop-product" id="o-coll">
        <div class="space s-space" style="--s:210px;--ss:50px"></div>
        <canvas width="800" height="690" class="shop-product-canvas js-shop-o-coll"></canvas>
        <h2 class="shop-product-title ">
            O’COLL
        </h2>
        <span class="shop-product-subtitle shop-product-subtitle-marin">
            <b>collagène</b> MARIN
        </span>
        <!-- <img class="shop-image" src="<?= get_template_directory_uri() ?>/assets/images/grupo140.png"> -->
        <div class="shop-product-row">
            <div class="shop-product-col">
                <p class="shop-product-descriacao shop-product-descriacao-right">
                    Une eau fonctionnelle et cognitive, source de protéines pour la
                    santé des os, des articulations, croissance de la masse
                    musculaire, beauté ?de la peau, réduit la fatigue.
                </p>
                <a href="<?= get_permalink( 173 ) ?>" class="shop-product-link">en savoir plus</a>
            </div>
        </div>
    </div>

    <div class="shop-product shop-product-ozak" id="ozak">
        <div class="space s-space" style="--s:180px; --ss:50px"></div>
        <canvas width="1000" height="690" class="shop-product-canvas js-o-zak"></canvas>
        <h2 class="shop-product-title ">
            O’ZAKE
        </h2>
        <span class="shop-product-subtitle shop-product-subtitle-marin">
            <b>HARD</b> SELTZER
        </span>
        <!-- <img class="shop-image shop-image-selt" src="<?= get_template_directory_uri() ?>/assets/images/grupo143.png"> -->
        <div class="shop-product-row">
            <div class="shop-product-col">
                <p class="shop-product-descriacao shop-product-descriacao-selt">
                    5% d’alcool
                    60% de cabernet rosé
                    40% d’eau minérale gazeuse Ventadour Et des arômes naturels surprenants
                </p>
                <a href="<?= get_permalink( 171 ) ?>" class="shop-product-link">en savoir plus</a>
            </div>
        </div>
    </div>

    <div class="shop-product" id="a-fer">
        <canvas width="800" height="690" class="shop-product-canvas js-a-fer"></canvas>
        <h2 class="shop-product-title shop-product-title-afer">
            A.FER
        </h2>
        <span class="shop-product-subtitle shop-product-subtitle-100 shop-product-subtitle-marin">
            LA <b>FERTIFIANTE</b>
        </span>
        <!-- <img class="shop-image" src="<?= get_template_directory_uri() ?>/assets/images/afer-persp.png"> -->
        <div class="shop-product-row">
            <div class="shop-product-col">
                <p class="shop-product-descriacao shop-product-descriacao--afer ">
                    Cette recette zéro sucre est aussi simple que bienfaisante
                    puisqu’elle associe la célèbre eau Ventadour, naturellement
                    gazeuse et puisée au coeur des roches volcaniques du
                    Parc Naturel Régional des Monts d’Ardèche, à du fer.
                </p>
                <a href="<?= get_permalink( 173 ) ?>" class="shop-product-link">en savoir plus</a>
            </div>
        </div>
    </div>

    <div class="shop-product" id="o-vive">
        <div class="space s-space" style="--s:160px; --ss:50px"></div>
        <canvas width="800" height="690" class="shop-product-canvas js-o-vive"></canvas>
        <h2 class="shop-product-title">
            O’VIVE
        </h2>
        <!-- <img class="shop-image" src="<?= get_template_directory_uri() ?>/assets/images/grupo142.png"> -->
        <div class="shop-product-row">
            <div class="shop-product-col">
                <p class="shop-product-descriacao shop-product-descriacao-vive ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate
                </p>
                <a href="<?= get_permalink( 175 ) ?>" class="shop-product-link">en savoir plus</a>
            </div>
        </div>
    </div>

    <div class="space s-space" style="--s:160px; --ss: 50px"></div>

</div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>