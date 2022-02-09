<?php
$ids = wc_get_products(array('return' => 'ids', 'limit' => -1));
?>

<div class="-container">

    <div class="banner-home js-banner-home">
        <div class="swiper-wrapper">
            <?php foreach ($ids as $id) : ?>
                <?php $product = wc_get_product($id); ?>
                <?php
                $caracteristicas_1_image = get_field("caracteristicas_1_image", $product->get_id()) ?? "";
                $caracteristicas_1_text  = get_field("caracteristicas_1_text", $product->get_id()) ?? "";
                $caracteristicas_2_image = get_field("caracteristicas_2_image", $product->get_id()) ?? "";
                $caracteristicas_2_text  = get_field("caracteristicas_2_text", $product->get_id()) ?? "";
                $caracteristicas_3_image = get_field("caracteristicas_3_image", $product->get_id()) ?? "";
                $caracteristicas_3_text  = get_field("caracteristicas_3_text", $product->get_id()) ?? "";
                ?>
                <div class="swiper-slide banner-home-slide" style="display: block !important; heigh: auto">
                    <img onclick="window.location.href='<?= get_permalink($product->get_id()); ?>'" src="<?= wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>">
                    <strong><?= $product->get_name(); ?></strong>
                    <span><?= $product->get_price(); ?> €</span>
                    <a href="javascript:void(0)" onclick="open_quick_view(
                        '<?= $product->get_name() ?>', 
                        '<?= $product->get_price() ?>', 
                        '<?= $product->get_short_description() ?>', 
                        '<?= $caracteristicas_1_image ?>',
                        '<?= $caracteristicas_1_text ?>',
                        '<?= $caracteristicas_2_image ?>',
                        '<?= $caracteristicas_2_text ?>',
                        '<?= $caracteristicas_3_image ?>',
                        '<?= $caracteristicas_3_text ?>',
                        '<?= $product->get_regular_price() ?>'
                        )">
                        quick view
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <span class="banner-control banner-nex"></span>
        <span class="banner-control banner-prev"></span>
    </div>

    <div class="home-quick-view js-home-quick-view" hidden>
        <div>
            <div>
                <strong class="home-quick-view-title">VENTADOUR</strong>
                <!-- <span class="home-quick-view-subtitle">GAZEUSE</span> -->
                <div class="home-quick-view-image">
                    <span style="background-color: #FDE17F;"></span>
                    <canvas width="500" height="500" class="can-of-soda"></canvas>
                    <!-- <img src="<?= get_template_directory_uri() ?>/assets/images/zoo.png"> -->
                </div>
            </div>
            <div class="banner-padding-left">
                <div class="flex flex-quick">
                    <strong class="home-quick-view-preco-sale text c-gray-300 font__futura-bold ricado"></strong>
                    <strong class="home-quick-view-preco">00,00 € </strong>
                </div>
                <a href="javascript:void(fetch('<?= $product->add_to_cart_url() ?>'));render_cart();" class="home-quick-view-add text_decoration-none" style="background-color: #FDE17F;">ajouter au panier</a>
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
                <div class="more-detail">
                    <img class="more-detail__quick-view-image-1" src="<?= get_template_directory_uri() ?>/assets/icons/close.png">
                    <span class="text more-detail__quick-view-text-1">...</span>
                </div>
                <div class="more-detail">
                    <img class="more-detail__quick-view-image-2" src="<?= get_template_directory_uri() ?>/assets/icons/close.png">
                    <span class="text more-detail__quick-view-text-2">...</span>
                </div>
                <div class="more-detail">
                    <img class="more-detail__quick-view-image-3" src="<?= get_template_directory_uri() ?>/assets/icons/close.png">
                    <span class="text more-detail__quick-view-text-3">...</span>
                </div>
            </div>
            <span onclick="close_quick_view()" class="quick-close">
                <img src="<?= get_template_directory_uri() ?>/assets/icons/close.png" alt="">
            </span>
        </div>
    </div>

</div>