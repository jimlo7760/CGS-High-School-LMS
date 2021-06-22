$(document).ready(function () {

    $('.left-content-manu-nevi').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    })
    $('.left-content-manu-nevi').mouseleave(function () {
        if (($(this).attr('name') == 'student' && ($('.right-student-list').is(':visible') || $('.subjectT-studentScore').is(':visible'))) || ($(this).attr('name') == 'exam' && $('.subjectT-test').is(':visible'))) {
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


    $('.right-navi-item').click(function () {
        if ($(this).css('border-bottom-color') != 'rgb(27, 162, 185)') {
            $('.subjectT-studentScore').fadeOut('fast').delay('fast');
            var clickSubj = $(this).text().trim();
            $('.right-navi-item').each(function () {
                if ($(this).text().trim() != clickSubj && $(this).css('border-bottom-color') == 'rgb(27, 162, 185)') {
                    $('#' + clickSubj).fadeIn('fast');
                    $(this).css('border-bottom-color', '#EAEBEB');
                    $(this).css('color', '#999C9E');
                } else if ($(this).text().trim() == clickSubj) {
                    $(this).css('border-bottom-color', '#1BA2B9');
                    $(this).css('color', '#212529');
                }
            })
            var subjectSele = spaceReplacement(clickSubj);
            $('.subjectT-studentScore').each(function () {
                if ($(this).attr('id') == subjectSele) {
                    $(this).fadeIn('fast');
                    if ($(this).attr('class').indexOf("noPermit-modification") >= 0) {
                        $(this).find(".subjectT-studentScore-add-outer").css('display', 'none');
                    }
                }
            })
        }
    })

    $('.subjectT-studentScore-add').click(function () {
        var targetSub = "";
        $('.right-navi-item').each(function () {
            if ($(this).css('color') == 'rgb(33, 37, 41)') {
                targetSub = $(this).text().trim();
            }
        })
        var subjectSele = spaceReplacement(targetSub);
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.grey-bg').fadeIn();
        $('.subjectT-addScore-box').fadeIn();
        $('.subjectT-addScore-box').attr('value', subjectSele);
    })

    $('.enrolled-student').click(function () {
        $('.student-crew-list').fadeOut('fast');
        setTimeout(function () {
            $('.subjectT-student-class').fadeIn('fast');
            var teacherSubject = $('.subjectT-lesson').val();          //为每个subjectT-studentScore设置权限
            $('.subjectT-studentScore').each(function () {
                if ($(this).attr('id') == teacherSubject) {
                    $(this).addClass('permit-modification')
                } else {
                    $(this).addClass('noPermit-modification')
                }
            })

            var tableWid = parseInt($('.subjectT-studentScore').css('width'));

            var titleWidAu = tableWid * 0.3;
            $('.permit-modification').find('.right-table-title-title').width(titleWidAu);
            $('.permit-modification').find('.right-table-content-title').width(titleWidAu);
            var gradeWidAu = tableWid * 0.17;
            $('.permit-modification').find('.right-table-title-grade').width(gradeWidAu);
            $('.permit-modification').find('.right-table-content-grade').width(gradeWidAu);
            var typeWidAu = tableWid * 0.1;
            $('.permit-modification').find('.right-table-title-type').width(typeWidAu);
            $('.permit-modification').find('.right-table-content-type').width(typeWidAu);
            var dateWidAu = tableWid * 0.25;
            $('.permit-modification').find('.right-table-title-date').width(dateWidAu);
            $('.permit-modification').find('.right-table-content-date').width(dateWidAu);
            var actionWidAu = tableWid * 0.15;
            $('.permit-modification').find('.right-table-title-action').width(actionWidAu);
            $('.permit-modification').find('.right-table-content-action').width(actionWidAu);

            var titleWid = tableWid * 0.3;
            $('.noPermit-modification').find('.right-table-title-title').width(titleWid);
            $('.noPermit-modification').find('.right-table-content-title').width(titleWid);
            var gradeWid = tableWid * 0.2;
            $('.noPermit-modification').find('.right-table-title-grade').width(gradeWid);
            $('.noPermit-modification').find('.right-table-content-grade').width(gradeWid);
            var typeWid = tableWid * 0.25;
            $('.noPermit-modification').find('.right-table-title-type').width(typeWid);
            $('.noPermit-modification').find('.right-table-content-type').width(typeWid);
            var dateWid = tableWid * 0.23;
            $('.noPermit-modification').find('.right-table-title-date').width(dateWid);
            $('.noPermit-modification').find('.right-table-content-date').width(dateWid);

            var gapWidth = ($('.right-navi-item-right').position().left) - (($('.right-navi-item:last').position().left) + $('.right-navi-item:last').width()) - 6;
            $('.right-navi-gap-large').width(gapWidth);
        }, 250)
    });

    $('.return-from-student').click(function () {
        $('.subjectT-student-class').fadeOut('fast');
        $('.student-crew-list').delay(250).fadeIn('fast');


    })

    $('.left-content-manu-nevi').click(function () {
        var idVal = $(this).attr('name');
        console.log(idVal)
        if (idVal == "exam" && $('.subjectT-test').is(':hidden')) {
            var className = $("#" + idVal).attr("class");
            $('.subjectT-studentList').css('background-color', 'rgba(255, 255, 255, 0)');
            $('.subjectT-courseList').fadeOut('fast');
            if($('.subjectT-studentList').is(":visible")){
                $('.subjectT-studentList').fadeOut('fast');
            }
            $('#student-nevi').css('background-color', 'rgba(255, 255, 255, 0)');
            $("#" + idVal).delay('fast').fadeIn('fast');
            // $('.left-content-manu-current').addClass('no-select');
            if ($(this).children('.left-content-manu-current').is(":hidden")) {
                $(this).children('.left-content-manu-current').removeClass('no-select');
            }
            //operations of side-navigator above
            if ($('.subjectT-test').is(':hidden')) {
                if ($('.subjectT-studentScore').is(':visible')) {
                    $('.subjectT-student-class').fadeOut('fast');
                    $('.student-crew-list').delay('fast').fadeIn('fast');
                }
                $('.right-student-list').fadeOut('fast');
                $('.subjectT-test').delay('fast').fadeIn('fast');
                $('.right-subtitle').html('Exams & Tests');
                $('.right-info-right-button').fadeIn('fast');
                $('#student-nevi').animate({
                    backgroundColor: 'transparent'
                }, 'fast');
                $('#exam-nevi').animate({
                    backgroundColor: 'rgb(0, 60, 70)'
                }, 'fast');
                var referenceWid = 0;
                if ($('.student-info').is(':hidden')) {
                    referenceWid = parseInt($('.test-info').css('width'));
                } else {
                    referenceWid = parseInt($('.student-info').css('width'));
                }
                var tableWid = referenceWid;
                var titleWid = tableWid * 0.3;
                $('.right-table-title-title').width(titleWid);
                $('.right-table-content-title').width(titleWid);
                var gradeWid = tableWid * 0.17;
                $('.right-table-title-grade').width(gradeWid);
                $('.right-table-content-grade').width(gradeWid);
                var typeWid = tableWid * 0.1;
                $('.right-table-title-type').width(typeWid);
                $('.right-table-content-type').width(typeWid);
                var dateWid = tableWid * 0.25;
                $('.right-table-title-date').width(dateWid);
                $('.right-table-content-date').width(dateWid);
                var actionWid = tableWid * 0.15;
                $('.right-table-title-action').width(actionWid);
                $('.right-table-content-action').width(actionWid);
            }

        }else if(idVal == 'student' && $('.right-student-list').is(':hidden')){
            $(this).css('background-color', '#003C46');
            // $('.left-content-manu-current').addClass('no-select');
            $('.subjectT-courseList').fadeOut('fast');
            $('.subjectT-studentList').delay('fast').fadeIn('fast');
            //operation of side-navigator above
            if ($('.right-student-list').is(':hidden')) {
                $('.subjectT-test').fadeOut('fast');
                $('.right-student-list').delay('fast').fadeIn('fast');
                $('.right-subtitle').html('Students');
                $('.right-info-right-button').fadeOut('fast');
                $('#student-nevi').animate({
                    backgroundColor: 'rgb(0, 60, 70)'
                }, 'fast');
                $('#exam-nevi').animate({
                    backgroundColor: 'transparent'
                }, 'fast');
            }
        }else{
            $.ajax({
                type: "POST",
                url: "subjectTeacher-classList.php",
                data: idVal,
                success: function (data) {

                }
            })
        }
    })


    $('.right-info-right-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.grey-bg').fadeIn();
        $('.subjectT-addTest-box').fadeIn();
    })
})


var spaceReplacement = function (subjectOrigin) {         //replace the "space" in the course name to "_";
    var subjectArr = subjectOrigin.split(' ');
    var subjectSele = '';
    for (var i = 0; i <= subjectArr.length - 1; i++) {
        subjectSele += (subjectArr[i] + '_');
    }
    subjectSele = subjectSele.substring(0, subjectSele.length - 1);
    return subjectSele;
}
