<div class="-container">

    <div class="banner-home js-banner-home">
        <div class="swiper-wrapper js-banner-itens">
            <!-- content by js -->
        </div>
        <span class="banner-control banner-nex"></span>
        <span class="banner-control banner-prev"></span>
    </div>

    <div class="home-quick-view js-home-quick-view" hidden>
        <div>
            <div>
                <strong class="home-quick-view-title">VENTADOUR</strong>
                <span class="home-quick-view-subtitle">GAZEUSE</span>
                <div class="home-quick-view-image">
                    <span style="background-color: #FDE17F;"></span>
                    <img src="<?= get_template_directory_uri() ?>/assets/images/zoo.png">
                </div>
            </div>
            <div class="banner-padding-left">
                <strong class="home-quick-view-preco">32,50 € </strong>
                <span class="home-quick-view-add" style="background-color: #FDE17F;">ajouter au panier</span>
                <select class="home-quick-view-select">
                    <option>Gazeuse</option>
                </select>
                <select class="home-quick-view-select">
                    <option>3 x PACKS DE 6</option>
                </select>
                <a href="" class="home-quick-view-link">INFORMATIONS NUTRICIONELLES</a>
                <p class="home-quick-view-description">
                    <b>100% naturelles, garanties zéro nitrate!</b>
                    Une pure eau minérale naturelle,
                    venue des volcans d’ardèche! !
                </p>
                <br>
                <img src="<?= get_template_directory_uri() ?>/assets/images/logos.png" width="100%">
            </div>
            <span onclick="close_quick_view()" class="quick-close">x</span>
        </div>
    </div>

</div>