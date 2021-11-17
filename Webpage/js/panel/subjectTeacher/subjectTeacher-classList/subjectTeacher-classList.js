$(document).ready(function () {
    var left_content_manu_nevi = $('.left-content-manu-nevi');
    var subjectT_studentScore = $('.subjectT-studentScore');
    left_content_manu_nevi.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    });
    left_content_manu_nevi.mouseleave(function () {
        if (($(this).attr('name') == 'student' && ($('.right-student-list').is(':visible') || ($('.subjectT-test-detail').is(':visible')) && $('.return-from-test-detail').attr('onclick') ==  'testDetailReturnToStud()' || subjectT_studentScore.is(':visible'))) ||
            $(this).attr('name') == 'exam' && ($('.subjectT-test').is(':visible') || ($('.subjectT-test-detail').is(':visible')) && $('.return-from-test-detail').attr('onclick') == 'testDetailReturnToTest()')) {
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
        var current_stud_id = $(this).find('.enrolled-student-id').val();
        var data = {"current_stud_id": current_stud_id}
        doPost('subjectTeacher-student.php', data);


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

            if ($('.navi-current').text().trim() != teacherSubjectUnreplaced) {
                $('.navi-current').removeClass('navi-current');
                $('.right-navi-item').each(function () {
                    if ($(this).text().trim() == teacherSubject) {
                        $(this).addClass('navi-current');
                    }
                })
            }

            var accuWid = 0;
            $('.right-navi-item').each(function () {
                accuWid += $(this).outerWidth(true);
            })
            $('.right-navi-gap').each(function () {
                accuWid += $(this).outerWidth(true);
            })
            var gapWidth = $('.right-nevi').width() - accuWid;
            $('.right-navi-gap-large').width(gapWidth - 7);
        }, 250)


        var selectedStuID = $(this).find('.right-box-detail-name:first').text().trim();
        var selectedStuEmail = $(this).find('.right-box-detail-name:last').text().trim();
        var selectedStuName = $(this).find('.right-box-title').text().trim();
        var selectedStuClass = $(this).find('.enrolled-student-class').val();
        var selectedStuDepart = $(this).find('.enrolled-student-depart').val();
        var selectedStuGrade = $(this).find('.enrolled-student-grade').val();
        var right_info_dataBox_content = $('.right-info-dataBox-content');
        right_info_dataBox_content.eq(0).text(selectedStuID);
        right_info_dataBox_content.eq(1).text(selectedStuDepart);
        right_info_dataBox_content.eq(2).text(selectedStuGrade);
        right_info_dataBox_content.eq(3).text(selectedStuClass);
        right_info_dataBox_content.eq(4).text(selectedStuEmail);
        $('.right-title').eq(1).text(selectedStuName)
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
            if (subjectT_studentList.is(":visible")) {
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

        } else if (idVal == 'student' && right_student_list.is(':hidden')) {
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
        } else if (!isNaN(idVal)) {                        //if idVal is a number, jump to another page;
            var data = {"navi_id": idVal};
            doPost('subjectTeacher-main.php', data);
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

    $('.right-table-content-title').click(function () {
        var permit_modification = $('.permit-modification');
        var subjectT_test = $('.subjectT-test');
        if (permit_modification.css('display') == 'block' || subjectT_test.css('display') == 'block') {
            if (permit_modification.css('display') == 'block') {
                $('.return-from-test-detail').attr('onclick', 'testDetailReturnToStud()')
            } else {
                $('.return-from-test-detail').attr('onclick', 'testDetailReturnToTest()');
            }
            var subjectT_test_detail = $('.subjectT-test-detail');
            var subjectT_student_class = $('.subjectT-student-class');
            var currentRow = $(this).parent();
            var testTitle = currentRow.find('.right-table-content-title').text().trim();
            var gradeRaw = currentRow.find('.right-table-content-grade').text().trim();
            var testGrade = gradeRaw.split('/')[1];
            var testType = currentRow.find('.right-table-content-type').text().trim();
            var testDate = currentRow.find('.right-table-content-date').text().trim();
            var testId = currentRow.find('.current-test-id').val();
            var testDes = currentRow.find('.current-test-des').val();
            var testComment = currentRow.find('.current-test-comment').val();
            var stuRaw = currentRow.find('.current-test-student').val().split(' ');
            var studentShowArray = "";
            for (var i = 0; i <= stuRaw.length - 2; i++) {
                studentShowArray += "<div class=\"right-table-content-row\">\n" +
                    "                            <div class=\"right-table-content-title\">\n" +
                    stuRaw[i].split('-')[1] +
                    "                            </div>\n" +
                    "                            <div class=\"right-table-content-grade\">\n" +
                    stuRaw[i].split('-')[2] +
                    "                            </div>\n" +
                    "                            <div class=\"right-table-content-date\">\n" +
                    "                                " +
                    testDate +
                    "\n" +
                    "                            </div>\n" +
                    "                            <div class=\"right-table-content-action\">\n" +
                    "                                    <span class=\"material-icons right-table-content-action-edit test-detail-score-edit\">\n" +
                    "                                        edit\n" +
                    "                                    </span>\n" +
                    "                                <span class=\"material-icons right-table-content-delete\">\n" +
                    "                                        delete_forever\n" +
                    "                                    </span>\n" +
                    "                            </div>\n"
                    + "<input type='hidden' class='current-student-id' value='" +
                    stuRaw[i].split('-')[0] +
                    "'>"
                    + "<input type='hidden' class='test_id' value='" +
                    testId +
                    "'>"+
                    "                  " +
                    "<input type='hidden' class='stud-score-id' value='"+
                    stuRaw[i].split('-')[3]+
                    "'>"+
                    "<input type='hidden' class='stud-score-comment' value='"+
                    stuRaw[i].split('-')[4] +
                    "'>" +
                    "</div>"
            }
            subjectT_test_detail.find('.right-table-content').html(studentShowArray);

            if (subjectT_student_class.css('display') == 'block') {
                var tableWid = parseInt(subjectT_studentScore.css('width'));
            } else if (subjectT_test.css('display') == 'block') {
                var tableWid = parseInt(subjectT_test.css('width'));
            }

            //table: in test-detail
            var titleWid = tableWid * 0.28;
            var gradeWid = tableWid * 0.18;
            var typeWid = tableWid * 0.23;
            var dateWid = tableWid * 0.21;
            subjectT_test_detail.find('.right-table-title-title').width(titleWid);
            subjectT_test_detail.find('.right-table-content-title').width(titleWid);
            subjectT_test_detail.find('.right-table-title-grade').width(gradeWid);
            subjectT_test_detail.find('.right-table-content-grade').width(gradeWid);
            subjectT_test_detail.find('.right-table-title-type').width(typeWid);
            subjectT_test_detail.find('.right-table-content-type').width(typeWid);
            subjectT_test_detail.find('.right-table-title-date').width(dateWid);
            subjectT_test_detail.find('.right-table-content-date').width(dateWid);

            if (subjectT_student_class.css('display') == 'block') {
                subjectT_student_class.fadeOut('fast');
            } else if (subjectT_test.css('display') == 'block') {
                $('.student-crew-list').fadeOut('fast');
            }
            subjectT_test_detail.delay('fast').fadeIn('fast');
            var contentWid = $(this).parents('.right-table').width();
            $('.test-detail-mid-box-big-des').width(contentWid / 3);
            subjectT_test_detail.find('.right-title').text(testTitle);
            subjectT_test_detail.find('.test-detail-mid-box-small-des').eq(0).text(testType);
            subjectT_test_detail.find('.test-detail-mid-box-small-des').eq(1).text(testDate);
            subjectT_test_detail.find('.test-detail-mid-box-small-des').eq(2).text(testGrade);
            subjectT_test_detail.find('.test-detail-mid-box-big-des').eq(0).text(testDes);
            subjectT_test_detail.find('.test-detail-mid-box-big-des').eq(1).text(testComment);
            subjectT_test_detail.find('.current-test-id').val(testId);

            $('.edit-test-detail').click(function () {
                var subjectT_editTest_box = $('.subjectT-editTest-box');
                var testId = $(this).siblings('.current-test-id').val();
                var testTitle = $(this).siblings('.right-info-left').find('.right-title').text().trim();
                var testType = $(this).parent().siblings('.test-detail-mid').find('.test-detail-mid-box-small-des').eq(0).text().trim();
                var testDate = $(this).parent().siblings('.test-detail-mid').find('.test-detail-mid-box-small-des').eq(1).text().trim();
                var testMax = $(this).parent().siblings('.test-detail-mid').find('.test-detail-mid-box-small-des').eq(2).text().trim();
                var testDes = $(this).parent().siblings('.test-detail-mid').find('.test-detail-mid-box-big-des').eq(0).text().trim();
                var testComment = $(this).parent().siblings('.test-detail-mid').find('.test-detail-mid-box-big-des').eq(1).text().trim();

                shareboxPop(subjectT_editTest_box);
                subjectT_editTest_box.find('.edit-box-innerbox-input').eq(0).val(testTitle);
                subjectT_editTest_box.find('.edit-box-innerbox-input').eq(1).text(testDes);
                subjectT_editTest_box.find('.edit-box-innerbox-select').find("option:contains('" + testType + "')").attr("selected", true);
                subjectT_editTest_box.find('.edit-box-innerbox-input').eq(2).val(testMax);
                subjectT_editTest_box.find('.edit-box-innerbox-input').eq(3).val(testDate);
                subjectT_editTest_box.find('.edit-box-innerbox-input').eq(4).text(testComment);
            })

            $('.test-detail-score-edit').click(function (){
                var stud_name = $(this).parent().siblings('.right-table-content-title').text().trim();
                var test_title = $(this).parents('.right-table').siblings('.test-detail').find('.right-title').text().trim();
                var test_score = $(this).parent().siblings('.right-table-content-grade').text().trim();
                var stud_score_id = $(this).parent().siblings('.stud-score-id').val();
                var test_comment = $(this).parent().siblings('.stud-score-comment').val();
                var edit_student_score = $('.edit-student-score');
                shareboxPop(edit_student_score);
                edit_student_score.find('.edit-score-id').val(stud_score_id);
                edit_student_score.find('.edit-box-innerbox-input[name="edit-test-title"]').val(test_title);
                edit_student_score.find('.edit-box-innerbox-input[name="edit-test-stud"]').val(stud_name);
                edit_student_score.find('.edit-box-innerbox-input[name="edit-test-score"]').val(test_score);
                edit_student_score.find('.edit-box-innerbox-input[name="edit-score-comment"]').text(test_comment);
            })
        }
    })
})


function testDetailReturnToStud() {
    $('.subjectT-test-detail').fadeOut('fast');
    $('.subjectT-student-class').delay('fast').fadeIn('fast');
}

function testDetailReturnToTest() {
    $('.subjectT-test-detail').fadeOut('fast');
    $('.student-crew-list').delay('fast').fadeIn('fast');
}
