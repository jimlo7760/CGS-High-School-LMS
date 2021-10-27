$(document).ready(function (){
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
        var current_class_id = $(this).parent().siblings('.current-display-class').val();
        subjectT_addScore_box.find('.add-score-class').val(current_class_id);
        $.get("../../../Controller_and_Model/Controller/DisplayExamOption.php", {classId: current_class_id}).done(function (data) {
            $('.subjectT-addCourse-box-select').html(data);
        });
    })

    var subjectT_studentScore = $('.subjectT-studentScore');
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

    $('.right-table-content-action-edit').click(function (){
        var edit_student_score = $('.edit-student-score');
        shareboxPop(edit_student_score);
        var testName = $(this).parent().siblings('.right-table-content-title').text().trim();
        var studentScore = $(this).parent().siblings('.right-table-content-grade').text().trim();
        var testId = $(this).parent().siblings('.current-test-id').val();
        var studentName = $(this).parents('.right-down').find('.right-title').text().trim() + ' ' + $(this).parents('.right-down').find('.right-subtitle').text().trim();
        var testComment = $(this).parent().siblings('.current-score-comment').val();
        edit_student_score.find('.edit-box-innerbox-input').eq(0).val(testName);
        edit_student_score.find('.edit-box-innerbox-input').eq(1).val(studentName);
        edit_student_score.find('.test-id').val(testId);
        edit_student_score.find('.edit-box-innerbox-input').eq(2).val(studentScore.charAt(0));
        edit_student_score.find('.edit-comment-box').html(testComment);
    })

    $('.right-table-content-delete').click(function (){
        var stud_id = $('.current_stud_id').val();
        var exam_id = $(this).parent().siblings('.current-test-id').val();
        var data = {"stud_id": stud_id, "exam_id": exam_id};
        doPost('../../../Controller_and_Model/Controller/DeleteStudSubjScore.php', data);
    })
})


$(window).load(function () {
    var subjectT_studentScore = $('.subjectT-studentScore');
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
})