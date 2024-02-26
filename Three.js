// Create a scene
var scene = new THREE.Scene();

// Create a camera
var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.z = 5;

// Create a renderer
var renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

// Create ambient light
var ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(ambientLight);

// Create directional light
var directionalLight = new THREE.DirectionalLight(0xffffff, 0.5);
directionalLight.position.set(5, 5, 5);
scene.add(directionalLight);

// Create multiple donuts
var numberOfDonuts = 5;
var donuts = [];



for (var i = 0; i < numberOfDonuts; i++) {
  // Create a donut (torus) geometry
  var geometry = new THREE.TorusGeometry(1, 0.4, 16, 32);
  var material = new THREE.MeshBasicMaterial({ color: Math.random() * 0xffffff });
  var donut = new THREE.Mesh(geometry, material);

  // Set random initial position based on angle
  var angle = Math.random() * Math.PI * 2;
  var distance = Math.random() * 5 + 3; // Vary the distance of each donut
  donut.position.x = Math.cos(angle) * distance;
  donut.position.y = Math.sin(angle) * distance;

  // Add the donut to the scene
  scene.add(donut);
  donuts.push(donut);
}



// Create rain particle system
var raindropGeometry = new THREE.BufferGeometry();
var raindropMaterial = new THREE.PointsMaterial({ color: 0x87CEEB, size: 0.1 });

var raindrops = new THREE.Points(raindropGeometry, raindropMaterial);
scene.add(raindrops);

// Set up raindrops positions
var positions = new Float32Array(10000);

for (var i = 0; i < 10000; i += 3) {
  positions[i] = (Math.random() - 0.5) * 20;
  positions[i + 1] = (Math.random() - 0.5) * 20;
  positions[i + 2] = (Math.random() - 0.5) * 20;
}

raindropGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

// Rotate the donuts and animate the rain
function animate() {
  requestAnimationFrame(animate);

  scene.children.forEach(function (child) {
    if (child instanceof THREE.Mesh) {
      child.rotation.x += 0.01;
      child.rotation.y += 0.01;
    }
  });

  raindrops.rotation.y += 0.002;

  renderer.render(scene, camera);
}

animate();
