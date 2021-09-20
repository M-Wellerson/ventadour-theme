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

function open_quick_view(id) {
    let $quick = document.querySelector('.js-home-quick-view')
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

$banner_itens = document.querySelector('.js-banner-itens')
$banner_itens.innerHTML = globalThis._store.banner.map(template_slider).join('')



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