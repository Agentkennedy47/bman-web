$(document).ready(function() {
    setTimeout(function() {
        $('#container').addClass('loaded');
        // Once the container has finished, the scroll appears
        if ($('#container').hasClass('loaded')) {
            // It is so that once the container is gone, the entire preloader section is deleted
            $('#preloader').delay(9000).queue(function() {
                $(this).remove();
            });}
    }, 3000);
});

$('.slider').slick({
    centerMode: true,
    dots: true,
    autoplay: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [{
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        Infinity: true,
        slidesToShow: 1
      },
    }]
});