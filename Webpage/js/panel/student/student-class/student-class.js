$(document).ready(function () {
    $('.method-link').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#1BA2B9',
        }, 'fast')
        $(this).children().animate({
            color: 'white'
        }, 'fast')
    })
    $('.method-link').mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',

        })
        $(this).children().animate({
            color: '#1BA2B9'
        }, 'fast')
    })
    $('.method-file').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#0A7AFA',
        }, 'fast')
        $(this).children().animate({
            color: 'white'
        }, 'fast')
    })
    $('.method-file').mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',

        })
        $(this).children().animate({
            color: '#0A7AFA'
        }, 'fast')
    })
    $('.method-pdf').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#DD3444',
        }, 'fast')
        $(this).children().animate({
            color: 'white'
        }, 'fast')
    })
    $('.method-pdf').mouseleave(function () {
        $(this).animate({
            backgroundColor: 'white',

        })
        $(this).children().animate({
            color: '#DD3444'
        }, 'fast')
    })
    $('.share-box-button-download').mouseenter(function () {
        $(this).animate({
            backgroundColor: '#1BA2B9',
        }, 'fast')
    })
    $('.share-box-button-download').mouseleave(function () {
        $(this).animate({
            backgroundColor: '#8CD0DB',

        }, 'fast')
    })
    $('.right-info-button').click(function () {
        var body = document.body.clientHeight;
        var bg = body;
        $('.grey-bg').css({
            "height":bg,
            "top":0
        });
            $('.grey-bg').fadeIn();
            $('.table-sharing').fadeIn();
    })
    $('.share-box-button-cancel').click(function () {
        $('.grey-bg').fadeOut();
        $('.table-sharing').fadeOut();
    })
})
