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

gsap.from(".particles-button", {
  opacity: 0,
  y: 2250,
  duration: 3,
  delay: 4
});

gsap.to(".titleHome", {
  duration: 3,
  text: "Sabri AMMARI",
  ease: "power1.inOut",
  delay: 3
});

gsap.to(".subtitleHome", {
  duration: 2,
  text: "Développeur Web passionné",
  ease: "power1.inOut",
  delay: 4
});



