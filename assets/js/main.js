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

    if (window.scrollY >globalThis._snap_top && window.scrollY < 1700 ) {
        $el.classList.add('quick-fix')
    } else {
        $el.classList.remove('quick-fix')
    }

    let largura_div = document.querySelector('.js-warp').offsetWidth
    let largura_tela = window.screen.width
    let distancia =  ((largura_tela - largura_div) / 2) + 55

    $el.style.right = `${distancia}px`
    // $el.style.right = ($el.offsetLeft - $el.offsetWidth) + 'px'
    // console.log( $el.offsetWidth  )
}

snap_single();

window.addEventListener('scroll', () => {
    snap_single();
})

globalThis._ui_cart = {
    set total(val) {
        document.querySelector('.js-total-itens').innerHTML = val
    },
    set total_amount(val) {
        val = parseInt(val) || 0
        val = val / 100
        val = val.toLocaleString('en-US', { style: 'currency', currency: 'BRL', })
        document.querySelector('.js-total-amount').innerHTML = val
    },
    set itens(list) {
        list = Object.values( list )
        let template = i => `
            <div class="carrinho-item">
                <div>
                    <img class="carrinho-image" src="${i.thumbnail}" >
                </div>
                <div>
                        <span class="carrinho-title">${i.name}</span>
                        <div class="carrinho-desc">
                            <div class="carrinho-count">
                                <span onclick="cart_minus(${i.product_id}, ${i.quantity})">-</span>
                                <b>${i.quantity}</b>
                                <span onclick="cart_plus(${i.product_id}, ${i.quantity})">+</span>
                            </div>
                            <div class="carrinho-description">
                                (PACK DE 6 CANETTES)
                            </div>
                            <div class="carrinho-price"${i.line_subtotal}</div>
                        </div>
                    </div>
                    <span onclick="cart_remove(${i.product_id})" class="carrinho-item-close">x</span>            
                </div>
            </div>
        `
        document.querySelector('.js-loop-itens').innerHTML = list.map(template).join('')
    }
}

async function cart_plus( id, quantity ) {
    quantity = quantity + 1
    let path = `${window.location.protocol}//${window.location.hostname}/`
    path += `?add-to-cart=${id}&quantity=1`
    await fetch(path)
    render_cart()
}

async function cart_minus( id, quantity ) {
    quantity = quantity - 1
    let path = `${window.location.protocol}//${window.location.hostname}/`
    path += `?add-to-cart=${id}&quantity=1`
    await fetch(path)
    render_cart()
}

async function cart_remove( id ) {
    let path = `${window.location.protocol}//${window.location.hostname}/wp-json/api/del-to-cart`
    path += `?product_id=${id}`
    await fetch(path)
    render_cart()
}

async function cart_add( id ) {
    let path = `${window.location.protocol}//${window.location.hostname}/`
    path += `?add-to-cart=${id}&quantity=1`
    await fetch(path)
    render_cart()
}



async function render_cart() {
    let path = `${window.location.protocol}//${window.location.hostname}/wp-json/api/get-cart`
    let res = await (await fetch(path)).json()
    let total_itens = Object.keys( res.itens ).length

    globalThis._ui_cart.total = total_itens
    globalThis._ui_cart.total_amount = res?.total || 0
    globalThis._ui_cart.itens = res?.itens || {}
}

render_cart()