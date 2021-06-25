$(document).ready(function () {
    $('.left-content-manu-nevi').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    })
    $('.left-content-manu-nevi').mouseleave(function () {
        if ($(this).attr('name') == 'student-list' && $('.subjectT-studentList').is(':visible')) {
            $(this).animate({
                backgroundColor: 'rgb(0, 60, 70)',
            }, 'fast')
        } else {
            $(this).animate({
                backgroundColor: 'transparent',
            }, 'fast')
        }
    })
    $('.right-box').click(function () {
        $(this).find("form").submit();
    })
    $('.left-box-add-content').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    })
    $('.left-box-add-content').mouseleave(function () {
        $(this).animate({
            backgroundColor: 'transparent',
        }, 'fast')
    })

    $('.right-down-info-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.grey-bg').fadeIn();
        $('.subjectT-addCourse-box').fadeIn();
    })
    var navi_id = $('#navi-id');
    if (navi_id.val()) {                        //check if the returned value correspond to the displaying list
        var navi_id_selector = navi_id.val();
        $("#" + navi_id_selector).fadeIn('fast');
        $('.left-content-manu-nevi').each(function () {
            console.log($(this).attr('name'));
            // console.log($(this).children('.left-content-manu-nevi').hasClass('no-select'))
            if($(this).attr('name') == navi_id_selector && $(this).children('.left-content-manu-current').hasClass('no-select')){
                $(this).children('.left-content-manu-current').removeClass('no-select');
            }else if($(this).attr('name') != navi_id_selector && !$(this).children('.left-content-manu-current').hasClass('no-select')){
                $(this).children('.left-content-manu-current').addClass('no-select');
            }
        })
    } else {                                //default display
        $('.subjectT-courseList:first').fadeIn('fast');
    }

})