$(document).ready(function () {
    $('.box-fadein').animate({
        opacity: '1'
    }, 500);
    $('#password-repeat').on('input propertychange',function () {
        var emai = $('#password').val();
        var emai1 = $('#password-repeat').val();
        if (emai != emai1) {
            $('.forgot-unmatch-des').fadeIn();
            $('#password-repeat').animate({
                borderColor: '#DD3444'

            })
        } else {
            $('.forgot-unmatch-des').fadeOut();
            $('#password-repeat').animate({
                borderColor: 'black'
            })
        }
    })
})