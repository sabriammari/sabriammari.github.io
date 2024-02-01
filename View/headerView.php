<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/menuStyle.css">
    <link rel="stylesheet" href="../assets/css/particlesButton.css">
    <link rel="stylesheet" href="../assets/css/webglStyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
		</main>
    
    <header class="mb-auto headerAbout">
        <nav class="navbar bg-transparent fixed-top-left">
            <div class="container-fluid">
                <a class="logoNav" href="/" aria-label="Back to Home">
                    <img id="logo" class="fixed-top-right" src="../assets/img/SALogo.png" alt="Logo de Sabri AMMARI"></img>
                </a>
            </div>
        </nav>
    </header>
