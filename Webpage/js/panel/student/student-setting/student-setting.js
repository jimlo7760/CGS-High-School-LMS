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

    //initialization part
    languageTestIelts($('.language-box-add'));
    var targetInterface = $('.target-operation').val();
    var right_profile_whole = $('.right-profile-whole');
    var right_class_whole = $('.right-class-whole');
    var right_score_whole = $('.right-score-whole');
    if(targetInterface == 'manage_class'){
        right_profile_whole.hide();
        right_class_whole.show();
    }else if(targetInterface == 'manage_score'){
        right_profile_whole.hide();
        right_score_whole.show();
    }
    var right_person_info_row_box = $('.right-person-info-row-box');
    var grey_bg = $('.grey-bg');

    var currentOperation = $.session.get('target_operation');
    if(currentOperation == 'profile'){
        $('.right-profile-whole').css('display', 'block');
        $('.navi-profile').animate({
            borderBottomColor: '#1BA2B9'
        });
    }else if(currentOperation == 'manage_class'){
        $('.right-class-whole').css('display', 'block');
        $('.navi-class').animate({
            borderBottomColor: '#1BA2B9'
        })
    }else if(currentOperation == 'manage_score'){
        $('.right-score-whole').css('display', 'block');
        $('.navi-score').animate({
            borderBottomColor: '#1BA2B9'
        })
    }

    $('.edit-info').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        var profile_box = $('.profile-box');
        profile_box.fadeIn();
        var studEmail = $('.right-person-info-detail').find('.right-person-info-box-text:last').text().trim();
        profile_box.find('.edit-box-innerbox-input:first').attr('value', studEmail);
    });

    $('.edit-pi').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        $('.edit-private-box').fadeIn();
        var allInfo = "";
        $('.private-info-row').find('.right-person-info-row-box-des').each(function () {
            allInfo += $(this).text().trim() + "_";
        })
        var allInfoArr = allInfo.split('_');
        var accu = 0;
        $('.private-box-upper-input').each(function () {
            $(this).attr('value', allInfoArr[accu]);
            accu += 1;
        })
        $('.private-box-downer-input').each(function () {
            $(this).attr('value', allInfoArr[accu]);
            accu += 1;
        })
    })


    $('.add-award').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        $('.award-box-add').fadeIn();
    });

    $('.delete-award').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        $('.award-box-delete').fadeIn();
    });

    $('.add-university').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        $('.university-box-add').fadeIn();
    });

    $('.delete-university').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        $('.university-box-delete').fadeIn();
    });

    var navi_score = $('.navi-score');
    $('.edit-box-portrait-button').click(function () {
        $('.uploadPortrait').click();
    });
    $('.navi-profile').click(function () {
        $(this).animate({
            borderBottomColor: '#1BA2B9'
        });
        if (right_profile_whole.is(":hidden")) {
            right_profile_whole.delay('fast').fadeIn('fast');
        }
        $('.navi-class').animate({
            borderBottomColor: '#EAEBEB'
        });
        if (right_class_whole.is(":visible")) {
            right_class_whole.fadeOut('fast');
        }
        navi_score.animate({
            borderBottomColor: '#EAEBEB'
        });
        if (right_score_whole.is(":visible")) {
            right_score_whole.fadeOut('fast');
        }
        $.session.set('target_operation', 'profile');
    });
    $('.navi-class').click(function () {
        $(this).animate({
            borderBottomColor: '#1BA2B9'
        });
        if (right_class_whole.is(':hidden')) {
            right_class_whole.delay('fast').fadeIn('fast');
        }
        $('.navi-profile').animate({
            borderBottomColor: '#EAEBEB'
        });
        if (right_profile_whole.is(':visible')) {
            right_profile_whole.fadeOut('fast');
        }
        navi_score.animate({
            borderBottomColor: '#EAEBEB'
        });
        if (right_score_whole.is(':visible')) {
            right_score_whole.fadeOut('fast');
        }
        $.session.set('target_operation', 'manage_class');
    });

    navi_score.click(function () {
        $(this).animate({
            borderBottomColor: '#1BA2B9'
        });
        if (right_score_whole.is(':hidden')) {
            right_score_whole.delay('fast').fadeIn('fast');
        }
        $('.navi-profile').animate({
            borderBottomColor: '#EAEBEB'
        });
        if (right_profile_whole.is(':visible')) {
            right_profile_whole.fadeOut('fast');
        }
        $('.navi-class').animate({
            borderBottomColor: '#EAEBEB'
        });
        if (right_class_whole.is(':visible')) {
            right_class_whole.fadeOut('fast');
        }
        $.session.set('target_operation', 'manage_score');
    });
    navi_score.click(function () {
        $(this).animate({
            borderBottomColor: '#1BA2B9'
        });
        $('.navi-profile').animate({
            borderBottomColor: '#EAEBEB'
        });
        $('.navi-class').animate({
            borderBottomColor: '#EAEBEB'
        })
    });
    $('.class-adding-row').click(function () {
        singleChooseWhole($(this), '#1BA2B9')
    });
    $('.class-deleting-row').click(function () {
        singleChooseWhole($(this), '#DD3444');
    });
    $('.class-swapping-row').click(function (){
        singleChooseWhole($(this), '#0a7afa');
    })
    $('.detention-apply-row').click(function (){
        singleChooseWhole($(this), '#DD3444');
    })


    $('.class-adding-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.class-adding-box').fadeIn();
        grey_bg.fadeIn();
    });
    $('.class-deleting-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.class-deleting-box').fadeIn();
        grey_bg.fadeIn();
    });
    $('.class-swapping-button').click(function (){
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.class-swapping-box').fadeIn();
        grey_bg.fadeIn();
    })
    var pending_box = $('.pending-box');
    $('.pending-row').click(function () {
        var body = document.body.clientHeight;
        var bg = body;

        pending_box.find('.pending-box-input').eq(0).val()
        // pending_box[0].children[0].children[0].children[1].children[1].value = this.children[0].children[0].children[2].innerHTML;
        // pending_box[0].children[0].children[0].children[1].children[2].value = this.children[0].children[0].children[3].innerHTML;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        pending_box.fadeIn();
        grey_bg.fadeIn();
        var currentStatus = $(this).find('.pending-row-status').val();
        var currentType = $(this).find('.pending-box-type').val();
        var statusRow = pending_box.find('.ticket-box-row');
        pending_box.find('.pending-box-status').val(currentStatus)
        ticketProcess(currentStatus, statusRow, currentType);
    });
    var aprove_box = $('.aprove-box');
    $('.aprove-row').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        aprove_box[0].children[0].children[0].children[1].children[1].value = this.children[0].children[0].children[2].innerHTML;
        aprove_box[0].children[0].children[0].children[1].children[2].value = this.children[0].children[0].children[3].innerHTML;

        grey_bg.css({
            "height": bg,
            "top": 0
        });
        aprove_box.fadeIn();
        grey_bg.fadeIn();
    });
    var unaprove_box = $('.unaprove-box');
    $('.unaprove-row').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        var action_required = this.children[1].children[0].children[2].innerHTML;
        // console.log($('.unaprove-box')[0].children[0].children[0].children[1].children[1].innerHTML);
        unaprove_box[0].children[0].children[0].children[1].children[1].value = this.children[0].children[0].children[2].innerHTML;
        unaprove_box[0].children[0].children[0].children[1].children[2].value = this.children[0].children[0].children[3].innerHTML;
        unaprove_box[0].children[0].children[1].children[1].children[1].innerHTML = action_required;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        unaprove_box.fadeIn();
        grey_bg.fadeIn();
    });
    $('.score-editing-innerbox-input').on('input propertychange', function () {
        var score = $('.score-editing-innerbox-input').val();
        if (score != '') {
            if (parseInt(score) >= 0 && parseInt(score) <= 100) {
                $(this).animate({
                    borderColor: '#D0D0D0'
                });
                $(this).siblings('.score-editing-innerbox').children('.score-editing-unvalid').fadeOut();
            } else {
                $(this).animate({
                    borderColor: '#DD3444'
                });
                $(this).siblings('.score-editing-innerbox').children('.score-editing-unvalid').fadeIn();
            }
        } else {
            $(this).animate({
                borderColor: '#D0D0D0'
            });
            $(this).siblings('.score-editing-innerbox').children('.score-editing-unvalid').fadeOut();
        }
    });

    $('.score-editing-box').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.edit-score-box').fadeIn();
        grey_bg.fadeIn();
        var classId = $(this).children('.edit-class-id').val();
        $('.edit-score-id').val(classId);
        var className = $(this).find('.right-box-title').text().trim();
        $('.current-class-name').text(className);
        var testId = $(this).children('.current-test-id').val();
        $('.edit-test-id').val(testId);

        var midGoalScore = $(this).find('.right-box-detail-name').eq(0).text().trim();
        $('.score-editing-innerbox-input').eq(0).val(midGoalScore);
        var finalGoalScore = $(this).find('.right-box-detail-name').eq(1).text().trim();
        $('.score-editing-innerbox-input').eq(1).val(finalGoalScore);
    });
    $('.confirm-box-input').on("input propertychange", function () {
        var passFir = $('.password-input-first:password').val();
        var passSec = $('.confirm-box-input:password').val();
        // console.log(passFir + "------" + passSec);
        if (passFir != passSec) {
            $('.confirm-box-unmatched').fadeIn();
        } else {
            $('.confirm-box-unmatched').fadeOut();
        }
    });



    $('.add-strength').click(function (){
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.strength-box-add').fadeIn();
        $('.grey-bg').fadeIn()
    })

    $('.delete-strength').click(function (){
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.strength-box-delete').fadeIn();
        $('.grey-bg').fadeIn()
    })

    $('.add-dp-course').click(function (){
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.dp-box-add').fadeIn();
        $('.grey-bg').fadeIn()
    })

    $('.delete-dp-course').click(function (){
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.dp-box-delete').fadeIn();
        $('.grey-bg').fadeIn()
    })

    $('.add-language').click(function (){
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.language-box-add').fadeIn();
        $('.grey-bg').fadeIn()
    })

    $('.delete-langauge').click(function (){
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        $('.language-box-delete').fadeIn();
        $('.grey-bg').fadeIn()
    })

    var origin_class_name = "";
    var origin_class_id = "";
    var target_class_name = "";
    var target_class_id = "";
    $('.share-box-double-button').click(function (){
        //swap class part
        var currentBtnName = $(this).attr('name');
        var swap_class_origin = $('.swap-class-origin');
        var swap_class_target = $('.swap-class-target');
        var swap_class_confirm = $('.swap-class-confirm');
        if(currentBtnName == 'fstSwpNxt'){
            var checked = checkCheckboxes($('.class-adding-checkbox[name="swap-origin"]'));
            if(!checked){
                alert("Please select a course")
            }else{
                swap_class_origin.fadeOut('fast');
                swap_class_target.animate({
                    height: '475px'
                }, 'fast');
                swap_class_target.fadeIn('fast');
                var checkedInput = $('input[name="swap-origin"]:checked');
                origin_class_name = checkedInput.siblings('.class-adding-text').text().trim();
                origin_class_id = checkedInput.val();
            }
        }else if(currentBtnName == 'secSwpBck'){
            swap_class_target.fadeOut('fast');
            swap_class_origin.animate({
                height: '475px'
            }, 'fast');
            swap_class_origin.fadeIn('fast');
        }else if(currentBtnName == 'secSwpNxt'){
            var checked = checkCheckboxes($('.class-adding-checkbox[name="swap-target"]'));
            if(!checked){
                alert("Please select a course")
            }else{
                swap_class_target.fadeOut('fast');
                swap_class_confirm.animate({
                    height: '250px'
                }, 'fast');
                swap_class_confirm.fadeIn('fast');
                var checkedInput = $('input[name="swap-target"]:checked');
                target_class_name = checkedInput.siblings('.class-adding-text').text().trim();
                target_class_id = checkedInput.val()
                $('.swap-origin-display').text(origin_class_name);
                $('.swap-target-display').text(target_class_name);
            }
        }else if(currentBtnName == 'tirSwpBck'){
            swap_class_confirm.fadeOut('fast');
            swap_class_target.animate({
                height: '165px'
            }, 'fast');
            swap_class_target.fadeIn('fast');
        }
    })

    right_person_info_row_box.click(function (){
        var boxType = $(this).parent().siblings('.right-person-info-row-upper').children('.right-person-info-row-title').text().trim();
        var boxName = $(this).find('.right-person-info-row-box-title').text().trim();
        var boxSub = $(this).find('.right-person-info-row-box-des').text().trim();

        if(boxType == "Strength & Hobby"){
            var strenDes = $(this).find('.strength-box-des').val().trim();
            var strenId = $(this).find('.strength-box-id').val().trim();
            var strength_box_edit = $('.strength-box-edit');
            shareboxPop(strength_box_edit);
            strength_box_edit.find('.edit-box-innerbox-input').eq(0).val(boxName);
            strength_box_edit.find('.edit-box-innerbox-input').eq(1).val(boxSub);
            strength_box_edit.find('.edit-box-innerbox-input').eq(2).val(strenDes);
            $('.strength-id').val(strenId);
        }else if(boxType == "Awards & Prizes"){
            var award_box_edit = $('.award-box-edit');
            var awardId = $(this).find('.award-box-id').val();
            shareboxPop(award_box_edit);
            award_box_edit.find('.edit-box-innerbox-input').eq(0).val(boxName);
            award_box_edit.find('.edit-box-innerbox-input').eq(1).val(boxSub);
            award_box_edit.find('.award-id').val(awardId);
        }else if(boxType == "Goal University"){
            var univId = $(this).find('.univ-box-id').val();
            var university_box_edit = $(".university-box-edit");
            shareboxPop(university_box_edit);
            university_box_edit.find('.edit-box-innerbox-input').eq(0).val(boxName);
            university_box_edit.find('.edit-box-innerbox-input').eq(1).val(boxSub);
            university_box_edit.find('.univ-id').val(univId);
        }else if(boxType == 'Expected Curriculum in DP'){
            var dpId = $(this).find('.dp-box-id').val();
            var dp_box_edit = $('.dp-box-edit');
            shareboxPop(dp_box_edit);
            dp_box_edit.find('.edit-box-innerbox-select').eq(0).find('option:contains("' + boxName + '")').attr("selected", true);
            dp_box_edit.find('.edit-box-innerbox-select').eq(1).find('option:contains("' + boxSub + '")').attr("selected", true);
            dp_box_edit.find('.dp-id').val(dpId);
        }else if(boxType == 'Linguistic Test'){
            var languageId = $(this).find('.language-box-id').val();
            var language_box_edit = $('.language-box-edit');
            shareboxPop(language_box_edit);
            language_box_edit.find('.language-id').val(languageId);
            var languageType = $(this).find('.language-type').val();
            if(languageType == 'TOEFL'){
                language_box_edit.find('.edit-box-innerbox-select').val('TOEFL')
                languageTestToefl(language_box_edit);
            }else if(languageType == 'IELTS'){
                language_box_edit.find('.edit-box-innerbox-select').val('IELTS')
                languageTestIelts(language_box_edit);
            }else if(languageType == 'DUOLINGUAL'){
                language_box_edit.find('.edit-box-innerbox-select').val('DUOLINGUAL')
                languageTestDuo(language_box_edit);
            }

            language_box_edit.find('.edit-box-innerbox-select').eq(1).find('option:contains("' + boxName + '")').attr("selected", true);
            var testReflect = $(this).find('.language-reflect').val()
            var testDate = $(this).find('.right-person-info-row-box-des').text().trim();
            language_box_edit.find('.edit-box-innerbox-input').eq(0).val(testReflect);
            language_box_edit.find('.edit-box-innerbox-input').eq(1).val(testDate);
            if(languageType == 'IELTS' || languageType == 'TOEFL'){
                var listeningScore = $(this).find('.language-listening').val();
                var readingScore = $(this).find('.language-reading').val();
                var speakingScore = $(this).find('.language-speaking').val();
                var writingScore = $(this).find('.language-writing').val();
                language_box_edit.find('.edit-box-innerbox-select').eq(2).find('option:contains("' + listeningScore + '")').attr("selected", true);
                language_box_edit.find('.edit-box-innerbox-select').eq(3).find('option:contains("' + readingScore + '")').attr("selected", true);
                language_box_edit.find('.edit-box-innerbox-select').eq(4).find('option:contains("' + speakingScore + '")').attr("selected", true);
                language_box_edit.find('.edit-box-innerbox-select').eq(5).find('option:contains("' + writingScore + '")').attr("selected", true);
            }
        }
    })

    $('.detention-apply').click(function (){
        shareboxPop($('.detention-apply-box'));
    })

    $('.detention-box-next').click(function (){
        $('.detention-box-first').fadeOut('fast');
        var detention_box_sec = $('.detention-box-sec')
        detention_box_sec.animate({
            height: '430px'
        }, 'fast');
        detention_box_sec.fadeIn('fast');
        var detention_apply_box = $('.detention-apply-box');
        var detentionId = detention_apply_box.find('input:checkbox:checked').val();
        var detentionName = detention_apply_box.find('input:checkbox:checked').siblings('.class-adding-text').text().trim();
        $('.apply-target-display').text(detentionName);
        $('.detention-id').val(detentionId);
    })

    $('.detention-status').each(function (){
        var curStatus = $(this).val();
        var statusDisplay = $(this).siblings('.detention-ticket-innerbox').find('.right-person-info-row-box-des').eq(1)
        if(curStatus == 0){
            statusDisplay.text('Pending')
            statusDisplay.css('color', 'rgb(255, 193, 3)')
        }else if(curStatus == 1){
            statusDisplay.text('Approved')
            statusDisplay.css('color', 'rgb(27, 162, 185)')

        }else if(curStatus == 2){
            statusDisplay.text('Not Approved')
            statusDisplay.css('color', 'rgb(221, 52, 68)')
        }
    })

    $('select[name="language-test-type"]').change(function (){
        var testType=$(this).children('option:selected').val();
        var language_box_add = $('.language-box-add')
        var language_box_edit = $('.language-box-edit');
        var currentLanguageBox;
        if(language_box_edit.css('display') == 'block'){
            currentLanguageBox = language_box_edit;
        }else if(language_box_add.css('display') == 'block'){
            currentLanguageBox = language_box_add;
        }
        if(testType == 'IELTS'){
            languageTestIelts(currentLanguageBox);
        }else if(testType == 'TOEFL'){
            languageTestToefl(currentLanguageBox);
        }else if(testType == 'DUOLINGUAL'){
            languageTestDuo(currentLanguageBox);
        }
    })

    $('.left-content-manu').click(function (){
        var targetSemester = $(this).attr('name');
        var data = {"[navi_id]": targetSemester};
        doPost('student-main.php', data);
    })


    function languageTestToefl(shareBoxSelector){
        var overallScoreContent = "";
        for(var i=120; i>=0; i--){
            overallScoreContent += "<option>" + i + "</option>";
        }
        shareBoxSelector.find('.edit-box-innerbox-select').eq(1).html(overallScoreContent);
        var separateScoreContent = "";
        for(var i=30; i>=0; i--){
            separateScoreContent += "<option>" + i + "</option>";
        }
        var language_box_row_last = shareBoxSelector.find('.edit-box-row:last');
        if(language_box_row_last.css('display') == 'none'){
            language_box_row_last.css('display', 'block');
        }
        $('.language-box-quater').find('.edit-box-innerbox-select').html(separateScoreContent);
    }

    function languageTestIelts(shareBoxSelector){
        var scoreContent = "";
        for(var i=9.0; i>=3; i-=0.5){
            scoreContent += "<option>" + i + "</option>";
        }
        var language_box_row_last = shareBoxSelector.find('.edit-box-row:last');
        if(language_box_row_last.css('display') == 'none'){
            language_box_row_last.css('display', 'block');
        }

        shareBoxSelector.find('.edit-box-innerbox-select').eq(1).html(scoreContent);
        $('.language-box-quater').find('.edit-box-innerbox-select').html(scoreContent);
    }

    function languageTestDuo(shareBoxSelector){
        var scoreContent = "";
        for(var i=160; i>=0; i--){
            scoreContent += "<option>" + i + "</option>";
        }
        shareBoxSelector.find('.edit-box-innerbox-select').eq(1).html(scoreContent);
        var language_box_row_last = shareBoxSelector.find('.edit-box-row:last');
        language_box_row_last.css('display', 'none');
    }

    function updatePasswordCheck() {
        if ($(".edit-box-innerbox-input[name='update-password']").val() == "" || $(".edit-box-innerbox-input[name='current-password']") == "" || $('.confirm-box-unmatched').css('display') == 'block') {
            return false;
        } else {
            return true;
        }
    }

    function checkCheckboxes(selector){
        var returnVal = false;
        selector.each(function (){
            if($(this).get(0).checked){
                 returnVal = true;
            }
        })
        return returnVal;
    }
});

$(window).load(function (){
    var contentWidth = $('.right-profile-whole').width();
    var boxWidth = contentWidth / 2 - 30;
    var right_person_info_row_box = $('.right-person-info-row-box');
    right_person_info_row_box.outerWidth(boxWidth);
    $('.strength-box-inside').outerWidth(boxWidth);
})

// window.οnbefοreunlοad=function (event){
//     alert("===οnbefοreunlοad===");
//     if(event.clientX>document.body.clientWidth && event.clientY < 0 || event.altKey){
//         alert("你关闭了浏览器");
//
//     }else{
//         alert("你正在刷新页面");
//     }
// }
