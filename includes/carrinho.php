<div class="carrinho-bg js-carrinho-bg"></div>
<div class="carrinho-container js-carrinho-container">
    <div class="carrinho-label">
        <span>MON PANIER</span>
        <span>FERMER</span>
        <span onclick="showCart()">x</span>
    </div>
    <div class="carrinho-scroll js-loop-itens">

        <?php
        global $woocommerce;
        $items = $woocommerce->cart->get_cart();

        foreach ($items as $item => $values) {
            $product  = wc_get_product($values['data']->get_id());
            $quantity = $values['quantity'];
            $price    = get_post_meta($values['product_id'], '_price', true);

            echo '
            <div class="carrinho-item">
            <div>
                <img class="carrinho-image" src="' . wp_get_attachment_image_url($product->get_image_id(), 'full') . '" >
            </div>
            <div>
                <span class="carrinho-title">' . $product->get_title() . '</span>
                <div class="carrinho-desc">
                    <div class="carrinho-count">
                        <span onclick="cart_minus(' . $product->get_image_id() . ', 1">-</span>
                        <b>'. $quantity .'</b>
                        <span onclick="cart_plus(' . $product->get_image_id() . ', 1">+</span>
                    </div>
                    <div class="carrinho-description">
                        (PACK DE 6 CANETTES)
                    </div>
                    <div class="carrinho-price">100</div>
                </div>
            </div>
                <a href="#" class="carrinho-item-close">x9</a>            
            </div>
            ';
        };
        ?>

    </div>
    <div class="carrinho-subtotal">
        <span>SUB TOTAL :</span>
        <b class="js-total-amount"><?= WC()->cart->get_cart_subtotal() ?></b>
    </div>
    <a href="<?= get_site_url() ?>/cart/" class="carrinho-link">acheter</a>
</div>
<script>
    console.log('<?= wc_get_cart_remove_url( 'cedebb6e872f539bef8c3f919874e9d7' );?>')
    console.log('http://ventadour.con/cart/?remove_item=cedebb6e872f539bef8c3f919874e9d7&_wpnonce=bee6bfbf7d')
    globalThis._nonce = "<?= wp_create_nonce('remove_item_cedebb6e872f539bef8c3f919874e9d7') ?>"
</script>