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
        // console.log($(this).children()[1].innerHTML);
        $(".right-top-research-text").val($(this).children()[1].innerHTML.trim());
        $(".result-box").empty();
        $(document.body).append($(this).children()[3]);
        $(document.body).children()[1].submit();
    });

})
