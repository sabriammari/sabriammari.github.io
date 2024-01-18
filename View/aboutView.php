<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/menuStyle.css">
    <!-- <link rel="stylesheet" href="../assets/css/particlesButton.css"> -->
    <link rel="stylesheet" href="../assets/css/webglStyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Genos:wght@500&display=swap" rel="stylesheet">
    <title>Portfolio de Sabri AMMARI</title>
    <!-- <script>!function () { document.documentElement.className = "js"; var e, t; (t = document.createElement("style")).innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e || alert("Please view this demo in a modern browser that supports CSS Variables.") }();</script> -->
    <script>


document.addEventListener('DOMContentLoaded', function () {
    var bodyAbout = document.querySelector('.bodyAbout');
    bodyAbout.style.opacity = '1';

    gsap.from(bodyAbout, {
        opacity: 0,
        scale: 0,
        duration: 3.5,
        ease: 'power3.inOut',
        transformOrigin: '100% -50%'
    });
});


</script>
</head>

<body class="d-flex text-center bodyAbout demo-5">

    <header class="mb-auto headerAbout">
    <div class="main main--demo-5">
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
                <a class="logoNav" href="/" aria-label="Back to Home">
                    <img id="logo" class="fixed-top-right" src="../assets/img/SALogo.png" alt="Logo de Sabri AMMARI"></img>
                </a>
            </div>
        </nav>
    </header>

<main class="container-fluid">


    <canvas id="canvasTunnel" class="experience"></canvas>
    <div class="scrollTarget"></div>
    <div class="vignette-radial"></div>


    
    <section id="about" class="min-vh-100 position-absolute start-0">
        <div class="aboutMe vw-100">
            <div class="position-absolute">
                <div class="title-container position-relative">
                    <div class="row">
                        <div id="openModalProfil" class="col-4 titleCell">Profil</div>
                        <div id="openModalSkills" class="col-4 titleCell">Compétences</div>
                        <div id="openModalExperiences" class="col-4 titleCell">Expériences</div>
                    </div>
                </div>
            </div>

            
            <div class="d-flex justify-content-around">
                <div class="cell-container mx-auto">
                    <div id="cell1" class="cell"></div>
                </div>
                <div class="cell-container mx-auto">
                    <div id="cell2" class="cell"></div>
                </div>
                <div class="cell-container mx-auto">
                    <div id="cell3" class="cell"></div>
                </div>
            </div>
        </div>
        <div class="modal" id="modalProfil">
            <div class="modal-content text-white" style="height: 100vh;">
                <div class="text-end">
                    <i class="bi bi-x-lg shadowClose close"></i>
                </div>
                <div class="round-frame mx-auto mb-3">
                    <img id="portrait" src="../assets/img/photo_Sabri.png" alt="Portrait de Sabri" height="200px">
                </div>
                
                <div class="text-center profilDescription">
                    <h1 class="fw-bold profilDescription">Sabri AMMARI</h1>
                    <h2 class="fw-bold profilDescription">Développeur Web</h2>
                    <p class="mt-3 fs-5 mx-3">
                        Fort d'une formation solide en Développement Web et Web Mobile, j'ai acquis une expertise dans la programmation à travers plusieurs langages informatiques.<br>
                        Je possède une maîtrise approfondie des étapes techniques essentielles à la conception d'applications web et de sites internet, répondant précisément aux besoins des clients.<br>
                        Désireux de mettre à profit ces compétences, mon objectif est désormais d'intégrer des équipes spécialisées dans le développement web.
                    </p>
                </div>

                
            </div>
        </div>

        <div class="modal" id="modalSkills">
            <div class="modal-content" style="height: 100vh;">
                <div class="text-end">
                    <i class="bi bi-x-lg shadowClose close"></i>
                </div>
                <h1 class="fw-bold text-white mb-5 profilDescription">Mes compétences</h1>
                <div class="row mt-5">
                    <div class="col mx-3">
                        <div class="row gy-5 pt-3 text-center profilDescription">
                            <div class="progress1 px-0">
                                <div id="progressValueHTML" class="progress-value">
                                    <span class="valueText fw-bold">HTML 88%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValueCSS" class="progress-value">
                                    <span class="valueText fw-bold">CSS 85%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValueJS" class="progress-value">
                                    <span class="valueText fw-bold">JS 68%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValueBootstrap" class="progress-value">
                                    <span class="valueText fw-bold">Bootstrap 90%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValuePHP" class="progress-value">
                                    <span class="valueText fw-bold">PHP 75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-3">
                        <div class="row gy-5 pt-3 text-center profilDescription">
                            <div class="progress1 px-0">
                                <div id="progressValueWordPress" class="progress-value">
                                    <span class="valueText fw-bold">WordPress 79%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValueReact" class="progress-value">
                                    <span class="valueText fw-bold">React 58%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValue1" class="progress-value">
                                    <span class="valueText fw-bold">L1 78%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValue2" class="progress-value">
                                    <span class="valueText fw-bold">L2 82%</span>
                                </div>
                            </div>
                            <div class="progress1 px-0">
                                <div id="progressValue3" class="progress-value">
                                    <span class="valueText fw-bold">L3 69%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modalExperiences">
            <div class="modal-content" style="height: 100vh;">
                <div class="text-end">
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