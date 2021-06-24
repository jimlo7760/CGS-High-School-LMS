$(document).ready(function () {
    $('.all').animate({
        opacity: '1'
    })
    var body = document.body.clientHeight;
    var pageheight = $(window).height();
    if (body < pageheight) {
        body = pageheight;
    }
    $('.left-content').height(body);
    var bg = body;
    $('.grey-bg').css("height", bg);
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
    })
    $('.result-box-sort').each(function (item) {
        if ($('.result-box-sort')[item].innerText.indexOf('Teacher') > 0) {
            $(this).css(
                'margin-right', '35px'
            )
        }
    })

    $('.left-content-navi-item').click(function () {
        if($(this).siblings('.left-content-manu').css('display') == 'block'){
            $(this).find('.left-content-navi-img').addClass('add_transform_manu');
            $(this).find('.left-content-navi-img').removeClass('initial_transform');
        }else{
            $(this).find('.left-content-navi-img').addClass('initial_transform');
            $(this).find('.left-content-navi-img').removeClass('add_transform_manu');
        }
        $(this).siblings('.left-content-manu').slideToggle();
    })
    var count = 0;
    $('.right-top-left').click(function () {
        count++;
        var search = body - 75 + 'px';
        $('.grey-bg').css({
            'top': '75px',
            'height': search,
        })
        $('.right-top-research-text').toggleClass('pointer-alt');
        if (count % 2 == 1) {
            $('.grey-bg').fadeIn();
            $('.result-box').fadeIn();
        } else {
            $('.grey-bg').fadeOut();
            $('.result-box').fadeOut();
        }
    })
    $('.right-top-person').click(function () {
        if($('.personal-panel').css('display') == 'none'){
            $('.right-top-person-arrow').addClass('add_transform');
            $('.right-top-person-arrow').removeClass('initial_transform');
        }else{
            $('.right-top-person-arrow').addClass('initial_transform');
            $('.right-top-person-arrow').removeClass('add_transform');
        }
        $('.personal-panel').slideToggle();
        var nameWidth = $('.personal-panel-des').width();
        if (nameWidth >= 165) {
            $('.personal-panel').width(nameWidth + 75);
        } else {
            $('.personal-panel').width(240);
        }
    })
    $('.right-box').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#1BA2B9',
            color: 'white'
        }, 'fast')
        $(this).children().find('.right-box-detail-title').animate({
            color: '#8DD1DC'
        }, 'fast')
        $(this).children().find('.right-box-detail-name').animate({
            color: 'white'
        }, 'fast')
        $(this).children().find('.right-box-arrow').css({
            color: 'white'
        })
    })
    $('.right-box').mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',
            color: 'black'
        }, 'fast')
        $(this).children().find('.right-box-detail-title').animate({
            color: '#999C9E'
        }, 'fast')
        $(this).children().find('.right-box-detail-name').animate({
            color: 'black'
        }, 'fast')
        $(this).children().find('.right-box-arrow').css({
            color: 'rgb(27, 162, 185)'
        })
    })
    $('.edit-box-close').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    })
    $('.edit-box-green').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    })
    $('.edit-box-red').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    })
    $('.edit-box-grey').click(function () {
        $('.share-box').fadeOut();
        $('.grey-bg').fadeOut();
    })



    $('.right-top-research input[type="text"]').on("keyup input", function() {
        var inputVal = $(this).val();
        var resultDropdown = $(".result-box");
        if (inputVal.length) {
            $.get("../../../Controller_and_Model/Controller/StudentMainLiveSearch.php", {term: inputVal}).done(function(data) {
                resultDropdown.html(data);
            });
        } else {
            resultDropdown.empty();
        }
    });

    $("body").on("click", ".result-box-row", function() {
        $(".right-top-research-text").val($(this).children()[1].innerHTML.trim());
        $(".result-box").empty();
        $(document.body).append($(this).children()[3]);
        $(document.body).children()[1].submit();
    });



    setTimeout(function (){
        var notiX = $('.right-top-noti').offset().left;
        var notiY = $('.right-top-noti').offset().top;
        $('.right-top-noti-cir').offset({top: notiY, left: notiX});
    }, 1499);
    setTimeout(function (){
        $('.right-top-noti-cir').fadeTo("fast", 1);
    }, 1500);
});

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
}
