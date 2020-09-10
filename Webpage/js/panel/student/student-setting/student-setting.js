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
    var contentWidth = $('.profile-row-downer').width();
    console.log(contentWidth);
    var boxWidth = contentWidth / 2 - 5;
    $('.right-person-info-row-box').outerWidth(boxWidth);

    $('.edit-info').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.grey-bg').fadeIn();
        $('.profile-box').fadeIn();
    })

    $('.edit-award').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.grey-bg').fadeIn();
        $('.award-box').fadeIn();
    })

    $('.edit-university').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.grey-bg').fadeIn();
        $('.university-box').fadeIn();
    })

    $('.edit-box-portrait-button').click(function () {
        $('.uploadPortrait').click();
    })
    $('.navi-profile').click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        })
        if($(".right-profile-whole").is(":hidden")){
            $(".right-profile-whole").delay('fast').fadeIn('fast');
        }
        $('.navi-class').animate({
            borderBottomColor:'#EAEBEB'
        })
        if($(".right-class-whole").is(":visible")){
            $(".right-class-whole").fadeOut('fast');
        }
        $('.navi-score').animate({
            borderBottomColor:'#EAEBEB'
        })
        if($(".right-score-whole").is(":visible")){
            $(".right-score-whole").fadeOut('fast');
        }
    })
    $('.navi-class').click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        })
        if($('.right-class-whole').is(':hidden')){
            $('.right-class-whole').delay('fast').fadeIn('fast');
        }
        $('.navi-profile').animate({
            borderBottomColor:'#EAEBEB'
        })
        if($('.right-profile-whole').is(':visible')){
            $('.right-profile-whole').fadeOut('fast');
        }
        $('.navi-score').animate({
            borderBottomColor:'#EAEBEB'
        })
        if($('.right-score-whole').is(':visible')){
            $('.right-score-whole').fadeOut('fast');
        }
    })

    $('.navi-score').click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        })
        if($('.right-score-whole').is(':hidden')){
            $('.right-score-whole').delay('fast').fadeIn('fast');
        }
        $('.navi-profile').animate({
            borderBottomColor:'#EAEBEB'
        })
        if($('.right-profile-whole').is(':visible')){
            $('.right-profile-whole').fadeOut('fast');
        }
        $('.navi-class').animate({
            borderBottomColor:'#EAEBEB'
        })
        if($('.right-class-whole').is(':visible')){
            $('.right-class-whole').fadeOut('fast');
        }
    })
    $('.navi-score').click(function () {
        $(this).animate({
            borderBottomColor:'#1BA2B9'
        })
        $('.navi-profile').animate({
            borderBottomColor:'#EAEBEB'
        })
        $('.navi-class').animate({
            borderBottomColor:'#EAEBEB'
        })
    })
    $('.class-adding-row').click(function () {
        console.log($(this).css('border-color'));
        if($(this).css('border-color') == 'rgb(208, 208, 208)'){
            $(this).animate({
                borderColor: '#1BA2B9',
            })
            $(this).children('.class-adding-img').text('check_box');
            $(this).children('.class-adding-img').animate({
                color: '#1BA2B9'
            })
        }else{
            $(this).animate({
                borderColor: '#D0D0D0',
            })
            $(this).children('.class-adding-img').text('check_box_outline_blank');
            $(this).children('.class-adding-img').animate({
                color: '#707070'
            })
        }
    })
    $('.class-deleting-row').click(function () {
        if($(this).css('border-color') == 'rgb(208, 208, 208)'){
            $(this).animate({
                borderColor: '#DD3444',
            })
            $(this).children('.class-adding-img').text('check_box');
            $(this).children('.class-adding-img').animate({
                color: '#DD3444'
            })
        }else{
            $(this).animate({
                borderColor: '#D0D0D0',
            })
            $(this).children('.class-adding-img').text('check_box_outline_blank');
            $(this).children('.class-adding-img').animate({
                color: '#707070'
            })
        }
    })
    $('.class-adding-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.class-adding-box').fadeIn();
        $('.grey-bg').fadeIn();
    })
    $('.class-deleting-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.class-deleting-box').fadeIn();
        $('.grey-bg').fadeIn();
    })
    $('.pending-row').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.pending-box').fadeIn();
        $('.grey-bg').fadeIn();
    })
    $('.aprove-row').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.aprove-box').fadeIn();
        $('.grey-bg').fadeIn();
    })
    $('.unaprove-row').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.unaprove-box').fadeIn();
        $('.grey-bg').fadeIn();
    })
    $('.score-editing-innerbox-input').on('input propertychange', function () {
        var score = $('.score-editing-innerbox-input').val();
        if(score != ''){
            if (parseInt(score) >= 0 && parseInt(score) <= 100) {
                $(this).animate({
                    borderColor: '#D0D0D0'
                })
                $(this).siblings('.score-editing-innerbox').children('.score-editing-unvalid').fadeOut();
            } else {
                $(this).animate({
                    borderColor: '#DD3444'
                })
                $(this).siblings('.score-editing-innerbox').children('.score-editing-unvalid').fadeIn();
            }
        }else{
            $(this).animate({
                borderColor: '#D0D0D0'
            })
            $(this).siblings('.score-editing-innerbox').children('.score-editing-unvalid').fadeOut();
        }
    })

    $('.score-editing-box').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height": bg,
            "top": 0
        });
        $('.edit-score-box').fadeIn();
        $('.grey-bg').fadeIn();
        var classId = $(this).children('.edit-class-id').val();
        $('.edit-score-num').val(classId);
    })
})