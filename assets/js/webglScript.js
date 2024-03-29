var Mathutils = {
    normalize: function($value, $min, $max) {
        return ($value - $min) / ($max - $min);
    },
    interpolate: function($normValue, $min, $max) {
        return $min + ($max - $min) * $normValue;
    },
    map: function($value, $min1, $max1, $min2, $max2) {
        if ($value < $min1) {
            $value = $min1;
        }
        if ($value > $max1) {
            $value = $max1;
        }
        var res = this.interpolate(this.normalize($value, $min1, $max1), $min2, $max2);
        return res;
    }
};
var markers = [];


//Get window size
var ww = window.innerWidth,
  wh = window.innerHeight;

var composer, params = {
    exposure: 1.3,
    bloomStrength: .5,
    bloomThreshold: 0,
    bloomRadius: 0
  };

//Create a WebGL renderer
var renderer = new THREE.WebGLRenderer({
  canvas: document.getElementById('canvasTunnel'), // document.querySelector("canvas"),
  antialias: true,
  shadowMapEnabled: true,
  shadowMapType: THREE.PCFSoftShadowMap
});
renderer.setSize(ww, wh);

//Create an empty scene
var scene = new THREE.Scene();
scene.fog = new THREE.Fog(0x194794,0,100);

var clock = new THREE.Clock();

//Create a perpsective camera
var cameraRotationProxyX = 3.14159;
var cameraRotationProxyY = 3.14159;

var camera = new THREE.PerspectiveCamera(45, ww / wh, 0.001, 500);
camera.rotation.y = cameraRotationProxyX;
camera.rotation.z = cameraRotationProxyY;

//camera.position.z = 400;
var c = new THREE.Group();
c.position.z = 400;

c.add(camera);
scene.add(c);


// //set up render pass
// var renderScene = new THREE.RenderPass( scene, camera );
// var bloomPass = new THREE.UnrealBloomPass( new THREE.Vector2( window.innerWidth, window.innerHeight ), 1.5, 0.4, 0.85 );
// bloomPass.renderToScreen = true;
// bloomPass.threshold = params.bloomThreshold;
// bloomPass.strength = params.bloomStrength;
// bloomPass.radius = params.bloomRadius;
// composer = new THREE.EffectComposer( renderer );
// composer.setSize( window.innerWidth, window.innerHeight );
// composer.addPass( renderScene );
// composer.addPass( bloomPass );

// set up render pass
var renderScene = new THREE.RenderPass(scene, camera);

var bloomPass = new THREE.UnrealBloomPass(
  new THREE.Vector2(window.innerWidth, window.innerHeight),
  1.5,
  0.4,
  0.85
);
bloomPass.renderToScreen = true;

bloomPass.threshold = params.bloomThreshold;
bloomPass.strength = params.bloomStrength;
bloomPass.radius = params.bloomRadius;

// create an Effect Composer
var composer = new THREE.EffectComposer(renderer);

// Set initial size
composer.setSize(window.innerWidth, window.innerHeight);

// Add passes to the composer
composer.addPass(renderScene);
composer.addPass(bloomPass);

// Event listener for window resize
window.addEventListener('resize', function () {
  var newWidth = window.innerWidth;
  var newHeight = window.innerHeight;

  // Update size of the renderer
  renderer.setSize(newWidth, newHeight);

  // Update size of the composer
  composer.setSize(newWidth, newHeight);

  // Update size of bloom pass
  bloomPass.setSize(newWidth, newHeight);
  
  // Update camera aspect ratio
  camera.aspect = newWidth / newHeight;
  camera.updateProjectionMatrix();
});




//Array of points
var points = [
  [10, 89, 0],
  [50, 88, 10],
  [76, 139, 20],
  [126, 141, 12],
  [150, 112, 8],
  [157, 73, 0],
  [180, 44, 5],
  [207, 35, 10],
  [232, 36, 15],
  [250, 42, 25],
  [270, 50, 30],
  [290, 62, 22],
  [310, 54, 18],
  [320, 48, 12],
  [330, 32, 5],
  [350, 36, 8],
  [370, 50, 12],
];


var p1, p2;

//Convert the array of points into vertices
for (var i = 0; i < points.length; i++) {
  var x = points[i][0];
  var y = points[i][2];
  var z = points[i][1];
  points[i] = new THREE.Vector3(x, y, z);
}
//Create a path from the points
var path = new THREE.CatmullRomCurve3(points);
//path.curveType = 'catmullrom';
path.tension = .5;

// //Create a new geometry with a different radius
// var geometry = new THREE.TubeGeometry( path, 1000, 6, 32, false );



// var texture = new THREE.TextureLoader().load( 'assets/img/noir_etoile.png' , function ( texture ) {

//     texture.wrapS = texture.wrapT = THREE.RepeatWrapping;
//     texture.offset.set( 0, 0 );
//     texture.repeat.set( 30, 1 );

// } );


// Crée une nouvelle géométrie avec un rayon différent
// Initialiser la géométrie avec une valeur par défaut (6)
var tubeSegments = 6;
var geometry = new THREE.TubeGeometry(path, 1000, tubeSegments, 32, false);

var texture = new THREE.TextureLoader().load('assets/img/noir_etoile.png', function (texture) {

  texture.wrapS = texture.wrapT = THREE.RepeatWrapping;
  texture.offset.set(0, 0);
  texture.repeat.set(30, 1);

});


// Event listener pour le redimensionnement de la fenêtre
window.addEventListener('resize', function () {
  // Calculer la nouvelle valeur en fonction de la largeur de la fenêtre
  var newTubeSegments = Math.floor(window.innerWidth / 250); // Vous pouvez ajuster le facteur selon vos besoins

  // Vérifier que la nouvelle valeur n'est pas inférieure à un certain seuil
  newTubeSegments = Math.max(newTubeSegments, 2); // Par exemple, une valeur minimale de 2

  // Mettre à jour la géométrie avec la nouvelle valeur
  if (newTubeSegments !== tubeSegments) {
    tubeSegments = newTubeSegments;
    var newGeometry = new THREE.TubeGeometry(path, 1000, tubeSegments, 32, false);
    mesh.geometry.dispose(); // Dispose de l'ancienne géométrie pour libérer la mémoire
    mesh.geometry = newGeometry; // Attribue la nouvelle géométrie à la mesh
  }

});






var mapHeight = new THREE.TextureLoader().load('assets/img/noir_etoile.png', function( texture){
 
  texture.wrapS = texture.wrapT = THREE.RepeatWrapping;
    texture.offset.set( 0, 0 );
    texture.repeat.set( 30, 1 );
  
});

var material = new THREE.MeshPhongMaterial({
  side:THREE.BackSide,
  map: texture,
  shininess: 10,
  bumpMap: mapHeight,
  bumpScale: 0,
  specular: 0x03001e /*0b2349*/
});

//Create a mesh
var tube = new THREE.Mesh( geometry, material );
// tube.receiveShadows = true;
//Push the mesh into the scene
scene.add( tube );

//inner tube.=========================================

//Create a new geometry with a different radius
var geometry = new THREE.TubeGeometry( path, 300, 2.4, 32, false );
var geo = new THREE.EdgesGeometry( geometry );
// THREE.EdgesGeometry( geometry );

var mat = new THREE.LineBasicMaterial( {
  linewidth: 10,
  opacity: 0,
  transparent: 0
} );

var wireframe = new THREE.LineSegments( geo, mat );


scene.add( wireframe );





//-------------------------


//Create a point light in our scene
var light = new THREE.PointLight(0xffffff, .45, 8,0);
light.castShadow = true;
scene.add(light);


function updateCameraPercentage(percentage) {
  p1 = path.getPointAt(percentage%1);
  p2 = path.getPointAt((percentage + 0.03)%3);
  p3 = path.getPointAt((percentage + 0.05)% 1);

  c.position.set(p1.x,p1.y,p1.z);
  c.lookAt(p2);
  light.position.set(p2.x, p2.y, p2.z);
}


var cameraTargetPercentage = 0;
var currentCameraPercentage = 0;



gsap.defaultEase = Linear.easeNone;

var tubePerc = {
  percent: 0
}

gsap.registerPlugin(ScrollTrigger);

var tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".scrollTarget",
    start: "top top",
    end: "bottom 100%",
    scrub: 5,
    // markers: {color: "white"}
  }
})
tl.to(tubePerc, {
  percent:.96,
  ease: Linear.easeNone,
  duration: 10,
  onUpdate: function() {
    cameraTargetPercentage = tubePerc.percent;
  }
});


function render(){
  //texture.offset.x+=.004
  //texture2.needsUpdate = true;
  currentCameraPercentage = cameraTargetPercentage
  
  camera.rotation.y += (cameraRotationProxyX - camera.rotation.y) / 15;
  camera.rotation.x += (cameraRotationProxyY - camera.rotation.x) / 15;
  
  updateCameraPercentage(currentCameraPercentage);
  
  //animate texture
  
  particleSystem1.rotation.y += 0.00005;
  particleSystem2.rotation.x += 0.00005;
  particleSystem3.rotation.z += 0.00001;
  
  //Render the scene
  //renderer.render(scene, camera);
  composer.render();

  requestAnimationFrame(render);
}
requestAnimationFrame(render);

$('canvas').click(function(){
  console.clear();
  markers.push(p1);
  console.log(JSON.stringify(markers));
});

window.addEventListener( 'resize', function () {
  
  var width = window.innerWidth;
  var height = window.innerHeight;
  
  camera.aspect = width / height;
	camera.updateProjectionMatrix();
  
  renderer.setSize( width, height );
  composer.setSize( width, height );
  
}, false );



var lastPlace = 0;
var newPlace = 0;









//particle system
// create the particle variables
//
var spikeyTexture = new THREE.TextureLoader().load('assets/img/boule.png');
// https://s3-us-west-2.amazonaws.com/s.cdpn.io/68819/spikey.png
scene.fog = new THREE.Fog(0x000000, 0, 100);

var particleCount = 5000,
    particles1 = new THREE.Geometry(),
    particles2 = new THREE.Geometry(),
    particles3 = new THREE.Geometry(),

    pMaterial = new THREE.ParticleBasicMaterial({
      color: 0xFFFFFF,
      size: 1,
      opacity: 0.5,
      map: spikeyTexture,
      transparent: true,
      fog: true,
      sizeAttenuation: true,
      blending: THREE.AdditiveBlending
    });



// now create the individual particles
for (var p = 0; p < particleCount; p++) {

  // create a particle with random
  // position values, -250 -> 250
  var pX = Math.random() * 500 - 250,
      pY = Math.random() * 50 - 25,
      pZ = Math.random() * 500 - 250,
      particle = new THREE.Vector3(pX, pY, pZ);

  // add it to the geometry
  particles1.vertices.push(particle);
}

// now create the individual particles
for (var p = 0; p < particleCount; p++) {

  // create a particle with random
  // position values, -250 -> 250
  var pX = Math.random() * 500,
      pY = Math.random() * 50 - 25,
      pZ = Math.random() * 500 - 250,
      particle = new THREE.Vector3(pX, pY, pZ);

  // add it to the geometry
  particles2.vertices.push(particle);
}

// now create the individual particles
for (var p = 0; p < particleCount; p++) {

  // create a particle with random
  // position values, -250 -> 250
  var pX = Math.random() * 500,
      pY = Math.random() * 50 - 25,
      pZ = Math.random() * 500 - 250,
      particle = new THREE.Vector3(pX, pY, pZ);

  // add it to the geometry
  particles3.vertices.push(particle);
}

// create the particle system
var particleSystem1 = new THREE.ParticleSystem(
    particles1,
    pMaterial);

var particleSystem2 = new THREE.ParticleSystem(
    particles2,
    pMaterial);

var particleSystem3 = new THREE.ParticleSystem(
    particles3,
    pMaterial);

// add it to the scene
scene.add(particleSystem1);
scene.add(particleSystem2);
scene.add(particleSystem3);


$(document).mousemove(function(evt) {

  cameraRotationProxyX = Mathutils.map(evt.clientX, 0, window.innerWidth, 2.95, 3.35);
  cameraRotationProxyY = Mathutils.map(evt.clientY, 0, window.innerHeight, -.11, .11);
});







