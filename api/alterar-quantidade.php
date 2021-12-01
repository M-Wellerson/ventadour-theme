<?php 

function alterar_quantidade(WP_REST_Request $request)
{
    // header("Content-Type: text/html");

    WC()->cart->set_quantity($request['key'], $request['quantidade'], true);

    $response = array(
        'next'    => true,
        'message' => "Quantidade alterada com sucesso!"
    );
    return rest_ensure_response($response);
}

add_action(
    "woocommerce_is_rest_api_request",
    function () {
        register_rest_route(
            "api",
            "/alterar-quantidade",
            [
                "methods"  => WP_REST_SERVER::CREATABLE,
                "callback" => "alterar_quantidade"
            ]
        );
    }
);