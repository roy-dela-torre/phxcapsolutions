(function ($) {
    $(document).ready(function () {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: true,
                offset: 80,
                duration: 900,
                easing: 'ease-out-cubic'
            });
        }

        if ($("#how_it_works").length && typeof $.fn.owlCarousel === 'function') {
            $("#how_it_works").owlCarousel({
                margin: 32,
                loop: true,
                responsiveClass: true,
                smartSpeed: 600,
                nav: false,
                dots: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                        autoWidth: true,
                    },
                    1024: {
                        items: 3,
                        autoWidth: true,
                    }
                }
            });
        }

        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }

    });
})(jQuery);