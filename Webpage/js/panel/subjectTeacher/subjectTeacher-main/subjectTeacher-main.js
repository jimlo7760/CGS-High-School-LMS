$(document).ready(function () {
    $('.left-content-manu-nevi').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    })
    $('.left-content-manu-nevi').mouseleave(function () {
        if($(this).attr('name') == 'student' && $('.subjectT-studentList').is(':visible')){
            $(this).animate({
                backgroundColor: 'rgb(0, 60, 70)',
            }, 'fast')
        }else{
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

    $('.left-content-manu-nevi').click(function () {
        var idVal = $(this).attr('name');
        if (idVal != "student" && $("#" + idVal).is(":hidden")) {
            var className = $("#" + idVal).attr("class");
            $('.subjectT-studentList').css('background-color', 'rgba(255, 255, 255, 0)');
            $('.subjectT-courseList').fadeOut('fast');
            if($('.subjectT-studentList').is(":visible")){
                $('.subjectT-studentList').fadeOut('fast');
            }
            $('#student-nevi').css('background-color', 'rgba(255, 255, 255, 0)');
            $("#" + idVal).delay('fast').fadeIn('fast');
            $('.left-content-manu-current').addClass('no-select');
            if ($(this).children('.left-content-manu-current').is(":hidden")) {
                $(this).children('.left-content-manu-current').removeClass('no-select');
            }
        }else if(idVal == 'student' && $('.subjectT-studentList').is(':hidden')){
            $(this).css('background-color', '#003C46');
            $('.left-content-manu-current').addClass('no-select');
            $('.subjectT-courseList').fadeOut('fast');
            $('.subjectT-studentList').delay('fast').fadeIn('fast');
        }
    })

})