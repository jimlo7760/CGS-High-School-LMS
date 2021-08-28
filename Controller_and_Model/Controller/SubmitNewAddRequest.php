<?php
require_once "../Model/LoginCredentials.php";
require_once "../Model/AddDropSubjApplicationActions.php";
session_start();
if (isset($_POST["course-select"]) && $_POST["course-select"] != NULL) {
    $subj_class_id = get_post("course-select");
    $stud_id = $_SESSION["id"];
    $tot_res = InsertNewAddDropApp($stud_id, $subj_class_id, 1);
    if ($tot_res[1] > 0) {
        ob_start();
        header('Location: '. "../../Webpage/html/student/student-setting.php");
        ob_end_flush();
        die();
    } else {
        echo "Please check your input.";
    }
}