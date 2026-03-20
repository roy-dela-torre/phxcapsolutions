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

    $('img[loading="lazy"]').each(function () {
        var $img = $(this);
        var originalSrc = $img.attr('data-src') || $img.attr('src');
        if (originalSrc) {
            function setImageSource(imgElem, src) {
                $(imgElem).attr('src', src);

            }
            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var img = entry.target;
                            setImageSource(img, originalSrc);
                            observer.unobserve(img);

                        }
                    });
                });
                observer.observe(this);
            } else {
                setImageSource($img, originalSrc);

            }
            $img.on('load', function () {
                var width = $img.width();
                var height = $img.height();
                $img.attr({
                    'width': width,
                    'height': height

                });
            }).attr({
                'data-src': originalSrc,
                'decoding': 'async'

            });
        }
    });
    
})(jQuery);