$(document).ready(function () {
    console.log("මොනාද හොයන්නේ මෙතන ");
    /*-----------------------------
      Fixed Navigation
    -----------------------------*/
    $(window).on('scroll', function () {
        /* Fixed Navigation */
        if ($('nav').offset().top > 10) {
            $('body').addClass('fixed-header');
        } else {
            $('body').removeClass('fixed-header');
        }
    });

    /*-----------------------------
     Effect on Menu for Mobile
   -----------------------------*/
    document.querySelectorAll('.menu').forEach(btn => {
        btn.addEventListener('click', e => {
            btn.classList.toggle('active');
            $(".mobilenav-overlay").toggleClass("mobilenav-active")
            $("body").toggleClass("overflow-hidden w-full h-full")
        });
    });

    /*-----------------------------
    show Toast after (8000)
    -----------------------------*/
    setTimeout(() => {
        $("#myTost").addClass('show')
    }, 5000);

    $(".close").click(function (){
        $("#myTost").removeClass('show')
    });


    /*-----------------------------
      Back to top with progress indicator
    -----------------------------*/
    var progressPath = document.querySelector('.prgoress_indicator path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).on('scroll', updateProgress);
    var offset = 250;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.prgoress_indicator').addClass('active-progress');
        } else {
            jQuery('.prgoress_indicator').removeClass('active-progress');
        }
    });
    jQuery('.prgoress_indicator').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    });

    /*-----------------------------
         loading before open page
       -----------------------------*/
    // Fakes the loading setting a timeout
    setTimeout(function () {
        $('body').addClass('loaded_page');
    }, 3000);


    /*-----------------------------
    Smooth Scrollspy to (For Navbar)
    -----------------------------*/

    // Add scrollspy to <body>
    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                        ;
                    });
                }
            }
        });

    /*-----------------------------
     Modal Open Close
   -----------------------------*/

    $('.modal-action').click(function () {
        $(this).closest('.modal-wrapper').toggleClass('active');
    });

    /*-----------------------------
     Image Reveal Animation
   -----------------------------*/
    const images = document.querySelectorAll(".img-container");

    const removeOverlay = overlay => {
        let tl = gsap.timeline();

        tl.to(overlay, {
            duration: 1.4,
            ease: "Power2.easeInOut",
            width: "0%",

        });

        return tl;
    };

    const scaleInImage = image => {
        let tl = gsap.timeline();

        tl.from(image, {
            duration: 1.4,
            scale: 1.4,
            ease: "Power2.easeInOut"
        });

        return tl;
    };

    images.forEach(image => {

        gsap.set(image, {
            visibility: "visible"
        });

        const overlay = image.querySelector('.img-overlay');
        const img = image.querySelector("img");

        const masterTL = gsap.timeline({paused: true});
        masterTL
            .add(removeOverlay(overlay))
            .add(scaleInImage(img), "-=1.4");


        let options = {
            threshold: 0
        }

        const io = new IntersectionObserver((entries, options) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    masterTL.play();
                } else {
                    masterTL.progress(0).pause()
                }
            });
        }, options);

        io.observe(image);
    });


    /*-----------------------------
      Cursor Change
    -----------------------------*/
    // options = {
    //     "cursorOuter": "circle-basic",
    //     "hoverEffect": "circle-move",
    //     "hoverItemMove": false,
    //     "defaultCursor": false,
    //     "outerWidth": 30,
    //     "outerHeight": 30
    // };
    // magicMouse(options);
    //
    // $(".menu-item a").on({
    //     mouseenter: function () {
    //         $(".kursor").addClass("hovered");
    //         console.log("asdasd")
    //     },
    //     mouseleave: function () {
    //         $(".kursor").removeClass("hovered");
    //     }
    // })
    //
    // new kursor({
    //     type: 1,
    // })


});

