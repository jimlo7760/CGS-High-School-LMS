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
    var contentWidth = $('.profile-row-downer').width();
    var boxWidth = contentWidth / 2 - 15;
    var grey_bg = $('.grey-bg');
    $('.right-person-info-row-box').outerWidth(boxWidth);
    $('.edit-info').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        grey_bg.fadeIn();
        $('.profile-box').fadeIn();
    });

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

    var right_class_whole = $(".right-class-whole");
    var right_score_whole = $(".right-score-whole");
    var right_profile_whole = $('.right-profile-whole');
    var navi_score = $('.navi-score');
    $('.edit-box-portrait-button').click(function () {
        $('.uploadPortrait').click();
    });
    $('.navi-profile').click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        });
        if(grey_bg.is(":hidden")){
            $(".right-profile-whole").delay('fast').fadeIn('fast');
        }
        $('.navi-class').animate({
            borderBottomColor:'#EAEBEB'
        });
        if(right_class_whole.is(":visible")){
            right_class_whole.fadeOut('fast');
        }
        navi_score.animate({
            borderBottomColor:'#EAEBEB'
        });
        if(right_score_whole.is(":visible")){
            right_score_whole.fadeOut('fast');
        }
    });
    $('.navi-class').click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        });
        console.log(right_class_whole.is(':hidden'));
        if(right_class_whole.is(':hidden')){
            right_class_whole.delay('fast').fadeIn('fast');
        }
        $('.navi-profile').animate({
            borderBottomColor:'#EAEBEB'
        });
        if(right_profile_whole.is(':visible')){
            right_profile_whole.fadeOut('fast');
        }
        navi_score.animate({
            borderBottomColor:'#EAEBEB'
        });
        if(right_score_whole.is(':visible')){
            right_score_whole.fadeOut('fast');
        }
    });

    navi_score.click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        });
        if(right_score_whole.is(':hidden')){
            right_score_whole.delay('fast').fadeIn('fast');
        }
        $('.navi-profile').animate({
            borderBottomColor:'#EAEBEB'
        });
        if(right_profile_whole.is(':visible')){
            right_profile_whole.fadeOut('fast');
        }
        $('.navi-class').animate({
            borderBottomColor:'#EAEBEB'
        });
        if(right_class_whole.is(':visible')){
            right_class_whole.fadeOut('fast');
        }
    });
    navi_score.click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        });
        $('.navi-profile').animate({
            borderBottomColor:'#EAEBEB'
        });
        $('.navi-class').animate({
            borderBottomColor:'#EAEBEB'
        })
    });
    $('.class-adding-row').click(function () {
        if($(this).css('border-color') == 'rgb(208, 208, 208)'){
            $(this).animate({
                borderColor: '#1BA2B9',
            });
            $(this).children('.class-adding-img').text('check_box');
            $(this).children('.class-adding-img').animate({
                color: '#1BA2B9'
            });
            $(this).children('.class-adding-checkbox').prop('checked', true);
        }else{
            $(this).animate({
                borderColor: '#D0D0D0',
            });
            $(this).children('.class-adding-img').text('check_box_outline_blank');
            $(this).children('.class-adding-img').animate({
                color: '#707070'
            });
            $(this).children('.class-adding-checkbox').prop('checked', false);

        }
    });
    $('.class-deleting-row').click(function () {
        if($(this).css('border-color') == 'rgb(208, 208, 208)'){
            $(this).animate({
                borderColor: '#DD3444',
            });
            $(this).children('.class-adding-img').text('check_box');
            $(this).children('.class-adding-img').animate({
                color: '#DD3444'
            });
            $(this).children('.class-adding-checkbox').prop('checked', true);
        }else{
            $(this).animate({
                borderColor: '#D0D0D0',
            });
            $(this).children('.class-adding-img').text('check_box_outline_blank');
            $(this).children('.class-adding-img').animate({
                color: '#707070'
            });
            $(this).children('.class-adding-checkbox').prop('checked', false);
        }
    });
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
    var pending_box = $('.pending-box');
    $('.pending-row').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        pending_box[0].children[0].children[0].children[1].children[1].value = this.children[0].children[0].children[2].innerHTML;
        pending_box[0].children[0].children[0].children[1].children[2].value = this.children[0].children[0].children[3].innerHTML;
        grey_bg.css({
            "height": bg,
            "top": 0
        });
        pending_box.fadeIn();
        grey_bg.fadeIn();
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
        if(score != ''){
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
        }else{
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
        var className = $(this).children('.right-box-title').val();
        $('current-class-name').val(className);
        var testId = $(this).children('.current-test-id').val();
        $('.edit-test-id').val(testId);

    });

    $('.confirm-box-input').on("input propertychange", function (){
        var passFir = $('.password-input-first:password').val();
        var passSec = $('.confirm-box-input:password').val();
        console.log($('.edit-box-innerbox-input:password').val());
        // console.log(passFir + "------" + passSec);
        if(passFir != passSec){
            $('.confirm-box-unmatched').fadeIn();
        }else{
            $('.confirm-box-unmatched').fadeOut();
        }
    });
    function updatePasswordCheck(){
        if($(".edit-box-innerbox-input[name='update-password']").val() == "" || $(".edit-box-innerbox-input[name='current-password']") == "" || $('.confirm-box-unmatched').css('display') == 'block'){
            return false;
        }else{
            return true;
        }
    }



});