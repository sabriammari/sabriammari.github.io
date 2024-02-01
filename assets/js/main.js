$(document).ready(function () {

    /* Début Personnalisation du loader de démarrage */
    $('.mainIndex').ready(function() {
    // Cacher le canvas au chargement de la page
    $('#canvasParticles').hide();

    // Afficher le loader au chargement de la page
    $('#loader').fadeIn();

    // Faire disparaître le loader après 2000ms (2 secondes)
    setTimeout(function() {
        $('#loader').fadeOut();
        setTimeout(function() {
            // Faire apparaître le canvas après la disparition du loader
            $('#canvasParticles').fadeIn();
        }, 1000);
    }, 2000);
    });
    /* Fin Personnalisation du loader de démarrage */


    /* Début Personnalisation des gouttes de la page about */
    let getRandom = () => {
        let random = Math.floor(Math.random() * 10) + 46; // Génère un nombre entre 46 et 54 inclus
        let substraction = (100 - random);
        return { random, substraction };
    };

    let moveCell = (index) => {
        const { random: a, substraction: b } = getRandom();
        const { random: c, substraction: d } = getRandom();
        const { random: e, substraction: f } = getRandom();
        const { random: g, substraction: h } = getRandom();

        $(".cell").eq(index).animate({
            borderTopLeftRadius: `${a}%`,
            borderTopRightRadius: `${b}%`,
            borderBottomRightRadius: `${c}%`,
            borderBottomLeftRadius: `${d}%`,
            borderTopWidth: `${e}px`,
            borderRightWidth: `${f}px`,
            borderBottomWidth: `${g}px`,
            borderLeftWidth: `${h}px`
        }, 500, "linear");
    };

    let index = 0;
    let moveCellFunctions = [0, 1, 2];

    let startInterval = () => {
        setInterval(() => {
            if (index < moveCellFunctions.length) {
                moveCell(moveCellFunctions[index]);
                index++;
            } else {
                index = 0;
            }
        }, 500);
    };

    startInterval();
    setTimeout(() => {
        moveCell(0);
        moveCell(1);
        moveCell(2);
        startInterval();
    }, 5000);




    // Pour les .titleCell
    for (let i = 0; i < $(".titleCell").length; i++) {
        $(".titleCell").eq(i).mouseover(function() {
            $(".cell").eq(i).addClass("enlargeCell");
        });

        $(".titleCell").eq(i).mouseleave(function() {
            $(".cell").eq(i).removeClass("enlargeCell");
        });
    }

    // Pour les .cell
    for (let i = 0; i < $(".cell").length; i++) {
        $(".cell").eq(i).mouseover(function() {
            $(".cell").eq(i).addClass("enlargeCell");
        });

        $(".cell").eq(i).mouseleave(function() {
            $(".cell").eq(i).removeClass("enlargeCell");
        });
    }
    /* Fin Personnalisation des gouttes de la page about */



    /* Début Personnalisation des modals de la page about */
    $("#openModalProfil").click(function() {
        $("html, body").animate({ scrollTop: $(document).height() }, 10)
            // Ajouter un délai de 2 secondes avant le fadeIn
            setTimeout(function() {
                $("#modalProfil").fadeIn(3200);
            }, 2000); // Délai de 2 secondes avant le fadeIn

        $("header, .aboutMe").fadeOut(1500);
        $("body").addClass("modal-open");
    });
    
    $(".close").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 10)
        // Ajouter un délai de 2 secondes avant le fadeIn
        setTimeout(function() {
            $("header, .aboutMe").fadeIn();
        }, 2000); // Délai de 2 secondes avant le fadeIn

        $(".valueText").css('opacity', '0');
        $(".progress-value").css('opacity', '0');
        $("#modalProfil, #modalSkills, #modalExperiences").css("display", "none");
        $("body").removeClass("modal-open");
        
    });
    

    $("#openModalSkills").click(function() {
        $("html, body").animate({ scrollTop: $(document).height() }, 10)
            // Ajouter un délai de 2 secondes avant le fadeIn
            setTimeout(function() {
                $("#modalSkills").fadeIn(3200);
            }, 2000); // Délai de 2 secondes avant le fadeIn

        $("header, .aboutMe").fadeOut(1500);
        $("body").addClass("modal-open");
    });

    // $("#openModalSkills").click(function() {
    //     $("html, body").animate({ scrollTop: $(document).height() }, 10)

    //     $("header, .aboutMe").fadeOut(1000, function() {
    //         $("body").addClass("modal-open");
            
    //         // Ajout du fadeIn du modalSkills après le fadeOut
    //         $("#modalSkills").fadeIn(2500, function() {
    //             $(".progress-value").css('opacity', '1');

    //             // Définir un tableau d'objets contenant les données pour chaque animation
    //             var animations = [
    //                 { selector: '#progressValueHTML', width: '88%', delay: 0 },
    //                 { selector: '#progressValueCSS', width: '85%', delay: 300 },
    //                 { selector: '#progressValueJS', width: '68%', delay: 600 },
    //                 { selector: '#progressValueBootstrap', width: '90%', delay: 900 },
    //                 { selector: '#progressValuePHP', width: '75%', delay: 1200 },
    //                 { selector: '#progressValueWordPress', width: '79%', delay: 1500 },
    //                 { selector: '#progressValueReact', width: '58%', delay: 1800 },
    //                 { selector: '#progressValue1', width: '78%', delay: 2100 },
    //                 { selector: '#progressValue2', width: '82%', delay: 2400 },
    //                 { selector: '#progressValue3', width: '69%', delay: 2700 }
    //             ];
                
    //             // Fonction pour animer chaque élément en fonction des données spécifiées
    //             function animateProgressBar(element) {
    //                 var progress = $(element.selector);
    //                 progress.width('5%');
                
    //                 progress.delay(element.delay).animate({ width: element.width }, {
    //                     duration: 1500,
    //                     step: function(now, fx) {
    //                         var gradientColor = Math.round(now * 2.55);
    //                         var bgColor = 'rgb(' + (255 - gradientColor) + ',' + gradientColor + ',0)';
    //                         progress.css({
    //                         'background-color': bgColor,
    //                         'box-shadow': '10px 10px 40px -10px ' + bgColor,
    //                         });
    //                     },
    //                     complete: function() {
    //                         // Actions supplémentaires à effectuer à la fin de chaque animation si nécessaire
    //                         $(".valueText").css('opacity', '1');
    //                     }
    //                 });
    //             }
                
    //             // Boucle à travers le tableau d'objets pour animer chaque élément
    //             for (var i = 0; i < animations.length; i++) {
    //                 animateProgressBar(animations[i]);
    //             }
    //         });
    //     });
    // });

    
    // $("#openModalExperiences").click(function() {
    //     $("html, body").animate({ scrollTop: $(document).height() }, 10)
    //         // Ajouter un délai de 2 secondes avant le fadeIn
    //         setTimeout(function() {
    //             $("#modalExperiences").fadeIn(3200);
    //         }, 2000); // Délai de 2 secondes avant le fadeIn

    //     $("header, .aboutMe").fadeOut(1500);
    //     $("body").addClass("modal-open");
    // });
    /* Fin Personnalisation des modals de la page about */



});







