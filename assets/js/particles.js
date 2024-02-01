// /* particules Début du script */
// particlesJS("particles-js", {
//   particles: {
//     number: {
//       value: 300,
//       density: {
//         enable: true,
//         value_area: 1000,
//       },
//     },
//     color: {
//       value: "#03c0ff",
//     },
//     shape: {
//       type: "circle",
//       stroke: {
//         width: 10, // Largeur de la bordure aléatoire
//         color: "#ffffff",
//       },
//       polygon: {
//         sides: 6, // Changer le nombre de côtés du cercle (6 pour un hexagone, par exemple)
//         radius: 70, // Ajuster le rayon du cercle selon vos besoins
//       },
//     },
//     opacity: {
//       value: 0.5,
//       random: false,
//       anim: {
//         enable: true,
//         speed: 1.5,
//         opacity_min: 0.01,
//         sync: true,
//       },
//     },
//     size: {
//       value: 0.1,
//       random: true,
//       anim: {
//         enable: false,
//         speed: 1,
//         size_min: 0,
//         sync: true,
//       },
//     },
//     line_linked: {
//       enable: true,
//       distance: 150,
//       color: "#03c0ff",
//       opacity: 0.01,
//       width: 1.5,
//     },
//     move: {
//       enable: true,
//       speed: 3,
//       direction: "none",
//       random: true,
//       straight: false,
//       out_mode: "in",
//       bounce: true,
//       attract: {
//         enable: true,
//         rotateX: 2048.0504135486403,
//         rotateY: 1181.5675462780619,
//       },
//     },
//   },
//   interactivity: {
//     detect_on: "window",
//     events: {
//       onhover: {
//         enable: true,
//         mode: "grab",
//       },
//       onclick: {
//         enable: true,
//         mode: "push",
//       },
//       resize: true,
//     },
//     modes: {
//       grab: {
//         distance: 200,
//         opacity: 8,
//         line_linked: {
//           opacity: 8,
//         },
//       },
//       bubble: {
//         distance: 300,
//         size: 1,
//         duration: 1,
//         opacity: 8,
//         speed: 3,
//       },
//       repulse: {
//         distance: 200,
//         duration: 0.4,
//       },
//       push: {
//         particles_nb: 40,
//       },
//       remove: {
//         particles_nb: 2,
//       },
//     },
//   },
//   retina_detect: true,
// });
// var count_particles, stats, update;
// stats = new Stats();
// stats.setMode(0);
// stats.domElement.style.position = "absolute";
// stats.domElement.style.left = "0px";
// stats.domElement.style.top = "0px";
// document.body.appendChild(stats.domElement);
// count_particles = document.querySelector(".js-count-particles");
// update = function () {
//   stats.begin();
//   stats.end();
//   if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
//     count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
//   }
//   requestAnimationFrame(update);
// };
// requestAnimationFrame(update);
// /* particules Fin du script */




particlesJS("particles-js", {"particles":{"number":{"value":200,"density":{"enable":true,"value_area":800}},"color":{"value":"#03c0ff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#03c0ff","opacity":0.4,"width":1},"move":{"enable":true,"speed":2,"direction":"none","random":true,"straight":false,"out_mode":"bounce","bounce":false,"attract":{"enable":true,"rotateX":1839.264294282288,"rotateY":1759.2962814874058}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},"repulse":{"distance":400,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;