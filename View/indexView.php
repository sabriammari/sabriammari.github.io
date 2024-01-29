<?php
include 'headerIndexView.php';
?>

<main class="container-fluid mainIndex">
    <div id="loader">
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
    </div>
    <section class="h-100">
        <div id="large-header" class="large-header start-0">
            <canvas id="canvasParticles"></canvas>
            <div class="grid__item theme position-absolute top-0 start-0">
                <div id="btnEnter" class="">
                    <div class="titleIndex position-absolute start-50 translate-middle">
                        <div class="titleHome"></div>
                        <div class="subtitleHome"></div>
                    </div>
                    <div class="button_discover">
                        <button class="particles-button fw-bolder text-uppercase">Découvrir</button>
                    </div>
                </div>
            </div>
        </div>
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
            $('.large-header').fadeOut(2000);


            $('#canvasParticles').fadeOut(1500, function() {
                window.location.href = "about"; // Redirection vers about
            });

            document.body.appendChild(fragment);
            $('.bodyIndex, .bodyAbout').css('overflow', 'hidden'); // Empêcher le défilement de la page

        });
    
    
    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    });
</script>
