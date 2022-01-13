import Lata from './Lata.js'

// function on_rotate( el ) {
//     let $el = document.querySelector( el )
//     let el_top = $el.getBoundingClientRect().top
//     if( el_top < 500 && el_top > -1000  ) {
//         console.log("ON")
//         return Math.PI * 2.5
//     }
//     console.log("OFF")
//     return 0
// }

// on_rotate( 'canvas.can-shop-2' )

let shop1 = new Lata('canvas.can-shop-1');
shop1.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 2.5 }, { rotateX: 6.7, y: -5.5, x: -2, z: 4.5, rotateZ: Math.PI * -0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png")
shop1.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 1.5 }, { rotateX: 0, y: -7.5, x: -4.5, z: -0.7, rotateZ: Math.PI * 0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool.png")

let shop2 = new Lata('canvas.can-shop-2');

// function render_animate_rotate() {
//     globalThis._shop2_animate = on_rotate('canvas.can-shop-2')
//     requestAnimationFrame(render_animate_rotate)
// }
// render_animate_rotate()



let o_coll = new Lata('.js-shop-o-coll')
o_coll.add(
    { 
        y: '-=0.1, +=0.2', 
        rotation: '-=1', 
        rotateY: Math.PI * 2.5 
    },
    {
        rotateX: 0,
        y: -9,
        x: 0,
        z: 0,
        rotateZ: Math.PI * -0.03
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/collagene.png"
)

o_coll.add(
    { 
        y: '-=0.1, +=0.2', 
        rotation: '-=1', 
        rotateY: Math.PI * 2.5 
    },
    {
        rotateX: -6.9,
        y: -7,
        x: 6,
        z: 3.5,
        rotateZ: Math.PI * +0.07
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/collagene.png"
)

shop2.add(
    { 
        y: '-=0.1, +=0.2', 
        rotation: '-=1', 
        rotateY: Math.PI * 2.5 
    },
    {
        rotateX: 0.2,
        y: -7,
        x: -5,
        z: -3,
        rotateZ: Math.PI * +0.2
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/1868.png"
)
shop2.add(
    { 
        y: '-=0.1, +=0.2', 
        rotation: '-=1', 
        rotateY: Math.PI * 2.5 
    },
    {
        rotateX: -6.7,
        y: -5.5,
        x: 0,
        z: -3,
        rotateZ: Math.PI * 0.2
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/minerale.png"
)


let a_fer = new Lata('.js-a-fer')
a_fer.add(
    { 
        y: '-=0.1, +=0.2', 
        rotation: '-=1', 
        rotateY: Math.PI * 0 
    },
    {
        rotateX: 0.7,
        y: -5.5,
        x: 0,
        z: -1.5,
        rotateZ: Math.PI * 0.2
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/afer.png"
)

let o_vive = new Lata('.js-o-vive')
o_vive.add(
    { 
        y: '-=0.1, +=0.2', 
        rotation: '-=1', 
        rotateY: Math.PI * 2.5 
    },
    {
        rotateX: -6.7,
        y: -5.5,
        x: 0,
        z: -3.5,
        rotateZ: Math.PI * 0.1
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/01.png"
)
o_vive.add(
    { 
        y: '-=0.1, +=0.2', 
        rotation: '-=1', 
        rotateY: Math.PI * 2.5 
    },
    {
        rotateX: 6.7,
        y: -5.5,
        x: -5,
        z: 3.5,
        rotateZ: Math.PI * +0.1
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/02.png"
)

let o_zak = new Lata('.js-o-zak')

o_zak.scale = -0.030

let o_zak_animate = {
    y: '-=0.1, +=0.2', 
    rotation: '=0', 
    rotateY: 0 
}
let o_zak_default = {
    rotateX: 6.7,
    y: -5.5,
    x: -15,
    z: 1,
    rotateZ: Math.PI * + 0
}

o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        y: -1
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ozake-5.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: -7,
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ozake-2.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: 0,
        y: 0
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ozake-1.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: 7,
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ozake-4.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: 15,
        y: -2
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ozake-3.png"
)