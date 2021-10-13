<?php

function add_product_to_cart($request)
{
    // header("Content-Type: text/html");

    global $woocommerce;

    if (is_null(WC()->cart)) {
        wc_load_cart();
    }

    $product_id = $request['product_id'];
    $quantity = $request['quantity'] ?? 1;

    $full_url = site_url();
    $full_url .= "/add-to-cart?product_id={$product_id}&quantity={$quantity}";

    $woocommerce->cart->add_to_cart($product_id, $quantity);

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


function register_add_product_to_cart()
{
    register_rest_route('api', '/add-to-cart', array(
        array(
            'methods' => 'GET',
            'callback' => 'add_product_to_cart'
        )
    ));
}

add_action('rest_api_init',  'register_add_product_to_cart');
