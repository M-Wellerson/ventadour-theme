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

    <!-- 
    800     360

    690      x

    690*360/800 
    -->


    <section class="catalogo-box loading-lata" id="o-cool">
        <div class="shop-product bg-red">
            <canvas width="800" height="690" class="can-shop-1 shop-product-canvas" hidden></canvas>
            <!-- <div class="loading-lata"></div> -->
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

    <section class="catalogo-box loading-lata" id="ventadour">
        <div class="shop-product bg-amarelo all_bg_none">
            <canvas width="800" height="690" class="can-shop-2 shop-product-canvas" hidden></canvas>
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

    <section class="catalogo-box loading-lata" id="o-coll">
        <div class="shop-product ">
            <canvas width="800" height="690" class="shop-product-canvas js-shop-o-coll" hidden></canvas>
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

    <section class="catalogo-box loading-lata" id="ozak">
        <div class="shop-product shop-product-ozak all_bg_none">
            <canvas width="1000" height="690" class="shop-product-canvas js-o-zak" hidden></canvas>
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

    <section class="catalogo-box loading-lata" id="a-fer">
        <div class="shop-product">
            <canvas width="800" height="690" class="shop-product-canvas js-a-fer" hidden></canvas>
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

    <section class="catalogo-box loading-lata" id="o-vive">
        <div class="shop-product">
            <canvas width="800" height="690" class="shop-product-canvas js-o-vive" hidden></canvas>
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

<div class="catalogo-load">
    <img src="<?= get_template_directory_uri() ?>/assets/images/load.gif" width="30">
</div>

<script>
    window.onload = () => {
        let list_all_canvas = document.querySelectorAll('.shop-product-canvas')
        let all_loads       = document.querySelectorAll('.loading-lata')
        let all_bg_none       = document.querySelectorAll('.all_bg_none')
        setTimeout(() => {
            all_loads.forEach($el => {
                $el.classList.remove('loading-lata')
            })
            all_bg_none.forEach($el => {
                $el.classList.remove('all_bg_none')
            })
            list_all_canvas.forEach($el => {
                $el.removeAttribute('hidden')
            })            
           
        }, 3000)

    }
</script>

<?php include('page_components/footer.php'); ?>

<?php get_footer(); ?>