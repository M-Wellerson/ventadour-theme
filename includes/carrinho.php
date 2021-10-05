<div class="carrinho-bg js-carrinho-bg"></div>
<div class="carrinho-container js-carrinho-container">
    <div class="carrinho-label">
        <span>MON PANIER</span>
        <span>FERMER</span>
        <span onclick="showCart()">x</span>
    </div>
    <div class="carrinho-scroll">
        <div class="carrinho-item">
            <div>
                <img class="carrinho-image" src="<?= get_template_directory_uri() ?>/assets/images/cart-tem.png" >
            </div>
            <div>
                <span class="carrinho-title">O’cool hibiscus</span>
                <div class="carrinho-desc">
                    <div class="carrinho-count">
                        <span>-</span>
                        <b>1</b>
                        <span>+</span>
                    </div>
                    <div class="carrinho-description">
                        (PACK DE 6 CANETTES)
                    </div>
                    <div class="carrinho-price">32,50 €</div>
                </div>
            </div>
            <span class="carrinho-item-close">x</span>

        </div>
    </div>
    <div class="carrinho-subtotal">
        <span>SUB TOTAL :</span>
        <b>75,00 €</b>
    </div>
    <a href="<?= get_site_url() ?>/cart/" class="carrinho-link">acheter</a>
</div>