$(document).ready(function () {
    var method_link = $('.method-link');
    method_link.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#1BA2B9',
        }, 'fast')
        $(this).children().animate({
            color: 'white'
        }, 'fast')
    })
    method_link.mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',

        })
        $(this).children().animate({
            color: '#1BA2B9'
        }, 'fast')
    })
    var method_file = $('.method-file');
    method_file.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#0A7AFA',
        }, 'fast')
        $(this).children().animate({
            color: 'white'
        }, 'fast')
    })
    method_file.mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',

        })
        $(this).children().animate({
            color: '#0A7AFA'
        }, 'fast')
    })
    var method_pdf = $('.method-pdf');
    method_pdf.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#DD3444',
        }, 'fast')
        $(this).children().animate({
            color: 'white'
        }, 'fast')
    })
    method_pdf.mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',

        })
        $(this).children().animate({
            color: '#DD3444'
        }, 'fast')
    })
    var share_box_button_download = $('.share-box-button-download');
    share_box_button_download.mouseenter(function () {
        $(this).animate({
            backgroundColor: '#1BA2B9',
        }, 'fast')
    })
    share_box_button_download.mouseleave(function () {
        $(this).animate({
            backgroundColor: '#8CD0DB',

        }, 'fast')
    })
    var grey_bg = $('.grey-bg');
    $('.right-info-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        grey_bg.css({
            "height":bg,
            "top":0
        });
        grey_bg.fadeIn();
            $('.table-sharing').fadeIn();
    })
    $('.share-box-button-cancel').click(function () {
        grey_bg.fadeOut();
        $('.table-sharing').fadeOut();
    })


})
