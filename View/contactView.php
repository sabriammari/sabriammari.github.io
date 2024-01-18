<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/menuStyle.css">
    <link rel="stylesheet" href="../assets/css/particlesButton.css">
    <link rel="stylesheet" href="../assets/css/webglStyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Genos:wght@500&display=swap" rel="stylesheet">
    <title>Portfolio de Sabri AMMARI</title>
    <!-- <script>!function () { document.documentElement.className = "js"; var e, t; (t = document.createElement("style")).innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e || alert("Please view this demo in a modern browser that supports CSS Variables.") }();</script> -->

</head>

<body class="d-flex text-center demo-5 page vh-100">
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
                        <a class="text-decoration-none" href="portfolio">
                            <li class="menuListItem" data-offset="12">
                                portfolio
                                <span class="mask"><span>portfolio</span></span>
                                <span class="mask"><span>portfolio</span></span>
                            </li>
                        </a>
                        <a class="text-decoration-none inactiveLink" href="contact">
                            <li class="active" data-offset="8">
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

    <section>
        <div id="particles-js" class="vh-100">

        </div>
        <div class="container-fluid" style="min-height: 400vh;">
            <div id="shadowCar" class="position-fixed top-50 start-50 centerPage"></div>
            <!-- <img class="position-fixed top-50 start-50 translate-middle" src="../assets/img/auto2.png" alt="Voiture de sport vue de dessus" style="width: 350px;"> -->
            <img id="frontCar" class="position-fixed top-50 start-50 centerPage" src="../assets/img/lamborghiniFront1.png" alt="Voiture de sport vue de dessus" style="width: 100px; height: 190px;">
            <!-- <img id="frontCar" class="shadowCar position-fixed top-50 start-50 centerPage" src="../assets/img/lamborghiniFront1.png" alt="Voiture de sport vue de dessus" style="width: 100px; height: 190px;"> -->
            <img id="cloud1" class="position-fixed top-50 start-50 centerPage" src="../assets/img/fumee.gif" alt="fumée de pot d'échapement gauche d'une voiture" style="width: 150px;">
            <img id="cloud2" class="position-fixed top-50 start-50 centerPage" src="../assets/img/fumee.gif" alt="fumée de pot d'échapement droit d'une voiture" style="width: 150px;">
            <img id="rearCar" class="position-fixed top-50 start-50 centerPage" src="../assets/img/lamborghiniRear1.png" alt="Voiture de sport vue de dessus" style="width: 100px; height: 190px;">
            <img id="cloud1Reverse" class="position-fixed top-50 start-50 centerPage" src="../assets/img/fumee.gif" alt="fumée de pot d'échapement gauche d'une voiture" style="width: 150px;">
            <img id="cloud2Reverse" class="position-fixed top-50 start-50 centerPage" src="../assets/img/fumee.gif" alt="fumée de pot d'échapement droit d'une voiture" style="width: 150px;">

            <!-- <img id="cloud1" class="cloudReverse position-fixed top-50 start-50 translate-middle" src="../assets/img/fumee.gif" alt="fumée de pot d'échapement gauche d'une voiture" style="width: 250px;">
            <img id="cloud2" class="cloudReverse position-fixed top-50 start-50 translate-middle" src="../assets/img/fumee.gif" alt="fumée de pot d'échapement droit d'une voiture" style="width: 250px;"> -->
        </div>
    </section>


    <?php
    include("footerView.php");
    ?>

<script>
$(document).ready(function() {

            var lastScrollTop = $(window).scrollTop();

            $(window).on('scroll', function() {
                var st = $(this).scrollTop();
                var scrollTop = $(this).scrollTop();
                var windowHeight = $(this).height();
                var documentHeight = $(document).height();

                if (st > lastScrollTop) {
                    // Scroll vers le bas
                    $('#rearCar').addClass('reverseCar');
                    setTimeout(() => {
                        $('#rearCar').removeClass('reverseCar');
                        $('#rearCar').css('display', 'none');
                        $('#frontCar').css('display', 'block');
                        
                        // Faites apparaître l'image
                        // $('#shadowCar').addClass('shadowCar');
                        $('#cloud1, #cloud2').css('opacity', 1);
                        $('#cloud1Reverse, #cloud2Reverse').css('opacity', 0);
                        
                        // Effacez le drapeau après un court délai d'inactivité
                        clearTimeout($.data(this, 'scrollTimer'));
                        $.data(this, 'scrollTimer', setTimeout(() => {
                            // Faites disparaître l'image
                            // $('#shadowCar').removeClass('shadowCar');
                            $('#cloud1, #cloud2').css('opacity', 0);
                        }, 100));
                    }, 200);
                } else {
                    // Scroll vers le haut
                    $('#frontCar').addClass('reverseCar');
                    setTimeout(() => {
                        $('#frontCar').removeClass('reverseCar');
                        $('#frontCar').css('display', 'none');
                        $('#rearCar').css('display', 'block');
                        // Faites apparaître l'image
                        // $('#shadowCar').addClass('shadowCar');
                        $('#cloud1Reverse, #cloud2Reverse').css('opacity', 1);
                        $('#cloud1, #cloud2').css('opacity', 0);
                        
                        // Effacez le drapeau après un court délai d'inactivité
                        clearTimeout($.data(this, 'scrollTimer'));
                        $.data(this, 'scrollTimer', setTimeout(() => {
                            // Faites disparaître l'image
                            // $('#shadowCar').removeClass('shadowCar');
                            $('#cloud1Reverse, #cloud2Reverse').css('opacity', 0);
                        }, 100));
                    }, 200);
                }


                // Si vous êtes tout en haut de la page
                if (scrollTop === 0) {
                    $('#rearCar').addClass('reverseCar');
                    setTimeout(() => {
                        $('#rearCar').removeClass('reverseCar');
                        $('#rearCar').css('display', 'none');
                        $('#frontCar').css('display', 'block');
                        $('#shadowCar').addClass('shadowCar');
                        // $('#cloud1Reverse, #cloud2Reverse').css('opacity', 0);
                        // $('#cloud1, #cloud2').css('opacity', 0);
                        // Effacez le drapeau après un court délai d'inactivité
                        clearTimeout($.data(this, 'scrollTimer'));
                        $.data(this, 'scrollTimer', setTimeout(function() {

                            // Faites disparaître l'image
                            $('#shadowCar').removeClass('shadowCar');
                            // $('#cloud1Reverse, #cloud2Reverse').css('opacity', 0);
                            // $('#cloud1, #cloud2').css('opacity', 0);
                        }, 200));
                    }, 200);
                }


                // Si vous êtes tout en bas de la page (avec une petite marge d'erreur)
                if (scrollTop + windowHeight + 1 >= documentHeight) {
                    $('#frontCar').addClass('reverseCar');
                    setTimeout(() => {
                        $('#frontCar').removeClass('reverseCar');
                        $('#frontCar').css('display', 'none');
                        $('#rearCar').css('display', 'block');

                        $('#shadowCar').addClass('shadowCar');
                        // $('#cloud1Reverse, #cloud2Reverse').css('opacity', 1);
                        // $('#cloud1, #cloud2').css('opacity', 0);
                        // Effacez le drapeau après un court délai d'inactivité
                        clearTimeout($.data(this, 'scrollTimer'));
                        $.data(this, 'scrollTimer', setTimeout(function() {
                            $('#shadowCar').removeClass('shadowCar');
                            // $('#cloud1Reverse, #cloud2Reverse').css('opacity', 0);
                        }, 200));
                    }, 200);
                }

                // Vérifiez si la position actuelle de défilement est à la distance spécifiée du bas de la page
                    if ((scrollTop + windowHeight + 150 >= documentHeight) || (scrollTop <= 150)) {
                        // Si oui, masquez l'élément .shadowCar
                        $('#cloud1, #cloud2,#cloud1Reverse, #cloud2Reverse').hide();
                    } else {
                        // Sinon, assurez-vous qu'il est affiché
                        $('#cloud1, #cloud2,#cloud1Reverse, #cloud2Reverse').show();
                    }

                lastScrollTop = st;
            });







        });

</script>