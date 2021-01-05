$(document).ready(function () {
    $('.all').animate({
        opacity: '1'
    })
    var body = document.body.clientHeight;
    var pageheight = $(window).height();
    if (body < pageheight) {
        body = pageheight;
    }
    $('.left-content').height(body);
    var bg = body;
    $('.grey-bg').css("height", bg);
    $('.right-top-research-text').on('input propertychange', function () {
        var input = $('.right-top-research-text').val();
        $(".result-box-name").each(function (item) {
            count = 0;
            var contentValue = $(".result-box-name")[item].innerText;
            // console.log(contentValue)
            if (contentValue.toLowerCase().indexOf(input.toLowerCase()) < 0) {
                // console.log($(this).parent());
                $(this).parent().hide(1);
            } else {
                $(this).parent().show();
            }
            if (count == (item + 1)) {
                $(".result-box-row").hide();
            } else {
                $(".result-box-row").show();
            }
        });
    })
    $('.result-box-sort').each(function (item) {
        if ($('.result-box-sort')[item].innerText.indexOf('Teacher') > 0) {
            $(this).css(
                'margin-right', '35px'
            )
        }
    })

    $('.left-content-navi-item').click(function () {
        $(this).siblings('.left-content-manu').slideToggle();
        $(this).find('.left-content-navi-img').toggleClass('add_transform');
    })
    var count = 0;
    $('.right-top-left').click(function () {
        count++;
        var search = body - 75 + 'px';
        $('.grey-bg').css({
            'top': '75px',
            'height': search,
        })
        $('.right-top-research-text').toggleClass('pointer-alt');
        if (count % 2 == 1) {
            $('.grey-bg').fadeIn();
            $('.result-box').fadeIn();
        } else {
            $('.grey-bg').fadeOut();
            $('.result-box').fadeOut();
        }
    })
    $('.right-top-person').click(function () {
        $('.personal-panel').slideToggle();
        $('.right-top-person-arrow').toggleClass('add_transform');
        var nameWidth = $('.personal-panel-des').width();
        if (nameWidth >= 170) {
            $('.personal-panel').width(240 + nameWidth - 170);
        } else {
            $('.personal-panel').width(240);
        }
    })
    $('.right-box').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#1BA2B9',
            color: 'white'
        }, 'fast')
        $(this).children().find('.right-box-detail-title').animate({
            color: '#8DD1DC'
        }, 'fast')
        $(this).children().find('.right-box-detail-name').animate({
            color: 'white'
        }, 'fast')
        $(this).children().find('.right-box-arrow').css({
            color: 'white'
        })
    })
    $('.right-box').mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',
            color: 'black'
        }, 'fast')
        $(this).children().find('.right-box-detail-title').animate({
            color: '#999C9E'
        }, 'fast')
        $(this).children().find('.right-box-detail-name').animate({
            color: 'black'
        }, 'fast')
        $(this).children().find('.right-box-arrow').css({
            color: 'rgb(27, 162, 185)'
        })
    })
    $('.edit-box-close').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    })
    $('.edit-box-green').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    })
    $('.edit-box-red').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    })
    $('.edit-box-grey').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
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