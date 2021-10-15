import * as THREE from './three.js-master/build/three.module.js';
import { GLTFLoader } from './three.js-master/examples/jsm/loaders/GLTFLoader.js'
import { DRACOLoader } from './three.js-master/examples/jsm/loaders/DRACOLoader.js'

let camera, scene, renderer, canvas;

init();
animate();

function init() {
    if (document.querySelector("canvas.can-shop-1")) {
        canvas      = document.querySelector("canvas.can-shop-1");
        const sizes = {
            width: canvas.width,
            height: canvas.height
        };

        scene  = new THREE.Scene();
        camera = new THREE.PerspectiveCamera(20, sizes.width / sizes.height, 1, 3000);
        camera.position.set(0, 0, 7);

        can({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 2.5 }, { rotateX: 6.7, y: -5.5, x: -2, z: 4.5, rotateZ: Math.PI * -0.1 }, "./../wp-content/themes/ventadour-theme/assets/images/can/textures/ocool-framboise.png");
        can({ y: '-=0.1, +=0.2', rotation: '-=1', rotateY: Math.PI * 1.5 }, { rotateX: 0, y: -7.5, x: -4.5, z: -0.7, rotateZ: Math.PI * 0.1 }, "./../wp-content/themes/ventadour-theme/assets/images/can/textures/ocool.png");

        window.addEventListener('resize', () => {
            // Update sizes
            sizes.width  = canvas.innerWidth;
            sizes.height = canvas.innerHeight;

            // Update camera
            camera.aspect = sizes.width / sizes.height;
            camera.updateProjectionMatrix();

            // Update renderer
            renderer.setSize(sizes.width, sizes.height);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        })

        const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
        scene.add(ambientLight);

        renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            alpha: true
        });
        renderer.shadowMap.enabled = true;
        renderer.shadowMap.type    = THREE.PCFSoftShadowMap;
        renderer.setSize(sizes.width, sizes.height);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    }
}


function animate() {
    if (document.querySelector("canvas.can-shop-1")) {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }
}

function can(positionMove, positionCan, rotulo) {
    //texture
    const textureLoader     = new THREE.TextureLoader();
    const texture           = textureLoader.load("./../wp-content/themes/ventadour-theme/assets/images/can/metal.jpg");
    const textureRotulo     = textureLoader.load(rotulo);
    texture.rotation = 10;
    texture.generateMipmaps = false;
    texture.minFilter       = THREE.NearestFilter;
    texture.magFilter       = THREE.NearestFilter;

    // Models
    const dracoLoader = new DRACOLoader()
    dracoLoader.setDecoderPath('./draco/')

    const gltfLoader = new GLTFLoader()
    gltfLoader.setDRACOLoader(dracoLoader)

    gltfLoader.load(
        './../wp-content/themes/ventadour-theme/assets/images/can/materials/can-of-soda-4.0.glb',
        (gltf) => {
            gltf.scene.scale.set(0.120, 0.105, 0.120);

            let mesh  = gltf.scene.children[0];
            let mesh2 = gltf.scene.children[1];

            // mesh.rotation.z  += 2.5;
            // mesh2.rotation.z += 2.5;
            mesh.rotation.x  += positionCan.rotateX;
            mesh2.rotation.x += positionCan.rotateX;

            mesh.position.y   = positionCan.y;
            mesh.position.x   = positionCan.x;
            mesh.position.z   = positionCan.z;
            mesh2.position.y  = positionCan.y;
            mesh2.position.x  = positionCan.x;
            mesh2.position.z  = positionCan.z;

            mesh.material = new THREE.MeshMatcapMaterial({
                matcap: texture
            });

            mesh2.material = new THREE.MeshStandardMaterial({
                map: textureRotulo,
                metalness: .1,
                roughness: .1
            });
            gltf.scene.rotateZ(positionCan.rotateZ);
            scene.add(gltf.scene);

            // gsap
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
            const tlCan     = new TimelineMax({ repeat: -1 });
            let randomDur   = gsap.utils.random(1, 3, 0.1, true);
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
        (error) => {
            console.log(error);
        }
    )
}