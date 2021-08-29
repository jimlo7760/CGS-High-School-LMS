<?php
session_start();
require_once "../Model/LoginCredentials.php";
require_once "../Model/ExpectedCurrActions.php";
if ((isset($_POST["dp-course-title"]) && $_POST["dp-course-title"] != NULL) &&
    (isset($_POST["dp-course-level"]) && $_POST["dp-course-level"] != NULL) &&
    (isset($_POST["course-id"]) && $_POST["course-id"] != NULL)) {
    $title = get_post("dp-course-title");
    $raw_level = get_post("dp-course-level");
    $level = 0;
    if (!strcmp($raw_level, "HL")) {
        $level = 1;
    }
    $course_id = get_post("course-id");
    $stud_id = $_SESSION["id"];
    $tot_res = UpdateExpectedCourseDetail($stud_id, $title, $level, $course_id);
    if ($tot_res > 0) {
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