$(document).ready(function () {
    $('.right-person-info-row-box').click(function (){
        var application_operation_box = $('.application-operation-box');
        shareboxPop(application_operation_box);
        var studentName = $(this).find('.right-person-info-row-box-des').eq(0).text().trim();
        var applicationType = $(this).find('.right-person-info-row-box-title').text().trim();
        var applicationDate = $(this).find('.right-person-info-row-box-des').eq(1).text().trim();
        var firstClass = $(this).find('.first-class').val();
        var applicationId = $(this).find('.application-id').val();

        application_operation_box.find('.notification-box-display').eq(0).text(studentName);
        application_operation_box.find('.notification-box-display').eq(1).text(applicationDate);
        var displayAppType = application_operation_box.find('.class-adding-subtitle')
        if(applicationType == 'Add Course'){
            displayAppType.text('Added Course');
            $('.adding-course-name').eq(1).css('display', 'none');
        }else if(applicationType == 'Delete Course'){
            displayAppType.text('Deleted Course');
            $('.adding-course-name').eq(1).css('display', 'none');
        }else if(applicationType == 'Swap Course'){
            displayAppType.text('Swapped Course');
            $('.adding-course-name').eq(1).css('display', 'block');
            var secondClass = $(this).find('.second-class').val();
            application_operation_box.find('.adding-course-name').eq(1).text(secondClass);
        }
        application_operation_box.find('.adding-course-name').eq(0).text(firstClass);
        application_operation_box.find('.application-id').val(applicationId);
        var currentStatus = $(this).find('.status-id').val();
        var statusRow = application_operation_box.find('.ticket-box-row');
        ticketProcess(currentStatus, statusRow);
    })
})

function approveApplication(){
    document.application_operation.action="url";
    document.application_operation.submit();
}

function rejectApplication(){
    document.application_operation.action="url2";
    document.application_operation.submit();
}