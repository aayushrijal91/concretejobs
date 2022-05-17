AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$('#show-more-services').on('click', () => {
    $('.see-more-services').slideToggle();

    if ($('#show-more-services').text().trim() == "See More Services") {
        $('#show-more-services').html("See Less Services");
    } else {
        $('#show-more-services').html("See More Services");
    }
});

AOS.refresh();
$(() => {
    let colorRangeSlider = $('.color-range-slider').slick({
        slidesToShow: 1,
        vertical: true,
        verticalSwiping: true,
        arrows: false,
        slidesToScroll: 1,
    });
    AOS.refresh();
    $('.range-button-1').on('click', function () {
        colorRangeSlider.slick('slickGoTo', 0);
        $(this).addClass('active');
        $('.range-button-2').removeClass('active');
        $('.range-button-3').removeClass('active');
        $('.range-button-4').removeClass('active');
    });

    $('.range-button-2').on('click', function () {
        colorRangeSlider.slick('slickGoTo', 1);
        $(this).addClass('active');
        $('.range-button-1').removeClass('active');
        $('.range-button-3').removeClass('active');
        $('.range-button-4').removeClass('active');
    });

    $('.range-button-3').on('click', function () {
        colorRangeSlider.slick('slickGoTo', 2);
        $(this).addClass('active');
        $('.range-button-1').removeClass('active');
        $('.range-button-2').removeClass('active');
        $('.range-button-4').removeClass('active');
    });

    $('.range-button-4').on('click', function () {
        colorRangeSlider.slick('slickGoTo', 3);
        $(this).addClass('active');
        $('.range-button-1').removeClass('active');
        $('.range-button-2').removeClass('active');
        $('.range-button-3').removeClass('active');
    });
    AOS.refresh();
    var currentRangeTab = 1;
    var rangeTabUpperLimit = 3;
    $('.color-range-slider .slick-next').on('click', function (e) {
        currentRangeTab += 1;

        if (currentRangeTab > rangeTabUpperLimit) {
            currentRangeTab = 1;
        }

        changeActiveProcessNav();
    });

    $('.color-range-slider .slick-prev').on('click', function (e) {
        currentRangeTab -= 1;

        if (currentRangeTab === 0) {
            currentRangeTab = rangeTabUpperLimit;
        }

        changeActiveProcessNav();
    });
    AOS.refresh();
    function changeActiveProcessNav() {
        if (currentRangeTab === 1) {
            $('.range-button-1').addClass('active');
            $('.range-button-2').removeClass('active');
            $('.range-button-3').removeClass('active');
            $('.range-button-4').removeClass('active');
        }
        else if (currentRangeTab === 2) {
            $('.range-button-1').removeClass('active');
            $('.range-button-2').addClass('active');
            $('.range-button-3').removeClass('active');
            $('.range-button-4').removeClass('active');
        }
        else if (currentRangeTab === 3) {
            $('.range-button-1').removeClass('active');
            $('.range-button-2').removeClass('active');
            $('.range-button-3').addClass('active');
            $('.range-button-4').removeClass('active');
        }
        else if (currentRangeTab === 4) {
            $('.range-button-1').removeClass('active');
            $('.range-button-2').removeClass('active');
            $('.range-button-3').removeClass('active');
            $('.range-button-4').addClass('active');
        }
    }
})