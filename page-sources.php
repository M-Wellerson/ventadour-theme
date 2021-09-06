<?php
/*
Template Name: Sources template
*/
?>

<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>

    <div class="sources__header">
        <!-- DESKTOP -->
        <img class="no-iphone" src="<?= get_template_directory_uri(); ?>/assets/img/sources_header1.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">

        <!-- IPHONE -->
        <img class="iphone-only" src="<?= get_template_directory_uri(); ?>/assets/img/sources_header_iphone.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
        <div class="title_iphone iphone-only">
            <h1 class="medium"><?= mb_strtoupper(__('Les sources', 'pestrin')); ?></h1>
            <h2 class="bold"><?= mb_strtoupper(__('Du pestrin', 'pestrin')); ?></h2>
            <div class="text LTlight"><?= mb_strtoupper(__('Nées au coeur des', 'pestrin')); ?></div>
            <div class="text LTlight"><?= mb_strtoupper(__('volcans d’ardèche', 'pestrin')); ?></div>
        </div>
        <!-- ====== -->

        <a class="header__next anchorLink" href="#sources" data-link="sources">
            <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow_right.png" alt="">
        </a>
    </div>
    <div class="wrapper sources" id="sources">

        <div class="soures__title_top">
            <div class="blue_rectangle"></div>

            <div class="title no-iphone">
                <h1 class="bold"><?= mb_strtoupper(__('Les sources', 'pestrin')); ?></h1>
                <h2 class="extra"><?= mb_strtoupper(__('Du pestrin', 'pestrin')); ?></h2>
                <div class="text LTlight"><?= mb_strtoupper(__('Nées au coeur des volcans', 'pestrin')); ?></div>
                <div class="text LTlight"><?= mb_strtoupper(__('D’ardèche', 'pestrin')); ?></div>
            </div>
            <div class="logo">
                <img src="<?= get_template_directory_uri(); ?>/assets/logos/logo_1.png" alt="">
            </div>
            <div class="clear"></div>

            <div class="sources__gallery">
                <?php

                $querySourcesGallery = array(
                    'posts_per_page' => -1,
                    'post_type' => 'post',
                    'category_name' => 'sources-gallery',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $postsSourcesGallery = get_posts($querySourcesGallery);
                ?>

<!--                <div class="swiper-container">-->
<!--                    <div class="swiper-wrapper">-->
                    <div class="sliderSwiper">

                        <?php
                        foreach ($postsSourcesGallery as $key => $sources) {
                            $sourcesID = $sources->ID;

                            $galleryIDs = explode(',', get_post_meta($sourcesID, '_easy_image_gallery', true));
                            $gallery = array();
                            foreach ($galleryIDs as $key2 => $galleryID) {
                                array_push($gallery, wp_get_attachment_url($galleryID));

                                echo '<div class="sliderSwiper__slide'.($key2 == 0 ? ' active' : '').'"><img src="' . $gallery[$key2] . '" alt="Ventadour - Pestrin - Ardeche - ventadour"></div>';
                            }
                        }
                        ?>
                    </div>

                    <div class="sliderSwiper__pagination">
                        <?php

                        foreach ($galleryIDs as $key2 => $galleryID) {

                            echo '<div class="sliderSwiper__pag'.($key2 == 0 ? ' active' : '').'" data-id="'.($key2 + 1).'"></div>';
                        }

                        ?>
                        <!--                <div class="swiper-pagination"></div>-->
                    </div>
<!--                    </div>-->
<!--                </div>-->

                <div class="source__gallery_arrow">
                    <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_left.png" alt="">
                </div>
                <div class="clear"></div>

            </div>

        </div>

        <div class="sources__content">
            <div class="sources__content_left">
                <div class="content_title">
                    <h2 class="medium"><?= __('La pureté<br><span class="extra">des sources</span>: leur secret', 'pestrin'); ?></h2>
                </div>
                <div class="content text">
                    <?= __('Au coeur <strong>des volcans d’Ardèche</strong> jaillit cette eau rare, unique par son goût, agréable, désaltérante. 
                    Une eau de prestige présente sur les grandes tables gastronomiques.<br><br> Une longue histoire : l’eau du Pestrin
                    était déjà <strong>connue des Romains</strong> et c’est le Consul Domitius qui créa en 121 av JC des Thermes dont des vestiges 
                    ont été retrouvés.', 'pestrin'); ?>
                </div>
            </div>
            <div class="sources__content_img img__prop img__prop_130">
                <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/sources_3.jpg" alt="Chantemerle - Pestrin - Ardeche">
            </div>
            <div class="clear"></div>
            <div class="sources__content_icon">
                <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
            </div>
        </div>

        <div class="sources__story">
            <div class="sources__story_firstrow">
                <div><h1 class="light"><?= __('une ', 'pestrin'); ?></h1></div>
                <div class="story"><h1 class="extra"><?= __('histoire', 'pestrin'); ?></h1></div>
            </div>
            <div><h1 class="text"><?= __('depuis 1868', 'pestrin'); ?></h1></div>
        </div>

        <div class="sources__etiquettes">
            <div class="sources__etiquettes_firstrow aboveIpadF">
                <img class="etiquette1" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_1.png"
                     alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <img class="etiquette2" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_2.png"
                     alt="Ventadour - Pestrin - Ardeche - ventadour">
                <img class="etiquette3" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_3.jpg"
                     alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
            </div>
            <div class="sources__etiquettes_secondrow aboveIpadF">
                <img class="etiquette4" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_4.jpg"
                     alt="Chantemerle - Pestrin - Ardeche - ventadour">
            </div>
            <div class="sources__etiquettes_thirdrow aboveIpadF">
                <img class="etiquette5" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_5.jpg"
                     alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
                <img class="etiquette6" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_6.png"
                     alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <img class="etiquette7" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_7.jpg"
                     alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
            </div>
            <div class="sources__etiquettes_fourthrow aboveIpadF">
                <img class="etiquette8" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_8.jpg"
                     alt="Ventadour - Pestrin - Ardeche - ventadour">
                <img class="etiquette9" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_9.png"
                     alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
            </div>

            <!--==== IPAD ====-->
            <div class="sources__etiquettes_firstrow_ipad belowIpadF">
                <img class="etiquette1" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_1.png"
                     alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <img class="etiquette2" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_2.png"
                     alt="Ventadour - Pestrin - Ardeche - ventadour">
            </div>
            <div class="sources__etiquettes_secondrow_ipad belowIpadF">
                <img class="etiquette3" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_3.jpg"
                     alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
            </div>
            <div class="sources__etiquettes_thirdrow_ipad belowIpadD">
                <img class="etiquette4" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_4.jpg"
                     alt="Chantemerle - Pestrin - Ardeche - ventadour">
            </div>
            <div class="sources__etiquettes_fourthrow_ipad belowIpadD">
                <img class="etiquette8" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_8.jpg"
                     alt="Ventadour - Pestrin - Ardeche - ventadour">
                <img class="etiquette5" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_5.jpg"
                     alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
            </div>
            <div class="sources__etiquettes_fifthrow_ipad belowIpadD">
                <img class="etiquette7" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_7.jpg"
                     alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
                <img class="etiquette6" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_6.png"
                     alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
            </div>
            <div class="sources__etiquettes_sixthrow_ipad belowIpadD">
                <img class="etiquette9" src="<?= get_template_directory_uri(); ?>/assets/img/sources_etiquette_9.png"
                     alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
            </div>

            <!--==== ==== ====-->
        </div>

        <div class="sources__health">
            <div class="sources__health_left">
                <div><h2 class="medium"><?= __('Les bienfaits des eaux ', 'pestrin'); ?></h2></div>
                <div><h2 class="extra"><?= __('ventadour et chantemerle', 'pestrin'); ?></h2></div>
            </div>
            <div class="sources__health_right">
                <div class="text">
                    <?= __('Les eaux du Pestrin se sont montrées très <strong>favorables dans toutes les maladies chroniques</strong> des voies digestives entrainant des états de faiblesse. <br><br>L’eau de cette source précieuse agit en <strong>stimulant</strong> toutes les fonctions liées à la <strong>digestion</strong>, à la circulation et à l’absorption. ', 'pestrin'); ?>
                </div>
            </div>
        </div>

        <div class="sources__etiquettes_fifthrow">
            <div class="etiquette__item sources4">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/sources_4.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/img/sources_4.jpg" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_small.svg" alt="">
                </a>
            </div>
            <div class="etiquette__item sources5">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/sources_5.jpg"
                     alt="Ventadour - Pestrin - Ardeche">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/pestrin_vals.pdf" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_small.svg" alt="">
                </a>
            </div>
            <div class="etiquette__item sources6">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/sources_6.jpg"
                     alt="Eau minerale naturelle gazeuse - ventadour - Pestrin">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/les_eaux_du_pestrin.pdf" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_small.svg" alt="">
                </a>
            </div>
        </div>
        <div class="sources__etiquettes_sixthrow">

            <div class="etiquette__item sources7">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/sources_7.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/these_moulin.pdf" target="_blank"> 
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_small.svg" alt="">
                </a>
            </div>
            <div class="etiquette__item sources8">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/sources_8.jpg" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/img/sources_8.jpg" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_small.svg" alt="">
                </a>
            </div>
            <div class="etiquette__item sources9">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/sources_9.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/leau_la_vie.pdf" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_small.svg" alt="">
                </a>
            </div>
        </div>

        <!--==== IPAD ====-->
        <div class="container">
            <div class="sources__etiquettes_left_ipad">
                <img class="sources4" src="<?= get_template_directory_uri(); ?>/assets/img/sources_4.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/img/sources_4.jpg" target="_blank">
                    <img class="download_4" src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_ipad.png" alt="" target="_blank">
                </a>
                <img class="sources7" src="<?= get_template_directory_uri(); ?>/assets/img/sources_7.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/these_moulin.pdf" target="_blank">
                    <img class="download_7" src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_ipad.png" alt="" target="_blank">
                </a>
                <img class="sources6" src="<?= get_template_directory_uri(); ?>/assets/img/sources_6.jpg" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/les_eaux_du_pestrin.pdf" target="_blank">
                    <img class="download_6" src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_ipad.png" alt="" target="_blank">
                </a>

            </div>
            <div class="sources__etiquettes_right_ipad">
                <img class="sources5" src="<?= get_template_directory_uri(); ?>/assets/img/sources_5.jpg" alt="Ventadour - Pestrin - Ardeche - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/pestrin_vals.pdf" target="_blank">
                    <img class="download_5" src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_ipad.png" alt="" target="_blank">
                </a>
                <img class="sources8" src="<?= get_template_directory_uri(); ?>/assets/img/sources_8.jpg" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/img/sources_8.jpg" target="_blank">
                    <img class="download_8" src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_ipad.png" alt="" target="_blank">
                </a>
                <img class="sources9" src="<?= get_template_directory_uri(); ?>/assets/img/sources_9.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
                <a href="<?= get_template_directory_uri(); ?>/assets/pdfs/leau_la_vie.pdf" target="_blank">
                    <img class="download_9" src="<?= get_template_directory_uri(); ?>/assets/icons/icon_download_ipad.png" alt="" target="_blank">
                </a>
            </div>
        </div>
        <!--==== ==== ====-->

    </div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>