<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/menuStyle.css">
    <!-- <link rel="stylesheet" href="../assets/css/particlesButton.css"> -->
    <link rel="stylesheet" href="../assets/css/webglStyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Genos:wght@500&display=swap" rel="stylesheet">
    <title>Portfolio de Sabri AMMARI</title>
    <script>
        document.addEventListener('DOMContentLoaded', function () {


            // Masquer l'élément avec la classe "menu"
            var menuElement = document.querySelector('.menu');
            var aboutElement = document.querySelector('#about');
            var logoNavElement = document.querySelector('.logoNav');


            // Anime.js animation
            anime({
                targets: '.staggering-grid-demo .el',
                scale: [
                    { value: 0, easing: 'easeInOutCubic', duration: 1200, delay: 300 },
                ],
                delay: anime.stagger(500, { grid: [30, 15], from: 'center' }),
                complete: function () {
                    // Retirez l'événement après l'animation
                    document.removeEventListener('DOMContentLoaded', arguments.callee);
                    var gridDemoElement = document.querySelector('.staggering-grid-demo');
                    // Changer la valeur de la propriété z-index à 1
                    gridDemoElement.style.zIndex = '1';
                    menuElement.classList.remove('d-none');
                    aboutElement.classList.remove("d-none");
                    logoNavElement.classList.remove("d-none");

                }
            });
        });
    </script>

</head>

<style>
    .staggering-grid-demo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100vw;
        height: 100vh;
        background-color: transparent;
        z-index: 9999;
    }

    .el {
        width: 60px;
        /* Ajustez la largeur de l'élément selon vos préférences */
        height: 100vh;
        /* Ajustez la hauteur de l'élément selon vos préférences */
        background-color: #000000;
        /* Couleur de l'élément, à ajuster selon vos préférences */
    }
</style>

<body class="d-flex text-center bodyAbout demo-5">
    <div class="staggering-grid-demo">
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <div class="el"></div>
        <!-- Ajoutez plus d'éléments selon vos besoins -->
    </div>
    <header class="mb-auto headerAbout">
        <div class="main main--demo-5">
            <div class="content--demo-5">

                <!-- Début Boutton menu toggle -->
                <button class="menu d-none">
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
                            <a class="text-decoration-none inactiveLink" href="about">
                                <li class="active" data-offset="16">
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
        </div>
        <nav class="navbar bg-transparent fixed-top-left">
            <div class="container-fluid">
                <a class="logoNav d-none" href="/" aria-label="Back to Home">
                    <img id="logo" class="fixed-top-right" src="../assets/img/SALogo.png"
                        alt="Logo de Sabri AMMARI"></img>
                </a>
            </div>
        </nav>
    </header>

    <main class="container-fluid mainAbout">
        <canvas id="canvasTunnel" class="experience"></canvas>
        <div class="scrollTarget"></div>
        <div class="vignette-radial"></div>
        <section id="about" class="d-none position-absolute start-0">
            <div class="aboutMe vw-100 position-relative">
                <div class="cell-div d-flex flex-wrap justify-content-center">
                    <div class="cell-container mx-auto">
                        <div id="cell1" class="cell">
                            <div class="inner-cell">
                                <div id="openModalProfil" class="titleCell">Profil</div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-container mx-auto">
                        <div id="cell2" class="cell">
                            <div class="inner-cell">
                                <div id="openModalSkills" class="titleCell">Compétences</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="cell-container mx-auto">
                        <div id="cell3" class="cell">
                            <div class="inner-cell">
                                <div id="openModalExperiences" class="titleCell">Expériences</div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="modal" id="modalProfil">
                <div class="modal-content-profil text-white">
                    <div class="text-end button-close">
                        <i class="bi bi-x-lg shadowClose close"></i>
                    </div>
                    <div class="round-frame mx-auto mb-3">
                        <img id="portrait" src="../assets/img/photo_Sabri.png" alt="Portrait de Sabri">
                    </div>

                    <div class="text-center profilDescription">
                        <h1 class="fw-bold profilDescription">Sabri AMMARI</h1>
                        <h2 class="fw-bold profilDescription">Développeur Web</h2>
                        <p class="mt-3 fs-5 mx-3">
                            Fort d'une formation solide en Développement Web et Web Mobile, j'ai acquis une certaine
                            expertise dans la programmation à travers plusieurs langages informatiques.<br>
                            Je possède une maîtrise approfondie des étapes techniques essentielles à la conception
                            d'applications web et de sites internet, répondant précisément aux besoins des clients.<br>
                            Désireux de mettre à profit ces compétences, mon objectif est désormais d'intégrer des
                            équipes spécialisées dans le développement web.
                        </p>
                    </div>
                </div>
            </div>

            <div class="modal" id="modalSkills">
                <div class="modal-content">
                    <div class="text-end button-close">
                        <i class="bi bi-x-lg shadowClose close"></i>
                    </div>
                    <h1 class="fw-bold text-white mb-5 profilSkills">Mes compétences</h1>
                    <div class="skills">
                        <div class="skills__row">
                            <div class="skills__item">
                                <img src="../assets/img/html_3d.png" alt="">
                                <div class="skills__item-name">HTML</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/css_3d.png" alt="">
                                <div class="skills__item-name">CSS</div>
                            </div>
                        </div>
                        <div class="skills__row">
                            <div class="skills__item">
                                <img src="../assets/img/sass_3d.png" alt="">
                                <div class="skills__item-name">SASS</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/bootstrap_3d.png" alt="">
                                <div class="skills__item-name">bootstrap</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/tailwind_3d.png" alt="">
                                <div class="skills__item-name">Tailwind</div>
                            </div>
                        </div>
                        <div class="skills__row">
                            <div class="skills__item">
                                <img src="../assets/img/javascript_3d.png" alt="">
                                <div class="skills__item-name">JAVASCRIPT</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/sql_3d.png" alt="" style="scale: 1.2;">
                                <div class="skills__item-name">SQL</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/php_3d.png" alt="">
                                <div class="skills__item-name">PHP</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/git_3d.png" alt="">
                                <div class="skills__item-name">GIT</div>
                            </div>
                        </div>
                        <div class="skills__row">
                            <div class="skills__item">
                                <img src="../assets/img/wordpress_3d.png" alt="">
                                <div class="skills__item-name">WORDPRESS</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/react_3d.png" alt="">
                                <div class="skills__item-name">REACT.JS</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/vue_3d.png" alt="">
                                <div class="skills__item-name">VUE.JS</div>
                            </div>
                        </div>
                        <div class="skills__row">
                            <div class="skills__item">
                                <img src="../assets/img/symfony_3d.png" alt="">
                                <div class="skills__item-name">SYMFONY</div>
                            </div>
                            <div class="skills__item">
                                <img src="../assets/img/gsap_3d.png" alt="">
                                <div class="skills__item-name">GSAP</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="modalExperiences">
                <div class="modal-content">
                    <div class="text-end button-close">
                        <i class="bi bi-x-lg shadowClose close"></i>
                    </div>
                    <div class="text-center profilDescription">

                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    include 'footerView.php';
    ?>

    <script>

        // document.addEventListener('DOMContentLoaded', function () {
        //             // Vos animations GSAP ici
        //             gsap.from('.page', {
        //                 opacity: 0,
        //                 scale: 0,
        //                 borderRadius: '50%',
        //                 duration: 3.5,
        //                 ease: 'power3.inOut',
        //                 onComplete: function () {
        //                     gsap.to('.page', { borderRadius: '50%', duration: 3.5, ease: 'power3.inOut' });
        //                 }
        //             });
        //         });

    </script>
