<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <style>

        .progress{
            width:250px;
            margin-left:40%;
            margin-top: 30%;
            position:absolute;
            background-color: grey;
        }
        #percentage {
            margin-bottom: 0;
        }
		.orientation-helper-in-scene {
			position: fixed;
			bottom: 20px;
			right: 20px;
			width: 100px;
			height: 100px;
			z-index: 10;
		}
    </style>
</head>

<body>

<div class="container1">

    <div class="sidenav d-inline-block" id="sidenav">
        <a href="#" onclick="colors();" id="colorsmenu"><img src="images/colors.png">COLORS</a>
        <a href="#" onclick="textures()" id="texturesmenu"><img src="images/textures.png">TEXTURES</a>
        <a href="#" onclick="stencils()" id="stencilsmenu"><img src="images/stencils.png">STENCILS</a>
    </div>

    <div class="container d-inline-block" id="colors">
        <div class="c">
            <div class="c1" onclick="c1s();"></div>
            <div class="c2" onclick="c2s();"></div>
            <div class="c3" onclick="c3s();"></div>
            <div class="c4" onclick="c4s();"></div>
            <div class="c5" onclick="c5s();"></div>
        </div>
        <div class="t">
            <div class="triangle-up" id="t1"></div>
            <div class="triangle-up" id="t2"></div>
            <div class="triangle-up" id="t3"></div>
            <div class="triangle-up" id="t4"></div>
            <div class="triangle-up" id="t5"></div>
        </div>
        <hr>
        <div id="c1s">
            <div class="row" id="row">
                <div class="col c1s1" id="c1s1" draggable="true" style="background-color:#FF4D4D">Coral</div>
                <div class="col c1s2" id="c1s2" draggable="true" style="background-color:#FF3333">Orange Red</div>
            </div>
            <div class="row" id="row">
                <div class="col c1s3" id="c1s3" draggable="true" style="background-color:#FF0000">Scarlet</div>
                <div class="col c1s4" id="c1s4" draggable="true" style="background-color:#DD0000">Cherry</div>
            </div>
            <div class="row" id="row">
                <div class="col c1s5" id="c1s5" draggable="true" style="background-color:#BB0000">Ruby Red</div>
                <div class="col c1s6" id="c1s6" draggable="true" style="background-color:#9A0000">Auburn</div>
            </div>
        </div>

        <div id="c2s">
            <div class="row">
                <div class="col c2s1" id="c2s1" draggable="true" style="background-color: #f4d9b1">Cream</div>
                <div class="col c2s2" id="c2s2" draggable="true" style="background-color: #efb57a ">Honey</div>
            </div>
            <div class="row">
                <div class="col c2s3" id="c2s3" draggable="true" style="background-color: #eb882c">Amber</div>
                <div class="col c2s4" id="c2s4" draggable="true" style="background-color: #e47237">Tangerine</div>
            </div>
            <div class="row">
                <div class="col c2s5" id="c2s5" draggable="true" style="background-color: #d7552a">Redwood</div>
                <div class="col c2s6" id="c2s6" draggable="true" style="background-color: #93402f">Earthen</div>
            </div>
        </div>

        <div id="c3s">
            <div class="row">
                <div class="col c3s1" id="c3s1" draggable="true" style="background-color: #f8df99">Vanilla</div>
                <div class="col c3s2" id="c3s2" draggable="true" style="background-color: #f5d577">Maize</div>
            </div>
            <div class="row">
                <div class="col c3s3" id="c3s3" draggable="true" style="background-color: #f2c655">Sunny Day</div>
                <div class="col c3s4" id="c3s4" draggable="true" style="background-color: #eab42a ">Mustard</div>
            </div>
            <div class="row">
                <div class="col c3s5" id="c3s5" draggable="true" style="background-color: #eda824">Sand</div>
                <div class="col c3s6" id="c3s6" draggable="true" style="background-color: #d79d30">Golden</div>
            </div>
        </div>

        <div id="c4s">
            <div class="row">
                <div class="col c4s1" id="c4s1" draggable="true" style="background-color: #deecb8">Radium</div>
                <div class="col c4s2" id="c4s2" draggable="true" style="background-color: #bade81">Spring</div>
            </div>
            <div class="row">
                <div class="col c4s3" id="c4s3" draggable="true" style="background-color: #87c241">Grass</div>
                <div class="col c4s4" id="c4s4" draggable="true" style="background-color: #61b33b">Parrot Green</div>
            </div>
            <div class="row">
                <div class="col c4s5" id="c4s5" draggable="true" style="background-color: #227754">Jade</div>
                <div class="col c4s6" id="c4s6" draggable="true" style="background-color: #40655a">Deep Jungle</div>
            </div>
        </div>

        <div id="c5s">
            <div class="row">
                <div class="col c5s1" id="c5s1" draggable="true" style="background-color: #bdd0e7">Cloud</div>
                <div class="col c5s2" id="c5s2" draggable="true" style="background-color: #84c0e0">Frost</div>
            </div>
            <div class="row">
                <div class="col c5s3" id="c5s3" draggable="true" style="background-color: #519bc5">Curacao</div>
                <div class="col c5s4" id="c5s4" draggable="true" style="background-color: #40508d">Ink Blue</div>
            </div>
            <div class="row">
                <div class="col c5s5" id="c5s5" draggable="true" style="background-color: #38435a">Navy Blue</div>
                <div class="col c5s6" id="c5s6" draggable="true" style="background-color: #3a4150">Stormy Sky</div>
            </div>
        </div>

    </div>

    <div class="container" id="textures">
        <div class="texmenu">
            <div class="row">
                <div class="col ct"><img src="1.jpg" id="1.jpg"></div>
                <div class="col ct"><img src="2.jpg" id="2.jpg"></div>
            </div>
            <div class="row">
                <div class="col ct"><img src="3.jpg" id="3.jpg"></div>
                <div class="col ct"><img src="4.jpg" id="4.jpg"></div>
            </div>
            <div class="row">
                <div class="col ct"><img src="5.jpg" id="5.jpg"></div>
                <div class="col ct"><img src="6.jpg" id="6.jpg"></div>
            </div>
            <div class="row">
                <div class="col ct"><img src="7.jpg" id="7.jpg"></div>
                <div class="col ct"><img src="9.jpg" id="9.jpg"></div>
            </div>
        </div>
    </div>

    <div class="container" id="stencils">
        STENCILS MENU
    </div>

</div>

<div class="container2">
    

    <div class="progress" id="progress">
        <div class="progress-bar" id="progressBar"> <p id="percentage"></p> </div>
    </div>
    
    <div id="canvas"></div>
</div>

<script>
        document.querySelectorAll('img').forEach(function(img) {
            img.addEventListener('drag', function(event) {
                sessionStorage.setItem("image", img.id);
            })
        })
</script>

<script type="importmap">
	{
		"imports": {
			"three": "./node_modules/three/build/three.module.js"
		}
	}
</script>

<script type="module">



import * as THREE from 'three'

import { OrbitControls } from './node_modules/three/examples/jsm/controls/OrbitControls.js';
import { OrientationHelper } from './node_modules/three/examples/jsm/controls/OrientationHelper.js';


import { GLTFLoader } from './node_modules/three/examples/jsm/loaders/GLTFLoader.js';
import { DRACOLoader } from './node_modules/three/examples/jsm/loaders/DRACOLoader.js';
import { RGBELoader } from './node_modules/three/examples/jsm/loaders/RGBELoader.js';

    let camera, controls, scene, renderer, orientationHelper, gui, raycaster;
	let _lastCLick = Date.now();

	const api = { gizmo: 'Default' };
	const models = {};


let INTERSECTED;

const pointer = new THREE.Vector2();

init();
animate();

function init() {

    const container = document.getElementById( 'canvas' );

    renderer = new THREE.WebGLRenderer( { antialias: true } );
    renderer.setSize( window.innerWidth*74/100, window.innerHeight*99/100 );
    renderer.setAnimationLoop( render );
    renderer.physicallyCorrectLights = true;
    renderer.toneMappingExposure = 0.5;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.outputEncoding = THREE.sRGBEncoding;
    container.appendChild( renderer.domElement );

    //

    camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 0.1, 1000 );
    camera.position.set( 0, 0, 4);

    // controls

    controls = new OrbitControls( camera, renderer.domElement );
    controls.listenToKeyEvents( window ); // optional

    controls.addEventListener( 'change', render ); // call this only in static scenes (i.e., if there is no animation loop)

    controls.enableDamping = true; // an animation loop is required when either damping or auto-rotation are enabled
    controls.dampingFactor = 0.05;

    controls.enablePan = true;

    controls.screenSpacePanning = false;

    // orientation helper
    const ohOptions = {
        className: 'orientation-helper-in-scene'
        }, 
        ohLabels = {
            px: 'East',
            nx: 'West',
            pz: 'South',
            nz: 'North',
            py: 'Sky',
            ny: 'Ground'
        };

    orientationHelper = new OrientationHelper( camera, controls, ohOptions, ohLabels );
    orientationHelper.addEventListener( 'change', onOrientationHelperChange );
    orientationHelper.addEventListener( 'click', onOrientationHelperClick );

    document.body.appendChild(orientationHelper.domElement);

    

    const pmremGenerator = new THREE.PMREMGenerator( renderer );
    pmremGenerator.compileEquirectangularShader();

    scene = new THREE.Scene();
    scene.background = new THREE.Color( 0xeeeeee );

    

    
    const manager = new THREE.LoadingManager();

    const dracoLoader = new DRACOLoader(manager);
    dracoLoader.setDecoderPath( '/node_modules/three/examples/js/libs/draco/gltf/' );

    const loader = new GLTFLoader(manager);
    loader.setDRACOLoader( dracoLoader );

    
    manager.onStart = function ( url, itemsLoaded, itemsTotal ) {

        console.log( 'Started loading file: ' + url + '.\nLoaded ' + itemsLoaded + ' of ' + itemsTotal + ' files.' );

    };

    manager.onLoad = function ( ) {

        console.log( 'Loading complete!');
        progress.style.display = "none";
        progressBar.style.display = "none";

    };


    manager.onProgress = function ( url, itemsLoaded, itemsTotal ) {

        console.log( 'Loading file: ' + url + '.\nLoaded ' + itemsLoaded + ' of ' + itemsTotal + ' files.' );
        const progress = document.getElementById('progress');
        const progressBar = document.getElementById('progressBar');
        progressBar.style.width = (itemsLoaded / itemsTotal * 100) + '%';
        

    };

    manager.onError = function ( url ) {

        console.log( 'There was an error loading ' + url );

    };

    loader.load( 'models/gltf/Paints_Tiles_Demo_29_03_22.glb', function ( gltf ) {


        scene.add( gltf.scene );
        scene.position.set(-1,-1.5,0);


    } );

    raycaster = new THREE.Raycaster();
	document.addEventListener( 'mousemove', onPointerMove );
	window.addEventListener( 'resize', onWindowResize );

    var HDRpath = './hdri/lebombo_1k.hdr';
    var HDRLoader = new RGBELoader();
    HDRLoader.load(HDRpath, function (texture) {
        var envMap = pmremGenerator.fromEquirectangular(texture).texture;
        scene.environment = envMap;
        texture.dispose();
        pmremGenerator.dispose();
        HDRLoader.needUpdate = true;
    });

}

function onOrientationHelperChange( ev ) {

translateCamera( ev.direction );

}

function onOrientationHelperClick( ev ) {

// Simulate double-click (less than 250ms)
let nClick = Date.now();
if ( nClick - _lastCLick < 250 ) {

    translateCamera( ev.normal );

}

_lastCLick = nClick;

}

function translateCamera( direction ) {

controls.enabled = false;

const dist = camera.position.distanceTo( controls.target ),
    newCameraPos = controls.target.clone().add( direction.multiplyScalar( dist ) );

camera.position.set(newCameraPos.x, newCameraPos.y, newCameraPos.z);

controls.enabled = true;

}

function onWindowResize() {

camera.aspect = window.innerWidth / window.innerHeight;
camera.updateProjectionMatrix();

renderer.setSize( window.innerWidth, window.innerHeight );

}

function onPointerMove( event ) {

pointer.x = ( event.clientX / window.innerWidth ) * 2 - 1;
pointer.y = - ( event.clientY / window.innerHeight ) * 2 + 1;

}

function animate() {

requestAnimationFrame( animate );

controls.update();

render();

}

function render() {

   

    const element1 = document.getElementById("c1s1");
    const element2 = document.getElementById("c1s2");
    const element3 = document.getElementById("c1s3");
    const element4 = document.getElementById("c1s4");
    const element5 = document.getElementById("c1s5");
    const element6 = document.getElementById("c1s6");
    
    const element7 = document.getElementById("c2s1");
    const element8 = document.getElementById("c2s2");
    const element9 = document.getElementById("c2s3");
    const element10 = document.getElementById("c2s4");
    const element11 = document.getElementById("c2s5");
    const element12 = document.getElementById("c2s6");

    const element13 = document.getElementById("c3s1");
    const element14 = document.getElementById("c3s2");
    const element15 = document.getElementById("c3s3");
    const element16 = document.getElementById("c3s4");
    const element17 = document.getElementById("c3s5");
    const element18 = document.getElementById("c3s6");

    const element19 = document.getElementById("c4s1");
    const element20 = document.getElementById("c4s2");
    const element21 = document.getElementById("c4s3");
    const element22 = document.getElementById("c4s4");
    const element23 = document.getElementById("c4s5");
    const element24 = document.getElementById("c4s6");

    const element25 = document.getElementById("c5s1");
    const element26 = document.getElementById("c5s2");
    const element27 = document.getElementById("c5s3");
    const element28 = document.getElementById("c5s4");
    const element29 = document.getElementById("c5s5");
    const element30 = document.getElementById("c5s6");

    element1.addEventListener("drag", function(event) {

	var color = element1.style.backgroundColor;

    console.log(color)


    const mesh = new Array();

					scene.traverse(function(child){
						
						if (child.isMesh) {
							if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
							mesh.push(child);
						}
						
				});
        
        raycaster.setFromCamera( pointer, camera );

        
        const intersects = raycaster.intersectObjects( mesh );

        const color3 = new THREE.Color(color);


		for ( let i = 0; i < intersects.length; i ++ ) {

			intersects[ i ].object.material.color.set( color3 );
        }

    });

    element2.addEventListener("drag", function(event) {

    var color = element2.style.backgroundColor;

    console.log(color)


    const mesh = new Array();

                    scene.traverse(function(child){
                        
                        if (child.isMesh) {
                            if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                            mesh.push(child);
                        }
                        
                });
        
        raycaster.setFromCamera( pointer, camera );

        
        const intersects = raycaster.intersectObjects( mesh );

        const color3 = new THREE.Color(color);


        for ( let i = 0; i < intersects.length; i ++ ) {

            intersects[ i ].object.material.color.set( color3 );
        }

    });

    element3.addEventListener("drag", function(event) {

    var color = element3.style.backgroundColor;

    console.log(color)


    const mesh = new Array();

                    scene.traverse(function(child){
                        
                        if (child.isMesh) {
                            if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                            mesh.push(child);
                        }
                        
                });
        
        raycaster.setFromCamera( pointer, camera );

        
        const intersects = raycaster.intersectObjects( mesh );

        const color3 = new THREE.Color(color);


        for ( let i = 0; i < intersects.length; i ++ ) {

            intersects[ i ].object.material.color.set( color3 );
        }

    });

    element4.addEventListener("drag", function(event) {

    var color = element4.style.backgroundColor;

    console.log(color)


    const mesh = new Array();

                    scene.traverse(function(child){
                        
                        if (child.isMesh) {
                            if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                            mesh.push(child);
                        }
                        
                });
        
        raycaster.setFromCamera( pointer, camera );

        
        const intersects = raycaster.intersectObjects( mesh );

        const color3 = new THREE.Color(color);


        for ( let i = 0; i < intersects.length; i ++ ) {

            intersects[ i ].object.material.color.set( color3 );
        }

    });

    element5.addEventListener("drag", function(event) {

    var color = element5.style.backgroundColor;

    console.log(color)


    const mesh = new Array();

                    scene.traverse(function(child){
                        
                        if (child.isMesh) {
                            if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                            mesh.push(child);
                        }
                        
                });
        
        raycaster.setFromCamera( pointer, camera );

        
        const intersects = raycaster.intersectObjects( mesh );

        const color3 = new THREE.Color(color);


        for ( let i = 0; i < intersects.length; i ++ ) {

            intersects[ i ].object.material.color.set( color3 );
        }

    });

    element6.addEventListener("drag", function(event) {

    var color = element6.style.backgroundColor;

    console.log(color)


    const mesh = new Array();

                    scene.traverse(function(child){
                        
                        if (child.isMesh) {
                            if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                            mesh.push(child);
                        }
                        
                });
        
        raycaster.setFromCamera( pointer, camera );

        
        const intersects = raycaster.intersectObjects( mesh );

        const color3 = new THREE.Color(color);


        for ( let i = 0; i < intersects.length; i ++ ) {

            intersects[ i ].object.material.color.set( color3 );
        }

    });

    element7.addEventListener("drag", function(event) {

    var color = element7.style.backgroundColor;

    console.log(color)


    const mesh = new Array();

                    scene.traverse(function(child){
                        
                        if (child.isMesh) {
                            if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                            mesh.push(child);
                        }
                        
                });
        
        raycaster.setFromCamera( pointer, camera );

        
        const intersects = raycaster.intersectObjects( mesh );

        const color3 = new THREE.Color(color);


        for ( let i = 0; i < intersects.length; i ++ ) {

            intersects[ i ].object.material.color.set( color3 );
        }

    });

    element8.addEventListener("drag", function(event) {

var color = element8.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element9.addEventListener("drag", function(event) {

var color = element9.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element10.addEventListener("drag", function(event) {

var color = element10.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element11.addEventListener("drag", function(event) {

var color = element11.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element12.addEventListener("drag", function(event) {

var color = element12.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element13.addEventListener("drag", function(event) {

var color = element13.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element14.addEventListener("drag", function(event) {

var color = element14.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element15.addEventListener("drag", function(event) {

var color = element15.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element16.addEventListener("drag", function(event) {

var color = element16.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element17.addEventListener("drag", function(event) {

var color = element17.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element18.addEventListener("drag", function(event) {

var color = element18.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element19.addEventListener("drag", function(event) {

var color = element19.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element20.addEventListener("drag", function(event) {

var color = element20.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});


element21.addEventListener("drag", function(event) {

var color = element21.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element22.addEventListener("drag", function(event) {

var color = element22.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element23.addEventListener("drag", function(event) {

var color = element23.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element24.addEventListener("drag", function(event) {

var color = element24.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element25.addEventListener("drag", function(event) {

var color = element25.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element26.addEventListener("drag", function(event) {

var color = element26.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element27.addEventListener("drag", function(event) {

var color = element27.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element28.addEventListener("drag", function(event) {

var color = element28.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element29.addEventListener("drag", function(event) {

var color = element29.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

element30.addEventListener("drag", function(event) {

var color = element30.style.backgroundColor;

console.log(color)


const mesh = new Array();

                scene.traverse(function(child){
                    
                    if (child.isMesh) {
                        if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                        mesh.push(child);
                    }
                    
            });
    
    raycaster.setFromCamera( pointer, camera );

    
    const intersects = raycaster.intersectObjects( mesh );

    const color3 = new THREE.Color(color);


    for ( let i = 0; i < intersects.length; i ++ ) {

        intersects[ i ].object.material.color.set( color3 );
    }

});

    const mesh = new Array();

                    scene.traverse(function(child){
                        
                        if (child.isMesh) {
                            if (child.name == "LeftWall" || child.name == "FrontWalls" || child.name == "RightWalls")
                            mesh.push(child);
                        }
                        
                });

    raycaster.setFromCamera(pointer, camera);

        const intersects = raycaster.intersectObjects(mesh);

        const material = new THREE.MeshBasicMaterial({ map: loader });

       const imgid = sessionStorage.getItem("image") || "1.jpg";
        if (intersects.length > 0) {
          if (INTERSECTED != imgid) {
            var loader = new THREE.TextureLoader().load(imgid);
            loader.wrapS = THREE.RepeatWrapping;
            loader.wrapT = THREE.RepeatWrapping;
            loader.repeat.set(10,10);
            intersects[0].object.material.map = loader;
            
            INTERSECTED = imgid
          }
        }

    renderer.render( scene, camera );
}


</script>

    
    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>