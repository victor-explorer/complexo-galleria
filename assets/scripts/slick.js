$(document).ready(function () {
    $('.carousel-places').each(function () {
        let $carousel = $(this);
        $carousel.slick({
            dots: true,
            arrows: true,
            infinite: false,

            centerMode: true,
            slidesToShow: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        centerMode: false,
                        infinite: true,
                    }
                }
            ]
        });
    });

    $('.carousel-cards').each(function () {
        let $carousel = $(this);
        $carousel.slick({
            dots: false,
            arrows: true,
            speed: 400,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });

    function insertPlaceTitleOnNode(node, title) {
        node[0].innerText = `${title}`
    }

    const title = $('.slick-current .place-title')[0].innerText
    const placeTitleNode = $('#place-title')

    insertPlaceTitleOnNode(placeTitleNode, title )

    // On after slide change
    $('.carousel-places').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        const title = $('.slick-current .place-title')[0].innerText
        const placeTitleNode = $('#place-title')

        insertPlaceTitleOnNode(placeTitleNode, title)
    });
})