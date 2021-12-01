<?php

function deletar_prod($request)
{
    WC()->cart->remove_cart_item($request['id']);
    $response = array(
        'next'       => true,
        'product_id' => $request['id'],
        'message'    => "produto Removido com sucesso"
    );

    return rest_ensure_response($response);
}

add_action(
    "woocommerce_is_rest_api_request",
    function () {
        register_rest_route(
            "api",
            "/del-to-cart/(?P<id>\w+\d+)",
            [
                "method" => "GET",
                "callback" => "deletar_prod"
            ]
        );
    }
);