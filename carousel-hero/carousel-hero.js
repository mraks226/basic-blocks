// Listen for the DOMContentLoaded event to ensure the DOM is fully loaded before executing the script
document.addEventListener('DOMContentLoaded', function () {
    const carouselWrapper = document.querySelector('.carousel-hero');
    const sliders = carouselWrapper.querySelectorAll('.splide');
    if (!!sliders) {
        sliders.forEach((slider) => {
            var splide = new Splide(slider, {
                perPage: 1,
                pagination: false,
                arrows: false,
                mediaQuery: 'min',
                focus  : 'center',
                type   : 'loop',
                breakpoints: {
                    0: {
                        gap: 13,
                    },
                    576: {
                        gap: 16,
                    },
                }
            }).mount();

            let prevButtons = slider.querySelectorAll('.arrow--prev');
            prevButtons.forEach(function (btn) {
                btn.addEventListener('click', e => {
                    splide.go('-1')
                })
            })

            let nextButtons = slider.querySelectorAll('.arrow--next');
            nextButtons.forEach(function (btn) {
                btn.addEventListener('click', e => {
                    splide.go('+1')
                })
            })

            const totalSlides = splide.length;
            const currentPageElement = carouselWrapper.querySelector('.current-page');
            const totalPagesElement = carouselWrapper.querySelector('.total-pages');

            // Display total number of slides
            totalPagesElement.textContent = totalSlides;

            splide.on('moved', function (newIndex) {
                // Display current slide number
                currentPageElement.textContent = newIndex + 1;
            });
        });
    }
});
