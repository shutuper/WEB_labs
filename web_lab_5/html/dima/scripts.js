fullscreen();
$(window).resize(fullscreen);
$(window).scroll(headerParallax);

function fullscreen() {
    const masthead = $('.masthead');
    const windowH = $(window).height();
    const windowW = $(window).width();

    masthead.width(windowW);
    masthead.height(windowH);
}

function headerParallax() {
    const st = $(window).scrollTop();
    const headerScroll = $('.masthead h1');

    if (st < 500) {
        headerScroll.css('opacity', 1-st/1000);
        $('.masthead-arrow ').css('opacity', 0.5-st/250);
        headerScroll.css({
            '-webkit-transform' : 'translateY(' + st/7 + '%)',
            '-ms-transform' : 'translateY(' + st/7 + '%)',
            transform : 'translateY(' + st/7 + '%)'
        });
    }
}
