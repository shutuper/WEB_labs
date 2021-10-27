
$('.js-button-campaign').click(function() {

    $('.js-overlay-campaign').fadeIn();
    $('.js-overlay-campaign').addClass('disabled');
});

$('.js-close-campaign').click(function() {
    $('.js-overlay-campaign').fadeOut();

});

$(document).mouseup(function (e) {
    const popup = $('.js-popup-campaign');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $('.js-overlay-campaign').fadeOut();

    }
});

$(window).on('load', function () {
    setTimeout(function(){
        if($('.js-overlay-campaign').hasClass('disabled')) {
            return false;
        } else {

            $(".js-overlay-campaign").fadeIn();
        }
    }, 5000);
});

