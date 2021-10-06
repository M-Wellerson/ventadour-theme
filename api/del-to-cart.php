<?php

function del_product_to_cart($request)
{
    // header("Content-Type: text/html");

    global $woocommerce;

    if (is_null(WC()->cart)) {
        wc_load_cart();
    }

    $product_id = $request['product_id'];

    $woocommerce->cart->remove_cart_item($product_id);

    $response = array(
        'next' => true,
        'product_id' => $product_id,
        'message' => "produto adicionado com sucesso",
        'links' => array(
            $full_url
        )
    );

    return rest_ensure_response($response);
}

function register_del_product_to_cart()
{
    register_rest_route('api', '/del-to-cart', array(
        array(
            'methods' => 'GET',
            'callback' => 'del_product_to_cart'
        )
    ));
}

add_action('rest_api_init',  'register_del_product_to_cart');
