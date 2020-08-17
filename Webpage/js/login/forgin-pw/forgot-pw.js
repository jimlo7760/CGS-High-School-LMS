$(document).ready(function () {
    $('.box-reset-success').hide();
    $('.box-fadein').animate({
        opacity: '1'
    }, 500);

    $('.request-button').click(function () {
        requestReset();
    })
    function requestReset() {
        $('.box-fadein').animate({
            height: $('.box-reset-success').height(),
            width: $('.box-reset-success').width()
        })
        $('.box-reset-success').show();
        $('.box-reset-success').animate({
            opacity: '1'
        })
        $('.box-content1').fadeOut();
    }
})