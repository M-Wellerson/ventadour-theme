import Lata from './Lata.js'

let shop1 = new Lata('canvas.can-shop-1');
shop1.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 2.5 }, { rotateX: 6.7, y: -5.5, x: -2, z: 4.5, rotateZ: Math.PI * -0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png")
shop1.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 1.5 }, { rotateX: 0, y: -7.5, x: -4.5, z: -0.7, rotateZ: Math.PI * 0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool.png")

let shop2 = new Lata('canvas.can-shop-2');
shop2.add(
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
        z: -3.5,
        rotateZ: Math.PI * 0.1
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/minerale.png"
)



let o_coll = new Lata('.js-shop-o-coll')
o_coll.add(
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
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/collagene.png"
)
o_coll.add(
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
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/collagene.png"
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
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png"
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
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/collagene.png"
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
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/collagene.png"
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
    rotateZ: Math.PI * +0
}

o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        y: -1
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: -7,
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: 0,
        y: 0
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: 7,
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png"
)
o_zak.add(
    o_zak_animate,
    {
        ...o_zak_default,
        x: 15,
        y: -2
    },
    "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png"
)