<?php
/*
Template Name: Portfolio template
*/
?>

<?php get_header(); ?>
<?php include('page_components/links.php') ?>
<?php include_once('page_components/menu.php'); ?>

    <div class="wrapper portfolio">
        <div class="portfolio_title">
            <h1 class="light"><?= __('vos <span class="bold">photos</span>', 'pestrin'); ?></h1>
            <div class="text"><?= __('Cette page vous appartient, envoyez nous vos photos', 'pestrin'); ?></div>
            <a href="mailto:newsletter@ventadour.fr" class="button1 aboveIpadD">
                <?= __('Ajouter une photo', 'pestrin'); ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt=""
                     class="arrow">
            </a>
        </div>



        <div class="portfolio__img_container">


            <?php
            $queryPortfolioGallery = array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'category_name' => 'portfolio-gallery',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'post_status' => 'publish',
                'suppress_filters' => true
            );
            $postsPortfolioGallery = get_posts($queryPortfolioGallery);
            $portfolioID = $postsPortfolioGallery[0]->ID;

            $galleryIDs = explode(',', get_post_meta($portfolioID, '_easy_image_gallery', true));

            $gallery = array();
            foreach ($galleryIDs as $key => $galleryID) {
                array_push($gallery, wp_get_attachment_url($galleryID));

                switch ($key % 6) {
                    case 0 :
                        echo '<div class="firstrow">';
                        echo '<img src="' . $gallery[$key] . '" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour" data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-10px)">';

                        if($key == count($gallery)) {
                            echo '</div>';
                        }
                        break;

                    case 1 :
                        echo '<img src="' . $gallery[$key] . '" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour" data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(-10px)">';

                        echo '<div class="social ventadour">';
                        echo '<a href="https://www.instagram.com/ventadourchantemerle1868/?hl=fr" target="_blank">';
                        echo '<img class="nohover" src="' . get_template_directory_uri() . '/assets/icons/instagram_black.png" alt="">';
                        echo '<img class="hover no-ipad" src="' . get_template_directory_uri() . '/assets/icons/instagram_black_hover.png" alt="">';
                        echo '</a>';
                        echo '<div class="text condensedBold upper">#Ventadour</div>';
                        echo '</div>';
                        echo '<div class="arrow_first iphone-only">';
                        echo '<img class="arrow" src="' . get_template_directory_uri() . '/assets/icons/button_arrow_left.png" alt="">';
                        echo '</div>';
                        echo '</div>';
                        break;

                    case 2 :
                        echo '<div class="secondrow">';
                        echo '<img src="' . $gallery[$key] . '" alt="Ventadour - Pestrin - Ardeche - ventadour" data-bottom-top="transform: translateY(100px)" data-top-bottom="transform: translateY(-100px)">';

                        if($key == count($gallery)) {
                            echo '</div>';
                        }
                        break;

                    case 3 :
                        echo '<img src="' . $gallery[$key] . '" alt="Chantemerle - Pestrin - Ardeche - ventadour" data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(00px)">';

                        echo '<div class="social pestrin">';
                        echo '<a href="#">';
                        echo '<img class="nohover" src="' . get_template_directory_uri() . '/assets/icons/goutte2.png" alt="">';
                        echo '</a>';
                        echo '<div class="text condensedBold upper" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-100px)">#Pestrin</div>';
                        echo '</div>';
                        echo '<div class="portfolio__picto_arrow">';
                        echo '<img class="arrow" src="' . get_template_directory_uri() . '/assets/icons/button_arrow_left.png" alt="">';
                        echo '</div>';

                        //==== IPHONE ====
                        echo '<div class="portfolio__picto_goutte1 iphone-only">';
                        echo '<img class="goutte1" src="' . get_template_directory_uri() . '/assets/icons/goutte1.png" alt="">';
                        echo '</div>';
                        echo '<div class="portfolio__picto_goutte2 iphone-only">';
                        echo '<img class="goutte2" src="' . get_template_directory_uri() . '/assets/icons/goutte1.png" alt="">';
                        echo '</div>';
                        ////==== ===== ===

                        echo '</div>';
                        break;

                    case 4 :
                        echo '<div class="thirdrow">';
                        echo '<img src="' . $gallery[$key] . '" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-120px)">';

                        if($key == count($gallery)) {
                            echo '</div>';
                        }
                        break;

                    case 5 :
                        echo '<img src="' . $gallery[$key] . '" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">';

                        echo '<div class="social chantemerle">';

                        echo '<div class="text condensedBold upper no-iphone">#Chantemerle</div>';
                        echo '<a href="https://www.facebook.com/Ventadour1868" target="_blank">';
                        echo '<img class="nohover facebook" src="' . get_template_directory_uri() . '/assets/icons/facebook_black.png" alt="">';
                        echo '<img class="hover no-ipad" src="' . get_template_directory_uri() . '/assets/icons/facebook_black_hover.png" alt="">';
                        echo '</a>';

                        //==== IPHONE ====
                        echo '<div class="text condensedBold upper iphone-only">#Pestrin</div>';
                        //==== ===== ====
                        echo '</div>';

                        echo '<div class="portfolio__picto">';
                        echo '<img src="' . get_template_directory_uri() . '/assets/icons/picto1.png" alt="">';
                        echo '<img src="' . get_template_directory_uri() . '/assets/icons/picto1.png" alt="">';
                        echo '</div>';
                        echo '</div>';
                        break;
                }
            }
            ?>
        </div>
    </div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>