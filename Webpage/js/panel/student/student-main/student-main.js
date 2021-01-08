$(document).ready(function () {
    $('.left-content-manu-nevi').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    })
    $('.left-content-manu-nevi').mouseleave(function () {
        $(this).animate({
            backgroundColor: 'transparent',
        }, 'fast')
    })
    $('.right-box').click(function () {
        $(this).find("form").submit();
    })

    $('.left-content-manu-nevi').click(function () {
        var idVal = $(this).attr('name');
        console.log(idVal);
        if (idVal != "student" && $("#" + idVal).is(":hidden")) {
            var className = $("#" + idVal).attr("class");
            $('.subjectT-courseList').fadeOut('fast');
            if($('.subjectT-studentList').is(":visible")){
                $('.subjectT-studentList').fadeOut('fast');
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
})