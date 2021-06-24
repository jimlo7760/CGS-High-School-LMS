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
    var navi_id = $('#navi-id');
    console.log($('.subjectT-courseList').attr('id'));

    $('.left-content-manu-nevi').click(function () {
        var idVal = $(this).attr('name')

    })

    if (navi_id.val()){

    }else {
        console.log(false);
    }

})