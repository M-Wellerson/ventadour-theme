import * as THREE from './three.js-master/build/three.module.js';
import { GLTFLoader } from './three.js-master/examples/jsm/loaders/GLTFLoader.js'
import { DRACOLoader } from './three.js-master/examples/jsm/loaders/DRACOLoader.js'

export default class Lata {

    texture = './../wp-content/themes/rsw-pestrin/assets/images/can/metal.jpg'
    draw3d = './../wp-content/themes/rsw-pestrin/assets/images/can/materials/can-of-soda-4.0.glb'
    
    canvas = null
    camera = null
    scene = null
    renderer = null
    light = 2.5
    scale = 0
    sizes = {
        width: 0,
        height: 0
    }

    constructor(selector, light = 2.3) {
        this.canvas = document.querySelector(selector)
        this.light = light
        if (!this.canvas) return null

        this.get_size()
        this.create_scene()
        this.create_camera()
        this.resize()
        this.add_light_in_scene()
        this.render()
        this.animate()
    }

    action() {
        this.render()
    }

    add(positionMove, positionCan, path_img) {

        const textureLoader = new THREE.TextureLoader();
        const texture = textureLoader.load(this.texture);
        const textureRotulo = textureLoader.load(path_img);

        texture.rotation = Math.PI * 2;
        texture.flipY = false;

        texture.minFilter = THREE.NearestFilter;
        texture.magFilter = THREE.NearestFilter;

        const dracoLoader = new DRACOLoader()
        dracoLoader.setDecoderPath('./draco/')

        const gltfLoader = new GLTFLoader()
        gltfLoader.setDRACOLoader(dracoLoader)

        gltfLoader.load(
            this.draw3d,
            gltf => {
                gltf.scene.scale.set(0.120 + this.scale, 0.105 + this.scale, 0.120 + this.scale);

                let mesh = gltf.scene.children[0];
                let mesh2 = gltf.scene.children[1];

                mesh.rotation.x += positionCan.rotateX;
                mesh2.rotation.x += positionCan.rotateX;

                mesh.position.y = positionCan.y;
                mesh.position.x = positionCan.x;
                mesh.position.z = positionCan.z;
                mesh2.position.y = positionCan.y;
                mesh2.position.x = positionCan.x;
                mesh2.position.z = positionCan.z;

                const cubeTextureLoader     = new THREE.CubeTextureLoader();
                const environmentMapTexture = cubeTextureLoader.load([
                    
                    './../wp-content/themes/rsw-pestrin/assets/images/can/4/px.png',              
                    './../wp-content/themes/rsw-pestrin/assets/images/can/4/nx.png',
                    './../wp-content/themes/rsw-pestrin/assets/images/can/4/py.png',
                    './../wp-content/themes/rsw-pestrin/assets/images/can/4/ny.png',
                    './../wp-content/themes/rsw-pestrin/assets/images/can/4/pz.png',
                    './../wp-content/themes/rsw-pestrin/assets/images/can/4/nz.png'
                ]);

                
                mesh.material = new THREE.MeshMatcapMaterial({
                    matcap: texture
                });

                mesh2.material = new THREE.MeshStandardMaterial({
                    map: textureRotulo,
                    envMap: environmentMapTexture,
                    metalness: .8,
                    roughness: .3,
                });

                gltf.scene.rotateZ(positionCan.rotateZ);

                this.scene.add(gltf.scene);

                gsap.registerPlugin(ScrollTrigger);

                gsap.to(gltf.scene.rotation, {
                    scrollTrigger: {
                        trigger: "body",
                        start: "top top",
                        end: "bottom bottom",
                        scrub: true,
                        toggleActions: "restart pause resume pause"
                    },
                    y: positionMove.rotateY,
                    transformOrigin: "left right",
                    ease: "none"
                });

                const tlCan = new TimelineMax({ repeat: -1 });
                let randomDur = gsap.utils.random(1, 3, 0.1, true);
                let randomDelay = gsap.utils.random(0.1, 1, 0.1, true);

                tlCan.to(gltf.scene.position, {
                    y: positionMove.y,
                    yoyo: true,
                    rotation: positionMove.rotation,
                    ease: "Power1.easeInOut",
                    duration: randomDur(),
                    delay: randomDelay(),
                    repeat: -1
                });
            },
            (progress) => {
                // console.log(progress);
            },
            console.log
        )
    }

    render() {
        this.renderer = new THREE.WebGLRenderer({
            canvas: this.canvas,
            alpha: true
        })
        this.renderer.shadowMap.enabled = true
        this.renderer.shadowMap.type = THREE.PCFSoftShadowMap
        this.renderer.setSize(this.sizes.width, this.sizes.height)
        this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    }

    add_light_in_scene() {
        let ambientLight = new THREE.AmbientLight(0xffffff, this.light);
        this.scene.add(ambientLight);
    }

    resize() {
        alert( window.innerWidth, window.innerHeight )
        window.addEventListener('resize', () => {
            this.sizes.width = window.innerWidth
            this.sizes.height = window.innerHeight
            this.camera.aspect = this.sizes.width / this.sizes.height
            this.camera.updateProjectionMatrix()
            this.renderer.setSize(this.sizes.width, this.sizes.height)
            this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
        })
    }

    create_camera() {
        this.camera = new THREE.PerspectiveCamera(20, this.sizes.width / this.sizes.height, 1, 3000);
        this.camera.position.set(0, 0, 7);
    }

    create_scene() {
        this.scene = new THREE.Scene();
    }

    get_size() { 
        this.sizes = {
            width: this.canvas.width,
            height: this.canvas.height
        }
    }

    animate() {
        this.renderer.render(this.scene, this.camera)
        requestAnimationFrame(() => this.animate())
    }

}