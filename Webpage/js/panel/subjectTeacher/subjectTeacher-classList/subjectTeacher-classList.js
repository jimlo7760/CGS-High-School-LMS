$(document).ready(function () {
    var left_content_manu_nevi = $('.left-content-manu-nevi');
    var subjectT_studentScore = $('.subjectT-studentScore');
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


    $('.right-navi-item').click(function () {
        if ($(this).css('border-bottom-color') != 'rgb(27, 162, 185)') {
            subjectT_studentScore.fadeOut('fast').delay('fast');
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
        var grey_bg = $('.grey-bg');
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        var subjectT_addScore_box = $('.subjectT-addScore-box');
        subjectT_addScore_box.fadeIn();
        subjectT_addScore_box.attr('value', subjectSele);
        var studId = $('.right-info-dataBox-content:first').text().trim()
        $('#test-stud-id').attr('value', studId);
    })

    $('.enrolled-student').click(function () {
        $('.student-crew-list').fadeOut('fast');
        setTimeout(function () {
            $('.subjectT-student-class').fadeIn('fast');
            var teacherSubjectUnreplaced = $('.right-title:first').text().trim();          //为每个subjectT-studentScore设置权限
            teacherSubject = spaceReplacement(teacherSubjectUnreplaced);
            subjectT_studentScore.each(function () {
                if ($(this).attr('id') == teacherSubject) {
                    $(this).addClass('permit-modification')
                } else {
                    $(this).addClass('noPermit-modification')
                }
            })

            if($('.navi-current').text().trim() != teacherSubjectUnreplaced){
                $('.navi-current').removeClass('navi-current');
                $('.right-navi-item').each(function (){
                    if($(this).text().trim() == teacherSubject){
                        $(this).addClass('navi-current');
                    }
                })
            }

            var tableWid = parseInt(subjectT_studentScore.css('width'));

            var titleWidAu = tableWid * 0.3;                                    //table: permit to edit
            var permit_modification = $('.permit-modification');
                permit_modification.find('.right-table-title-title').width(titleWidAu);
            permit_modification.find('.right-table-content-title').width(titleWidAu);
            var gradeWidAu = tableWid * 0.17;
            permit_modification.find('.right-table-title-grade').width(gradeWidAu);
            permit_modification.find('.right-table-content-grade').width(gradeWidAu);
            var typeWidAu = tableWid * 0.1;
            permit_modification.find('.right-table-title-type').width(typeWidAu);
            permit_modification.find('.right-table-content-type').width(typeWidAu);
            var dateWidAu = tableWid * 0.25;
            permit_modification.find('.right-table-title-date').width(dateWidAu);
            permit_modification.find('.right-table-content-date').width(dateWidAu);
            var actionWidAu = tableWid * 0.15;
            permit_modification.find('.right-table-title-action').width(actionWidAu);
            permit_modification.find('.right-table-content-action').width(actionWidAu);

            var titleWid = tableWid * 0.28;                                  //table: no permit to edit
            var noPermit_modification = $('.noPermit-modification');
            noPermit_modification.find('.right-table-title-action').remove();
            noPermit_modification.find('.right-table-content-action').remove();
            noPermit_modification.find('.right-table-title-title').width(titleWid);
            noPermit_modification.find('.right-table-content-title').width(titleWid);
            var gradeWid = tableWid * 0.18;
            noPermit_modification.find('.right-table-title-grade').width(gradeWid);
            noPermit_modification.find('.right-table-content-grade').width(gradeWid);
            var typeWid = tableWid * 0.23;
            noPermit_modification.find('.right-table-title-type').width(typeWid);
            noPermit_modification.find('.right-table-content-type').width(typeWid);
            var dateWid = tableWid * 0.21;
            noPermit_modification.find('.right-table-title-date').width(dateWid);
            noPermit_modification.find('.right-table-content-date').width(dateWid);
            noPermit_modification.find('.subjectT-studentScore-add-outer').remove();

            var subjectT_test_detail = $('.subjectT-test-detail');      //table: in test-detail
            subjectT_test_detail.find('.right-table-title-title').width(titleWid);
            subjectT_test_detail.find('.right-table-content-title').width(titleWid);
            subjectT_test_detail.find('.right-table-title-grade').width(gradeWid);
            subjectT_test_detail.find('.right-table-content-grade').width(gradeWid);
            subjectT_test_detail.find('.right-table-title-type').width(typeWid);
            subjectT_test_detail.find('.right-table-content-type').width(typeWid);
            subjectT_test_detail.find('.right-table-title-date').width(dateWid);
            subjectT_test_detail.find('.right-table-content-date').width(dateWid);

            var right_navi_item_last = $('.right-navi-item:last');
            var gapWidth = ($('.right-navi-item-right').position().left) - ((right_navi_item_last.position().left) + right_navi_item_last.width()) - 6;
            $('.right-navi-gap-large').width(gapWidth);
        }, 250)

        var selectedStuID = $(this).find('.right-box-detail-name:first').text().trim();
        var selectedStuEmail = $(this).find('.right-box-detail-name:last').text().trim();
        var selectedStuName = $(this).find('.right-box-title').text().trim();
        $('.right-info-dataBox-content:first').text(selectedStuID);
        $('.right-info-dataBox-content:last').text(selectedStuEmail);
        $('.right-title:last').text(selectedStuName)
        //    require .ajax to assign values for homeroomT-homeroomStudent-class
    });

    $('.return-from-student').click(function () {
        $('.subjectT-student-class').fadeOut('fast');
        $('.student-crew-list').delay(250).fadeIn('fast');


    })

    left_content_manu_nevi.click(function () {
        var idVal = $(this).attr('name');
        var subjectT_studentList = $('.subjectT-studentList');
        var student_nevi = $('#student-nevi');
        var right_student_list = $('.right-student-list');
        var subjectT_test = $('.subjectT-test');
        if (idVal == "exam" && subjectT_test.is(':hidden')) {
            var className = $("#" + idVal).attr("class");
            subjectT_studentList.css('background-color', 'rgba(255, 255, 255, 0)');
            $('.subjectT-courseList').fadeOut('fast');
            if(subjectT_studentList.is(":visible")){
                subjectT_studentList.fadeOut('fast');
            }
            student_nevi.css('background-color', 'rgba(255, 255, 255, 0)');
            $("#" + idVal).delay('fast').fadeIn('fast');
            if ($(this).children('.left-content-manu-current').is(":hidden")) {
                $(this).children('.left-content-manu-current').removeClass('no-select');
            }
            //operations of side-navigator above
            if (subjectT_test.is(':hidden')) {
                if (subjectT_studentScore.is(':visible')) {
                    $('.subjectT-student-class').fadeOut('fast');
                    $('.student-crew-list').delay('fast').fadeIn('fast');
                }
                right_student_list.fadeOut('fast');
                subjectT_test.delay('fast').fadeIn('fast');
                $('.right-subtitle').html('Exams & Tests');
                $('.right-info-right-button').fadeIn('fast');
                student_nevi.animate({
                    backgroundColor: 'transparent'
                }, 'fast');
                $('#exam-nevi').animate({
                    backgroundColor: 'rgb(0, 60, 70)'
                }, 'fast');
                var referenceWid = 0;
                var student_info = $('.student-info');
                if (student_info.is(':hidden')) {
                    referenceWid = parseInt($('.test-info').css('width'));
                } else {
                    referenceWid = parseInt(student_info.css('width'));
                }
                var tableWid = referenceWid;
                var titleWid = tableWid * 0.3;
                $('.right-table-title-title').width(titleWid);
                $('.right-table-content-title').width(titleWid);
                var typeWid = tableWid * 0.19;
                $('.right-table-title-type').width(typeWid);
                $('.right-table-content-type').width(typeWid);
                var dateWid = tableWid * 0.25;
                $('.right-table-title-date').width(dateWid);
                $('.right-table-content-date').width(dateWid);
                var actionWid = tableWid * 0.15;
                $('.right-table-title-action').width(actionWid);
                $('.right-table-content-action').width(actionWid);
            }

        }else if(idVal == 'student' && right_student_list.is(':hidden')){
            $(this).css('background-color', '#003C46');
            $('.subjectT-courseList').fadeOut('fast');
            subjectT_studentList.delay('fast').fadeIn('fast');
            //operation of side-navigator above
            if (right_student_list.is(':hidden')) {
                subjectT_test.fadeOut('fast');
                right_student_list.delay('fast').fadeIn('fast');
                $('.right-subtitle').html('Students');
                $('.right-info-right-button').fadeOut('fast');
                student_nevi.animate({
                    backgroundColor: 'rgb(0, 60, 70)'
                }, 'fast');
                $('#exam-nevi').animate({
                    backgroundColor: 'transparent'
                }, 'fast');
            }
        }else if(!isNaN(idVal)){                        //if idVal is a number, jump to another page;
            var data = {"navi_id":idVal};
            doPost('subjectTeacher-main.php', data );
        }
    });


    $('.right-info-right-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        var grey_bg = $('.grey-bg');
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        $('.subjectT-addTest-box').fadeIn();
    })

    $('.right-table-content-title').click(function (){
        if(subjectT_studentScore.css('display') == 'block'){
            var subjectT_test_detail = $('.subjectT-test-detail');
            var subjectT_student_class = $('.subjectT-student-class');
            var currentRow = $(this).parent();
            var testTitle = currentRow.find('.right-table-content-title').text().trim();
            var gradeRaw = currentRow.find('.right-table-content-grade').text().trim();
            var testGrade = gradeRaw.split('/')[1];
            var testType = currentRow.find('.right-table-content-type').text().trim();
            var testDate = currentRow.find('.right-table-content-date').text().trim();
            var testId = currentRow.find('.test-box-id').text().trim();
            var testDes = currentRow.find('.test-box-des').text().trim();
            var testStu = currentRow.find('.test-box-student').val().split(' ');
            subjectT_student_class.fadeOut('fast');
            subjectT_test_detail.delay('fast').fadeIn('fast');
            var contentWid = $(this).parents('.right-table').width();
            $('.test-detail-mid-box-big-des').width(contentWid/3);
            subjectT_test_detail.find('.right-title').text(testTitle);
            subjectT_test_detail.find('.test-detail-mid-box-small-des').eq(0).text(testType);
            subjectT_test_detail.find('.test-detail-mid-box-small-des').eq(1).text(testDate);
            subjectT_test_detail.find('.test-detail-mid-box-small-des').eq(2).text(testGrade);

        }
    })
})


