$(document).ready(function () {
    var homeroomT_studentScore = $('.homeroomT-studentScore')
    var left_content_manu_nevi = $('.left-content-manu-nevi');
    left_content_manu_nevi.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    });
    left_content_manu_nevi.mouseleave(function () {
        if (($(this).attr('name') == 'student' && ($('.right-student-list').is(':visible') || subjectT_studentScore.is(':visible'))) || ($(this).attr('name') == 'exam' && $('.subjectT-test').is(':visible'))) {
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

    $('.enrolled-student').click(function () {
        $('.student-crew-list').fadeOut('fast');
        $('.homeroomT-homeroomStudent-class').delay('fast').fadeIn('fast');
        setTimeout(function () {
            var tableWid = parseInt(homeroomT_studentScore.css('width'));
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
            var actionWidth = tableWid * 0.15;
            $('.right-table-title-action').width(actionWidth);
            $('.right-table-content-action').width(actionWidth);

            var right_navi_item_last = $('.right-navi-item:last');
            var gapWidth = ($('.right-navi-item-right').position().left) - ((right_navi_item_last.position().left) + right_navi_item_last.width()) - 6;
            $('.right-navi-gap-large').width(gapWidth);

        }, 250)
        var selectedStuID = $(this).find('.right-box-detail-name:first').text().trim();
        var selectedStuEmail = $(this).find('.right-box-detail-name:last').text().trim();
        var selectedStuName = $(this).find('.right-box-title').text().trim();
        var tempSplitDepart = $('.right-title:first').text().trim().split(' ');
        var selectedDepart = tempSplitDepart[0];
        var tempSplitClass = tempSplitDepart[1].split('-');
        var selectedGrade = tempSplitClass[0];
        var selectedClass = tempSplitClass[1];
        var accumu = 0;
        $('.right-info-dataBox-content').each(function () {
            accumu += 1
            if (accumu == 1) {
                $(this).text(selectedStuID);
            } else if (accumu == 2) {
                $(this).text(selectedDepart);
            } else if (accumu == 3) {
                $(this).text(selectedGrade);
            } else if (accumu == 4) {
                $(this).text(selectedClass);
            } else {
                $(this).text(selectedStuEmail);
            }
        })
        $('.right-title:last').text(selectedStuName);
        //    require .ajax to assign values for homeroomT-homeroomStudent-class
    })

    $('.right-navi-item').click(function () {
        if ($(this).css('border-bottom-color') != 'rgb(27, 162, 185)') {
            homeroomT_studentScore.fadeOut('fast').delay('fast');
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
            $('#' + subjectSele).fadeIn('fast');
        }
    })

    $('.right-navi-item-right').click(function (){

    })

    homeroomT_studentScore.each(function () {
        if ($(this)[0] == $('.homeroomT-studentScore')[0]) {
            $(this).css('display', 'block');
        } else {
            $(this).css('display', 'none');
        }
    })

    $('.return-from-student').click(function () {
        $('.homeroomT-homeroomStudent-class').fadeOut('fast');
        $('.student-crew-list').delay(250).fadeIn('fast');
    })

    $('.homeroomT-studentScore-add').click(function () {
        var targetSub = "";
        $('.right-navi-item').each(function () {
            if ($(this).css('color') == 'rgb(33, 37, 41)') {
                targetSub = $(this).text().trim();
            }
        })
        var subjectSele = spaceReplacement(targetSub);
        var body = document.body.clientHeight;
        var bg = body;
        var grey_bg = $('.grey-bg');
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        var homeroomT_addScore_box = $('.homeroomT-addScore-box');
        homeroomT_addScore_box.fadeIn();
        homeroomT_addScore_box.attr('value', subjectSele);

    })
});