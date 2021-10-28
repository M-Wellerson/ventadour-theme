<?php

function del_product_to_cart($request)
{
    header("Content-Type: text/html");

    $id = $_REQUEST['product_id'] ?? '';

    $full_url =  wc_get_cart_remove_url( $id );
    $full_url = str_replace('amp;','', $full_url);
    file_get_contents($full_url);
    
    $response = array(
        'next' => true,
        'product_id' => $product_id,
        'message' => "produto Removido com sucesso",
        'links' => array($full_url  )
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
