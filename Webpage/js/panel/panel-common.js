$(document).ready(function () {


    $('.right-top-research-text').on('input propertychange', function () {
        var input = $('.right-top-research-text').val();
        $(".result-box-name").each(function (item) {
            count = 0;
            var contentValue = $(".result-box-name")[item].innerText;
            if (contentValue.toLowerCase().indexOf(input.toLowerCase()) < 0) {
                $(this).parent().hide(1);
            } else {
                $(this).parent().show();
            }
            if (count == (item + 1)) {
                $(".result-box-row").hide();
            } else {
                $(".result-box-row").show();
            }
        });
    });
    $('.result-box-sort').each(function (item) {
        if ($('.result-box-sort')[item].innerText.indexOf('Teacher') > 0) {
            $(this).css(
                'margin-right', '35px'
            )
        }
    });

    $('.left-content-navi-item').click(function () {
        if ($(this).siblings('.left-content-manu').css('display') == 'block') {
            $(this).find('.left-content-navi-img').addClass('add_transform_manu');
            $(this).find('.left-content-navi-img').removeClass('initial_transform');
        } else {
            $(this).find('.left-content-navi-img').addClass('initial_transform');
            $(this).find('.left-content-navi-img').removeClass('add_transform_manu');
        }
        $(this).siblings('.left-content-manu').slideToggle();
    });

    var grey_bg = $('.grey-bg');
    var count = 0;
    $('.right-top-left').click(function () {
        count++;
        var search = body - 75 + 'px';
        grey_bg.css({
            'top': '75px',
            'height': search,
        });
        $('.right-top-research-text').toggleClass('pointer-alt');
        if (count % 2 == 1) {
            grey_bg.fadeIn();
            $('.result-box').fadeIn();
        } else {
            grey_bg.fadeOut();
            grey_bg.fadeOut();
        }
    });

    var personal_panel = $('.personal-panel');
    var right_top_person_arrow = $('.right-top-person-arrow');
    $('.right-top-person').click(function () {
        if (personal_panel.css('display') == 'none') {
            right_top_person_arrow.addClass('add_transform');
            right_top_person_arrow.removeClass('initial_transform');
        } else {
            right_top_person_arrow.addClass('initial_transform');
            right_top_person_arrow.removeClass('add_transform');
        }
        personal_panel.slideToggle();
        var nameWidth = $('.personal-panel-des').width();
        if (nameWidth >= 165) {
            personal_panel.width(nameWidth + 75);
        } else {
            personal_panel.width(240);
        }
    });
    var right_box = $('.right-box');
    right_box.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#1BA2B9',
            color: 'white'
        }, 'fast');
        $(this).children().find('.right-box-detail-title').animate({
            color: '#8DD1DC'
        }, 'fast');
        $(this).children().find('.right-box-detail-name').animate({
            color: 'white'
        }, 'fast');
        $(this).children().find('.right-box-arrow').css({
            color: 'white'
        })
    });
    right_box.mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',
            color: 'black'
        }, 'fast');
        $(this).children().find('.right-box-detail-title').animate({
            color: '#999C9E'
        }, 'fast');
        $(this).children().find('.right-box-detail-name').animate({
            color: 'black'
        }, 'fast');
        $(this).children().find('.right-box-arrow').css({
            color: 'rgb(27, 162, 185)'
        })
    });
    $('.edit-box-close').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    });
    $('.edit-box-grey').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    });


    $('.right-top-research input[type="text"]').on("keyup input", function () {
        var inputVal = $(this).val();
        var resultDropdown = $(".result-box");
        if (inputVal.length) {
            $.get("../../../Controller_and_Model/Controller/StudentMainLiveSearch.php", {term: inputVal}).done(function (data) {
                resultDropdown.html(data);
            });
        } else {
            resultDropdown.empty();
        }
    });

    $("body").on("click", ".result-box-row", function () {
        $(".right-top-research-text").val($(this).children()[1].innerHTML.trim());
        $(".result-box").empty();
        $(document.body).append($(this).children()[3]);
        $(document.body).children()[1].submit();
    });

    $('.left-content-manu-nevi').click(function () {    //check if the clicked nevi is the "semester", switch list as not the click semester not as same as displaying semester
        var clicked_navi = $(this).attr('name');
        if ($(this).children().hasClass('left-content-manu-current')) {  // top-half navigator: select semester
            $('.left-content-manu-nevi').each(function () {
                if($(this).css('background-color') == 'rgb(0, 60, 70)'){
                    $(this).animate({
                        backgroundColor: 'transparent',
                    }, 'fast')
                }
                if ($(this).attr('name') == clicked_navi && $(this).children('.left-content-manu-current').hasClass('no-select')) {
                    $(this).children('.left-content-manu-current').removeClass('no-select');
                    var target_navi = $('#' + clicked_navi);
                    target_navi.delay('fast').fadeIn('fast');
                } else if (!$(this).children('.left-content-manu-current').hasClass('no-select') && $(this).attr('name') != clicked_navi) {
                    $(this).children('.left-content-manu-current').addClass('no-select');
                    var current_display_list = $(this).attr('name');
                    $('#' + current_display_list).fadeOut('fast');
                }
            })
        }else{                                                  // down-half navigator: select class information
            var target_downl_list = $("#" + clicked_navi);
            var subjectT_courseList = $('.subjectT-courseList');
            var homeroomT_homeroomList = $('.homeroomT-homeroomList');
            if(target_downl_list.is(':hidden')){
                if(subjectT_courseList.is(':visible')){
                    subjectT_courseList.fadeOut('fast');
                }else if(homeroomT_homeroomList.is(':visible')){
                    homeroomT_homeroomList.fadeOut('fast');
                }
                $('.left-content-manu-current').addClass('no-select');
                target_downl_list.delay('fast').fadeIn('fast');
            }
        }
    })

    $('.subjectT-test').find('.right-table-content-action-edit').click(function (){
        var subjectT_editTest_box = $('.subjectT-editTest-box');
        shareboxPop(subjectT_editTest_box);
        var testId = $(this).parent().siblings('.current-test-id').val();
        var testTitle = $(this).parent().siblings('.right-table-content-title').text().trim()
        var testType = $(this).parent().siblings('.right-table-content-type').text().trim();
        var testDate = $(this).parent().siblings('.right-table-content-date').text().trim();
        var testDes = $(this).parent().siblings('.current-test-des').val();
        var testComment = $(this).parent().siblings('.current-test-comment').val();
        var testMax = $(this).parent().siblings('.current-test-max-score').val();
        editTestTable(testId, testTitle, testDes, testType, testMax, testDate, testComment);
    })
    $('.subjectT-studentScore').find('.right-table-content-action-edit').click(function (){
        var subjectT_editTest_box = $('.subjectT-editTest-box');
        shareboxPop(subjectT_editTest_box);
        var testId = $(this).parent().siblings('.current-test-id').val();
        var testTitle = $(this).parent().siblings('.right-table-content-title').text().trim()
        var testType = $(this).parent().siblings('.right-table-content-type').text().trim();
        var testDate = $(this).parent().siblings('.right-table-content-date').text().trim();
        var testDes = $(this).parent().siblings('.current-test-des').val();
        var testComment = $(this).parent().siblings('.current-test-comment').val();
        var testMax = $(this).parent().siblings('.current-test-max-score').val();
        editTestTable(testId, testTitle, testDes, testType, testMax, testDate, testComment);
    })

});

$(window).load(function (){
    if($('.right-top-noti').length>0){
        var right_top_noti = $('.right-top-noti');
        var notiX = right_top_noti.offset().left;
        var notiY = right_top_noti.offset().top;
        var right_top_noti_cir = $('.right-top-noti-cir');
        right_top_noti_cir.offset({top: notiY, left: notiX});
        right_top_noti_cir.fadeTo("fast", 1);
    }
    $('.all').animate({
        opacity: '1'
    });
    var body = document.body.clientHeight;
    var pageheight = $(window).height();
    if (body < pageheight) {
        body = pageheight;
    }
    $('.left-content').height(body);
    var bg = body;
    $('.grey-bg').css("height", bg);
})

function editTestTable(testId, testTitle, testDes, testType, testMax, testDate, testComment){
    var subjectT_editTest_box = $('.subjectT-editTest-box');
    subjectT_editTest_box.find('.edit-box-innerbox-input').eq(0).val(testTitle);
    subjectT_editTest_box.find('.edit-box-innerbox-input').eq(1).text(testDes);
    subjectT_editTest_box.find('.edit-box-innerbox-select').find("option:contains('" + testType + "')").attr("selected", true);
    subjectT_editTest_box.find('.edit-box-innerbox-input').eq(2).val(testMax);
    subjectT_editTest_box.find('.edit-box-innerbox-input').eq(3).val(testDate);
    subjectT_editTest_box.find('.edit-box-innerbox-input').eq(4).text(testComment);
}

function doPost(URL, data) {
    var PARAMS = data;

    var temp = document.createElement("form");
    temp.action = URL;
    temp.method = "post";
    temp.style.display = "none";
    for (var x in PARAMS) {
        var opt = document.createElement("textarea");
        opt.name = x;
        opt.value = PARAMS[x];
        temp.appendChild(opt);
    }
    document.body.appendChild(temp);
    temp.submit();
    return temp;
}

var spaceReplacement = function (subjectOrigin) {         //replace the "space" in the course name to "_";
    var subjectArr = subjectOrigin.split(' ');
    var subjectSele = '';
    for (var i = 0; i <= subjectArr.length - 1; i++) {
        subjectSele += (subjectArr[i] + '_');
    }
    subjectSele = subjectSele.substring(0, subjectSele.length - 1);
    return subjectSele;
};

function singleChose(selector, name){
    $('input[name=' + name + ']').each(function(){
        $(this).prop("checked",false);
    });
    $(selector).siblings().each(function (){
        if($(this).css('border-color') != 'rgb(208, 208, 208)'){
            $(this).css('border-color', 'rgb(208, 208, 208)');
        }
    })
    selector.children('.class-adding-checkbox').prop('checked', true);
}
function shareboxPop(boxSelector){
    var body = document.body.clientHeight;
    var bg = body;
    var grey_bg = $('.grey-bg');
    grey_bg.css({
        "height": bg,
        "top": 0
    });
    grey_bg.fadeIn();
    boxSelector.fadeIn();
}

function singleChooseWhole(rowSelector, color){
    if (rowSelector.css('border-color') == 'rgb(208, 208, 208)') {
        rowSelector.animate({
            borderColor: color,
        });
        rowSelector.children('.class-adding-img').text('check_box');
        rowSelector.children('.class-adding-img').animate({
            color: color
        });
        singleChose(rowSelector, rowSelector.children('.class-adding-checkbox').attr('name'))
    } else {
        rowSelector.animate({
            borderColor: '#D0D0D0',
        });
        rowSelector.children('.class-adding-img').text('check_box_outline_blank');
        rowSelector.children('.class-adding-img').animate({
            color: '#707070'
        });
        rowSelector.children('.class-adding-checkbox').prop('checked', false);
    }
}

function ticketProcess(currentStatus, statusRow){
    if(currentStatus == 0){
        statusRow.css('color', 'rgb(226, 226, 226)');
    }else if(currentStatus == 1){
        statusRow.eq(0).css('color', 'rgb(41, 167, 69)');
        statusRow.eq(1).css('color', 'rgb(226, 226, 226)');
        statusRow.eq(2).css('color', 'rgb(226, 226, 226)');
    }else if(currentStatus == 2){
        statusRow.eq(0).find('.ticket-box-row-img').text('close');
        statusRow.eq(0).css('color', 'rgb(221, 52, 68)');
        statusRow.eq(1).css('color', 'rgb(226, 226, 226)');
        statusRow.eq(2).css('color', 'rgb(226, 226, 226)');
    }else if(currentStatus == 3){
        statusRow.eq(0).css('color', 'rgb(41, 167, 69)');
        statusRow.eq(1).css('color', 'rgb(41, 167, 69)');
        statusRow.eq(2).css('color', 'rgb(226, 226, 226)');
    }else if(currentStatus == 4){
        statusRow.eq(0).css('color', 'rgb(41, 167, 69)');
        statusRow.eq(1).find('.ticket-box-row-img').text('close');
        statusRow.eq(1).css('color', 'rgb(221, 52, 68)');
        statusRow.eq(2).css('color', 'rgb(226, 226, 226)');
    }else if(currentStatus == 5){
        statusRow.css('color', 'rgb(41, 167, 69)');
    }else if(currentStatus == 6){
        statusRow.eq(0).css('color', 'rgb(41, 167, 69)');
        statusRow.eq(1).css('color', 'rgb(41, 167, 69)');
        statusRow.eq(2).find('.ticket-box-row-img').text('close');
        statusRow.eq(2).css('color', 'rgb(221, 52, 68)');
    }
}