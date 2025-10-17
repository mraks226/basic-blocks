import './benefits-accordion.css';

console.log('benefits');

    const benefitsAccordion = document.querySelectorAll('.benefits-accordion');

    benefitsAccordion.forEach(accordion => {
        const dataTabs = accordion.querySelector('.benefits-accordion__wrapper').getAttribute('data-tabs');
        const cards = accordion.querySelectorAll('.wp-block-details');

        if (dataTabs === 'one') {
            cards.forEach(card => {
                card.addEventListener('click', () => {
                    if (card.hasAttribute('open')) {
                        card.click();
                    } else {
                        cards.forEach(item => item.removeAttribute('open'));
                        card.click();
                    }
                });
            });
        }
    });
