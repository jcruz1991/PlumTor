jQuery(document).ready(function ($) {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#topBtn').fadeIn();
        } else {
            $('#topBtn').fadeOut();
        }
    });

    // scrolls top top of page when button clicked
    $('#topBtn').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });
});