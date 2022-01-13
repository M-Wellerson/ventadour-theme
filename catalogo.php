<?php
/*
    Template Name: Catalogo
*/
?>

<?php
$texto_ocool                 = get_field("texto_ocool") ?? "";
$texto_eaux_minerales        = get_field("texto_eaux_minerales") ?? "";
$texto_ocoll_collagene_marin = get_field("texto_ocoll_collagene_marin") ?? "";
$texto_ozake_hard_seltzer    = get_field("texto_ozake_hard_seltzer") ?? "";
$texto_afer_la_fertifiante   = get_field("texto_afer_la_fertifiante") ?? "";
$texto_ovive                 = get_field("texto_ovive") ?? "";
?>

<?php get_header(); ?>

<?php include_once('page_components/menu.php'); ?>

<div hidden>
<img src="<?= get_template_directory_uri() ?>/assets/images/can/4/px.png" />
<img src="<?= get_template_directory_uri() ?>/assets/images/can/4/nx.png" />
<img src="<?= get_template_directory_uri() ?>/assets/images/can/4/py.png" />
<img src="<?= get_template_directory_uri() ?>/assets/images/can/4/ny.png" />
<img src="<?= get_template_directory_uri() ?>/assets/images/can/4/pz.png" />
<img src="<?= get_template_directory_uri() ?>/assets/images/can/4/nz.png" />
</div>

<div class="bg-meridianas">

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
    </div>


    <section class="catalogo-box" id="o-cool">
        <div class="shop-product bg-red">
            <canvas width="800" height="690" class="can-shop-1 shop-product-canvas"></canvas>
            <h2 class="shop-product-title">O’COOL</h2>
            <span class="shop-product-subtitle">CBD</span>
            <div class="shop-product-row">
                <div class="shop-product-col">
                    <p class="shop-product-descriacao">
                        <?= $texto_ocool; ?>
                    </p>
                    <a href="<?= get_permalink(169) ?>" class="shop-product-link">en savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogo-box" id="ventadour">
        <div class="shop-product bg-amarelo">
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
                        <?= $texto_eaux_minerales; ?>
                    </p>
                    <a href="<?= get_permalink(169) ?>" class="shop-product-link">en savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogo-box" id="o-coll">
        <div class="shop-product ">
            <canvas width="800" height="690" class="shop-product-canvas js-shop-o-coll"></canvas>
            <h2 class="shop-product-title ">
                O’COLL
            </h2>
            <span class="shop-product-subtitle shop-product-subtitle-marin">
                <b>collagène</b> MARIN
            </span>
            <div class="shop-product-row">
                <div class="shop-product-col">
                    <p class="shop-product-descriacao shop-product-descriacao-right">
                        <?= $texto_ocoll_collagene_marin; ?>
                    </p>
                    <a href="<?= get_permalink(173) ?>" class="shop-product-link">en savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogo-box" id="ozak">
        <div class="shop-product shop-product-ozak">
            <canvas width="1000" height="690" class="shop-product-canvas js-o-zak"></canvas>
            <h2 class="shop-product-title ">
                O’ZAKE
            </h2>
            <span class="shop-product-subtitle shop-product-subtitle-marin">
                <b>HARD</b> SELTZER
            </span>
            <div class="shop-product-row">
                <div class="shop-product-col shop-product-col-o-zak">
                    <p class="shop-product-descriacao shop-product-descriacao-selt">
                        <?= $texto_ozake_hard_seltzer; ?>
                    </p>
                    <a href="<?= get_permalink(171) ?>" class="shop-product-link">en savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogo-box" id="a-fer">
        <div class="shop-product">
            <canvas width="800" height="690" class="shop-product-canvas js-a-fer"></canvas>
            <h2 class="shop-product-title shop-product-title-afer">
                A.FER
            </h2>
            <span class="shop-product-subtitle shop-product-subtitle-100 shop-product-subtitle-marin">
                LA <b>FERTIFIANTE</b>
            </span>
            <div class="shop-product-row">
                <div class="shop-product-col">
                    <p class="shop-product-descriacao shop-product-descriacao--afer ">
                        <?= $texto_afer_la_fertifiante; ?>
                    </p>
                    <a href="<?= get_permalink(173) ?>" class="shop-product-link">en savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogo-box" id="o-vive">
        <div class="shop-product">
            <canvas width="800" height="690" class="shop-product-canvas js-o-vive"></canvas>
            <h2 class="shop-product-title">
                O’VIVE
            </h2>
            <div class="shop-product-row">
                <div class="shop-product-col">
                    <p class="shop-product-descriacao shop-product-descriacao-vive ">
                        <?= $texto_ovive; ?>
                    </p>
                    <a href="<?= get_permalink(175) ?>" class="shop-product-link">en savoir plus</a>
                </div>
            </div>
        </div>
    </section>


</div>

<?php include('page_components/footer.php'); ?>

<?php get_footer(); ?>