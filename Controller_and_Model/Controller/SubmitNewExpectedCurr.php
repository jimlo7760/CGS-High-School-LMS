<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/ExpectedCurrActions.php";
session_start();
if ((isset($_POST["dp-course-title"]) && $_POST["dp-course-title"] != NULL) &&
    (isset($_POST["dp-course-level"]) && $_POST["dp-course-level"] != NULL)) {
    $title = get_post("dp-course-title");
    $raw_level = get_post("dp-course-level");
    $level = 0;
    if (!strcmp($raw_level, "HL")) {
        $level = 1;
    }
    $tot_res = InsertNewExpectedCourse($_SESSION["id"], $title, $level);
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