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
    var gapWidth = ($('.right-navi-item-right').position().left) - (($('.right-navi-item:last').position().left) + $('.right-navi-item:last').width());
    $('.right-navi-gap-large').width(gapWidth);
})
