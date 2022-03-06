$(document).ready(function () {
    // initialization
    var right_navi_item = $('.right-navi-item');
    var right_navi_gap = $('.right-navi-gap');
    var coordinator_roomList = $('.coordinator-roomList');
    coordinator_roomList.eq(0).fadeIn('fast');
    right_navi_item.eq(0).css('border-bottom-color', '#1BA2B9');
    var leftOffset = right_navi_gap.eq(2).offset().left;
    var gapStartCoordinate = leftOffset + right_navi_gap.eq(2).width();
    var gapWidth = coordinator_roomList.offset().left + coordinator_roomList.width() - gapStartCoordinate-25;
    $('.right-navi-gap-last').width(gapWidth);

    // navi
    var left_content_manu_nevi = $('.left-content-manu-nevi');
    var subjectT_studentScore = $('.subjectT-studentScore');
    var coordinator_student_crew = $('.coordinator-student-crew');
    var coordinator_teacher_crew = $('.coordinator-teacher-crew');
    var coordinator_course_crew = $('.coordinator-course-crew');
    var student_navi = $('#student-nevi');
    var teacher_navi = $('#teacher-nevi');
    var course_navi = $('#course-nevi');
    left_content_manu_nevi.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    });
    left_content_manu_nevi.mouseleave(function () {
        if (($(this).attr('name') == 'student' && coordinator_student_crew.is(':visible')) ||
            ($(this).attr('name') == 'teacher' && coordinator_teacher_crew.is(':visible')) ||
            ($(this).attr('name') == 'course' && coordinator_course_crew.is(':visible'))) {
            $(this).animate({
                backgroundColor: 'rgb(0, 60, 70)',
            }, 'fast')
        } else {
            $(this).animate({
                backgroundColor: 'transparent',
            }, 'fast')
        }
    })
    left_content_manu_nevi.click(function () {
        var idVal = $(this).attr('name');
        if(!isNaN(idVal)){
            var semester = $('#' + idVal);
            if(semester.is(':hidden')){
                $('.coordinator-roomList').each(function (){
                    if($(this).is(':visible')){
                        $(this).fadeOut('fast');
                        var semesterNota = $(this).attr('id');
                        $('.left-content-manu-nevi[name="' + semesterNota + '"]').find('.left-content-manu-current').addClass('no-select');
                    }
                })
                semester.fadeIn('fast');
            }
        }else {

            if (idVal == 'student' && coordinator_student_crew.is(':hidden')) {
                if (coordinator_roomList.is(':visible')) {
                    coordinator_roomList.fadeOut('fast');
                } else if (coordinator_teacher_crew.is(':visible')) {
                    coordinator_teacher_crew.fadeOut('fast');
                    teacher_navi.animate({
                        backgroundColor: 'transparent',
                    }, 'fast')
                } else if (coordinator_course_crew.is(':visible')) {
                    coordinator_course_crew.fadeOut('fast');
                    course_navi.animate({
                        backgroundColor: 'transparent',
                    }, 'fast')
                }
                coordinator_student_crew.delay('fast').fadeIn('fast');
            }
            if (idVal == 'teacher' && coordinator_teacher_crew.is(':hidden')) {
                if (coordinator_roomList.is(':visible')) {
                    coordinator_roomList.fadeOut('fast');
                } else if (coordinator_student_crew.is(':visible')) {
                    coordinator_student_crew.fadeOut('fast');
                    student_navi.animate({
                        backgroundColor: 'transparent',
                    }, 'fast')
                } else if (coordinator_course_crew.is(':visible')) {
                    coordinator_course_crew.fadeOut('fast');
                    course_navi.animate({
                        backgroundColor: 'transparent',
                    }, 'fast')
                }
                coordinator_teacher_crew.delay('fast').fadeIn('fast');
            }
            if (idVal == 'course' && coordinator_course_crew.is(':hidden')) {
                if (coordinator_roomList.is(':visible')) {
                    coordinator_roomList.fadeOut('fast');
                } else if (coordinator_teacher_crew.is(':visible')) {
                    coordinator_teacher_crew.fadeOut('fast');
                    teacher_navi.animate({
                        backgroundColor: 'transparent',
                    }, 'fast')
                } else if (coordinator_student_crew.is(':visible')) {
                    coordinator_student_crew.fadeOut('fast');
                    student_navi.animate({
                        backgroundColor: 'transparent',
                    }, 'fast')
                }
                coordinator_course_crew.delay('fast').fadeIn('fast');
            }
        }
    });

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

    var coordinator_homeroom_add = $(".coordinator-homeroom-add");
    var add_homeroom_box = $('.add-homeroom-box');
    coordinator_homeroom_add.click(function (){
        shareboxPop(add_homeroom_box);
    })

    var coordinator_course_add = $(".coordinator-course-add");
    var add_course_box = $(".add-subject-box");
    coordinator_course_add.click(function (){
        shareboxPop(add_course_box);
    })

    var coordinator_classroom_add = $(".coordinator-classroom-add");
    var add_class_box = $('.add-class-box');
    coordinator_classroom_add.click(function (){
        shareboxPop(add_class_box);
    })

    var add_teacher_button = $('.add-teacher-button');
    var add_teacher_box = $(".add-teacher-box");
    add_teacher_button.click(function (){
        shareboxPop(add_teacher_box);
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