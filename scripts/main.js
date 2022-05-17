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