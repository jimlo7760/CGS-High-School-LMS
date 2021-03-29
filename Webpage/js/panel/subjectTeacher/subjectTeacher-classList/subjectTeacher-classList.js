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

    var teacherSubject = $('.subjectT-lesson').val() ;
    $('#' + teacherSubject).addClass('author-modification');//为每个table设置权限

    var tableWid = parseInt($('.subjectT-studentScore').css('width'));
    console.log(tableWid);
    var titleWidAu = tableWid * 0.3;
    $('.right-table-title-title').width(titleWidAu);
    $('.right-table-content-title').width(titleWidAu);
    var gradeWidAu = tableWid * 0.17;
    $('.right-table-title-grade').width(gradeWidAu);
    $('.right-table-content-grade').width(gradeWidAu);
    var typeWidAu = tableWid * 0.1;
    $('.right-table-title-type').width(typeWidAu);
    $('.right-table-content-type').width(typeWidAu);
    var dateWidAu = tableWid * 0.25;
    $('.right-table-title-date').width(dateWidAu);
    $('.right-table-content-date').width(dateWidAu);
    var actionWidAu = tableWid * 0.15;
    $('.right-table-title-action').width(actionWidAu);
    $('.right-table-content-action').width(actionWidAu);

    var titleWid = tableWid * 0.3;
    $('.')

})
