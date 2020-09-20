$(document).ready(function () {
    $('#search').keyup(function () {   //输入框的id为search，这里监听输入框的keyup事件
        $.ajax({
            type: "GET",     //AJAX提交方式为GET提交
            url: "/include/ajax_search.php",   //处理页的URL地址
            data: "txt_search=" + escape($('#search').val()),   //要传递的参数
            success: function (data) {   //成功后执行的方法
                if (data != "") {
                    var ss;
                    ss = data.split("@");   //分割返回的字符串
                    var layer;
                    layer = "<table>";     //创建一个table
                    for (var i = 0; i < ss.length - 1; i++) {
                        layer += "<tr><td class='line'>" + ss[i] + "</td></tr>";
                    }
                    layer += "</table>";
                    $('#searchresult').empty();  //先清空#searchresult下的所有子元素
                    $('#searchresult').append(layer);//将刚才创建的table插入到#searchresult内
                    $('.line').hover(function () {  //监听提示框的鼠标悬停事件
                        $(this).addClass("hover");
                    }, function () {
                        $(this).removeClass("hover");
                    });
                    $('.line').click(function () {  //监听提示框的鼠标单击事件
                        $('#search').val($(this).text());
                    });
                } else {
                    $('#searchresult').empty();
                }
            },
            error: function () {
                alert("O No~~~");
            }
        });
    });
});

$(document).ready(function () {
    $().click(function () {
        $('#searchresult').empty();
    });
});