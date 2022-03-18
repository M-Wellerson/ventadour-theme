<?php get_header(); ?>

<?php include_once('page_components/menu.php'); ?>

<?php
$caracteristicas_1_image = get_field("caracteristicas_1_image") ?? "";
$caracteristicas_1_text  = get_field("caracteristicas_1_text") ?? "";
$caracteristicas_2_image = get_field("caracteristicas_2_image") ?? "";
$caracteristicas_2_text  = get_field("caracteristicas_2_text") ?? "";
$caracteristicas_3_image = get_field("caracteristicas_3_image") ?? "";
$caracteristicas_3_text  = get_field("caracteristicas_3_text") ?? "";

$banner  = get_field("banner") ?? "";
$rotulo  = get_field("rotulo") ?? "";

$foto_1  = get_field("foto_1") ?? "";
$foto_2  = get_field("foto_2") ?? "";
$foto_3  = get_field("foto_3") ?? "";

$texto_fundo_animado  = get_field("texto_fundo_animado") ?? "";
$texto_fundo_animado = empty($texto_fundo_animado) ? "RELAXANTE" : $texto_fundo_animado;
for ($i = 0; $i < 3; $i++) {
    $texto_fundo_animado .= " " . $texto_fundo_animado;
}

$item_1_texto = get_field("item_1_texto") ?? "";
$item_1_image = get_field("item_1_image") ?? "";
$item_2_texto = get_field("item_2_texto") ?? "";
$item_2_image = get_field("item_2_image") ?? "";
$destaque_texto = get_field("destaque_texto") ?? "RELAXANTE";
$product = wc_get_product(get_the_ID());

$categoria      = get_the_terms($product->get_id(), 'product_cat');
$packs          = get_field('packs');
$packs          = explode("\n", $packs);
$packs          = array_filter($packs, function ($i) {
    return strlen($i) > 3;
});

global $woocommerce;

$procentagem = 0;
$preco = $product->get_regular_price();
$preco_aplicado_desconto = $product->get_price();
if ($preco != $preco_aplicado_desconto) {
    $procentagem = intval(100 - ($preco_aplicado_desconto * 100 / $preco));
}
$preco = number_format($preco, 2, ',', '.');
$preco_aplicado_desconto = number_format($preco_aplicado_desconto, 2, ',', '.');

?>

<script>
    globalThis._lata = '<?= $rotulo ?>'
</script>

<?php while (have_posts()) : the_post(); ?>

    <img class="big-banner-single" src="<?= $banner ?>">
    <div class="js-star-fix"></div>

    <div class="wrapper ventes js-warp">
        <div class="flex between s-grid-quick-view">
            <div class="relative">
                <strong class="title-big"><?php the_title() ?></strong><br>
                <span class="title-sub">GAZEUSE</span>
                <div class="home-quick-view-image home-quick-view-image-single">
                    <span style="background-color: #FDE17F;"></span>
                    <canvas width="500" height="500" class="can-of-soda can-of-soda-single"></canvas>
                </div>
            </div>
            <div>
                <div class="box-single js-single-snap">
                    <div class="mb-10">
                        <?php if ($procentagem) : ?>
                            <strong class="text c-gray-300 font__futura-bold <?= $procentagem ? 'ricado' : '' ?> ">
                                <?= $preco ?> €
                            </strong>
                        <?php endif; ?>
                        <strong class="text ml-10 font__futura-bold">
                            <?= $preco_aplicado_desconto ?> €
                        </strong>
                        <?php if ($procentagem) : ?>
                            <b class="text red-900 c-gray-50 single-discout ml-10 font__futura-bold">
                                - <?= $procentagem ?>%
                            </b>
                        <?php endif; ?>
                    </div>
                    <!-- <a href="javascript:void(fetch('<?= '?add-to-cart=' . $product->get_id() . '&quantity=2' ?>'));render_cart();" style="text-decoration: none;color: #282828;font-size: 20px;">
                        <span class="home-quick-view-add" style="background-color: #FDE17F;">
                            ajouter au panier
                        </span>
                    </a>  -->
                    <a href="javascript:void(0)" onclick="add_to_cart(this)" class="js-plus" data-id="<?= $product->get_id() ?>" data-quantity="1" style="text-decoration: none;color: #282828;font-size: 20px;">
                        <span class="home-quick-view-add" style="background-color: #FDE17F;">
                            ajouter au panier
                        </span>
                    </a>
                    <select class="home-quick-view-select text font__futura-CondensedLight font-uppercase">
                        <?php foreach ($categoria as $c) : ?>
                            <option value="<?= $c->slug; ?>"><?= $c->name; ?></option>
                        <?php endforeach ?>
                    </select>
                    <select onchange="set_quantity('.js-plus', this)" class="home-quick-view-select text mb-10 font__futura-CondensedLight font-uppercase">
                        <?php foreach ($packs as $p) : ?>
                            <option value="<?= $p[0]; ?>"><?= $p; ?></option>
                        <?php endforeach ?>
                    </select>
                    <a href="" class="home-quick-view-link text-small mb-10 font__futura-medium">INFORMATIONS NUTRICIONELLES</a>
                    <div class="more-detail">
                        <img src="<?= $caracteristicas_1_image ?>">
                        <span class="text font-uppercase"><?= $caracteristicas_1_text ?></span>
                    </div>
                    <div class="more-detail">
                        <img src="<?= $caracteristicas_2_image ?>">
                        <span class="text font-uppercase"><?= $caracteristicas_2_text ?></span>
                    </div>
                    <div class="more-detail mb-10">
                        <img src="<?= $caracteristicas_3_image ?>">
                        <span class="text font-uppercase"><?= $caracteristicas_3_text ?></span>
                    </div>
                    <div class="hr mb-10"></div>
                    <div class="flex between">
                        <div>
                            <a href="#" class="more-link text-small font__futura-book font-uppercase">je suis </a> <br>
                            <a href="#" class="more-link text-small font__futura-book font-uppercase">professionnel</a> <br>
                        </div>
                        <div>
                            <a href="#" class="more-link text-small font__futura-book font-uppercase">FAQ</a> <br>
                            <a href="#" class="more-link text-small font__futura-book font-uppercase">la LIVRAISON</a> <br>
                            <a href="#" class="more-link text-small font__futura-book font-uppercase">moyens de paiement</a> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-bg js-single-bg" style="--text: ' <?= $texto_fundo_animado ?> RELAXANTE RELAXANTE RELAXANTE'; --line-1: -500px; --line-2: -750px ">
        <div class="wrapper wrapper-absolute">
            <div class="single-grid-2">
                <div class="single-images">
                    <img src="<?= $foto_1 ?>" alt="">
                    <img src="<?= $foto_2 ?>" alt="">
                    <img src="<?= $foto_3 ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper" style="margin-bottom: 35px;">
        <div class="single-grid-2">
            <div>
                <!-- <h4 class="title mb-10">QUE EST CE QUE LE CBD ?</h4> -->
                <div class="description_single">
                    <?= $product->get_description(); ?>
                </div>
                <span class="single-sitacao text-small mb-30 font__futura-book">
                    <?= $destaque_texto ?>
                </span>
                <div class="hr"></div>
                <span class="single-list text-small">
                    <img src="<?= $item_1_image ?>">
                    <span class="font__futura-book">
                        <?= $item_1_texto ?>
                    </span>
                </span>
                <div class="hr"></div>
                <span class="single-list text-small">
                    <img src="<?= $item_2_image ?>">
                    <span class="font__futura-book">
                        <?= $item_2_texto ?>
                    </span>
                </span>
                <div class="hr"></div>
            </div>
        </div>
    </div>

    <div class="js-end-fix"></div>
    <div class="wrapper" style="margin-bottom: 100px;">
        <h4 class="title">AUTRES BOISSONS</h4>
    </div>
    <?php include('includes/slider-home.php'); ?>

    <div class="full-track">
        <div class="single-content">
            <div class="full-track-grid">
                <div class="track-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/truck.png">
                    <span>
                        Livraison gratuite <br>
                        à partir de 90€
                    </span>
                </div>
                <div class="track-space"></div>
                <div class="track-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/lock.png">
                    <span>
                        Paiement 100% <br>
                        sécurisé
                    </span>
                </div>
                <div class="track-space"></div>
                <div class="track-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/commet.svg">
                    <span>
                        Besoin d’aide ? <br>
                        Entrer en contact
                    </span>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php include('page_components/footer.php'); ?>

<script>
    window.scroll({
        behavior: 'smooth'
    });
    globalThis._banner_single = "<?= $rotulo ?>"

    window.onscroll = function() {
        const horizontal = document.querySelector('.js-single-bg');

        let andu = window.scrollY / 10
        // let x1 = window.scrollY / 4
        // let x2 = ((window.scrollY / 4) - 175) * -1 

        let x1 = parseInt(-500 + andu)
        let x2 = parseInt(-750 + -andu)

        // horizontal.style.backgroundPosition = `${x1}px 50px, ${x2}px 50px`;
        horizontal.style.setProperty('--line-1', `${x1}px`);
        horizontal.style.setProperty('--line-2', `${x2}px`);
    }

    function add_to_cart($el) {
        console.log($el)
        let id = $el.getAttribute('data-id')
        let quantity = $el.getAttribute('data-quantity')
        fetch(`?add-to-cart=${id}&quantity=${quantity}`)
        render_cart()
    }

    function set_quantity( selector, $el ) {
        let quantity =  $el.value
        document.querySelector(selector).setAttribute('data-quantity', quantity )
    }

</script>

<?php get_footer(); ?>