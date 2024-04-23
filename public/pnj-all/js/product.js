document.addEventListener('DOMContentLoaded', function () {
    var main = new Splide('#main-carousel', {
        type: 'fade',
        rewind: true,
        pagination: false,
        arrows: false,
    });

    var thumbnails = new Splide('#thumbnail-carousel', {
        fixedWidth: 100,
        fixedHeight: 100,
        height: '100%',
        gap: 10,
        rewind: true,
        pagination: false, // Enable thumbnail pagination
        perPage: 2, // Show 4 thumbnails per view
        direction: 'ttb',
        isNavigation: true,
    });

    main.sync(thumbnails);
    main.mount();
    thumbnails.mount();

    var slideProduct = new Splide('#slideProduct', {
        type: 'loop',
        rewind: true,
        perPage: 1,
        pagination: true,
        width: '100%',
    });
    slideProduct.mount();

    var slideGoods = new Splide('#slideGoods', {
        // type: 'loop',
        perPage: 4,
        perMove: 1,
        height: 'auto',
        rewindSpeed: 1500,
        rewind: true,
        // perPage: 1,
        pagination: false,
        breakpoints: {
            640: {
                perPage: 2,
            },
        },
    });
    slideGoods.mount();

    var slideView = new Splide('#slideView', {
        // type: 'loop',
        perPage: 4,
        perMove: 1,
        height: 'auto',
        rewindSpeed: 1500,
        rewind: true,
        pagination: false,
        breakpoints: {
            640: {
                perPage: 2,
            },
        },
    });
    slideView.mount();
});

// document.addEventListener('DOMContentLoaded', function () {});
