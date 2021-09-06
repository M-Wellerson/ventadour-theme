<?php
/*
Template Name: Ventadour template
*/
?>

<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>
<?php include_once('page_components/links.php'); ?>

    <div class="ventadour__header">
        <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_header.jpg" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
        <div class="ventadour__arrow">
            <a href="<?= $chantemerlePage ?>">
                <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="">
            </a>
        </div>
        <div class="ventadour__header_title">
            <h2 class="extra white"><?= mb_strtoupper(__('Eau minerale', 'pestrin')); ?></h2>
            <h1 class="fontpestrin white"><?= mb_strtoupper(__('Ventadour', 'pestrin')); ?></h1>
            <div class="text condensedBold white"><?= mb_strtoupper(__('Naturellement gazeuse', 'pestrin')); ?></div>
        </div>
        <a class="header__next anchorLink" href="#ventadour" data-link="ventadour">
            <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow_right.png" alt="">
        </a>
        <div class="ventadour__content_bottle" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform:translateY(-60px)">
            <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_bottle.png" alt="Ventadour - Pestrin - Ardeche - ventadour">
        </div>
    </div>

    <div class="wrapper ventadour" id="ventadour">
        <div class="yellow_rectangle"></div>
        <div class="ventadour__content_top no-iphone">
            <div class="content_left">
            </div>
            <div class="content_right">
                <div class="text">
                    <?= __('Rares, équilibrées et 100 % naturelles, les eaux minérales du Pestrin sont
                    appréciées des amateurs de produits naturels et biologiques et c’est pourquoi vous pouvez vous les
                        procurer dans de nombreuses enseignes spécialisées en produits biologiques.', 'pestrin'); ?>
                </div>
                <h2 class="extra"><?= mb_strtoupper(__('Naturellement', 'pestrin')); ?></h2>
                <h2 class="medium"><?= mb_strtoupper(__('Pétillante', 'pestrin')); ?></h2>
                <div class="text">
                    <?= __('Eaux digestives par excellence, leur richesse en oligo-éléments, les rend stimulantes.
                        Faiblement minéralisées, elles conviennent à tous pour une consommation quotidienne. <br><br>D’autant
                        plus, que leur faible teneur en sodium, les rend tout à fait compatible avec les régimes sans
                        sel, et peuvent être consommées, d’une manière générale, par tous ceux qui sont soucieux de
                        leur ligne. <br><br>Le Pestrin lieu-dit terme designant le «coeur» du volcan.', 'pestrin'); ?>
                </div>
                <div class="content_arrow">
                    <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_left.png" alt="">
                </div>
                <div class="content_picto">
                    <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/ventadour_picto.png" alt="">
                </div>
            </div>
        </div>

        <!-- IPHONE-->

        <div class="ventadour__content_top iphone-only">
            <div class="content__top_title">
                <h2 class="extra"><?= mb_strtoupper(__('Naturell<br>-ement', 'pestrin')); ?></h2>
                <h2 class="medium"><?= mb_strtoupper(__('Pétillante', 'pestrin')); ?></h2>
            </div>
            <div class="content__top">
                <div class="text">
                    <?= __('<br>Rares, équilibrées et 100 % naturelles, les eaux minérales du Pestrin sont
                    appréciées des amateurs de produits naturels et biologiques et c’est pourquoi vous pouvez vous les
                        procurer dans de nombreuses enseignes spécialisées en produits biologiques.<br><br>', 'pestrin'); ?>
                </div>
                <div class="text">
                    <?= __('Eaux digestives par excellence, leur richesse en oligo-éléments, les rend stimulantes.
                        Faiblement minéralisées, elles conviennent à tous pour une consommation quotidienne. <br><br>D’autant
                        plus, que leur faible teneur en sodium, les rend tout à fait compatible avec les régimes sans
                        sel, et peuvent être consommées, d’une manière générale, par tous ceux qui sont soucieux de
                        leur ligne. <br><br>Le Pestrin lieu-dit, terme designant le «coeur» du volcant.', 'pestrin'); ?>
                </div>
            </div>
        </div>

        <!-- ===== -->

        <div class="ventadour__bottle_container">

            <!-- IPHONE -->

            <div class="ventadour__content ipad-only">
                <div><h4 class="medium"><?= mb_strtoupper(__('100 % naturelle', 'pestrin')); ?></h4></div>
                <div><h2 class="extra"><?= mb_strtoupper(__('Zero nitrate', 'pestrin')); ?></h2></div>
                <div class="text light"><?= mb_strtoupper(__('Convient aux régimes sans sel', 'pestrin')); ?></div>
                <div class="text condensedBold"><?= mb_strtoupper(__('faible teneur <br>en sodium', 'pestrin')); ?></div>
            </div>

            <!-- ====== -->


            <div class="ventadour__bottle">
                <img class="no-iphone" src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_1868_yellow.png"
                     alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">

                <!-- IPHONE -->
                <img class="iphone-only" src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_1868_iphone.jpg"
                     alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
                <!-- ====== -->
            </div>
            <div class="ventadour__tableau">
                <div class="ventadour__tableau">
                <div class="yellow_rectangle_tab"></div>
                    <div class="row">
                        <span class="extraBold"><?= __('SEL', 'pestrin'); ?></span><span
                                class="value extraBold">15 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Calcium', 'pestrin'); ?></span><span class="value">33 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Magnésium', 'pestrin'); ?></span><span class="value">11,3 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Potassium', 'pestrin'); ?></span><span class="value">1,2 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Nitrates', 'pestrin'); ?></span><span class="value">0</span>
                    </div>
                    <div class="row">
                        <span><?= __('Sulfates', 'pestrin'); ?></span><span class="value">2,1 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Bicarbonates', 'pestrin'); ?></span><span class="value">150 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('PH', 'pestrin'); ?></span><span class="value">5,2</span>
                    </div>
                    <div class="row">
                        <span><?= __('silice', 'pestrin'); ?></span><span class="value">45,7 mg/l</span>
                    </div>
                </div>
            </div>
            <div class="ventadour__content no-ipad">
                <div><h4 class="medium"><?= mb_strtoupper(__('100 % naturelle', 'pestrin')); ?></h4></div>
                <div><h2 class="extra"><?= mb_strtoupper(__('Zero nitrate', 'pestrin')); ?></h2></div>
                <div class="text light"><?= mb_strtoupper(__('Convient aux régimes sans sel', 'pestrin')); ?></div>
                <div class="text condensedBold"><?= mb_strtoupper(__('faible teneur <br>en sodium', 'pestrin')); ?></div>
            </div>
            <div class="ventadour__picto_bottle">
                <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
            </div>
            <div class="clear"></div>
        </div>

        <div class="ventadour__schema_container">
            <div class="ventadour__schema_title">
                <div><h4 class="medium"><?= mb_strtoupper(__('d\'ou viennent ', 'pestrin')); ?></h4></div>
                <div><h2 class="extra"><?= mb_strtoupper(__('les bulles ?', 'pestrin')); ?></h2></div>
            </div>
            <div class="ventadour__schema no-iphone">
                <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_schema.png" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
            </div>

            <!-- IPHONE -->
            <div class="ventadour__schema iphone-only">
                <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_schema_iphone.png" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
            </div>

            <div class="text iphone-only">
                <?= __('Le CO2, présent dans les profondeurs, s’échappe par les fractures, en remontant il se dissout
                dans les milieux aquifères, ce qui donne notre Ventadour !<br><br>', 'pestrin'); ?>
            </div>
            <div class="text iphone-only">
                <?= __('Massif cristallin rompu suite aux tremblements de terre précédant les éruptions volcaniques.', 'pestrin'); ?>
            </div>
            <!-- ==== -->
        </div>
    </div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>