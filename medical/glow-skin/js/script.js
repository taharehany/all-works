(function ($) {
    "use strict";
    jQuery(document).on('ready', function () {

        /* 1. Proloder */
        $(window).on('load', function () {
            $('#preloader-active').delay(450).fadeOut('slow');
            $('body').delay(450).css({
                'overflow': 'visible'
            });
        });

        /* Pop Up Video */
        $('.popup-video').magnificPopup({
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com',
                        src: 'https://www.youtube.com/embed/yzIkF1ARfu0?autoplay=1'
                    }
                }
            }
        });

        var PATH = {};
        /** NAV COLLAPSE **/
        PATH.MenuClose = function () {
            $('.navbar-nav .nav-link').on('click', function () {
                var toggle = $('.navbar-toggler').is('visible');
                if (toggle) {
                    $('.navbar-collapse').collapse('hide');
                }
            });
        }

        /** FIXED HEADER **/
        PATH.HeaderFixed = function () {
            var varHeaderFix = $(window).scrollTop() >= 60,
                $navbar = $('.navbar');
            if (varHeaderFix) {
                $navbar.addClass('fixed-header');
            } else {
                $navbar.removeClass('fixed-header');
            }
        }

        /* Window on scroll function */
        $(window).on("scroll", function () {
            PATH.HeaderFixed();

        });


        /* Store the element in el */
        let el = document.getElementById('tilt')

        /* Get the height and width of the element */
        const height = el.clientHeight
        const width = el.clientWidth

        /*
         * Add a listener for mousemove event
         * Which will trigger function 'handleMove'
         * On mousemove
         */
        el.addEventListener('mousemove', handleMove)

        /* Define function a */
        function handleMove(e) {
            /*
             * Get position of mouse cursor
             * With respect to the element
             * On mouseover
             */
            /* Store the x position */
            const xVal = e.layerX
            /* Store the y position */
            const yVal = e.layerY

            /*
             * Calculate rotation valuee along the Y-axis
             * Here the multiplier 20 is to
             * Control the rotation
             * You can change the value and see the results
             */
            const yRotation = 20 * ((xVal - width / 2) / width)

            /* Calculate the rotation along the X-axis */
            const xRotation = -20 * ((yVal - height / 2) / height)

            /* Generate string for CSS transform property */
            const string = 'perspective(500px) scale(1.01) rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)'

            /* Apply the calculated transformation */
            el.style.transform = string
        }

        /* Add listener for mouseout event, remove the rotation */
        el.addEventListener('mouseout', function () {
            el.style.transform = 'perspective(500px) scale(1) rotateX(0) rotateY(0)'
        })

        /* Add listener for mousedown event, to simulate click */
        el.addEventListener('mousedown', function () {
            el.style.transform = 'perspective(500px) scale(0.9) rotateX(0) rotateY(0)'
        })

        /* Add listener for mouseup, simulate release of mouse click */
        el.addEventListener('mouseup', function () {
            el.style.transform = 'perspective(500px) scale(1.1) rotateX(0) rotateY(0)'
        })

        /*var heightImage = $(".image img").height();
        console.log(heightImage);
        $(".image").height(heightImage);*/
        
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 700,
            speedAsDuration: true,
        });

    });
}(jQuery));
