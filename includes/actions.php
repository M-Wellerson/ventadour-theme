<?php
(function () {
    if (!empty($_REQUEST['removed_item'])) {
        global $woocommerce;
        if (is_null(WC()->cart)) {
            wc_load_cart();
        }    
        $ID = $_REQUEST['removed_item'];
        // var_dump(WC()->cart);
        // WC()->cart->remove_cart_item($ID);
        // $woocommerce->cart->remove_cart_item($ID);
    }
})();
