<?php
/*
Template Name: Ardeche template
*/
?>

<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>


<div class="wrapper ardeche">
    <div class="ardeche__header">
        <!--==== IPAD ====-->

        <div class="ardeche__title iphone-only">
            <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ardeche_title.png" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
        </div>

        <!--==== ==== ====-->
        <div class="ardeche__header_left">
            <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ardeche_header_2.jpg" alt="Ventadour - Pestrin - Ardeche - ventadour">
        </div>
        <div class="ardeche__header_right">
            <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ardeche_header_1.jpg" alt="Chantemerle - Pestrin - Ardeche - ventadour">
        </div>
        <div class="ardeche__header_picto no-ipad">
            <img class="picto1" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
            <img class="picto2" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
        </div>

    </div>
    <div class="clear"></div>

    <div class="ardeche_bcg">
        <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ardeche_bcg.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
    </div>
    <div class="ardeche__title no-iphone">
        <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ardeche_title.png" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
    </div>
    <div class="clear"></div>


    <div class="ardeche__img_container">


        <?php
        $queryArdecheGallery = array(
            'posts_per_page' => 1,
            'post_type' => 'post',
            'category_name' => 'ardeche-gallery',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_status' => 'publish',
            'suppress_filters' => true
        );
        $postsArdecheGallery = get_posts($queryArdecheGallery);
        $ardecheID = $postsArdecheGallery[0]->ID;

        $galleryIDs = explode(',', get_post_meta($ardecheID, '_easy_image_gallery', true));

        $gallery = array();
        foreach ($galleryIDs as $key => $galleryID) {
            array_push($gallery, wp_get_attachment_url($galleryID));

            switch ($key % 7) {
                case 0 :
                    echo '<div class="firstrow ">';
                    echo '<img src="' . $gallery[$key] . '" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour" data-bottom-top="transform:translateY(10px);" data-top-bottom="transform:translateY(-120px);" >';
                    echo '<div class="text legende legende_1" data-bottom-top="transform:translateY(10px) rotate(90deg)" data-top-bottom="transform:translateY(-120px) rotate(90deg);"><strong>' . get_post($galleryID)->post_title . '</strong>' . ' ' . get_post($galleryID)->post_excerpt . '</div>';

                    echo '<div class="arrow iphone-only">';
                    echo '<img src="' . get_template_directory_uri() . '/assets/icons/button_arrow_right.png" alt="">';
                    echo '</div>';
                    echo '<div class="picto_goutte iphone-only">';
                    echo '<img src="' . get_template_directory_uri() . '/assets/icons/goutte1.png" alt="">';
                    echo '</div>';

                    if($key == count($gallery)) {
                        echo '</div>';
                    }

                    break;
                case 1 :
                    echo '<img src="' . $gallery[$key] . '" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour" data-bottom-top="transform:translateY(10px);" data-top-bottom="transform:translateY(-120px);">';
                    echo '<div class="text legende legende_2" data-bottom-top="transform:translateY(10px) rotate(90deg)" data-top-bottom="transform:translateY(-120px) rotate(90deg);"><strong>' . get_post($galleryID)->post_title . '</strong>' . ' ' . get_post($galleryID)->post_excerpt . '</div>';
                    echo '<div class="clear"></div>';
                    echo '</div>';
                    break;
                case 2 :
                    echo '<div class="secondrow ">';
                    echo '<img src="' . $gallery[$key] . '" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour" data-bottom-top="transform:translateY(-40px);" data-top-bottom="transform:translateY(-100px);">';
                    echo '<div class="text legende legende_3" data-bottom-top="transform:translateY(-40px) rotate(90deg)" data-top-bottom="transform:translateY(-100px) rotate(90deg);"><strong>' . get_post($galleryID)->post_title . '</strong>' . ' ' . get_post($galleryID)->post_excerpt . '</div>';
                    echo '<div class="arrow">';
                    echo '<img src="' . get_template_directory_uri() . '/assets/icons/button_arrow_right.png" alt="">';
                    echo '</div>';
                    echo '<div class="picto_goutte iphone-only">';
                    echo '<img src="' . get_template_directory_uri() . '/assets/icons/goutte1.png" alt="">';
                    echo '</div>';
                    echo '<div class="clear"></div>';
                    echo '</div>';
                    break;
                case 3 :
                    echo '<div class="thirdrow ">';
                    echo '<img src="' . $gallery[$key] . '" alt="Ventadour - Pestrin - Ardeche - ventadour" data-bottom-top="transform:translateY(-60px);" data-top-bottom="transform:translateY(-120px);">';
                    echo '<div class="text legende legende_4" data-bottom-top="transform:translateY(-60px) rotate(90deg)" data-top-bottom="transform:translateY(-120px) rotate(90deg);"><strong>' . get_post($galleryID)->post_title . '</strong>' . ' ' . get_post($galleryID)->post_excerpt . '</div>';
                    echo '<div class="clear"></div>';
                    echo '</div>';
                    break;
                case 4 :
                    echo '<div class="fourthrow ">';
                    echo '<img src="' . $gallery[$key] . '" alt="Chantemerle - Pestrin - Ardeche - ventadour" data-bottom-top="transform:translateY(-200px);" data-top-bottom="transform:translateY(-350px);">';
                    echo '<div class="text legende legende_5" data-bottom-top="transform:translateY(-200px) rotate(90deg)" data-top-bottom="transform:translateY(-300px) rotate(90deg);"><strong>' . get_post($galleryID)->post_title . '</strong>' . ' ' . get_post($galleryID)->post_excerpt . '</div>';

                    if($key == count($gallery)) {
                        echo '</div>';
                    }
                    break;
                case 5 :
                    echo '<img src="' . $gallery[$key] . '" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour" data-bottom-top="transform:translateY(-40px);" data-top-bottom="transform:translateY(-120px);">';
                    echo '<div class="text legende legende_6" data-bottom-top="transform:translateY(-40px) rotate(90deg)" data-top-bottom="transform:translateY(-120px) rotate(90deg);"><strong>' . get_post($galleryID)->post_title . '</strong>' . ' ' . get_post($galleryID)->post_excerpt . '</div>';
                    echo '<div class="picto_goutte">';
                    echo '<img src="' . get_template_directory_uri() . '/assets/icons/goutte1.png" alt="">';
                    echo '</div>';

                    echo '<div class="clear"></div>';
                    echo '</div>';
                    break;
                case 6 :
                    echo '<div class="fifthrow ">';
                    echo '<img src="' . $gallery[$key] . '" alt="Ventadour - Pestrin - Ardeche - ventadour" data-bottom-top="transform:translateY(-70px);" data-top-bottom="transform:translateY(-130px);">';
                    echo '<div class="text legende legende_7" data-bottom-top="transform:translateY(-70px) rotate(90deg)" data-top-bottom="transform:translateY(-130px) rotate(90deg);"><strong>' . get_post($galleryID)->post_title . '</strong>' . ' ' . get_post($galleryID)->post_excerpt . '</div>';
                    echo '<div class="arrow">';
                    echo '<img src="' . get_template_directory_uri() . '/assets/icons/button_arrow_right.png" alt="">';
                    echo '</div>';
                    echo '<div class="picto">';
                    echo '<img src="' . get_template_directory_uri() . '/assets/icons/picto2.png" alt="">';
                    echo '</div>';
                    echo '<div class="clear"></div>';
                    echo '</div>';
                    break;
            }
        }
        ?>


    </div>

    <div class="ardeche__bcg_footer">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/ardeche_footer.jpg"
             alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
        <div class="text legende legende_footer"><?= __('<strong>Montagne</strong> - Ardeche', 'pestrin'); ?></div>
        <div class="logo">
            <img src="<?= get_template_directory_uri(); ?>/assets/logos/ardeche_logo.png"
                 alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
        </div>
    </div>

</div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>
