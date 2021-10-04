function showCart() {
    $carrinhoBg = document.querySelector('.js-carrinho-bg')
    $carrinhoContainer = document.querySelector('.js-carrinho-container')

    $carrinhoBg.classList.toggle('carrinho-bg-active')
    $carrinhoContainer.classList.toggle('carrinho-container-active')

    
}