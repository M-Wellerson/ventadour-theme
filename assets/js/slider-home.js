globalThis._store = globalThis._store || {}
globalThis._store.banner = [
    {
        id: 1,
        nome: "O’COOL HIBISCUS",
        preco: 4.30,
        foto: "cool.png"
    },
    {
        id: 2,
        nome: "A.FER",
        preco: 4.30,
        foto: "afer.png"
    },
    {
        id: 3,
        nome: "OZAKE MENTHE",
        preco: 4.30,
        foto: "ozak.png"
    },
    {
        id: 4,
        nome: "VENTADOUR GAZEUSE",
        preco: 1.80,
        foto: "ventador.png"
    },
    {
        id: 5,
        nome: "VENTADOUR PLATE",
        preco: 1.80,
        foto: "ventador-2.png"
    },
]

function open_quick_view(
    id,
    price,
    short_descrition,
    caracteristicas_1_image,
    caracteristicas_1_text,
    caracteristicas_2_image,
    caracteristicas_2_text,
    caracteristicas_3_image,
    caracteristicas_3_text,
    price_sale
) {
    let $quick = document.querySelector('.js-home-quick-view')
    document.querySelector('.home-quick-view-title').innerHTML = id;
    document.querySelector('.home-quick-view-preco').innerHTML = `${price} €`;
    document.querySelector('.home-quick-view-description').innerHTML = short_descrition || '';
    document.querySelector('.more-detail__quick-view-text-1').innerHTML = caracteristicas_1_text || '';
    document.querySelector('.more-detail__quick-view-image-1').src = caracteristicas_1_image || '';
    document.querySelector('.more-detail__quick-view-text-2').innerHTML = caracteristicas_2_text || '';
    document.querySelector('.more-detail__quick-view-image-2').src = caracteristicas_2_image || '';
    document.querySelector('.more-detail__quick-view-text-3').innerHTML = caracteristicas_3_text || '';
    document.querySelector('.more-detail__quick-view-image-3').src = caracteristicas_3_image || '';
    document.querySelector('.home-quick-view-preco-sale').innerHTML = ''
    if( price_sale !=  price) {
        document.querySelector('.home-quick-view-preco-sale').innerHTML = `${price_sale} €`;
    }

    $quick.removeAttribute('hidden')
}
function close_quick_view() {
    let $quick = document.querySelector('.js-home-quick-view')
    $quick.setAttribute('hidden', '')
}

function template_slider(prod) {
    return `
    <div class="swiper-slide banner-home-slide" style="display: block !important; heigh: auto">
        <img onclick="window.location.href='${globalThis._state.domain}/product/teste/'" src="${globalThis._state.base}/assets/images/${prod.foto}">
        <strong>${prod.nome}</strong>
        <span>${prod.preco} €</span>
        <a href="javascript:void(0)" onclick="open_quick_view(${prod.id})">
            quick view
        </a>
    </div>
    `
}

let $banner_itens = document.querySelector('.js-banner-itens')
if ($banner_itens) {
    $banner_itens.innerHTML = globalThis._store.banner.map(template_slider).join('')
}



var swiper = new Swiper(".js-banner-home", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".banner-nex",
        prevEl: ".banner-prev",
    },
    breakpoints: {
        400: { slidesPerView: 2 },
        1000: { slidesPerView: 4 },
        1400: { slidesPerView: 5 },
    }
});