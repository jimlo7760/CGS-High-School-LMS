$(document).ready(function () {
    var left_content_manu_nevi = $('.left-content-manu-nevi');
    left_content_manu_nevi.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#337681',
        }, 'fast')
    });
    left_content_manu_nevi.mouseleave(function () {
        if ($(this).attr('name') == 'student' && $('.homeroomT-studentList').is(':visible')) {
            $(this).animate({
                backgroundColor: 'rgb(0, 60, 70)',
            }, 'fast')
        } else {
            $(this).animate({
                backgroundColor: 'transparent',
            }, 'fast')
        }
    });
    var navi_id = $('#navi-id');
    if (navi_id.val()) {                        //check if the returned value correspond to the displaying list
        var navi_id_selector = navi_id.val();
        $("#" + navi_id_selector).fadeIn('fast');
        $('.left-content-manu-nevi').each(function () {
            // console.log($(this).children('.left-content-manu-nevi').hasClass('no-select'))
            if ($(this).attr('name') == navi_id_selector && $(this).children('.left-content-manu-current').hasClass('no-select')) {
                $(this).children('.left-content-manu-current').removeClass('no-select');
            } else if ($(this).attr('name') != navi_id_selector && !$(this).children('.left-content-manu-current').hasClass('no-select')) {
                $(this).children('.left-content-manu-current').addClass('no-select');
            }
        })
    } else {                                //default display
        $('.homeroomT-homeroomList:first').fadeIn('fast');
    }

    $(".right-down-info-button").click(function () {
        $('.homeroomT-addHomeroom-box').fadeIn('fast');
        $('.grey-bg').fadeIn('fast');

        var current_add = 0;
        $('.homeroomT-homeroomList').each(function () {
            if ($(this).css('display') == 'block') {
                current_add = $(this).attr('id');
            }
        })
        $('.current_adding_semester').val(current_add)
    })

    $('.homeroom-add').click(function () {                          // Homeroom class verification
        var className = $('input[name="add-homeroom-name"]').val();
        if (!className) {
            alert("Please type in your class")
        } else {
            var departVerify = className.split(' ');
            if (!departVerify[1]) {
                alert("Please follow the format 'MYP 9-1'")
            } else {
                var classVerify = departVerify[1].split('-');
                if ((departVerify[0] != ('MYP' || 'PreDP')) || classVerify[0] != ('9' || '10')) {
                    alert("Please follow the format 'MYP 9-1'");
                }else{
                    var currentHeight = $('.homeroomT-addHomeroom-box').height;
                    $('homeroomT-addHomeroom-box').css('height', currentHeight);
                    //    添加ajax 方法 目的：添加homeroom
                    $('.edit-box-innerbox').fadeOut('fast');
                    $('.edit-box-text').delay('fast').fadeIn('fast');
                    $('.edit-box-className').text(className + " Added Successfully");
                    $('.homeroom-add').fadeOut('fast');
                    $('.homeroom-close').delay('fast').fadeIn('fast');
                }
            }
        }
    })
});