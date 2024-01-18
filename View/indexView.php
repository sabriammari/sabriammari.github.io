<?php
include 'headerIndexView.php';
?>

<main class="container-fluid mainIndex">

    <!-- <div id="loader">
        <div id="splash" class="splash">
            <div class="splash-circle circle-1">
                <div class="circle-animation"></div>
            </div>
            <div class="splash-circle circle-2">
                <div class="circle-animation"></div>
            </div>
            <div class="splash-circle circle-3">
                <div class="circle-animation"></div>
            </div>
        </div>
        <div class="loader-section" id="section-left"></div>
        <div class="loader-section" id="section-right"></div>
    </div> -->
    <section class="h-100">

        <div class="">
                <div class="la-anim"></div>
			<div id="large-header" class="large-header start-0">
				<canvas id="canvasParticles"></canvas>
                <div class="grid__item theme-10 position-absolute top-0 start-0">
                    <div id="btnEnter" class="">
                        <div class="titleIndex position-absolute start-50 translate-middle">
                            <div class="titleHome"></div>
                        </div>
                        <div class="subtitleindex position-absolute start-50 translate-middle">
                            <div class="subtitleHome"></div>
                        </div>
                        <!-- <span></span>
                        <span></span>
                        <span></span>
                        <span></span> -->


                        <div id="la-buttons">
                            
                            <button class="particles-button fw-bolder text-uppercase pt-1">Découvrir
                                <button data-anim="la-anim"></button>
                                
                            </button>
                        </div>
                        <form id="enterForm" action="" method="POST"></form>

        <!-- <div id="particles-js" class=""> -->
        <!-- </div> -->
    </section>
</main>

<?php
include 'footerView.php';
?>

<script>
    $(document).ready(function() {
        $(".particles-button").click(function(event) {
            event.preventDefault(); // Empêcher le comportement par défaut du bouton
            $('.bodyIndex, .bodyAbout').css({
                overflow: 'hidden', // Empêcher le défilement pendant l'animation
            });
            $('.titleHome, .subtitleHome').fadeOut(50);
            $('.large-header').fadeOut(2500);

            setTimeout(function () {
                var button = document.querySelector('#la-buttons > button');
                var anim = button.getAttribute('data-anim');
                var animEl = document.querySelector('.' + anim);
                var inProgress = false;

                if (inProgress) return false;
                inProgress = true;
                classie.add(animEl, 'la-animate');

                setTimeout(function () {
                    classie.remove(animEl, 'la-animate');
                    inProgress = false;
                }, 800);
            }, 1000);

            $('#canvasParticles').fadeOut(1600, function() {
                window.location.href = "about"; // Redirection vers about
            });

            document.body.appendChild(fragment);
            $('.bodyIndex, .bodyAbout').css('overflow', 'hidden'); // Empêcher le défilement de la page

        });
    
    
    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    });
</script>
