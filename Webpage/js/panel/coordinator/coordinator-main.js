$(document).ready(function () {
    // initialization
    var right_navi_item = $('.right-navi-item');
    right_navi_item.eq(0).css('border-bottom-color', '#1BA2B9');
    var leftOffset = right_navi_item.eq(1).offset().left;
    var gapStartCoordinate = leftOffset + right_navi_item.eq(1).width();
    var coordinator_roomList = $('.coordinator-roomList');
    var gapWidth = coordinator_roomList.offset().left + coordinator_roomList.width() - gapStartCoordinate -30;
    $('.right-navi-gap-last').width(gapWidth);

//    click reaction
    right_navi_item.click(function (){
        var buttonTitle = $(this).text().trim();
        var coordinator_roomList = $('.coordinator-roomList');
        var coordinator_classroom = $('.coordinator-classroom');
        var coordinator_homeroom = $('.coordinator-homeroom');
        if(buttonTitle == 'Homeroom' && $(this).parents(coordinator_roomList).find(coordinator_homeroom).css('display') == 'none'){
            coordinator_classroom.fadeOut('fast');
            coordinator_homeroom.delay('fast').fadeIn('fast');
            $('.right-navi-item').animate({
                borderBottomColor: '#EAEBEB'
            },'fast');
            $(this).animate({
                borderBottomColor: '#1BA2B9'
            }, 'fast');
        }else if(buttonTitle == 'Classroom' && $(this).parents(coordinator_roomList).find(coordinator_classroom).css('display') == 'none'){
            coordinator_homeroom.fadeOut('fast');
            coordinator_classroom.delay('fast').fadeIn('fast');
            $('.right-navi-item').animate({
                borderBottomColor: '#EAEBEB'
            }, 'fast');
            $(this).animate({
                borderBottomColor: '#1BA2B9'
            }, 'fast');
        }
    })
});