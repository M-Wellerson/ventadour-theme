<?php

function get_cart_wc($request)
{
    // header("Content-Type: text/html");

    global $woocommerce;

    if (is_null(WC()->cart)) {
        wc_load_cart();
    }

    $itens = $woocommerce->cart->get_cart();
    $total = $woocommerce->cart->cart_contents_total;

    
    foreach( $itens as $k => $i ) {
        $default_prod = wc_get_product($i['product_id']);
        $itens[$k]['thumbnail'] = get_the_post_thumbnail_url($i['product_id']);
        $itens[$k]['name'] = $default_prod->get_name();
    }

    return rest_ensure_response([
        'itens' => $itens,
        'total' => $total
    ]);
}


function register_get_cart_wc()
{
    register_rest_route('api', '/get-cart', array(
        array(
            'methods' => 'GET',
            'callback' => 'get_cart_wc'
        )
    ));
}

add_action('rest_api_init',  'register_get_cart_wc');
