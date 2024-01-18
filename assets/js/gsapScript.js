gsap.registerPlugin(ScrollTrigger, EasePack, TextPlugin);

// Attache un gestionnaire d'événements au bouton avec l'ID "btnEnter"
$('.menu').on('click', function() {
  anime({
    targets: '.menuListItem',
    keyframes: [
      {translateX: 200},
      {translateX: -150},
      {translateX: 100},
      {translateX: -50},
      {translateX: 0}
    ],
    duration: 800,
    delay: anime.stagger(100, {start: 800}),
    easing: "linear"
  });
});

gsap.from("#btnEnter", {
  opacity: 0,
  x: 2250,
  duration: 1
});




gsap.to(".titleHome", {
  duration: 3,
  text: "Sabri AMMARI",
  ease: "power1.inOut",
  delay: 1
});

gsap.to(".subtitleHome", {
  duration: 2,
  text: "Développeur Web passionné",
  ease: "power1.inOut",
  delay: 2
});



