// Run multiple slide by the splide

document.addEventListener('DOMContentLoaded', function () {
    var splide = new Splide('#splide', {
        type: 'loop',
        perPage: 1,
        // rewind: true,
        // rewindSpeed:1000,
        autoplay: true,
    });
    splide.mount();

    // document.addEventListener('DOMContentLoaded', function () {
    var splideTrend = new Splide('#splideTrend', {
        // type: 'loop',
        perMove: 1,
        height: '10em',
        width: 'auto',
        // focus: 'center',
        rewindSpeed: 1500,
        rewind: true,
        // autoplay: true
        pagination: false,
        perPage: 8,
        breakpoints: {
            1024: {
                perPage: 6,
            },
            640: {
                perPage: 4,
                // autoWidth: true,
                // width: '100%',
            },
        },
    });
    splideTrend.mount();
    // });

    // document.addEventListener('DOMContentLoaded', function () {
    var splideBrand = new Splide('#splideBrand', {
        perMove: 1,
        height: 'auto',
        width: '100%',
        rewind: true,
        autoplay: true,
        rewindSpeed: 1500,
        pagination: false,
        updateOnmove: true,
        perPage: 3,
        breakpoints: {
            1024: {
                perPage: 2,
            },
            640: {
                perPage: 1,
            },
        },
    });
    splideBrand.mount();

    //TODO:
    // var splide = <?php echo json_encode($arrayCategory[0]); ?>;
    // document.addEventListener('DOMContentLoaded', function () {
    var splideSales = new Splide('#splideSales', {
        // type: 'loop',
        perPage: 4,
        perMove: 1,
        height: 350,
        width: '100%',
        // focus: 'center',
        rewindSpeed: 1500,
        rewind: true,
        // autoplay: true,
        pagination: false,
        breakpoints: {
            640: {
                perPage: 2,
                height: 240,
            },
        },
    });
    splideSales.mount();
    // });
    var splideSales = new Splide('#splideCollections', {
        // type: 'loop',
        perPage: 4,
        perMove: 1,
        height: 350,
        width: '100%',
        // focus: 'center',
        rewindSpeed: 1500,
        rewind: true,
        // autoplay: true,
        pagination: false,
        breakpoints: {
            640: {
                perPage: 2,
                height: 240,
            },
        },
    });
    splideSales.mount();
    // });
});

//TODO: for category slide
$('.slide-category').each(function () {
    var id = $(this).attr('data-id');
    var splideId = '#splide-' + id;
    console.log(splideId);
    document.addEventListener('DOMContentLoaded', function () {
        var splideSales = new Splide(splideId, {
            // type: 'loop',
            perPage: 4,
            perMove: 1,
            height: 350,
            width: '100%',
            // focus: 'center',
            rewindSpeed: 1500,
            rewind: true,
            // autoplay: true,
            pagination: false,
            breakpoints: {
                640: {
                    perPage: 2,
                    height: 240,
                },
            },
        });
        splideSales.mount();
        // });
    });
});
