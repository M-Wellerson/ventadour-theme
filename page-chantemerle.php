<?php
/*
Template Name: Chantemerle template
*/
?>

<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>

    <div class="chantemerle__header">
        <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/chantemerle_header.jpg" alt="Chantemerle - Pestrin - Ardeche - ventadour">
        <div class="chantemerle__arrow">
            <a href="<?= $ventadourPage ?>">
                <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_left.png" alt="">
            </a>
        </div>
        <div class="chantemerle__header_title">
            <h1 class="fontpestrin white"><?= mb_strtoupper(__('Chantemerle', 'pestrin')); ?></h1>
            <div class="text condensedBold white"><?= mb_strtoupper(__('Eau minérale plate', 'pestrin')); ?></div>
        </div>
        <a class="header__next anchorLink" href="#chantemerle" data-link="chantemerle">
            <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow_right.png" alt="">
        </a>
        <div class="chantemerle__content_bottle"  data-bottom-top="transform:translateY(50px)" data-top-bottom="transform:translateY(-60px)">
            <img class="" src="<?= get_template_directory_uri(); ?>/assets/img/chantemerle_bottle.png" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
        </div>
    </div>

    <div class="wrapper chantemerle" id="chantemerle">
        <div class="blue_rectangle"></div>
        <div class="chantemerle__content_top">
            <div class="content_left"></div>
            <div class="content_right">

                <!-- ==== IPHONE ==== -->
                <div class="content__top_title iphone-only">
                    <h2 class="extra"><?= mb_strtoupper(__('Territoire', 'pestrin')); ?></h2>
                    <div class="text LTlight"><?= mb_strtoupper(__('Riche en minéraux', 'pestrin')); ?></div>
                </div>
                <!-- ==== ====== =====-->

                <div class="text">
                    <?= __('SANA PER AQUAM, la santé par l’eau, ainsi les Romains qualifiaient cette eauminérale
                    naturelle non gazeuse, unique en Ardèche, la Chantemerle, qui coulesous nos roches volcaniques.<br><br>
                    Le bien-être par l’eau, une promesse tenue grâce aux silices, à sa faible teneur en sel et à
                    l’absence de nitrate. Une eau minérale naturelle qui peut être bue par tous, à tous les âges et
                    tous les jours. Douce et veloutée en bouche, la Chantemerle relève avec finesse les saveurs et les
                    arômes.', 'pestrin'); ?>
                </div>
                <div class="content__top_title no-iphone">
                    <h2 class="extra"><?= mb_strtoupper(__('Territoire', 'pestrin')); ?></h2>
                    <div class="text LTlight"><?= mb_strtoupper(__('Riche en minéraux', 'pestrin')); ?></div>
                </div>
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
                <div class="content_picto_1">
                    <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/chantemerle_picto.png" alt="Chantemerle - Pestrin - Ardeche - ventadour">
                </div>
                <div class="content_picto_2">
                    <img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/picto2.png" alt="">
                </div>
            </div>
        </div>


        <div class="chantemerle__bottle_container">
            <!-- ==== IPAD ==== -->

            <div class="chantemerle__content ipad-only">
                <div><h4 class="medium"><?= mb_strtoupper(__('100 % naturelle', 'pestrin')); ?></h4></div>
                <div><h2 class="extra"><?= mb_strtoupper(__('Zero nitrate', 'pestrin')); ?></h2></div>
                <div class="text light"><?= mb_strtoupper(__('Convient aux régimes sans sel', 'pestrin')); ?></div>
                <div class="text condensedBold"><?= mb_strtoupper(__('faible teneur <br>en sodium', 'pestrin')); ?></div>
            </div>

            <!-- ==== ==== ==== -->

            <div class="chantemerle__bottle">
                <img class="no-iphone" src="<?= get_template_directory_uri(); ?>/assets/img/chantemerle_1868_blue.png"
                     alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">

                <!-- ==== IPAD ==== -->
                <img class="iphone-only" src="<?= get_template_directory_uri(); ?>/assets/img/chantemerle_1868_iphone.jpg"
                     alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
                <!-- ==== ==== ==== -->
            </div>
            <div class="chantemerle__tableau">
                <div class="tableau">
                    <div class="row">
                        <span class="extraBold"><?= __('SEL', 'pestrin'); ?></span><span
                                class="value extraBold">14,5 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Calcium', 'pestrin'); ?></span><span class="value">38 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Magnésium', 'pestrin'); ?></span><span class="value">11,9 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Potassium', 'pestrin'); ?></span><span class="value">1,7 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Nitrates', 'pestrin'); ?></span><span class="value">0</span>
                    </div>
                    <div class="row">
                        <span><?= __('Sulfates', 'pestrin'); ?></span><span class="value">2,7 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('Bicarbonates', 'pestrin'); ?></span><span class="value">210 mg/l</span>
                    </div>
                    <div class="row">
                        <span><?= __('PH', 'pestrin'); ?></span><span class="value">6,9</span>
                    </div>
                    <div class="row">
                        <span><?= __('silice', 'pestrin'); ?></span><span class="value">44,3 mg/l</span>
                    </div>
                </div>
            </div>
            <div class="chantemerle__content no-ipad">
                <div><h4 class="medium"><?= mb_strtoupper(__('100 % naturelle', 'pestrin')); ?></h4></div>
                <div><h2 class="extra"><?= mb_strtoupper(__('Zero nitrate', 'pestrin')); ?></h2></div>
                <div class="text light"><?= mb_strtoupper(__('Convient aux régimes sans sel', 'pestrin')); ?></div>
                <div class="text condensedBold"><?= mb_strtoupper(__('faible teneur <br>en sodium', 'pestrin')); ?></div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="ventadour__schema_container">
            <img class="no-iphone" src="<?= get_template_directory_uri(); ?>/assets/img/chantemerle_schema.png" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">

            <!-- ==== IPHONE ==== -->
            <img class="iphone-only" src="<?= get_template_directory_uri(); ?>/assets/img/chantemerle_schema_iphone.png" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
            <!-- ==== ====== ==== -->
        </div>
    </div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>