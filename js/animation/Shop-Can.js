import Lata from './Lata.js'

let shop1 = new Lata('canvas.can-shop-1');
shop1.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 2.5 }, { rotateX: 6.7, y: -5.5, x: -2, z: 4.5, rotateZ: Math.PI * -0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png")
shop1.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 1.5 }, { rotateX: 0, y: -7.5, x: -4.5, z: -0.7, rotateZ: Math.PI * 0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool.png")
shop1.action()

let shop2 = new Lata('canvas.can-shop-2');
shop2.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 2.5 }, { rotateX: 6.7, y: -5.5, x: -2, z: 4.5, rotateZ: Math.PI * -0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool-framboise.png")
shop2.add({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 1.5 }, { rotateX: 0, y: -7.5, x: -4.5, z: -0.7, rotateZ: Math.PI * 0.1 }, "./../wp-content/themes/rsw-pestrin/assets/images/can/textures/ocool.png")
shop2.action()