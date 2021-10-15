import * as THREE from './three.js-master/src/Three.js'
import { OrbitControls } from './three.js-master/examples/jsm/controls/OrbitControls.js'
import { GLTFLoader } from './three.js-master/examples/jsm/loaders/GLTFLoader.js'
import { DRACOLoader } from './three.js-master/examples/jsm/loaders/DRACOLoader.js'

function main(nameClass, gltfFile) {
    if (document.querySelector(nameClass)) {
        // Canvas
        const canvas = document.querySelector(nameClass)
        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            alpha: true
        })

        // Scene
        const scene = new THREE.Scene()

        //texture
        const textureLoader = new THREE.TextureLoader();
        const texture = textureLoader.load("./../../wp-content/themes/ventadour-theme/assets/images/can/metal.jpg");
        const textureRotulo = textureLoader.load("./../../wp-content/themes/ventadour-theme/assets/images/can/textures/rotulo.png");
        texture.generateMipmaps = false;
        texture.minFilter = THREE.NearestFilter;
        texture.magFilter = THREE.NearestFilter;

        // Models
        const dracoLoader = new DRACOLoader()
        dracoLoader.setDecoderPath('./draco/')

        const gltfLoader = new GLTFLoader()
        gltfLoader.setDRACOLoader(dracoLoader)

        gltfLoader.load(
            gltfFile,
            (gltf) => {
                gltf.scene.scale.set(0.080, 0.065, 0.080);
                let mesh = gltf.scene.children[0];
                let mesh2 = gltf.scene.children[1];
                mesh.position.y = 4.5;
                mesh2.position.y = 4.5;
                mesh.material = new THREE.MeshMatcapMaterial({
                    matcap: texture
                });
                mesh2.material = new THREE.MeshStandardMaterial({
                    map: textureRotulo,
                    metalness: .1,
                    roughness: .1
                });

                scene.add(gltf.scene);
            },
            (progress) => {
                // console.log(progress);
            },
            (error) => {
                console.log(error);
            }
        )
        const sizes = {
            width: canvas.width,
            height: canvas.height
        }

        // window.addEventListener('resize', () => {
        //     // Update sizes
        //     sizes.width = canvas.innerWidth;
        //     sizes.height = canvas.innerHeight;

        //     // Update camera
        //     camera.aspect = sizes.width / sizes.height;
        //     camera.updateProjectionMatrix();

        //     console.log('tafarellllll')

        //     // Update renderer
        //     renderer.setSize(sizes.width, sizes.height);
        //     renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        // })

        //Lights
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
        scene.add(ambientLight);

        const camera = new THREE.PerspectiveCamera(20, sizes.width / sizes.height, 1, 3000);
        camera.position.set(2, 2, 2);
        scene.add(camera);

        // Controls
        const controls = new OrbitControls(camera, canvas);
        controls.target.set(0, 0.75, 0);
        controls.enableZoom = false;
        controls.enableDamping = true;

        renderer.shadowMap.enabled = true
        renderer.shadowMap.type = THREE.PCFSoftShadowMap
        renderer.setSize(sizes.width, sizes.height)
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))

        function tick() {
            controls.update();

            renderer.render(scene, camera);

            window.requestAnimationFrame(tick)
        }

        requestAnimationFrame(tick);
    }
}

main('canvas.can-of-soda', './../../wp-content/themes/ventadour-theme/assets/images/can/materials/can-of-soda-4.0.glb');