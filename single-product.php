<?php get_header(); ?>

<?php include_once('page_components/menu.php'); ?>

<?php 
    global $product;

    $caracteristicas_1_image = get_field( "caracteristicas_1_image" ) ?? "";
    $caracteristicas_1_text  = get_field( "caracteristicas_1_text" ) ?? "";
    $caracteristicas_2_image = get_field( "caracteristicas_2_image" ) ?? "";
    $caracteristicas_2_text  = get_field( "caracteristicas_2_text" ) ?? "";
    $caracteristicas_3_image = get_field( "caracteristicas_3_image" ) ?? "";
    $caracteristicas_3_text  = get_field( "caracteristicas_3_text" ) ?? "";

    $item_1_texto = get_field( "item_1_texto" ) ?? "";
    $item_1_image = get_field( "item_1_image" ) ?? "";
    $item_2_texto = get_field( "item_2_texto" ) ?? "";
    $item_2_image = get_field( "item_2_image" ) ?? "";
    $destaque_texto = get_field( "destaque_texto" ) ?? "";
    $product = wc_get_product(get_the_ID());
?>

<?php while (have_posts()) : the_post(); ?>

    <div class="single-banner js-single-banner">
        <div>

            <img src="<?= get_template_directory_uri() ?>/assets/images/c1.png">
            <img src="<?= get_template_directory_uri() ?>/assets/images/c2.png">
        </div>
    </div>

    <div class="wrapper ventes js-warp">
        <div class="flex between s-grid-quick-view">
            <div>
                <strong class="title-big"><?php the_title() ?></strong><br>
                <span class="title-sub">GAZEUSE</span>
                <div class="home-quick-view-image">
                    <span style="background-color: #FDE17F;"></span>
                    <canvas width="500" height="390" class="can-of-soda"></canvas>
                </div>
            </div>
            <div>
                <div class="box-single js-single-snap">
                    <div class="mb-10">
                        <strong class="text c-gray-300">75,26 € </strong>
                        <strong class="text ml-10">52,50 €</strong>
                        <b class="text red-900 c-gray-50 single-discout ml-10">- 30%</b>
                    </div>
                    <span class="home-quick-view-add" style="background-color: #FDE17F;">ajouter au panier</span>
                    <select class="home-quick-view-select text">
                        <option>Gazeuse</option>
                    </select>
                    <select class="home-quick-view-select text mb-10">
                        <option>3 x PACKS DE 6</option>
                    </select>
                    <a href="" class="home-quick-view-link text-small mb-10">INFORMATIONS NUTRICIONELLES</a>
                    <div class="more-detail">
                        <img src="<?= $caracteristicas_1_image ?>">
                        <span class="text"><?= $caracteristicas_1_text ?></span>
                    </div>
                    <div class="more-detail">
                        <img src="<?= $caracteristicas_2_image ?>">
                        <span class="text"><?= $caracteristicas_2_text ?></span>
                    </div>
                    <div class="more-detail mb-10">
                        <img src="<?= $caracteristicas_3_image ?>">
                        <span class="text"><?= $caracteristicas_3_text ?></span>
                    </div>
                    <div class="hr mb-10"></div>
                    <div class="flex between">
                        <div>
                            <a href="#" class="more-link text-small">je suis </a> <br>
                            <a href="#" class="more-link text-small">professionnel</a> <br>
                        </div>
                        <div>
                            <a href="#" class="more-link text-small">FAQ</a> <br>
                            <a href="#" class="more-link text-small">la LIVRAISON</a> <br>
                            <a href="#" class="more-link text-small">moyens de paiement</a> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-bg js-single-bg">
        <div class="wrapper">
            <div class="single-grid-2">
                <div class="single-images">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/c3.png" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/c4.png" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/c5.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper" style="margin-bottom: 35px;">
        <div class="single-grid-2">
            <div>
                <!-- <h4 class="title mb-10">QUE EST CE QUE LE CBD ?</h4> -->
                <p class="text mb-30">
                    <?= $product->get_description(); ?>
                </p>
                <span class="single-sitacao text-small mb-30">
                    <?= $destaque_texto ?>
                </span>
                <div class="hr"></div>
                <span class="single-list text-small">
                    <img src="<?= $item_1_image ?>">
                    <span>
                        <?= $item_1_texto ?>
                    </span>
                </span>
                <div class="hr"></div>
                <span class="single-list text-small">
                    <img src="<?= $item_2_image ?>">
                    <span>
                        <?= $item_2_texto ?>
                    </span>
                </span>
                <div class="hr"></div>
            </div>
        </div>
    </div>

    <div class="wrapper" style="margin-bottom: 100px;">
        <h4 class="title">AUTRES BOISSONS</h4>
    </div>
    <?php include('includes/slider-home.php'); ?>


    <div class="full-track">
        <div class="single-content">
            <div class="full-track-grid">
                <div class="track-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/truck.png">
                    <span>
                        Livraison gratuite <br>
                        à partir de 90€
                    </span>
                </div>
                <div class="track-space"></div>
                <div class="track-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/lock.png">
                    <span>
                        Paiement 100% <br>
                        sécurisé
                    </span>
                </div>
                <div class="track-space"></div>
                <div class="track-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/commet.svg">
                    <span>
                        Besoin d’aide ? <br>
                        Entrer en contact
                    </span>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php include('page_components/footer.php'); ?>

<script>
    window.scroll({
        behavior: 'smooth'
    });
    window.onscroll = function() {
        const horizontal = document.querySelector('.js-single-bg');
        // const scroll     = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;
        // background-position: 0 50px, -175px 50px;
        let x1 = window.scrollY / 4
        let x2 = ((window.scrollY / 4) - 175) * -1
        horizontal.style.backgroundPosition = `${x1}px 50px, ${x2}px 50px`;
    }
    

</script>


<?php get_footer(); ?>