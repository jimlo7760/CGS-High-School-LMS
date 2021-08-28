<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/ExpectedCurrActions.php";
session_start();
if (isset($_POST["dp-course-select"]) && $_POST["dp-course-select"] != NULL) {
    $course_id = get_post("dp-course-select");
    $stud_id = $_SESSION["id"];
    $tot_res = UpdateExpectedCourseStatus($stud_id, $course_id, 0);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input1.";
    }
} else {
    echo "Please check your input2.";
}