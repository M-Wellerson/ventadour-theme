<div class="carrinho-bg js-carrinho-bg"></div>
<div class="carrinho-container js-carrinho-container">
    <div class="carrinho-label">
        <span>MON PANIER</span>
        <span>FERMER</span>
        <span class="cursor_point" onclick="showCart()">x</span>
    </div>
    <div class="carrinho-scroll js-loop-itens">

        <?php
        global $woocommerce;
        $items = $woocommerce->cart->get_cart();

        foreach ($items as $item => $values) :
            $product  = wc_get_product($values['data']->get_id());
            $quantity = $values['quantity'];
            $price    = get_post_meta($values['product_id'], '_price', true);
        ?>

            <div class="carrinho-item">
                <div>
                    <img class="carrinho-image" src="<?= wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>">
                </div>
                <div>
                    <span class="carrinho-title"><?= $product->get_title(); ?></span>
                    <div class="carrinho-desc">
                        <div class="carrinho-count">
                            <span onclick="cart_minus('<?= $product->get_image_id() ?>', 1)">-</span>
                            <b><?= $quantity ?></b>
                            <span onclick="cart_plus('<?= $product->get_image_id() ?>', 1 )">+</span>
                        </div>
                        <div class="carrinho-description">
                            (PACK DE 6 CANETTES)
                        </div>
                        <div class="carrinho-price">100</div>
                    </div>
                </div>
                <span onclick="cart_remove('<?= $item ?>')" class="carrinho-item-close cursor_point">x</span>
            </div>
            '

        <?php endforeach ?>

    </div>
    <div class="carrinho-subtotal">
        <span>SUB TOTAL :</span>
        <b class="js-total-amount"><?= WC()->cart->get_cart_subtotal() ?></b>
    </div>
    <a href="<?= get_site_url() ?>/cart/" class="carrinho-link">acheter</a>
</div>
<script>
    globalThis._nonce = "<?= wp_create_nonce('remove_item_cedebb6e872f539bef8c3f919874e9d7') ?>"
</script>