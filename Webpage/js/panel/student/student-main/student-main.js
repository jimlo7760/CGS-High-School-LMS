$(document).ready(function () {
    var left_content_manu_nevi = $('.left-content-manu-nevi');
    left_content_manu_nevi.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    });
    left_content_manu_nevi.mouseleave(function () {
        $(this).animate({
            backgroundColor: 'transparent',
        }, 'fast')
    });
    $('.right-box').click(function () {
        $(this).find("form").submit();
    });

    var subjectT_studentList = $('.subjectT-studentList');
    left_content_manu_nevi.click(function () {
        var idVal = $(this).attr('name');
        console.log(idVal);
        if (idVal != "student" && $("#" + idVal).is(":hidden")) {
            var className = $("#" + idVal).attr("class");
            $('.subjectT-courseList').fadeOut('fast');
            if(subjectT_studentList.is(":visible")){
                subjectT_studentList.fadeOut('fast');
            }
            $("#" + idVal).delay('fast').fadeIn('fast');

            $('.left-content-manu-current').addClass('no-select');
            if ($(this).children('.left-content-manu-current').is(":hidden")) {
                $(this).children('.left-content-manu-current').removeClass('no-select');
            }
        }else if(idVal == "student" && $('.subjectT-studentList').is(":hidden")){
            $('.subjectT-courseList').fadeOut('fast');
            $('.subjectT-studentList').delay('fast').fadeIn('fast');
            $('.left-content-manu-current').addClass('no-select');
            $('#student-nevi').children('.left-content-manu-current').removeClass('no-select')
        }

    })
});