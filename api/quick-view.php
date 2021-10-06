<?php

function quick_view_wc($request)
{
    // header("Content-Type: text/html");
    global $woocommerce;
    $product_id = $request['product_id'];
    $product = wc_get_product($product_id);
    $response = (array) $product->get_data();
    $response['thumbnail'] = get_the_post_thumbnail_url($product->get_id());
    return rest_ensure_response($response);
}

function register_quick_view_wc()
{
    register_rest_route('api', '/quick-view', array(
        array(
            'methods' => 'GET',
            'callback' => 'quick_view_wc'
        )
    ));
}

add_action('rest_api_init',  'register_quick_view_wc');
