var SplideFunc = function() {

    document.addEventListener("DOMContentLoaded", function() {
        // services carousel
        var services = document.querySelectorAll('.carousel');

        if (services.length > 0) {
            services.forEach((item) => {
                console.log(item)
                var serviceCarousel = new Splide(item, {
                    pagination: false,
                    arrows: true,
                    perPage: 1,
                    gap: '30px',
                    lazyLoad: 'nearby'
                })
                serviceCarousel.mount()
            })
        }
    });

}();