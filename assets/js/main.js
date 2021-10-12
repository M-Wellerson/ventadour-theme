function showCart() {
    $carrinhoBg = document.querySelector('.js-carrinho-bg')
    $carrinhoContainer = document.querySelector('.js-carrinho-container')

    $carrinhoBg.classList.toggle('carrinho-bg-active')
    $carrinhoContainer.classList.toggle('carrinho-container-active')
}

function snap_single() {
    let $el = document.querySelector('.js-single-snap')
    if (!$el) return
    globalThis._snap_top = globalThis._snap_top || $el.offsetTop - 120
    globalThis._snap_left = globalThis._snap_left || $el.offsetLeft
    if (window.scrollY >globalThis._snap_top) {
        $el.classList.add('quick-fix')
    } else {
        $el.classList.remove('quick-fix')
    }
    // $el.style.right = ($el.offsetLeft - $el.offsetWidth) + 'px'
    // console.log( $el.offsetWidth  )
}

snap_single();

window.addEventListener('scroll', () => {
    snap_single();
})