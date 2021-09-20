<?php get_header(); ?>

<?php include_once('page_components/menu.php'); ?>

<div class="single-banner">
    <div>

        <img src="<?= get_template_directory_uri() ?>/assets/images/c1.png">
        <img src="<?= get_template_directory_uri() ?>/assets/images/c2.png">
    </div>
</div>

<div class="wrapper ventes">
    <div class="single-grid-2">
        <div>
            <strong class="home-quick-view-title">VENTADOUR</strong>
            <span class="home-quick-view-subtitle">GAZEUSE</span>
            <div class="home-quick-view-image">
                <span style="background-color: #FDE17F;"></span>
                <img src="<?= get_template_directory_uri() ?>/assets/images/zoo.png">
            </div>
        </div>
        <div class="banner-padding-left">
            <strong class="home-quick-view-preco">32,50 € </strong>
            <span class="home-quick-view-add" style="background-color: #FDE17F;">ajouter au panier</span>
            <select class="home-quick-view-select">
                <option>Gazeuse</option>
            </select>
            <select class="home-quick-view-select">
                <option>3 x PACKS DE 6</option>
            </select>
            <a href="" class="home-quick-view-link">INFORMATIONS NUTRICIONELLES</a>
            <p class="home-quick-view-description">
                <b>100% naturelles, garanties zéro nitrate!</b>
                Une pure eau minérale naturelle,
                venue des volcans d’ardèche! !
            </p>
            <br>
            <img src="<?= get_template_directory_uri() ?>/assets/images/logos.png" width="100%">
        </div>
        <span onclick="close_quick_view()" class="quick-close">x</span>
    </div>
</div>

<div class="single-bg">
    <div class="wrapper">
        <div class="single-grid-2">
            <div>
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
            <h4>QUE EST CE QUE LE CBD ?</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing
                labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat.
            </p>
            <span class="single-sitacao">
                Enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
            </span>
            <span class="single-list">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/securyt.png">
                <span>
                    Veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip commodo consequat.
                </span>
            </span>
            <span class="single-list">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/sum.png">
                <span>
                    Enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
            </span>
        </div>
    </div>
</div>

<div class="wrapper" style="margin-bottom: 100px;">
    <h4>AUTRES BOISSONS</h4>
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
            <div class="track-item">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/lock.png">
                <span>
                    Paiement 100% <br>
                    sécurisé
                </span>
            </div>
            <div class="track-item">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/comment.png">
                <span>
                    Besoin d’aide ? <br>
                    Entrer en contact
                </span>
            </div>
        </div>
    </div>
</div>

<?php include('page_components/footer.php'); ?>

<?php get_footer(); ?>