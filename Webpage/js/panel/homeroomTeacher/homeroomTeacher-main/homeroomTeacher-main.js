$(document).ready(function () {
    var left_content_manu_nevi = $('.left-content-manu-nevi');
    left_content_manu_nevi.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    });
    left_content_manu_nevi.mouseleave(function () {
        if ($(this).attr('name') == 'student' && $('.homeroomT-studentList').is(':visible')) {
            $(this).animate({
                backgroundColor: 'rgb(0, 60, 70)',
            }, 'fast')
        } else {
            $(this).animate({
                backgroundColor: 'transparent',
            }, 'fast')
        }
    });
    var navi_id = $('#navi-id');
    if (navi_id.val()) {                        //check if the returned value correspond to the displaying list
        var navi_id_selector = navi_id.val();
        $("#" + navi_id_selector).fadeIn('fast');
        $('.left-content-manu-nevi').each(function () {
            // console.log($(this).children('.left-content-manu-nevi').hasClass('no-select'))
            if ($(this).attr('name') == navi_id_selector && $(this).children('.left-content-manu-current').hasClass('no-select')) {
                $(this).children('.left-content-manu-current').removeClass('no-select');
            } else if ($(this).attr('name') != navi_id_selector && !$(this).children('.left-content-manu-current').hasClass('no-select')) {
                $(this).children('.left-content-manu-current').addClass('no-select');
            }
        })
    } else {                                //default display
        $('.homeroomT-homeroomList:first').fadeIn('fast');
    }

});