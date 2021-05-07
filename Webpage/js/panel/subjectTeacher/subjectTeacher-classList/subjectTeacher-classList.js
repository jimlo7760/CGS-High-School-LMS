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
    $('.right-box').click(function () {
        $(this).find("form").submit();
    })
    var gapWidth = ($('.right-navi-item-right').position().left) - (($('.right-navi-item:last').position().left) + $('.right-navi-item:last').width()) - 6;
    $('.right-navi-gap-large').width(gapWidth);

    var teacherSubject = $('.subjectT-lesson').val() ;          //为每个subjectT-studentScore设置权限
    $('.subjectT-studentScore').each(function (){
        if($(this).attr('id') === teacherSubject){
            $(this).addClass('permit-modification')
        }else{
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

    $('.right-down-info-button-text').click(function (){

    })
})
