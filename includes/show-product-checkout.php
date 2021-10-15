<?php

add_filter('woocommerce_cart_item_name', 'ts_product_image_on_checkout', 10, 3);

function ts_product_image_on_checkout($name, $cart_item, $cart_item_key)
{
    if (!is_checkout()) {
        return $name;
    }
    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
    $thumbnail = $_product->get_image();
    $image = "
        <div class=\"largue-flex\">
            <div class=\"ts-product-image no-iphone\">$thumbnail</div>
            $name
        </div>
    ";
    return $image ;
}
