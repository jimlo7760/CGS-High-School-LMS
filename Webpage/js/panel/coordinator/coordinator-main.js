$(document).ready(function () {
    // initialization
    var right_navi_item = $('.right-navi-item');
    var right_navi_gap = $('.right-navi-gap');
    right_navi_item.eq(0).css('border-bottom-color', '#1BA2B9');
    var leftOffset = right_navi_gap.eq(2).offset().left;
    var gapStartCoordinate = leftOffset + right_navi_gap.eq(2).width();
    var coordinator_roomList = $('.coordinator-roomList');
    var gapWidth = coordinator_roomList.offset().left + coordinator_roomList.width() - gapStartCoordinate-25;
    $('.right-navi-gap-last').width(gapWidth);

//    click reaction
    right_navi_item.click(function (){
        var buttonTitle = $(this).text().trim();
        var coordinator_classroom = $('.coordinator-classroom');
        var coordinator_homeroom = $('.coordinator-homeroom');
        var coordinator_personal_classroom = $('.coordinator-personal-classroom');
        if(buttonTitle == 'Homeroom' && $(this).parents(coordinator_roomList).find(coordinator_homeroom).css('display') == 'none'){
            if(coordinator_classroom.css('display') == 'block'){
                coordinator_classroom.fadeOut('fast');
            }else if(coordinator_personal_classroom.css('display') == 'block'){
                coordinator_personal_classroom.fadeOut('fast');
            }
            coordinator_homeroom.delay('fast').fadeIn('fast');
            alterNaviColor($(this));
        }else if(buttonTitle == 'Classroom' && $(this).parents(coordinator_roomList).find(coordinator_classroom).css('display') == 'none'){
            if(coordinator_homeroom.css('display') == 'block'){
                coordinator_homeroom.fadeOut('fast');
            }else if(coordinator_personal_classroom.css('display') == 'block'){
                coordinator_personal_classroom.fadeOut('fast');
            }
            coordinator_classroom.delay('fast').fadeIn('fast');
            alterNaviColor($(this));
        }else if(buttonTitle == 'Your Classroom' && $(this).parents(coordinator_roomList).find(coordinator_personal_classroom).css('display') == 'none'){
            if(coordinator_homeroom.css('display') == 'block'){
                coordinator_homeroom.fadeOut('fast');
            }else if(coordinator_classroom.css('display') == 'block'){
                coordinator_classroom.fadeOut('fast');
            }
            coordinator_personal_classroom.delay('fast').fadeIn('fast');
            alterNaviColor($(this));
        }
    })
});

function alterNaviColor(selector){
    $('.right-navi-item').animate({
        borderBottomColor: '#EAEBEB'
    }, 'fast');
    $(selector).animate({
        borderBottomColor: '#1BA2B9'
    }, 'fast');
}