<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/menuStyle.css">
    <link rel="stylesheet" href="../assets/css/threeStyle.css">
    <link rel="stylesheet" href="../assets/css/portfolio.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Genos:wght@500&display=swap" rel="stylesheet">
    <title>Portfolio de Sabri AMMARI</title>
    <!-- <script>!function () { document.documentElement.className = "js"; var e, t; (t = document.createElement("style")).innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e || alert("Please view this demo in a modern browser that supports CSS Variables.") }();</script> -->

</head>

<body class="d-flex text-center demo-5">
    <main class="main main--demo-5">
        <div class="content--demo-5">

            <!-- Début Boutton menu toggle -->
            <button class="menu">
                <svg width="80" height="80" viewBox="0 0 100 100">
                    <path class="line line1"
                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3"
                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
            <!-- Fin Boutton menu toggle -->

            <!-- Début du offcanvas -->
            <div class="offcanvas bg-transparent offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"
                tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-body overflow-hidden">
                    <ul class="menuList" data-offset="10">
                        <a class="text-decoration-none" href="/">
                            <li class="menuListItem" data-offset="20">
                                Accueil
                                <span class="mask"><span>accueil</span></span>
                                <span class="mask"><span>accueil</span></span>
                            </li>
                        </a>
                        <a class="text-decoration-none" href="about">
                            <li class="menuListItem" data-offset="16">
                                à propos
                                <span class="mask"><span>à propos</span></span>
                                <span class="mask"><span>à propos</span></span>
                            </li>
                        </a>
                        <a class="text-decoration-none inactiveLink" href="portfolio">
                            <li class="active" data-offset="12">
                                portfolio
                                <span class="mask"><span>portfolio</span></span>
                                <span class="mask"><span>portfolio</span></span>
                            </li>
                        </a>
                        <a class="text-decoration-none" href="contact">
                            <li class="menuListItem" data-offset="8">
                                Contact
                                <span class="mask"><span>Contact</span></span>
                                <span class="mask"><span>Contact</span></span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <!-- Fin du offcanvas -->

            <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path class="shape-overlays__path"></path>
                <path class="shape-overlays__path"></path>
            </svg>
        </div>
    </main>

    <header class="mb-auto headerAbout">
        <nav class="navbar bg-transparent fixed-top-left">
            <div class="container-fluid">
                <a class="logoNav" href="/" aria-label="Back to Home">
                    <img id="logo" class="fixed-top-right" src="../assets/img/SALogo.png"
                        alt="Logo de Sabri AMMARI"></img>
                </a>
            </div>
        </nav>
    </header>
    <main class="portfolioBody">
        <div class="content">
            <div class="scroll__stage">
                <div class="scroll__content">
                    <section class="portfolio__start vh-100">
                        <p class="section__title-arrow position-absolute top-0 start-50 translate-middle">
                            <span class="arrow1">➤</span><br> 
                            <span class="arrow2">➤</span><br>
                            <span class="arrow3 d-inline">Scroll</span>
                        </p>
                    </section>
                    <section id="section1" class="section">
                        <div class="section__title text-white align-self-center mx-2">
                            <h1 class="section__title-number">01</h1>
                            <h2 class="section__title-text">SA-Rent<br> Location</h2>
                        </div>
                        
                        <div class="section__paragraph text-white align-self-center">
                            <div class="image-project1 position-relative">
                                <img src="../assets/img/laptop1.png" alt="Photo d'un PC portable" class="hover-image1">
                            </div>
                            <p> Explorez le luxe sur quatre roues avec notre service de location de voitures haut de gamme, proposant une sélection exclusive de véhicules prestigieux.<br>
                                <!-- <a href="projects" class="section__button">Découvrir</a> -->
                            </p>
                        </div>
                    </section>

                    <section id="section2" class="section">
                        <div class="section__title text-white align-self-center mx-2">
                            <h1 class="section__title-number">02</h1>
                            <h2 class="section__title-text">Intranet<br> Mairie</h2>
                        </div>
                        <div class="section__paragraph text-white align-self-center">
                            <div class="image-project2 position-relative">
                                <img src="../assets/img/portable_tablette1.png" alt="photo d'un smartphone avec une tablette" class="hover-image2">
                            </div>
                            <p> Facilitez l'accès à l'information et la collaboration au sein de votre commune grâce à notre site intranet municipal, offrant une plateforme centralisée pour les services. <br>
                                <!-- <a href="projects" class="section__button">Découvrir</a> -->
                            </p>
                        </div>
                    </section>

                    <section id="section3" class="section">
                        <div class="section__title text-white align-self-center mx-2">
                            <h1 class="section__title-number">03</h1>
                            <h2 class="section__title-text">Tutoriel<br> Symphony</h2>
                        </div>
                        <div class="section__paragraph text-white align-self-center">
                            <div class="image-project3 position-relative">
                                <img src="../assets/img/screen1.png" alt="photo d'un écran d'ordinateur" class="hover-image3">
                            </div>
                            <p> Explorez le tutoriel dédié à Symfony, plongeant les développeurs dans l'univers du framework PHP pour la création d'applications web modernes et performantes. <br>
                                <!-- <a href="projects" class="section__button">Découvrir</a> -->
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </main>

    <?php
    include("footerView.php");
    ?>

    <script>
$(document).ready(function() {
    $('.section__title-arrow').css('opacity' , '1');

    // Attachez un gestionnaire d'événements au défilement
    $(window).scroll(function() {
    // Obtenez la position de défilement actuelle
    var scrollPosition = $(this).scrollTop();

    // Déterminez à quelle position vous souhaitez que l'élément disparaisse
    var triggerPosition = 0; // Changez ceci selon vos besoins

    // Si la position de défilement dépasse le seuil, masquez l'élément
    if (scrollPosition > triggerPosition) {
        $('.section__title-arrow').fadeOut(250);
    } else {
        $('.section__title-arrow').fadeIn(250);
    }
    });

    $('.section').mousemove(function(e) {
        var mouseX = e.pageX;
        var mouseY = e.pageY;

        var rotateX1 = -(mouseY / $(this).height() - 0.5) * 10; // Ajustez le coefficient pour la sensibilité
        var rotateY1 = (mouseX / $(this).width() - 0.5) * 30;
        
        var rotateX2 = -(mouseY / $(this).height() - 0.5) * 30 + 75; // Ajustez le coefficient pour la sensibilité
        var rotateY2 = (mouseX / $(this).width() - 0.5) * 30;
        
        var rotateX3 = -(mouseY / $(this).height() - 0.5) * 5; // Ajustez le coefficient pour la sensibilité
        var rotateY3 = (mouseX / $(this).width() - 0.5) * 30;
        
        $('.hover-image1').css({
            'transform': 'rotateX(' + rotateX1 + 'deg) rotateY(' + rotateY1 + 'deg)'
        });
        $('.hover-image2').css({
            'transform': 'rotateX(' + rotateX2 + 'deg) rotateY(' + rotateY2 + 'deg)'
        });
        $('.hover-image3').css({
            'transform': 'rotateX(' + rotateX3  + 'deg) rotateY(' + rotateY3 + 'deg)'
        });

        $('.section').mouseleave(function() {
            // Réinitialise la rotation lorsque la souris quitte la zone de l'image
            $('.hover-image1, .hover-image2, .hover-image3').css({
            'transform': 'rotateX(0deg) rotateY(0deg)'
            });
        });
    });
});
    </script>
