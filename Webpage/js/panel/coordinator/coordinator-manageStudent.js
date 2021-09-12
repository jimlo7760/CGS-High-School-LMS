$(document).ready(function () {

    $('.right-down-info-button').click(function () {
        var currentButton = $(this).find('.material-icons').text().trim();
        var currentClass = $(this).parent().siblings('.right-info-left').find('.right-title').text().trim();
        if (currentButton == 'add') {
            var add_student_box = $('.add-student-box');
            shareboxPop(add_student_box);
            add_student_box.find('.edit-box-title').text(currentClass);
            var searching_input = $('.edit-box-row input[name="student_search"]')
            searching_input.on('input propertychange', function () {
                var searchText = $.trim(searching_input.val());
                if (searchText) {
                    add_student_box.find('.edit-box-innerbox-title').text('Click [ENTER] to search')
                    $(searching_input).keyup(function (event) {
                        if (event.keyCode == 13) {
                            $.get("../../../Controller_and_Model/Controller/AddStudentToClass.php", {
                                term: searchText,
                                class_type: 1
                            }).done(function (data) {
                                console.log(data)
                            });
                        }
                    });
                } else {
                    add_student_box.find('.edit-box-innerbox-title').text('Search Students by name or ID')
                }
            });
            $('.student-adding-row').click(function () {
                singleChooseWhole($(this), '#1BA2B9');
            })
        } else if (currentButton == 'delete_forever') {
            var delete_student_box = $('.delete-student-box');
            shareboxPop(delete_student_box);
            $('.student-deleting-row').click(function () {
                singleChooseWhole($(this), '#DD3444');
            })
        }
    })
});